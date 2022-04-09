<!DOCTYPE html>
<html lang="en">

<!-- Head section start -->
@include('components.head')
<!-- Head section end -->

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header section start -->
    @include('components.header')
    <!-- Header section end -->


    <!-- Hero section start -->
    <section class="hero-section">
        <!-- left social link ber -->
        <div class="left-bar">
            <div class="left-bar-content">
                <div class="social-links">
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="https://www.facebook.com/adutiinphb/"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <!-- hero slider area -->
        <div class="hero-slider">
            {{-- Slider element 1 --}}
            <div class="hero-slide-item" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.2)),
        center / cover url({{ asset('img/wallpaper/header_pic.jpg') }});">
                <div class="slide-inner">
                    <div class="slide-content">
                        <h2>Rêvez...<br>Nous réalisons !</h2>
                        <a href="#intro" class="site-btn sb-light">En savoir plus</a>
                    </div>
                </div>
            </div>
            {{-- Slider element 2 --}}
            <div class="hero-slide-item" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.2)),
        center / cover url({{ asset('img/wallpaper/header_pic2.jpg') }});">
                <div class="slide-inner">
                    <div class="slide-content">
                        <h2>Du nouveau<br>sur l'Info's Day ?</h2>
                        <a href="#" class="site-btn sb-light">Tout savoir</a>
                    </div>
                </div>
            </div>
            {{-- Slider element 3 --}}
            <div class="hero-slide-item" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.2)),
        center / cover url({{ asset('img/wallpaper/header_pic3.jpg') }});">
                <div class="slide-inner">
                    <div class="slide-content">
                        <h2>Découvrez<br>nos créations</h2>
                        <a href="{{ route('portfolio') }}" class="site-btn sb-light">Voir le portfolio</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide-num-holder" id="snh-1"></div>
        <div class="hero-right-text">ADUTI - INPHB</div>
    </section>
    <!-- Hero section end -->


    <!-- Intro section start -->
    <section class="intro-section pt100 pb50" id="intro">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 intro-text mb-5 mb-lg-0">
                    <h2 class="sp-title">Ici l'Association des DUT/DTS en <span>Informatique</span> !</h2>
                    <p>
                        Nous sommes des étudiants en filière de Sciences et Technologies de l'Information et de la
                        comunnication (STIC) de L'Institut National Polytechnique Félix Houphouët-Boigny (INPHB).
                        Notre monde numérique change et les organisations doivent aussi s’adapter aux nouveaux modes de
                        vie des individus. Tous les réseaux digitaux sont concernés y compris internet. En effet,
                        l’épopée virale à laquelle nous assistons, nous invite à une protection renforcée de nos vies
                        numériques par des systèmes perfectionnés, le défi soulevé reste de taille, car les connexions
                        numériques sont souvent sans fil et en situation de mobilité constante.
                    </p>
                    <a href="{{ route('portfolio') }}" class="site-btn sb-dark">Nos réalisations</a>
                </div>
                <div class="col-lg-5 pt-4">
                    <img src="{{ asset('img/wallpaper/intro.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Intro section end -->


    <!-- Service section start -->
    <section class="service-section spad">
        <div class="container">
            <div class="section-title">
                <h2>Services</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="service-box">
                        <div class="sb-icon">
                            <div class="sb-img-icon">
                                <img src="{{ asset('arcade-master/img/icon/dark/1.png') }}" alt="">
                            </div>
                        </div>
                        <h3>Développement d'applications</h3>
                        <p>
                            Un développeur ou analyste programmeur est un informaticien qui réalise des logiciels et les
                            met en œuvre à l'aide de langages de programmation.
                        </p>
                        <a href="{{ route('about') }}" class="readmore">En savoir plus</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-box">
                        <div class="sb-icon">
                            <div class="sb-img-icon">
                                <img src="{{ asset('arcade-master/img/icon/dark/2.png') }}" alt="">
                            </div>
                        </div>
                        <h3>Réseaux informatiques</h3>
                        <p>
                            Le Technicien en réseaux a pour mission d’installer, mettre en service et assurer le bon
                            fonctionnement des réseaux informatiques et télécommunications.
                        </p>
                        <a href="{{ route('about') }}" class="readmore">En savoir plus</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-box">
                        <div class="sb-icon">
                            <div class="sb-img-icon">
                                <img src="{{ asset('arcade-master/img/icon/dark/3.png') }}" alt="">
                            </div>
                        </div>
                        <h3>Sécurité informatique</h3>
                        <p>
                            Le Technicien en sécurité informatique est chargé de garantir de la sécurité, la
                            disponibilité et l'intégrité du système d'information et des données.
                        </p>
                        <a href="{{ route('about') }}" class="readmore">En savoir plus</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-box">
                        <div class="sb-icon">
                            <div class="sb-img-icon">
                                <img src="{{ asset('arcade-master/img/icon/dark/4.png') }}" alt="">
                            </div>
                        </div>
                        <h3>Gestion des bases de données</h3>
                        <p>
                            Le gestionnaire base de données est responsable du système de gestion, s’assure de la
                            sécurité des données numériques de son entreprise et rend ces informations accessibles aux
                            collaborateurs.
                        </p>
                        <a href="{{ route('about') }}" class="readmore">En savoir plus</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-box">
                        <div class="sb-icon">
                            <div class="sb-img-icon">
                                <img src="{{ asset('arcade-master/img/icon/dark/6.png') }}" alt="">
                            </div>
                        </div>
                        <h3>UI/UX Design</h3>
                        <p>
                            Le UI/UX Designer s’occupe du lien entre la machine et l’homme et a pour objectif d’insérer
                            du storytelling (mise en récit) dans une expérience d’utilisation pour faire naître de
                            l’émotion chez l’internaute.
                        </p>
                        <a href="{{ route('about') }}" class="readmore">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service section end -->

    <!-- CTA section start -->
    <section class="cta-section pt100 pb50">
        <div class="cta-image-box" style="background-image: url({{ asset('img/wallpaper/intro_infos_day.JPG') }});">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 pl-lg-0 offset-lg-5 cta-content">
                    <h2 class="sp-title">
                        Nous sommes les <span>initiateurs</span> de <span>l'Info's Day</span>
                    </h2>
                    <p>
                        La journée de l'informatique, communément appelée Infos Day, est une journée dédiée à la
                        promotion de l'informatique et se déroulant au sein de l'Institut National Félix Houphouêt
                        Boigny de Yamoussoukro.
                    </p>
                    <div class="cta-icons">
                        <div class="cta-img-icon">
                            <img src="{{ asset('arcade-master/img/icon/light/1.png') }}" alt="">
                        </div>
                        <div class="cta-img-icon">
                            <img src="{{ asset('arcade-master/img/icon/light/2.png') }}" alt="">
                        </div>
                        <div class="cta-img-icon">
                            <img src="{{ asset('arcade-master/img/icon/color/3.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CTA section end -->

    <!-- Milestones section Start -->
    <section class="milestones-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="milestone">
                        <h2>5</h2>
                        <p>Promotions<br>d'informaticiens</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="milestone">
                        <h2>150</h2>
                        <p>Etudiants<br>diplômés</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="milestone">
                        <h2>33</h2>
                        <p>Projets<br>réalisés</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="milestone">
                        <h2>12</h2>
                        <p>Entreprises<br>partenaires</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Milestones section end -->

    <!-- Projects section start -->
    <div class="projects-section pb50">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="section-title">
                        <h1>Projets</h1>
                    </div>
                </div>
                <div class="col-lg-9">
                    <ul class="projects-filter-nav">
                        <li class="btn-filter" data-filter="*">Tout</li>
                        <li class="btn-filter" data-filter=".web">Web</li>
                        <li class="btn-filter" data-filter=".mobile">Mobile</li>
                        <li class="btn-filter" data-filter=".bureau">Bureau</li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="projects-carousel" class="projects-slider">
            {{-- Get all projects preview --}}
            @foreach ($projects as $project)
                <div class="single-project set-bg {{ $project->platform }}"
                    data-setbg="{{ asset($project->img_path) }}">
                    <div class="project-content">
                        <h2>{{ $project->name }}</h2>
                        <p>{{ date('d-m-Y', $project->date) }}</p>
                        <a href="{{ route('project.details', $project->id) }}" class="seemore">Voir le
                            projet</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Projects section end -->


    <!-- Clients section start -->
    <div class="client-section spad">
        <div class="container">
            <div id="client-carousel" class="client-slider">
                {{-- Get all partners logos --}}
                @for ($i = 0; $i < 5; $i++)
                    @foreach ($partners as $partner)
                        <div class="single-brand">
                            <a href="#">
                                <img src="{{ asset($partner->logo_path) }}" alt="">
                            </a>
                        </div>
                    @endforeach
                @endfor
            </div>
        </div>
    </div>
    <!-- Clients section end -->


    <!-- Footer section start -->
    @include('components.footer')
    <!-- Footer section end -->




    <!-- Javascript section -->
    @include('components.js')
    <!-- Javascript section end -->
</body>

</html>
