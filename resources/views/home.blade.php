@extends('app')

@section('content')
    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">
                            <img src="img/DECaF_logo_white_web.png" alt="Decaf Logo"
                            class="img-responsive">
                        </h1>
                        <p class="intro-text">Friday, February 20, 2015 @ 9:30AM - 2:00 PM</br>Price Center Ballroom East + West</p>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>What is DECaF?</h2>
                <p>Here is the first paragraph of content about DECaF</p>
                <p>Maybe now we can talk about the history of DECaF, and have links to articles/pages about old DECaFs.</p>
                <p>It's open to students and employeers or something like that.</p>
            </div>
        </div>
    </section>

    <!-- Employer Section -->
    <section id="download" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Employers</h2>
                    <p>Come recruit the world's best and brightest to help reach the future your company envisions.</p>
                    <p>DECaF is the largest student ran job fair on the west coast, tapping into thousands of engineering students at UC San Diego.</p>
                    <p>By becoming a sponsor, your company will have access to the 2015 DECaF. This should have better text.</p>
                    <a href="http://startbootstrap.com/template-overviews/grayscale/" class="btn btn-default btn-lg">Become a Sponsor</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Student Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Students</h2>
                <p>This section has information regarding how students can submit their resumes and other things related to attending.</p>
            </div>
        </div>
    </section>

    <!-- Sponsor List Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Sponsors</h2>
                <p>Feel free to email us to provide some feedback on our templates, give us suggestions for new templates and themes, or to just say hello!</p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contact Us</h2>
                <p>Feel free to email us to provide some feedback on our templates, give us suggestions for new templates and themes, or to just say hello!</p>
                <p><a href="mailto:feedback@startbootstrap.com">feedback@startbootstrap.com</a>
                </p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li>
                        <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                    </li>
                    <li>
                        <a href="https://plus.google.com/+Startbootstrap/posts" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <div id="map"></div>

@endsection
