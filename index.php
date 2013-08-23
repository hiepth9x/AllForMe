<!-- The main template. If your Theme provides its own templates, index.php must be present.-->
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width; initial-scale=1.0" />
	<title>Yola</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<link rel="stylesheet" type="text/css" href="css/reset.css" />
	<link rel="stylesheet" media="screen and (min-width:50px) and (max-width:500px)" href="css/phone.css" />
	<link rel="stylesheet" media="screen and (min-width:501px) and (max-width:800px)" href="css/tab.css" />

	<script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>

	<!--[if IE]>
	    <style type='text/css'>
	    	.header form fieldset {
				position: relative;
			}

			.header form fieldset input[type="text"] {
				border: none;
				background: #fff;
				height: 30px; width: 190px;
				line-height: 30px;
				padding: 0px 0px 0px 35px;
				-webkit-border-radius: 5px;
				-moz-border-radius: 5px;
				-ms-border-radius: 5px;
				-o-border-radius: 5px;
				border-radius: 5px;
				box-shadow: 1px 1px 3px rgba(255,255,255,0.5);			
			}

			.header form fieldset input[type="submit"] {
				background: url(img/search-icon.png) no-repeat center;
				width: 30px; height: 30px;
				border: none;
				position: absolute;
				top: 2px; left: 0px;
				cursor: pointer;
			}

			.header form a.social {
				margin-left: 10px;
			}

			.header form a img {
				position: absolute;
				top: -10px;
			}
			.header form a.social {
				margin-left: 0px;
				margin-right: 7px;
			}

			.header form a img {
				position: absolute;
				top: -10px;
			}
			
	    </style>
    <![endif]-->


</head>
<body>
	<div class="header">
		<h1 class="logo"><a href="#" title="Your future. Our care.">Yola</a></h1>
		
		<div class="container">
			<form>
				<a href="#" class="first">Đăng kí</a>
				<a href="#">Đăng nhập</a>
				<a href="#" class="social"><img src="img/google-icon.png" alt="google" /></a>
				<a href="#" class="social"><img src="img/facebook-icon.png" alt="facbook" /></a>
				<fieldset>
					<input type="submit" value="" />
					<input type="text" />
				</fieldset>
			</form>
			

			<ul class="mainNav">
				<li><a href="#">Giới thiệu</a></li>
				<li><a href="#">Chương trình tại Yola</a></li>
				<li><a href="#">Thư viện</a></li>
				<li><a href="#">Yola với cộng đồng</a></li>
				<li><a href="#">Alumni</a></li>
				<li><a href="#">Cateer</a></li>
				<li><a href="#" class="last">Liên hệ</a></li>
			</ul>
		</div>
	</div><!--end header-->

	<div class="wrap">
		
		<div class="clou"><img src="img/clou.png" alt="images"></div>
		
		<div class="feature">
			<div class="slider">
				<ul>
					<li><img src="img/slider/slider1.png" alt="slider"></li>
					<li><img src="img/slider/slider1.png" alt="slider"></li>
				</ul>
				
			</div><!--end slider-->
			<ul class="age">
				<li>
					<a href="#">
						<img src="img/age/age1.png" alt="age" />
						<span class="click"><img src="img/click-hover.png" alt="images"/></span>
					</a>
					<p><span>15-22 </span>tuổi</p>
				<li>
					<a href="#">
						<img src="img/age/age2.png" alt="age" />
						<span class="click"><img src="img/click-hover.png" alt="images"/></span>
					</a>
					<p><span>15-22 </span>tuổi</p>
				</li>
				<li>
					<a href="#">
						<img src="img/age/age3.png" alt="age" />
						<span class="click"><img src="img/click-hover.png" alt="images"/></span>
					</a>				
					<p><span>15-22 </span>tuổi</p>
				</li>
			</ul>
		</div><!--end feature-->

		<div class="content container">
			<div class="leftContent">
				<h3>Học sinh chia sẻ</h3>
				<div class="para">
					<p>
						   “Trước khi đến YOLA thì em là 1 học sinh nhút nhát và ít nói, nhưng sau khi được tiếp xúc với các anh chị tại YOLA thì các anh chị đã khuyến khích, động viên em nói lên những suy nghĩ của mình. Từ đó em đã có thêm tự tin vào bản thân. Khi du học tại Mỹ, việc này đã giúp em tự tin để giao tiếp với các bạn học sinh cũng như giáo viên tại Mỹ, và em nghĩ rằng việc này rất quan trọng cho việc học tập của em tại Mỹ.”
						
							<a>
						   <span>Trần Đức Trung</span>
						   <span>Học viên lớp SAT Intermediate Truman State University</span>
						   </a>
					</p>
				</div>
				
			</div><!--end leftContent-->

			<div class="mainContent">
				<div class="box">
					<h3>Lịch khai giảng</h3>
					<img src="img/content/content1.png" alt="images" />
					<div class="meta-box">
						<p>
							Các khóa học tại Yola Institute được mở thường xuyên, linh hoạt và có nhiều cấp độ phù hợp với mỗi nhu cầu, trình độ khác nhau.
						</p>
						<a href="#">Read more</a>
					</div>
				</div>

				<div class="box">
					<h3>Đa phương tiện</h3>
					<img src="img/content/content2.png" alt="images" />
					<div class="meta-box">
						<span>Cao thủ du học: Khó mà không khó!</span>
						<p>
							Con đường để đạt được học bổng du học không dễ dàng, nhưng cũng không quá khó khăn, nếu như bạn có một ước mơ và sự định hướng, chuẩn bị tốt... 
						</p>
						<a href="#">Read more</a>
					</div>
				</div>

				<div class="box">
					<h3>Lịch khai giảng</h3>
					<img src="img/content/content3.png" alt="images" />
					<div class="meta-box">
						<span>Cao thủ du học: Khó mà không khó!</span>
						<p>
							Con đường để đạt được học bổng du học không dễ dàng, nhưng cũng không quá khó khăn, nếu như bạn có một ước mơ và sự định hướng, chuẩn bị tốt... 
						</p>
						<a href="#">Read more</a>
					</div>
				</div>

				<div class="box">
					<h3>Lịch khai giảng</h3>
					<img src="img/content/content4.png" alt="images" />
					<div class="meta-box">
						<span>Cao thủ du học: Khó mà không khó!</span>
						<p>
							Con đường để đạt được học bổng du học không dễ dàng, nhưng cũng không quá khó khăn, nếu như bạn có một ước mơ và sự định hướng, chuẩn bị tốt... 
						</p>
						<a href="#">Read more</a>
					</div>
				</div>
			</div><!--end mainContent-->
		</div><!--end content-->
		<div class="botContent container">
			<div class="video">
				<img src="img/clip.png" alt="images" />
			</div>

			<ul class="mark">
				<li><a href="#"><img src="img/mark1.png" alt="images"></a></li>
				<li><a href="#"><img src="img/mark2.png" alt="images"></a></li>
				<li><a href="#"><img src="img/mark3.png" alt="images"></a></li>
				<li><a href="#"><img src="img/mark4.png" alt="images"></a></li>

			</ul>
		</div><!--end botContent-->
	</div><!--end wrap-->
	
	<div class="footer">
		<div class="container">
			<div class="box-footer col1">
				<h3>Trang chủ</h3>
				<ul>
					<li><a href="#">Giới thiệu</a></li>
					<li><a href="#">Tin tức & sự kiện</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Hình ảnh hoạt động</a></li>
					<li><a href="#">Thư viện</a></li>
					<li class="last"><a href="#">Alumni</a></li>
				</ul>
			</div>
			<div class="box-footer col2">
				<h3>Chương trình tại Yola</h3>
				<ul>
					<li><a href="#">Yola Test</a></li>
					<li><a href="#">Yola English Junior</a></li>
					<li><a href="#">Yola Camp</a></li>
					<li><a href="#">Yola Counseling</a></li>
				</ul>
			</div>
			<div class="box-footer col3">
				<h3>Gặp gỡ Yola</h3>
				<ul>
					<li><a href="#">Ban cố vấn</a></li>
					<li><a href="#">Gảng viên Yola</a></li>
					<li><a href="#">Thành tích học viên</a></li>
					<li><a href="#">Câu chuyện thành công</a></li>
				</ul>
			</div>

			<div class="box-footer col4">
				<h3>Yola institute</h3>
				<ul>
					<li class="address">
						<span>Lầu 2, tòa nhà Citilight, 45 Võ thĩ Sáu, Quận 1</span>
						<span>Lầu 2, tòa nhà Vimedimex, 456 Cống Quỳnh, Quận 1</span>
						<span><?php echo get_option('shortname_logo'); ?></span>
					</li>

					<li class="phone">(08) 3820 0686 | (08) 3925 8833 | (08) 3823 1199</li>
					<li class="mail">Email: <a href="#">info@yola.vn</a></li>
				</ul>
            </div>
		</div><!-- end container-->
	</div><!--end footer-->
</body>
</html>

