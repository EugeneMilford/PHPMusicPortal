<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Music Portal</title>
        <link rel="stylesheet" href="assets/css/main.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div id="canvas">
            <div id="box_wrapper">
            <!-- template sections -->    
                <header class="navbar navbar-expand-lg navbar-dark bg-aqua fixed-top" style="font-size: 18px;">
    <div class="container">
        <a class="navbar-brand" href="index.php">MUSIC PORTAL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="faves.php">Favourites</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="artists.php">Artists</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="albums.php">Albums</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blog.php">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="merchandise.php">Merchandise</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="playlists.php">Playlists</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Extras</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="trending.php">Trending Music</a></li>
                        <li><a class="dropdown-item" href="top_10.php">Top 10 Albums Of All Time</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</header>
            
<section class="page_breadcrumbs cs gradient section_padding_top_25 section_padding_bottom_25 table_section table_section_md">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-md-start">
                <h2 class="small">Products</h2>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="./">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Products</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
                
                
			<section class="ls section_padding_top_100 section_padding_bottom_100 columns_padding_25">
				<div class="container">
					<div class="row">
						<div class="col-sm-7 col-md-8 col-lg-8 col-sm-push-5 col-md-push-4 col-lg-push-4">
							<div class="shop-sorting">
								<form class="form-inline content-justify vertical-center content-margins">
									<div> Showing 1-6 of 36 results </div>
									<div class="form-group select-group"> <select aria-required="true" id="date" name="date" class="choice empty form-control">
		                        <option value="" disabled selected data-default>Default Sorting</option>
		                        <option value="value">by Value</option>
		                        <option value="date">by Date</option>
		                        <option value="popular">by Popularity</option>
		                    </select> <i class="fa fa-angle-down theme_button color1 no_bg_button" aria-hidden="true"></i> </div>
								</form>
							</div>
							<div class="columns-2">
								<ul id="products" class="products list-unstyled">
									<li class="product type-product">
										<div class="vertical-item content-padding text-center">
											<div class="item-media with_background"> <img src="images/shop/01.jpg" alt="" />
												<div class="media-links no-overlay"> <a href="#0" class="abs-link"></a> </div>
											</div>
											<div class="item-content with_shadow">
												<div class="small-text item-meta content-justify vertical-center">
													<div class="price"> <ins>
												<span class="amount">$45,99</span>
											</ins> </div>
													<div class="star-rating right-align" title="Rated 4.0 out of 5"> <span style="width:80%">
												<strong class="rating">4.0</strong> out of 5
											</span> </div>
												</div>
												<h4 class="entry-title"> <a href="shop-product-right.html">Gray T-Shirt</a> </h4>
												<p class="content-3lines-ellipsis">Bresaola pork belly brisket jowl beef pork loin ground round alcatra t-bone short loin. Kielbasa chicken alcatra.</p>
												<p class="topmargin_25"> <a href="#" class="theme_button color min_width_button">
											Add to cart
										</a> </p>
											</div>
										</div>
									</li>
									<li class="product type-product">
										<div class="vertical-item content-padding text-center">
											<div class="item-media with_background"> <img src="images/shop/02.jpg" alt="" />
												<div class="media-links no-overlay"> <a href="#0" class="abs-link"></a> </div>
											</div>
											<div class="item-content with_shadow">
												<div class="small-text item-meta content-justify vertical-center">
													<div class="price"> <ins>
												<span class="amount">$45,99</span>
											</ins> </div>
													<div class="star-rating right-align" title="Rated 3.0 out of 5"> <span style="width:60%">
												<strong class="rating">3.0</strong> out of 5
											</span> </div>
												</div>
												<h4 class="entry-title"> <a href="shop-product-right.html">White Cap</a> </h4>
												<p class="content-3lines-ellipsis">Bresaola pork belly brisket jowl beef pork loin ground round alcatra t-bone short loin. Kielbasa chicken alcatra.</p>
												<p class="topmargin_25"> <a href="#" class="theme_button color min_width_button">
											Add to cart
										</a> </p>
											</div>
										</div>
									</li>
									<li class="product type-product">
										<div class="vertical-item content-padding text-center">
											<div class="item-media with_background"> <img src="images/shop/03.jpg" alt="" />
												<div class="media-links no-overlay"> <a href="#0" class="abs-link"></a> </div>
											</div>
											<div class="item-content with_shadow">
												<div class="small-text item-meta content-justify vertical-center">
													<div class="price"> <ins>
												<span class="amount">$45,99</span>
											</ins> </div>
													<div class="star-rating right-align" title="Rated 4.5 out of 5"> <span style="width:90%">
												<strong class="rating">4.5</strong> out of 5
											</span> </div>
												</div>
												<h4 class="entry-title"> <a href="shop-product-right.html">Brown Sweater</a> </h4>
												<p class="content-3lines-ellipsis">Bresaola pork belly brisket jowl beef pork loin ground round alcatra t-bone short loin. Kielbasa chicken alcatra.</p>
												<p class="topmargin_25"> <a href="#" class="theme_button color min_width_button">
											Add to cart
										</a> </p>
											</div>
										</div>
									</li>
									<li class="product type-product">
										<div class="vertical-item content-padding text-center">
											<div class="item-media with_background"> <img src="images/shop/04.jpg" alt="" />
												<div class="media-links no-overlay"> <a href="#0" class="abs-link"></a> </div>
											</div>
											<div class="item-content with_shadow">
												<div class="small-text item-meta content-justify vertical-center">
													<div class="price"> <ins>
												<span class="amount">$45,99</span>
											</ins> </div>
													<div class="star-rating right-align" title="Rated 3.5 out of 5"> <span style="width:70%">
												<strong class="rating">3.5</strong> out of 5
											</span> </div>
												</div>
												<h4 class="entry-title"> <a href="shop-product-right.html">gray Svitshot</a> </h4>
												<p class="content-3lines-ellipsis">Bresaola pork belly brisket jowl beef pork loin ground round alcatra t-bone short loin. Kielbasa chicken alcatra.</p>
												<p class="topmargin_25"> <a href="#" class="theme_button color min_width_button">
											Add to cart
										</a> </p>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<!-- eof .columns-* -->
							<div class="row">
								<div class="col-sm-12 text-center">
									<ul class="pagination">
										<li class="disabled"><a href="#"><span class="sr-only">Prev</span><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
										<li class="active"><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#"><span class="sr-only">Next</span><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<aside class="col-sm-5 col-md-4 col-lg-4 col-sm-pull-7 col-md-pull-8 col-lg-pull-8">
							<div class="widget widget_search">
								<h3 class="widget-title">Search</h3>
								<form method="get" class="searchform" action="./">
									<div class="form-group"> <label class="sr-only" for="widget-search">Search for:</label> <input id="widget-search" type="text" value="" name="search" class="form-control" placeholder="Search Keyword"> </div> <button type="submit" class="theme_button color">Search</button>									</form>
							</div>
							<div class="widget widget_categories">
								<h3 class="widget-title">All Categories</h3>
								<ul class="list2 checklist color2 greylinks">
									<li> <a href="#0">Picanha turducken</a> </li>
									<li> <a href="#0">Prosciutto frankfurter</a> </li>
									<li> <a href="#0">Ribeye sausage</a> </li>
								</ul>
							</div>
							<div class="widget widget_price_filter">
								<h3 class="widget-title">Filter by Price</h3>
								<!-- price slider -->
								<form method="get" action="/" class="form-inline">
									<div class="slider-range-price"></div>
									<div class="price_label" style=""> Price: <span class="price_from">2</span> - <span class="price_to">35</span> </div>
									<div class="topmargin_20"> <button type="submit" class="theme_button color min_width_button">Filter</button> </div>
								</form>
							</div>
							<div class="widget widget_shopping_cart">
								<h3 class="widget-title">Your Cart</h3>
								<div class="widget_shopping_cart_content">
									<ul class="cart_list product_list_widget ">
										<li class="media">
											<div class="media-left media-middle"> <a href="shop-product-right.html">
								<img src="images/shop/01-thumb.jpg" class="muted_background" alt="">
							</a> </div>
											<div class="media-body"> <span class="highlight2links">
								<a href="#" class="remove" title="Remove this item"></a>
							</span>
												<h4> <a href="shop-product-right.html">Drumstick short ribs</a> </h4>
												<div class="star-rating small-stars" title="Rated 4.0 out of 5"> <span style="width:80%">
									<strong class="rating">4.0</strong> out of 5
								</span> </div> <span class="product-quantity">
								<span>1 x</span> <span class="price">$56.69</span> </span>
											</div>
										</li>
										<li class="media">
											<div class="media-left media-middle"> <a href="shop-product-right.html">
								<img src="images/shop/02-thumb.jpg" class="muted_background" alt="">
							</a> </div>
											<div class="media-body"> <span class="highlight2links">
								<a href="#" class="remove" title="Remove this item"></a>
							</span>
												<h4> <a href="shop-product-right.html">Drumstick short ribs</a> </h4>
												<div class="star-rating small-stars" title="Rated 4.0 out of 5"> <span style="width:60%">
									<strong class="rating">3.0</strong> out of 5
								</span> </div> <span class="product-quantity">
								<span>1 x</span> <span class="price">$13.25</span> </span>
											</div>
										</li>
									</ul>
									<p class="total topmargin_10"> <span>Subtotal:</span> <span class="price">$69.94</span> </p>
									<p class="buttons content-justify"> <a href="shop-cart-right.html" class="theme_button color min_width_button">View cart</a> </p>
								</div>
							</div>
						</aside>
						<!-- eof aside sidebar -->
					</div>
				</div>
			</section>
                        
                <!-- Footer Section -->
		<section class="ds page_copyright section_padding_25 fixed-bottom">
                    <div class="container">
			<div class="row">
                            <div class="col-sm-12 text-center">
				<p class="small-text big-spacing">&copy; Copyright 2023. All Rights Reserved.</p>
                            </div>
			</div>
                    </div>
		</section>
            </div>
        </div> 
    </body>
</html>
