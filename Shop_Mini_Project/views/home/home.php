<!DOCTYPE HTML>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>HoangTu</title>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
	<link href='https://fonts.googleapis.com/css?family=Lato:400,100,700' rel='stylesheet' type='text/css' />
	<link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" type="text/css" href="views/banner/fonts/font-awesome-4.1.0/css/font-awesome.css" />
	<link rel="stylesheet" type="text/css" href="views/banner/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="views/banner/css/bootstrap-theme.css" />
	<link rel="stylesheet" type="text/css" href="views/banner/css/owl.carousel.css" media="all" />
	<link rel="stylesheet" type="text/css" href="views/banner/css/owl.theme.css" media="all" />
	<link rel="stylesheet" type="text/css" href="views/banner/css/style.css" media="all" />
	<link rel="stylesheet" type="text/css" href="views/banner/css/responsive.css" media="all" />

</head>

<body class="home-page">
	<div class="wrap">
		<header id="header" class="header-page">
			<div class="container">
				<div class="row">
					<div class="col-sm-4 col-xs-12">
						<div class="logo">
							<a href="?admin=client&mod=home&act=home"><img src="views/banner/images/home_1/logo.png" alt="" width="142px" /></a>
						</div>
					</div>
					<div class="col-sm-8 col-xs-12">
						<div class="top-search">
							<div class="search-cat">
								<a href="#" class="box-cat-toggle"></a>
								<div class="wrap-scrollbar" style="display: none;">
									<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: 200px; height: 200px;">
										<div class="scrollbar" style="overflow: hidden; width: 200px; height: 200px;">
											<ul>
												<?php foreach ($header as $hd) { ?>
													<li class="level-0"><a href="index.php?admin=client&mod=home&act=<?= $hd['title1'] ?>"><?= $hd['name'] ?></a></li>
												<?php } ?>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="search-form">
								<form method="get">
									<input type="text" name="s" value="Search..." onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue" />
									<input type="submit" name="search" value="" />
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="top-nav">
					<div class="row">
						<div class="col-md-2 col-sm-12 col-xs-6" id="right">
							<div class="header-info">
								<div class="box-account-lc box">
									<a href="#" class="link-user-top"><img src="views/banner/images/home_1/icon-user.png" alt="" /></a>
									<div class="box-inner">
										<div class="bao">
											<ul class="links">
												<img src="<?php if ($_SESSION['auth']) {
																echo $_SESSION['auth']['images'];
															} ?>" alt="">
												<a href="?admin=admin&mod=admin&act=list"><?php if ($_SESSION['auth']) {
																echo $_SESSION['auth']['name'];
															} ?></a>
											</ul>
										</div>
										<hr id="hr1">
										<div class="bao">
											<ul class="links">
												<i class="fas fa-shopping-cart i1"></i>
												<a href="?admin=client&mod=home&act=giohang" title="My Account" class="top-link-myaccount">Giỏ hàng</a>
											</ul>
										</div>

										<div class="bao">
											<ul class="links">
												<i class="fas fa-heart i2"></i>
												<a href="#" title="My Wishlist" class="top-link-wishlist">Sản phẩm yêu thích</a>
											</ul>
										</div>

										<div class="bao">
											<ul class="links">
												<i class="fas fa-sign-out-alt i3"></i>
												<a href="index.php?admin=auth&mod=auth&act=logout" title="Checkout" class="top-link-checkout">Đăng xuất</a>
											</ul>
										</div>

									</div>
								</div>

							</div>
							<!-- End Header Info -->
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- End Header -->
		<div id="content">
			<div class="content-top">
				<div class="container">
					<div class="banner-simple-text">
						<h2>THE BIGGEST</h2>
						<h3>SALE OF THE day</h3>
						<div class="text-special">
							<strong>70</strong>
							<span>%<br />OFF</span>
							<label>save up to</label>
							<a href="index.php?admin=client&mod=home&act=allCategories">Shop now</a>
						</div>
					</div>
					<div class="banner-box-adv">
						<div class="row">
							<?php foreach ($content as $top) { ?>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="inner-box-banner-adv odd bottom-right">
										<a href="index.php?admin=client&mod=home&act=allCategories" class="banner-adv-thumb-link"><img src="<?= $top['images'] ?>" alt="" /></a>
										<div class="text-adv-intro">
											<h2><?= $top['name'] ?></h2>
											<h3><?= $top['name2'] ?></h3>
										</div>
										<div class="box-search-adv">

										</div>
										<a href="index.php?admin=client&mod=home&act=allCategories" class="box-search-adv-link"><i class="fa fa-search"></i></a>
										<div class="text-adv-hidden">
											<p><?= $top['description'] ?></p>
										</div>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
			<!-- End Content Top -->
			<div class="new-arrival-product">
				<div class="container">
					<div class="title-box-default">
						<a href="#" class="prev-new-arrival"><i class="fa fa-arrow-circle-left"></i></a>
						<span class="title-tab">New Arrivals</span>
						<a href="#" class="next-new-arrival"><i class="fa fa-arrow-circle-right"></i></a>
					</div>
					<!-- End Title Slider -->
					<div class="content-product-slider">
						<div class="wrap-item">
							<div class="item">
								<div class="row">
									<?php foreach ($categories as $cate) { ?>
										<div class="col-md-3 col-sm-6 col-xs-12">
											<div class="item-product">
												<div class="item-thumb-product">
													<img src="<?= $cate['images1'] ?>" alt="" class="product-thumb-front" />
													<img src="<?= $cate['images1'] ?>" alt="" class="product-thumb-behind" />
													<div class="info-product-cart">
														<div class="inner-info-product-cart">
															<ul>
																<li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
																<li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
																<li><a href="index.php?admin=client&mod=home&act=detail&id=<?= $cate['id'] ?>" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
															</ul>
															<a href="index.php?admin=client&mod=home&act=cart&id=<?= $cate['id'] ?>" class="link-product-add-cart">Add to cart</a>
														</div>
													</div>
													<span class="status-product-new">New</span>
												</div>
												<div class="item-info-product">
													<h3><a href="#"><?= $cate['name'] ?></a></h3>
													<div class="info-product-price">
														<span>$<?= $cate['price_sale'] ?></span>
														<del>$<?= $cate['price'] ?></del>
													</div>
													<div class="product-rating-star">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
														<i class="fa fa-star-o"></i>
													</div>
												</div>
											</div>
										</div>
									<?php } ?>
								</div>
							</div>
							<!-- End Item -->
						</div>
					</div>
					<!-- End Content Slider Product -->
				</div>
			</div>
			<!-- End New Arrival Product -->
			<div class="banner-grid-adv">
				<div class="clearfix">
					<div class="banner-grid-left">
						<div class="wrap-grid-adv-box clearfix">
							<div class="grid-image-box">
								<a href="index.php?admin=client&mod=home&act=allCategories"><img src="views/banner/images/home_1/ad_05.png" alt="" /></a>
							</div>
							<div class="grid-text-box gray-box">
								<div class="inner-grid-text-box">
									<h3>Women’s</h3>
									<h2>Live style</h2>
									<h3>Danlien Polosa</h3>
								</div>
							</div>
						</div>
						<div class="wrap-grid-adv-box clearfix">
							<div class="grid-text-box">
								<div class="inner-grid-text-box">
									<h3>men’s</h3>
									<h2>Collection</h2>
									<h3>Hat &amp; Cavar</h3>
								</div>
							</div>
							<div class="grid-image-box">
								<a href="index.php?admin=client&mod=home&act=allCategories"><img src="views/banner/images/home_1/ad_06.png" alt="" /></a>
							</div>
						</div>
						<div class="wrap-grid-adv-box clearfix">
							<div class="grid-image-box">
								<a href="index.php?admin=client&mod=home&act=allCategories"><img src="views/banner/images/home_1/ad_07.png" alt="" /></a>
							</div>
							<div class="grid-text-box gray-box">
								<div class="inner-grid-text-box">
									<h3>Shoes</h3>
									<h2>hugpo Dinp</h2>
									<h3>join cena</h3>
								</div>
							</div>
						</div>
					</div>
					<div class="banner-grid-right">
						<div class="grid-image-box">
							<a href="index.php?admin=client&mod=home&act=allCategories"><img src="views/banner/images/home_1/ad_08.png" alt="" /></a>
						</div>
						<div class="grid-text-box active">
							<div class="inner-grid-text-box">
								<h3>Collection</h3>
								<h2>Jewerly</h2>
								<h3>For Girl</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Banner Grid Adv -->
			<div class="new-arrival-product">
				<div class="container">
					<div class="title-box-default">
						<ul class="list-inline list-title-tab nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#popular" aria-controls="popular" role="tab" data-toggle="tab">POPULAR</a></li>
							<li role="presentation"><a href="#seller" aria-controls="seller" role="tab" data-toggle="tab">BEST SELLERS</a></li>
							<li role="presentation"><a href="#special" aria-controls="special" role="tab" data-toggle="tab">SPECIALS</a></li>
						</ul>
					</div>
					<!-- End Title Slider -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="popular">
							<div class="content-product-slider">
								<div class="wrap-item">
									<div class="item">
										<div class="row">
											<?php foreach ($product_new as $product) { ?>
												<div class="col-md-3 col-sm-6 col-xs-12">
													<div class="item-product">
														<div class="item-thumb-product">
															<img src="<?= $product['images1'] ?>" alt="" class="product-thumb-front" />
															<img src="<?= $product['images1'] ?>" alt="" class="product-thumb-behind" />
															<div class="info-product-cart">
																<div class="inner-info-product-cart">
																	<ul>
																		<li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
																		<li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
																		<li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
																	</ul>
																	<a href="#" class="link-product-add-cart">Add to cart</a>
																</div>
															</div>
															<span class="status-product-new">New</span>
														</div>
														<div class="item-info-product">
															<h3><a href="#"><?= $product['name'] ?></a></h3>
															<div class="info-product-price">
																<span>$<?= $product['price_sale'] ?></span>
																<del>$<?= $product['price'] ?></del>
															</div>
															<div class="product-rating-star">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star-o"></i>
																<i class="fa fa-star-o"></i>
															</div>
														</div>
													</div>
												</div>
											<?php } ?>
										</div>
									</div>
								</div>
							</div>
							<!-- End Content Slider Product -->
						</div>
						<div role="tabpanel" class="tab-pane" id="seller">
							<div class="content-product-slider">
								<div class="wrap-item">
									<div class="item">
										<div class="row">
											<?php foreach ($product_sale as $product) { ?>
												<div class="col-md-3 col-sm-6 col-xs-12">
													<div class="item-product">
														<div class="item-thumb-product">
															<img src="<?= $product['images1'] ?>" alt="" class="product-thumb-front" />
															<img src="<?= $product['images1'] ?>" alt="" class="product-thumb-behind" />
															<div class="info-product-cart">
																<div class="inner-info-product-cart">
																	<ul>
																		<li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
																		<li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
																		<li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
																	</ul>
																	<a href="#" class="link-product-add-cart">Add to cart</a>
																</div>
															</div>
															<span class="status-product-new">New</span>
														</div>
														<div class="item-info-product">
															<h3><a href="#"><?= $product['name'] ?></a></h3>
															<div class="info-product-price">
																<span><?= $product['price_sale'] ?> VND</span>
																<del><?= $product['price'] ?> VND</del>
															</div>
															<div class="product-rating-star">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star-o"></i>
																<i class="fa fa-star-o"></i>
															</div>
														</div>
													</div>
												</div>
											<?php } ?>
										</div>
									</div>
								</div>
							</div>
							<!-- End Content Slider Product -->
						</div>
						<div role="tabpanel" class="tab-pane" id="special">
							<div class="content-product-slider">
								<div class="wrap-item">
									<div class="item">
										<div class="row">
											<?php foreach ($product_hot as $product) { ?>
												<div class="col-md-3 col-sm-6 col-xs-12">
													<div class="item-product">
														<div class="item-thumb-product">
															<img src="<?= $product['images1'] ?>" alt="" class="product-thumb-front" />
															<img src="<?= $product['images1'] ?>" alt="" class="product-thumb-behind" />
															<div class="info-product-cart">
																<div class="inner-info-product-cart">
																	<ul>
																		<li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
																		<li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
																		<li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
																	</ul>
																	<a href="#" class="link-product-add-cart">Add to cart</a>
																</div>
															</div>
														</div>
														<div class="item-info-product">
															<h3><a href="#"><?= $product['name'] ?></a></h3>
															<div class="info-product-price">
																<span><?= $product['price_sale'] ?> VND</span>
																<del><?= $product['price'] ?> VND</del>
															</div>
															<div class="product-rating-star">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star-o"></i>
																<i class="fa fa-star-o"></i>
															</div>
														</div>
													</div>
												</div>
											<?php } ?>
										</div>
									</div>
								</div>
							</div>
							<!-- End Content Slider Product -->
						</div>
					</div>
				</div>
			</div>
			<!-- End Slider Product Tab -->
			<div class="list-designer">
				<div class="container">
					<div class="content-list-designer">
						<label>DESIGNERS:</label>
						<ul class="list-inline">
							<?php foreach ($designer as $design) { ?>
								<li class="item-designer">
									<a href="#" class="designer-thumb">
										<img src="<?= $design['images'] ?>" alt="" width="152px" height="130px">
									</a>
									<h3><a href="#"><?= $design['name'] ?></a></h3>
								</li>
							<?php } ?>
						</ul>
						<a href="#" class="see-all-designer">see all designers</a>
					</div>
				</div>
			</div>
			<!-- End List Designer -->

			<!-- End Category Leading -->
			<div class="custom-services">
				<div class="container">
					<div class="title-box-default">
						<h2><span class="title-tab">custom services</span></h2>
					</div>
					<div class="row">
						<?php foreach ($custom as $ct) { ?>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<div class="item-service-box">
									<h3><?= $ct['name'] ?></h3>
									<a href="#" class="item-service-link"><img src="<?= $ct['images'] ?>" alt="" /></a>
									<p><?= $ct['description'] ?></p>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
			<!-- End Custom Services -->
			<div class="from-our-blog">
				<div class="container">
					<div class="title-box-default white-arrow-style">
						<h2><span class="title-tab">FROM OUR BLOG</span></h2>
					</div>
					<div class="row">
						<?php foreach ($blog as $bg) { ?>
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="item-our-blog">
									<div class="our-blog-thumb">
										<a href="#">
											<img src="<?= $bg['images'] ?>" alt="" />
										</a>
									</div>
									<div class="our-blog-info">
										<div class="inner-our-blog-info">
											<span><?= $bg['date'] ?></span>
											<h3><a href="#"><?= $bg['title'] ?></a></h3>
											<span><?= $bg['comment'] ?> Comments</span>
											<div class="post-extra-link">
												<a href="#"><img src="views/banner/images/home_1/icon-search.png" alt="" /></a>
												<a href="#"><i class="fa fa-link"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
			<!-- End From our blog -->
		</div>
		<!-- End Content -->
		<?php
		include_once 'views/banner/footer.php';
		?>