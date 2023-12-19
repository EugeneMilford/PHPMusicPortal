<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Music Portal</title>
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    </head>
    <body>
        <div id="canvas">
            <div id="box_wrapper">
            <!-- template sections -->    
                <header class="page_header header_darkgrey header_transparent background_cover divided_items with_menu_icon">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- main nav start -->
                                <nav class="mainmenu_wrapper">
                                    <ul class="mainmenu nav sf-menu">
                                        <li class="active">
                                            <a href="index.php">Home</a>
                                        </li>
                                        <li>
					<a href="albums.html">Music</a>
                                            <ul>
                                                <li> <a href="albums.php">Albums</a> </li>
                                                <li> <a href="tracks.php">Tracks</a> </li>
                                                <li> <a href="playlists.php">Playlists</a> </li>
                                            </ul>
                                        </li>                          
                                        <li>
                                            <a href="artists.php">Artists</a>								
                                        </li>                               
                                        <li>
                                            <a href="videos.php">Music Videos</a>								
                                        </li>								
                                        <li>
                                            <a href="gallery.php">Gallery</a>
                                        </li>							
                                        <li>
                                            <a href="blog.php">Blog</a>
                                        </li>
                                        <li>
                                            <a href="playlists.php">Playlists</a>
                                        </li>
                                        <li>
                                            <a href="">Extras</a>
                                            <ul>
                                                <li><a href="trending.php">Trending Music</a></li>
                                                <li><a href="top_10.php">Top 10 Albums Of All Time</a></li>
                                            </ul>
                                        </li>			
                                        <li>
                                            <a href="contact.php">Contact Us</a>
                                        </li>
                                    </ul>
                                </nav>				
                            </div>
                        </div>
                    </div>
                </header>
            
                <section class="page_breadcrumbs cs gradient section_padding_top_25 section_padding_bottom_25 table_section table_section_md">
                    <div class="container">
			<div class="row">
                            <div class="col-md-6 text-center text-md-left">
				<h2 class="small">Artists</h2>
                            </div>
                            <div class="col-md-6 text-center text-md-right">
                                <p>Descriptions</p>
                            </div>
			</div>
                    </div>
		</section>
                
                <!-- Contact Section -->
		<section id="contact" class="ls columns_padding_25 section_padding_top_100 section_padding_bottom_100">
                    <div class="container">
			<div class="row">
                            <div class="col-sm-12">
				<h4>Contact Form</h4>
                            </div>
			</div>
			<div class="row">
                            <div class="col-md-8">
				<form class="contact-form columns_padding_5 bottommargin_40" method="post" action="./">
                                    <div class="row">
					<div class="col-sm-6">
                                            <div class="form-group bottommargin_0"> <label for="name">Full Name <span class="required">*</span></label> <i class="fa fa-user highlight2" aria-hidden="true"></i> <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Full Name">											</div>
					</div>
					<div class="col-sm-6">
                                            <div class="form-group bottommargin_0"> <label for="phone">Phone Number<span class="required">*</span></label> <i class="fa fa-phone highlight2" aria-hidden="true"></i> <input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control" placeholder="Phone Number">											</div>
					</div>
					<div class="col-sm-6">
                                            <div class="form-group bottommargin_0"> <label for="email">Email address<span class="required">*</span></label> <i class="fa fa-envelope highlight2" aria-hidden="true"></i> <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email Address">											</div>
					</div>
					<div class="col-sm-6">
                                            <div class="form-group bottommargin_0"><label for="subject">Subject<span class="required">*</span></label> <i class="fa fa-flag highlight2" aria-hidden="true"></i> <input type="text" aria-required="true" size="30" value="" name="subject" id="subject" class="form-control" placeholder="Subject">											</div>
					</div>
					<div class="col-sm-12">
                                            <div class="contact-form-message form-group bottommargin_0"> <label for="message">Message</label><i class="fa fa-comment highlight2" aria-hidden="true"></i> <textarea aria-required="true" rows="5" cols="45" name="message" id="message" class="form-control" placeholder="Message"></textarea> </div>
					</div>
					<div class="col-sm-12 bottommargin_0">
                                            <div class="contact-form-submit topmargin_10"> <button type="submit" id="contact_form_submit" name="contact_submit" class="theme_button color wide_button margin_0">Send message</button> </div>
					</div>
                                    </div>
				</form>
                            </div>
                            <div class="col-md-4">
				<ul class="list1 no-bullets no-top-border no-bottom-border">
                                    <li>
					<div class="media">
                                            <div class="media-left"> <i class="rt-icon2-shop highlight2 fontsize_18"></i> </div>
                                            <div class="media-body">
						<h6 class="media-heading grey">Postal Address:</h6> Western Cape
                                            </div>
					</div>
                                    </li>
                                    <li>
					<div class="media">
                                            <div class="media-left"> <i class="rt-icon2-phone5 highlight2 fontsize_18"></i> </div>
                                            <div class="media-body">
						<h6 class="media-heading grey">Phone:</h6> 061 164 9200
                                            </div>
					</div>
                                    </li>
                                    <li>
					<div class="media">
                                            <div class="media-left"> <i class="rt-icon2-mail highlight2 fontsize_18"></i> </div>
                                            <div class="media-body greylinks">
						<h6 class="media-heading grey">Email:</h6> <a href="gmilford321@gmail.com">My Email</a>
                                            </div>
					</div>
                                    </li>
				</ul>
                            </div>
			</div>
                    </div>
		</section>
                        
                <!-- Footer Section -->
		<section class="ds page_copyright section_padding_25">
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

