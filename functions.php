<?php
/*---------------------------------------------------
register settings
----------------------------------------------------*/
function theme_settings_init(){
register_setting( 'theme_settings', 'theme_settings' );
wp_enqueue_style("panel_style", get_template_directory_uri()."/functions/panel.css", false, "1.0", "all");
wp_enqueue_script("panel_script", get_template_directory_uri()."/functions/panel_script.js", false, "1.0");
}

/*---------------------------------------------------
add settings page to menu
----------------------------------------------------*/
function add_settings_page() {
add_menu_page( __( 'KaelJune' .' Panel' ), __( 'KaelJune' .' Panel' ), 'manage_options', 'settings', 'theme_settings_page');
}

/*---------------------------------------------------
add actions
----------------------------------------------------*/
add_action( 'admin_init', 'theme_settings_init' );
add_action( 'admin_menu', 'add_settings_page' );

/*---------------------------------------------------
Theme Panel Output
----------------------------------------------------*/
function theme_settings_page() {
     global $themename,$theme_options;
    $i=0;
    $message='';
    if ( 'save' == $_REQUEST['action'] ) {

        foreach ($theme_options as $value) {
            update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }

        foreach ($theme_options as $value) {
            if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }
        $message='saved';
    }
    else if( 'reset' == $_REQUEST['action'] ) {

        foreach ($theme_options as $value) {
            delete_option( $value['id'] ); }
        $message='reset';
    }

    ?>
    <div class="wrap options_wrap">
        <div id="icon-options-general"></div>
        <h2><?php _e( ' KaelJune' )?></h2>
        <?php
        if ( $message=='saved' ) echo '<div class="updated settings-error" id="setting-error-settings_updated">
        <p>'.$themename.' settings saved.</strong></p></div>';
        if ( $message=='reset' ) echo '<div class="updated settings-error" id="setting-error-settings_updated">
        <p>'.$themename.' settings reset.</strong></p></div>';
        ?>
        <ul>
            <li>View Documentation |</li>
            <li>Visit Support |</li>
            <li>Theme version 1.0.0 </li>
        </ul>
        <div class="content_options">
            <form method="post">

            <?php foreach ($theme_options as $value) {

                switch ( $value['type'] ) {

                    case "open": ?>
                    <?php break;

                    case "close": ?>
                    </div>
                    </div><br />
                    <?php break;

                    case "title": ?>
                    <div class="message">
                        <p>To easily use the <?php echo $themename;?> theme options, you can use the options below.</p>
                    </div>
                    <?php break;

                    case 'text': ?>
                    <div class="option_input option_text">
                    <label for="<?php echo $value['id']; ?>">
                    <?php echo $value['name']; ?></label>
                    <input id="" type="<?php echo $value['type']; ?>" name="<?php echo $value['id']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id'])  ); } else { echo $value['std']; } ?>" />
                    <small><?php echo $value['desc']; ?></small>
                    <div class="clearfix"></div>
                    </div>
                    <?php break;

                    case 'textarea': ?>
                    <div class="option_input option_textarea">
                    <label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
                    <textarea name="<?php echo $value['id']; ?>" rows="" cols=""><?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id']) ); } else { echo $value['std']; } ?></textarea>
                    <small><?php echo $value['desc']; ?></small>
                    <div class="clearfix"></div>
                    </div>
                    <?php break;

                    case 'select': ?>
                    <div class="option_input option_select">
                    <label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
                    <select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
                    <?php foreach ($value['options'] as $option) { ?>
                            <option <?php if (get_settings( $value['id'] ) == $option) { echo 'selected="selected"'; } ?>><?php echo $option; ?></option>
                    <?php } ?>
                    </select>
                    <small><?php echo $value['desc']; ?></small>
                    <div class="clearfix"></div>
                    </div>
                    <?php break;

                    case "checkbox": ?>
                    <div class="option_input option_checkbox">
                    <label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
                    <?php if(get_option($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = "";} ?>
                    <input id="<?php echo $value['id']; ?>" type="checkbox" name="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />
                    <small><?php echo $value['desc']; ?></small>
                    <div class="clearfix"></div>
                    </div>
                    <?php break;

                    case "section":
                    $i++; ?>
                    <div class="input_section">
                    <div class="input_title">

                        <h3><img src="<?php echo get_template_directory_uri();?>/images/options.png" alt="">&nbsp;<?php echo $value['name']; ?></h3>
                        <span class="submit"><input name="save<?php echo $i; ?>" type="submit" class="button-primary" value="Save changes" /></span>
                        <div class="clearfix"></div>
                    </div>
                    <div class="all_options">
                    <?php break;

                }
            }?>
          <input type="hidden" name="action" value="save" />
          </form>
          <form method="post">
              <p class="submit">
              <input name="reset" type="submit" value="Reset" />
              <input type="hidden" name="action" value="reset" />
              </p>
          </form>
        </div>
        <div class="footer-credit">
            <p>This theme was made by <a title="KaelJune" href="http://kaeljune.com" target="_blank" >KaelJune (hiepth9x)</a>.</p>
        </div>
    </div>
    <?php
}
// ************************************************
/* ----------------------------------------------------------
Declare vars
------------------------------------------------------------- */
$themename = "KaelJune Theme";
$shortname = "shortname";

$categories = get_categories('hide_empty=0&orderby=name');
$all_cats = array();
foreach ($categories as $category_item ) {
$all_cats[$category_item->cat_ID] = $category_item->cat_name;
}
array_unshift($all_cats, "Select a category");
$theme_options = array (

    array( "name" => $themename." Options",
    "type" => "title"),

    /* ---------------------------------------------------------
    General section
    ----------------------------------------------------------- */
    array( "name" => "General",
    "type" => "section"),
    array( "type" => "open"),

    array( "name" => "Logo URL",
    "desc" => "Enter the link to your logo image",
    "id" => $shortname."_logo",
    "type" => "text",
    "std" => ""),

    array( "name" => "Custom Favicon",
    "desc" => "A favicon is a 16x16 pixel icon that represents your site; paste the URL to a .ico image that you want to use as the image",
    "id" => $shortname."_favicon",
    "type" => "text",
    "std" => get_bloginfo('url') ."/images/favicon.ico"),

    array( "type" => "close"),

    /* ---------------------------------------------------------
    Home section
    ----------------------------------------------------------- */
    array( "name" => "Homepage",
    "type" => "section"),
    array( "type" => "open"),

    array( "name" => "Homepage Featured",
    "desc" => "Choose a category from which featured posts are.",
    "id" => $shortname."_feat_cat",
    "type" => "select",
    "options" => $all_cats,
    "std" => "Select a category"),

    array( "type" => "close"),

    /* ---------------------------------------------------------
    Footer section
    ----------------------------------------------------------- */
    array( "name" => "Footer",
    "type" => "section"),
    array( "type" => "open"),

    array( "name" => "Footer Credit",
    "desc" => "You can customize footer credit on footer area here.",
    "id" => $shortname."_footer_text",
    "type" => "text",
    "std" => ""),

    array( "type" => "close")

);
//************************************************************************
// Dang ky menu location
add_theme_support('menus');

register_nav_menus(array(
	'top' => 'TopMenu',
	'mid' => 'MidMenu',
	'footer' => 'FooterMenu'
));
add_theme_support( 'post-thumbnails' );
//End dang ky menu

//Breadcrumb
function write_breadcrumb() {
	$pid = $post->ID;
	$trail = '';
	if (is_front_page()) {
        // do nothing
	}
	elseif (is_page()) {
		$bcarray = array();
		$pdata = get_post($pid);
		$bcarray[] = '  '.$pdata->post_title."\n";
	while ($pdata->post_parent) {
		$pdata = get_post($pdata->post_parent);
		$bcarray[] = '  <li><a href="'.get_permalink($pdata->ID).'">'.$pdata->post_title.'</a></li>'."\n".'&gt;'."\n";
	}
	$bcarray = array_reverse($bcarray);
		foreach ($bcarray AS $listitem) {
			$trail .= $listitem;
		}
	}
	elseif (is_single()) {
		$pdata = get_the_category($pid);
		$adata = get_post($pid);
		if(!empty($pdata)){
			$data = get_category_parents($pdata[0]->cat_ID, TRUE, ' &raquo; ');
			$trail .= " &raquo; ".substr($data,0,-8);
		}
		$trail.= ' &raquo; '.$adata->post_title."\n";
	}
   	elseif (is_category()) {
		$pdata = get_the_category($pid);
		$data = get_category_parents($pdata[0]->cat_ID, TRUE, ' &raquo; ');
		if(!empty($pdata)){
			$trail .= " &raquo; ".substr($data,0,-8);
		}
   }
	$trail.="";
	return $trail;
}

//END Breadcrumb

// Limit Word
function string_limit_words($string, $word_limit)
{
  $words = explode(' ', $string, ($word_limit + 1));
  if(count($words) > $word_limit)
  array_pop($words);
  return implode(' ', $words);
}
//End Limit word

//Link Logo Admin Page
function wpc_url_login(){
return "http://kaeljune.com/"; //
}
add_filter('login_headerurl', 'wpc_url_login');
// Thay doi logo admin wordpress
function login_css() {
wp_enqueue_style( 'login_css', get_template_directory_uri() . '/css/login.css' ); // duong dan den file css moi
}
add_action('login_head', 'login_css');

//Custom post type
require ('create-post-type.php');

?>

