<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Details</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href='https://fonts.googleapis.com/css?family=Lato:400,100,700' rel='stylesheet' type='text/css' />
    <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" type="text/css" href="views/banner/fonts/font-awesome-4.1.0/css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="views/banner/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="views/banner/css/bootstrap-theme.css" />
    <link rel="stylesheet" type="text/css" href="views/banner/css/owl.carousel.css" media="all" />
    <link rel="stylesheet" type="text/css" href="views/banner/css/owl.theme.css" media="all" />
    <link rel="stylesheet" type="text/css" href="views/banner/css/style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="views/banner/css/theme-default.css" media="all" />
    <link rel="stylesheet" type="text/css" href="views/banner/css/responsive.css" media="all" />
</head>

<body>
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
                                    <input type="submit" value="" />
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
												<a href="#"><?php if ($_SESSION['auth']) {
																echo $_SESSION['auth']['name'];
															} ?></a>
											</ul>
										</div>
										<hr id="hr1">
										<div class="bao">
											<ul class="links">
												<i class="fas fa-shopping-cart i1"></i>
												<a href="#" title="My Account" class="top-link-myaccount">Giỏ hàng</a>
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