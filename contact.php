<!DOCTYPE html>

<html>
    <head>
        <title>Music Demo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <link href="assets/css/music.css" rel="stylesheet">
        <link href="https://fonts.cdnfonts.com/css/apple-chancery" rel="stylesheet">
    </head>
    <body>
        <div id="canvas">
            <div id="box_wrapper">

                <!-- Navbar Section-->
                <header class="navbar navbar-expand-lg fixed-top">
                    <div class="container">
                        <a class="navbar-brand" href="index.php">Music Portal</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="albums.php">Music</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="albums.php">Albums</a></li>
                                        <li><a class="dropdown-item" href="tracks.php">Tracks</a></li>
                                        <li><a class="dropdown-item" href="playlists.php">Playlists</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="artists.php">Artists</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="videos.html">Music Videos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="gallery.html">Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="blog.php">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="playlists.php">Playlists</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Extras</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="trending.html">Trending Music</a></li>
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
 
                <!-- -Breadcrumbs Section -->
                <section class="page_breadcrumbs cs gradient section_padding_top_75 section_padding_bottom_25 table_section table_section_md">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 text-center text-md-start">
                                <h2 class="small">Contact</h2>
                            </div>
                            <div class="col-md-6 text-center text-md-end">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active"><a href="#">Contact</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Contact Section -->
                <section id="contact" class="section_padding_top_40 section_padding_bottom_100">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4>Contact Form</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <form class="contact-form columns_padding_5 bottommargin_40" method="post" action="./">
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <div class="form-group mb-0">
                                                <label for="name" class="form-label">Full Name <span class="required">*</span></label>
                                                <i class="fa fa-user highlight2" aria-hidden="true"></i>
                                                <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Full Name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group mb-0">
                                                <label for="phone" class="form-label">Phone Number<span class="required">*</span></label>
                                                <i class="fa fa-phone highlight2" aria-hidden="true"></i>
                                                <input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control" placeholder="Phone Number">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group mb-0">
                                                <label for="email" class="form-label">Email address<span class="required">*</span></label>
                                                <i class="fa fa-envelope highlight2" aria-hidden="true"></i>
                                                <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email Address">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group mb-0">
                                                <label for="subject" class="form-label">Subject<span class="required">*</span></label>
                                                <i class="fa fa-flag highlight2" aria-hidden="true"></i>
                                                <input type="text" aria-required="true" size="30" value="" name="subject" id="subject" class="form-control" placeholder="Subject">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="contact-form-message form-group mb-0">
                                                <label for="message" class="form-label">Message</label>
                                                <i class="fa fa-comment highlight2" aria-hidden="true"></i>
                                                <textarea aria-required="true" rows="8" cols="45" name="message" id="message" class="form-control" placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 mb-0">
                                            <div class="contact-form-submit mt-3">
                                                <button type="submit" id="contact_form_submit" name="contact_submit" class="btn submit_button wide_button m-0">Send message</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-4">
                                <ul class="list-unstyled no-bullets no-top-border no-bottom-border">
                                    <li>
                                        <div class="media">
                                        <div class="media-left">
                                            <i class="rt-icon2-shop highlight2 fontsize_18"></i>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading grey">Postal Address:</h6>
                                            Western Cape
                                        </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <div class="media-left">
                                                <i class="rt-icon2-phone5 highlight2 fontsize_18"></i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading grey">Phone:</h6>
                                                061 164 9200
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <div class="media-left">
                                                <i class="rt-icon2-mail highlight2 fontsize_18"></i>
                                            </div>
                                            <div class="media-body greylinks">
                                                <h6 class="media-heading grey">Email:</h6>
                                                <a href="">My Email</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="ds page_copyright py-4">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">                      
                                <p class="small-text mb-0">&copy; Copyright 2024. All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </body>
</html>
