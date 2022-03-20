<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Your description">
    <meta name="author" content="Your name">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>Association des DUT/DTS en Informatique de l'INP-HB</title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    @include('components.css')

	<!-- Favicon  -->
    <link rel="icon" href="{{ asset('img/logos/Logo - ADUTI.png') }}">
</head>
<body data-spy="scroll" data-target=".fixed-top">

    <!-- Navigation -->
    @include('components.navbar')
    <!-- end of navigation -->


    <!-- Header -->
    @include('components.header')
    <!-- end of header -->


    <!-- Details 1 -->
    <div id="details" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-5">
                    <div class="text-container">
                        <h2>Développement</h2>
                        <hr class="hr-heading">
                        <p>
                            Le développeur est chargé de réaliser une analyse technique afin d’identifier, de comprendre et d’analyser les besoins des clients. A la suite de quoi, il conçoit en imaginant et en structurant l’architecture technique de ce dernier.
                            <br><br>Puis il organise des tests afin de vérifier le bon fonctionnement des diverses fonctionnalités mises en œuvre et programme le projet informatique dont il a la charge.
                            <br><br>Enfin, il apporte une aide technique en délivrant aux clients une documentation fonctionnelle et technique, ou en veillant au suivi et à la correction des soucis rencontrés.
                        </p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Développement Web</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Développement Mobile</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Développement Desktop</div>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6 col-xl-7">
                    <div class="image-container">
                        <img class="img-fluid" src="{{ asset('img/wallpaper/info.jpg') }}" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of details 1 -->


    <!-- Details 2 -->
    <div class="basic-2">
        <div class="container-fluid">
            <div class="row">
                <div class="image-area">
                    <div class="image-container">
                        <img class="img-fluid" src="{{ asset('spify/images/details-2.jpg') }}" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of image-area -->
                <div class="text-area">
                    <div class="text-container">
                        <h2>Réseaux Informatiques</h2>
                        <hr class="hr-heading">
                        <p>
                            Le technicien réseau informatique est en charge de la bonne marche du système de télécommunication de son entreprise. Qu'il s'agisse d'acheter de nouveaux matériels informatiques, de sécuriser les connexions Internet ou de développer le système interne.
                        </p>
                        <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox">Aperçu</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of text-area -->
            </div> <!-- end of row -->
        </div> <!-- end of container-fluid -->
    </div> <!-- end of basic-1 -->
    <!-- end of details 2 -->


    <!-- Details Lightbox -->
    <!-- Lightbox -->
	<div id="details-lightbox" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
			<div class="col-lg-8">
                <div class="image-container">
                    <img class="img-fluid" src="{{ asset('spify/images/details-lightbox.jpg') }}" alt="alternative">
                </div> <!-- end of image-container -->
			</div> <!-- end of col -->
			<div class="col-lg-4">
                <h3>Goals Setting</h3>
				<hr>
                <p>The app can easily help you track your personal development evolution if you take the time to set it up.</p>
                <h4>User Feedback</h4>
                <p>This is a great app which can help you save time and make your live easier. And it will help improve your productivity.</p>
                <ul class="list-unstyled li-space-lg">
                    <li class="media">
                        <i class="fas fa-check"></i><div class="media-body">Splash screen panel</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-check"></i><div class="media-body">Statistics graph report</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-check"></i><div class="media-body">Events calendar layout</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-check"></i><div class="media-body">Location details screen</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-check"></i><div class="media-body">Onboarding steps interface</div>
                    </li>
                </ul>
                <a class="btn-solid-reg mfp-close page-scroll" href="#contact">Contact Us</a> <button class="btn-outline-reg mfp-close as-button" type="button">Back</button>
			</div> <!-- end of col -->
		</div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->
    <!-- end of details lightbox -->


    <!-- Details 3 -->
    <div class="basic-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-5">
                    <div class="text-container">
                        <h2>Sécurité Informatique</h2>
                        <hr class="hr-heading">
                        <p>
                            La sécurité informatique consiste à garantir que les ressources matérielles ou logicielles d'une organisation sont uniquement utilisées dans le cadre prévu. La sécurité des systèmes d'information vise les objectifs tels que la <strong>Confidentialité</strong>, l'<strong>Authentification</strong>, l'<strong>Intégrité</strong>, la <strong>Disponibilité</strong> et la <strong>Traçabilité<strong>
                        </p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6 col-xl-7">
                    <div class="image-container">
                        <img class="img-fluid" src="{{ asset('img/wallpaper/cyber-security.jpg') }}" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-3 -->
    <!-- end of details 3 -->


    <!-- Mission -->
    <div class="basic-4" style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('{{ asset('img/header_pic.jpg') }}') center center no-repeat; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="text-container">
                    <h4>
                        SERVICES
                    </h4>
                </div> <!-- end of text-container -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-4 -->
    <!-- end of mission -->


    <!-- Strengths -->
    <div id="strengths" class="basic-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-unstyled li-space-lg">
                        <li class="media">
                            <div class="bullet">1</div>
                            <div class="media-body">
                                <h4>Specialized expertise</h4>
                                <p>We've been deploying successful online shops for about 10 year and we've made it our mission to provide the best Shopify development services in the industry. Besides the shop itself we also provide branding and strategy services to create solid foundations our customers online projects</p>
                            </div>
                        </li>
                        <li class="media">
                            <div class="bullet">2</div>
                            <div class="media-body">
                                <h4>Shopify partner</h4>
                                <p>Our partnership with Shopify enables us to stay on top of all platform updates and prepare them for installation in your own online store. We're in permanent communication with the Shopify design and development team so we can solve any difficult situations that can occur after major updates</p>
                            </div>
                        </li>
                        <li class="media">
                            <div class="bullet">3</div>
                            <div class="media-body">
                                <h4>Timely delivery</h4>
                                <p>We take pride in delivering projects before the deadline to extend the pre-launch testing period. This ensures a smooth user experience and it also helps with bringing visitors back. You can check out or <a class="red page-scroll" href="#projects">projects section</a> below to hear straight from our customers what they think about us</p>
                            </div>
                        </li>
                    </ul>
                </div> <!-- end of col-lg-12 -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-5 -->
    <!-- end of strengths -->


    <!-- Projects -->
    <div id="projects" class="slider-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Text Slider -->
                    <div class="slider-container">
                        <div class="swiper-container text-slider">
                            <div class="swiper-wrapper">

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="image-container">
                                                <img class="img-fluid" src="{{ asset('img/header_pic.jpg') }}" alt="alternative">
                                            </div> <!-- end of image-container -->
                                        </div> <!-- end of col -->
                                        <div class="col-lg-6">
                                            <div class="text-container">
                                                <h4>Online retailer shop</h4>
                                                <p>We were proud to partner with Online Retailer in order to create a modern online store where customers can purchase some of the best items from the market at affordable prices</p>
                                                <p class="testimonial-text">"I am happy to have chosen Spify for our Shopify implementation. Their specialized experience helped the project and made it available 2 weeks prior the launch date for extensive testing"</p>
                                                <div class="testimonial-author">Michael Smith - General Manager</div>
                                            </div> <!-- end of text-container -->
                                        </div> <!-- end of col -->
                                    </div> <!-- end of row -->
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="image-container">
                                                <img class="img-fluid" src="{{ asset('spify/images/project-2.jpg') }}" alt="alternative">
                                            </div> <!-- end of image-container -->
                                        </div> <!-- end of col -->
                                        <div class="col-lg-6">
                                            <div class="text-container">
                                                <h4>Shopify ecommerce site</h4>
                                                <p>We were proud to partner with Online Retailer in order to create a modern online store where customers can purchase some of the best items from the market at affordable prices</p>
                                                <p class="testimonial-text">"I am happy to have chosen Spify for our Shopify implementation. Their specialized experience helped the project and made it available 2 weeks prior the launch date for extensive testing"</p>
                                                <div class="testimonial-author">Ronnie Blake - Sales Manager</div>
                                            </div> <!-- end of text-container -->
                                        </div> <!-- end of col -->
                                    </div> <!-- end of row -->
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="image-container">
                                                <img class="img-fluid" src="{{ asset('spify/images/project-3.jpg') }}" alt="alternative">
                                            </div> <!-- end of image-container -->
                                        </div> <!-- end of col -->
                                        <div class="col-lg-6">
                                            <div class="text-container">
                                                <h4>Online fashion shop</h4>
                                                <p>We were proud to partner with Online Retailer in order to create a modern online store where customers can purchase some of the best items from the market at affordable prices</p>
                                                <p class="testimonial-text">"I am happy to have chosen Spify for our Shopify implementation. Their specialized experience helped the project and made it available 2 weeks prior the launch date for extensive testing"</p>
                                                <div class="testimonial-author">Nicole Richter - Development Manager</div>
                                            </div> <!-- end of text-container -->
                                        </div> <!-- end of col -->
                                    </div> <!-- end of row -->
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                            </div> <!-- end of swiper-wrapper -->

                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->

                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of text slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-1 -->
    <!-- end of projects -->


    <!-- About -->
    <div id="about" class="basic-6">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-container bg-gray">
                        <h2>About our team</h2>
                        <p>We are a group of designers, developers and marketers specialized in the Shopify platform. We've launched many stores in 10 years</p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">We love what we do and have a lot of passion</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Shopify is our go to platform for online shops</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">We are Shopify partners for about 5 years</div>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                    <div class="image-container">
                        <img class="img-fluid" src="{{ asset('spify/images/about.jpg') }}" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-6 -->
    <!-- end of about -->


    <!-- Invitation -->
    <div class="basic-7">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4>We invite you to book a consultation call with one of our Key Account Managers and we guarantee it will not be a waste of time</h4>
                    <a class="btn-solid-lg page-scroll" href="#contact">Book Consultation</a>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-7 -->
    <!-- end of invitation -->


    <!-- Contact -->
    <div id="contact" class="form-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Book consultation</h2>
                    <p class="p-heading">Don't hesitate to give us a call or just use the contact form below</p>
                    <ul class="list-unstyled li-space-lg">
                        <li><i class="fas fa-map-marker-alt"></i> &nbsp;22 Innovative, San Francisco, CA 94043, US</li>
                        <li><i class="fas fa-phone"></i> &nbsp;<a href="tel:00817202212">+81 720 2212</a></li>
                        <li><i class="fas fa-envelope"></i> &nbsp;<a href="mailto:contact@site.com">contact@site.com</a></li>
                    </ul>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Contact Form -->
                    <form id="contactForm">
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="cname" required>
                            <label class="label-control" for="cname">Name</label>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control-input" id="cemail" required>
                            <label class="label-control" for="cemail">Email</label>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">Submit</button>
                        </div>
                    </form>
                    <!-- end of contact form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-1 -->
    <!-- end of contact -->


    <!-- Footer -->
    @include('components.footer')
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © <a href="#your-link">Your name</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Distributed by <a href="https://themewagon.com/">Themewagon</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright -->
    <!-- end of copyright -->


    <!-- Scripts -->
    @include('components.js')
</body>
</html>
