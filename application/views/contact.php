<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_container d-flex flex-row align-items-center justify-content-start">

						<!-- Logo -->
						<div class="logo_container">
			              <div class="logo">
			                <div>Bina_kamsa</div>
			                <div>Wisata Kampung Jogs</div>
			                <div class="logo_image"><img src="<?= base_url('')?>assets/images/logoo.png" alt=""></div>
			              </div>
			            </div>

						<!-- Main Navigation -->
						<nav class="main_nav ml-auto">
							<ul class="main_nav_list">
								<li class="main_nav_item"><a href="<?= base_url('welcome')?>">Home</a></li>
								<li class="main_nav_item"><a href="<?= base_url('welcome/tampilan_about')?>">About us</a></li>

								<li class="main_nav_item"><a href="<?= base_url('welcome/tampilan_offers')?>">Offers</a></li>

								<!-- <li class="main_nav_item"><a href="<?= base_url('')?>"news.html">News</a></li> -->

								<li class="main_nav_item active"><a href="<?= base_url('welcome/tampilan_contact')?>">Log In</a></li>
							</ul>
						</nav>

						<!-- Search -->
						<div class="search">
							<form action="#" class="search_form">
								<input type="search" name="search_input" class="search_input ctrl_class" required="required" placeholder="Keyword">
								<button type="submit" class="search_button ml-auto ctrl_class"><img src="<?= base_url('')?>assets/images/search.png" alt=""></button>
							</form>
						</div>

						<!-- Hamburger -->
						<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>

					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu_container menu_mm">

		<!-- Menu Close Button -->
		<div class="menu_close_container">
			<div class="menu_close"></div>
		</div>

		<!-- Menu Items -->
		<div class="menu_inner menu_mm">
			<div class="menu menu_mm">
				<div class="menu_search_form_container">
					<form action="#" id="menu_search_form">
						<input type="search" class="menu_search_input menu_mm">
						<button id="menu_search_submit" class="menu_search_submit" type="submit"><img src="<?= base_url('')?>assets/images/search_2.png" alt=""></button>
					</form>
				</div>
				<ul class="menu_list menu_mm">
					<li class="menu_item menu_mm"><a href="<?= base_url('welcome')?>">Home</a></li>

					<li class="menu_item menu_mm"><a href="<?= base_url('welcome/tampilan_about')?>">About us</a></li>

					<li class="menu_item menu_mm"><a href="<?= base_url('welcome/tampilan_offers')?>">Offers</a></li>

<!-- 					<li class="menu_item menu_mm"><a href="<?= base_url('')?>">News</a></li> -->

					<li class="menu_item menu_mm"><a href="<?= base_url('welcome/tampilan_contact')?>">Log In</a></li>
				</ul>

				<!-- Menu Social -->
				
				<div class="menu_social_container menu_mm">
					<ul class="menu_social menu_mm">
						<li class="menu_social_item menu_mm"><a href="<?= base_url('')?>"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					</ul>
				</div>

				<div class="menu_copyright menu_mm">Colorlib All rights reserved</div>
			</div>

		</div>

	</div>
	
	<!-- Home -->

	<div class="home">
		<!-- Image by https://unsplash.com/@peecho -->
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="<?= base_url('assets/')?>images/news.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_content">
						<div class="home_content_inner">
							<div class="home_title">Log In</div>
							<div class="home_breadcrumbs">
								<ul class="home_breadcrumbs_list">
									<li class="home_breadcrumb"><a href="<?= base_url('welcome')?>">Home</a></li>
									<li class="home_breadcrumb">Log In</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>

	<!-- Find Form -->

	<div class="find">
		<!-- Image by https://unsplash.com/@garciasaldana_ -->
		<div class="find_background_container prlx_parent">
			<div class="find_background prlx" style="background-image:url(<?= base_url('')?>images/find.jpg)"></div>
		</div>
		 <div class="find_background parallax-window" data-parallax="scroll" data-image-src="<?= base_url('assets/')?>mages/find.jpg" data-speed="0.8"></div> 
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="find_title text-center">Registration Your Village</div>
				</div>
				<div class="col-12">
					<div class="find_form_container">
						<form action="#" id="find_form" class="find_form d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-md-between justify-content-start flex-wrap">
							<div class="find_item">
								<div>Destination:</div>
								<input type="text" class="destination find_input" required="required" placeholder="Keyword here">
							</div>
							<div class="find_item">
								<div>Adventure type:</div>
								<select name="adventure" id="adventure" class="dropdown_item_select find_input">
									<option>Alam</option>
									<option>Kreativitas</option>
									<option>Taman Bermain</option>
								</select>
							</div>
							<!-- <div class="find_item">
								<div>Min price</div>
								<select name="min_price" id="min_price" class="dropdown_item_select find_input">
									<option>&nbsp;</option>
									<option>Price</option>
									<option>Price</option>
								</select>
							</div>
							<div class="find_item">
								<div>Max price</div>
								<select name="max_price" id="max_price" class="dropdown_item_select find_input">
									<option>&nbsp;</option>
									<option>Price</option>
									<option>Price</option>
								</select>
							</div>
							<button class="button find_button">Find</button>
						</form>
					</div>
				</div>
			</div>
		</div> -->
	</div>

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="contact_title">Get in touch</div>
					<div class="contact_subtitle">say hello</div>
				</div>
			</div>
			<div class="row contact_content">
				<div class="col-lg-5">
					<div class="contact_text">
						<p>Hello! Kami disini membantu Anda untuk mencari destinasi wisata kampung/Desa yang Bagus,Seru dan Menantang berbeda dari yang lain.</p>
					</div>
					<div class="contact_info">
						<div class="contact_info_box">i</div>
						<div class="contact_info_container">
							<div class="contact_info_content">
								<ul>
									<li>Address: Jl.Kimpulan 2 ,Sleman,Yogyakarta,Indonesia</li>
									<li>Phone: +62812983241212</li>
									<li>Email: BaruajajadiNIH@gmail.com</li>
								</ul>
							</div>
							<div class="contact_info_social">
								<ul>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				
				<form>
				<div class="newsletter">
				 Image by https://unsplash.com/@garciasaldana_
				<div class="newsletter_background" style="background-image:url(<?= base_url('assets/')?>images/sky.jpg)"></div>
				<div class="container">
				<div class="row">
				<div class="col-lg-10 offset-lg-1">
				<div class="col-lg-7">
					<div class="contact_form_container">
						<form action="#" id="contact_form" class="clearfix">
							<input id="contact_input_username" class="contact_input contact_input_username" type="text" placeholder="username" required="required" data-error="username is required.">
							<input id="contact_input_name" class="contact_input contact_input_name" type="text" placeholder="Name" required="required" data-error="Name is required.">
							<input id="contact_input_email" class="contact_input contact_input_email" type="text" placeholder="E-mail" required="required" data-error="E-mail is required.">
							<input id="contact_input_noHp" class="contact_input contact_input_noHp" type="text" placeholder="noHp" required="required" data-error="noHp is required.">
							<input type="checkbox" name="genderType[]" value="Wanita"><li> Wanita</li> <input type="checkbox" name="genderType[]" value="Pria"><li>Pria</li>
							<input id="contact_input_alamat" class="contact_input contact_input_alamat" type="text" placeholder="alamat">
							<textarea id="contact_input_alamat" class="contact_message_input contact_input_alamat" name="alamat" placeholder="Alamat" required="required" data-error="Please, write us a message."></textarea>
							<div class="two field">
								<div class="coloum field"></div>
								<div class="coloum field"></div>
							</div>
							<button id="contact_send_btn" type="submit" class="contact_send_btn trans_200" value="Submit">Send</button>
						</form>
					</div>
				</div>
			</div>
			</form>
			<div class="row contact_map">
				<!-- Google Map -->

				<div class="col">
					<div id="google_map">
						<div class="map_container">
							<div id="map"></div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<!-- <div class="newsletter">
		<!-- Image by https://unsplash.com/@garciasaldana_ -->
		<!-- <div class="newsletter_background" style="background-image:url(<?= base_url('')?>images/newsletter.jpg)"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="newsletter_content">
						<div class="newsletter_title text-center">Subscribe to our Newsletter</div>
						<div class="newsletter_form_container">
							<form action="#" id="newsletter_form" class="newsletter_form">
								<div class="d-flex flex-md-row flex-column align-content-center justify-content-between">
									<input type="email" id="newsletter_input" class="newsletter_input" placeholder="Your E-mail Address">
									<button type="submit" id="newsletter_button" class="newsletter_button">Subscribe</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->
 -->
	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">

				<!-- Footer Column -->
				<div class="col-lg-4 footer_col">
					<div class="footer_about">
						<!-- Logo -->
						<div class="logo_container">
							<div class="logo">
								<div>destino</div>
								<div>travel agency</div>
								<div class="logo_image"><img src="<?= base_url('assets/')?>images/logo.png" alt=""></div>
							</div>
						</div>
						<div class="footer_about_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pulvinar sed mauris eget tincidunt. Sed lectus nulla, tempor vel eleifend quis, tempus rut rum metus. Pellentesque ultricies enim eu quam fermentum hendrerit.</div>
						<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
					</div>
				</div>

				<!-- Footer Column -->
				<!-- <div class="col-lg-4 footer_col">
					<div class="footer_latest">
						<div class="footer_title">Latest News</div>
						<div class="footer_latest_content"> -->

							<!-- Footer Latest Post -->
							<<!-- div class="footer_latest_item">
								<div class="footer_latest_image"><img src="<?= base_url('assets/')?>images/latest_1.jpg" alt="https://unsplash.com/@peecho"></div>
								<div class="footer_latest_item_content">
									<div class="footer_latest_item_title"><a href="news.html">Brazil Summer</a></div>
									<div class="footer_latest_item_date">Jan 09, 2018</div>
								</div>
							</div> -->

							<!-- Footer Latest Post -->
							<!-- <div class="footer_latest_item">
								<div class="footer_latest_image"><img src="<?= base_url('assets/')?>images/latest_2.jpg" alt="https://unsplash.com/@sanfrancisco"></div>
								<div class="footer_latest_item_content">
									<div class="footer_latest_item_title"><a href="news.html">A perfect vacation</a></div>
									<div class="footer_latest_item_date">Jan 09, 2018</div>
								</div>
							</div> -->
<!-- 
						</div>
					</div>
				</div>
 -->
 				<div class="logo_image"><img src="<?= base_url('')?>assets/images/logoo.png" alt=""></div>
			            
				<!-- Footer Column -->
				<div class="col-lg-4 footer_col">
					<div class="tags footer_tags">
						<div class="footer_title">Tags</div>
						<ul class="tags_content d-flex flex-row flex-wrap align-items-start justify-content-start">
							<li class="tag"><a href="#">travel</a></li>
							<li class="tag"><a href="#">summer</a></li>
							<li class="tag"><a href="#">cruise</a></li>
							<li class="tag"><a href="#">beach</a></li>
							<li class="tag"><a href="#">offer</a></li>
							<li class="tag"><a href="#">vacation</a></li>
							<li class="tag"><a href="#">trip</a></li>
							<li class="tag"><a href="#">city break</a></li>
							<li class="tag"><a href="#">adventure</a></li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</footer>
</div>

</body>