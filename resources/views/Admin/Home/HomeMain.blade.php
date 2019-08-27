<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>ePMS | HOME</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="{{('Home/img/favicon.png')}}" rel="icon">
    <link href="{{('Home/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{('Home/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{('Home/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{('Home/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{('Home/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{('Home/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{('Home/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{('Home/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
      Theme Name: BizPage
      Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
      Author: BootstrapMade.com
      License: https://bootstrapmade.com/license/
    ======================================================= -->
</head>

<body>

<!--==========================
  Header
============================-->
<header id="header">
    <div class="container-fluid">

        <div id="logo" class="pull-left">
            <h1><a href="#intro" class="scrollto">ePMS</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-active"><a href="#intro">Home</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#services"> News</a></li>
                <li><a href="#portfolio"> Projects</a></li>
                <li><a href="#team">Our Team</a></li>



                <li><a href="{{('/login')}}">Login</a></li>

            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->

<!--==========================
  Intro Section
============================-->
<section id="intro">
    <div class="intro-container">
        <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <div class="carousel-item active">
                    <div class="carousel-background"><img src="{{('Home/img/intro-carousel/1.jpg')}}" alt=""></div>
                    <div class="carousel-container">

                        <div class="carousel-content">
                            <h2>We are professional</h2>
                            <p>LETS WRITE SOME NOTES HEARE.</p>
                            <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
                        </div>

                    </div>
                </div>

                <div class="carousel-item">
                    <div class="carousel-background"><img src="{{('Home/img/intro-carousel/2.jpg')}}" alt=""></div>
                    <div class="carousel-container">

                        {{--<div class="carousel-content">--}}
                            {{--<h2>At vero eos et accusamus</h2>--}}
                            {{--<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut.</p>--}}
                            {{--<a href="#featured-services" class="btn-get-started scrollto">Get Started</a>--}}
                        {{--</div>--}}
                  {{----}}
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="carousel-background"><img src="{{('Home/img/intro-carousel/3.jpg')}}" alt=""></div>
                    <div class="carousel-container">
                      {{----}}
                        {{--<div class="carousel-content">--}}
                            {{--<h2>Temporibus autem quibusdam</h2>--}}
                            {{--<p>Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt omnis iste natus error sit voluptatem accusantium.</p>--}}
                            {{--<a href="#featured-services" class="btn-get-started scrollto">Get Started</a>--}}
                        {{--</div>--}}
                   {{----}}
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="carousel-background"><img src="{{('Home/img/intro-carousel/4.jpg')}}" alt=""></div>
                    <div class="carousel-container">
                        {{--<div class="carousel-content">--}}
                            {{--<h2>Nam libero tempore</h2>--}}
                            {{--<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum.</p>--}}
                            {{--<a href="#featured-services" class="btn-get-started scrollto">Get Started</a>--}}
                        {{--</div>--}}
                    {{----}}

                    </div>
                </div>

                <div class="carousel-item">
                    <div class="carousel-background"><img src="{{('Home/img/intro-carousel/5.jpg')}}" alt=""></div>
                    <div class="carousel-container">
                        {{--<div class="carousel-content">--}}
                            {{--<h2>Magnam aliquam quaerat</h2>--}}
                            {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>--}}
                            {{--<a href="#featured-services" class="btn-get-started scrollto">Get Started</a>--}}
                        {{--</div>--}}
                    {{----}}
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
</section><!-- #intro -->

<main id="main">

    <!--==========================
      Featured Services Section
    ============================-->
    <section id="featured-services">
        <div class="container">
            <div class="row">


            </div>
        </div>
    </section><!-- #featured-services -->

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
        <div class="container">

            <header class="section-header">
                <h3>About Us</h3>
                <p>
                    This is to build automated system to handle
                    almost all the tasks of FYP lifecycle,
                </p>
            </header>

            <div class="row about-cols">

                <div class="col-md-4 wow fadeInUp">
                    <div class="about-col">
                        <div class="img">
                            <img src="{{('Home/img/about-mission.jpg')}}" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Mission</a></h2>
              <p>
                      IN This Application  students are allowed to submit the proposal online. This facility is not available in
                  our university. So, for this purpose our project is design to help the student as well as the
                  supervisor also. It helps the student and both supervisor to work on time and arrange meetings to
                  develop a communication between.
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">

                <img src="{{('Home/img/about-plan.jpg')}}" alt="" class="img-fluid">
                            <div class="icon"><i class="ion-ios-list-outline"></i></div>
                        </div>
                        <h2 class="title"><a href="#"> Our Service</a></h2>
                        <p>

                             In student panel students are allowed to submit proposal, FYP-
                            1 report and FYP-2 report, code submission within due date. and almost Every Task That process In Cycle
                            The FYP committee member panel allow Aaagin-evaluating the
                            project of the student like the proposal Internals/Externals  acceptation and rejection.

                        </p>
                    </div>
                </div>

                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="about-col">
                        <div class="img">

                            <img src=" {{('Home/img/about-vision.jpg')}}" alt="" class="img-fluid">
                            <div class="icon"><i class="ion-ios-eye-outline"></i></div>
                        </div>
                        <h2 class="title"><a href="#">Our Vision</a></h2>

                        <p>


                            To create an automated system that follows complete final year project’s lifecycle and maintains
                            repository of all projects. It manages notifications and due dates. It is completely programmed
                            framework with online accessibility. It will keep updated student and supervisor meeting logs
                            and it will also allow external examiner to review and evaluate projects.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
        <div class="container">

            <header class="section-header wow fadeInUp">
                <h3>News</h3>
                <p>


                    Below is the list News And Important Links .

                </p>
            </header>

            <div class="row">

             {{--Postion Holder    --}}

@foreach($News as $Newss)
                <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                    <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
                    <h4 class="title">{{$Newss->Title}}</h4>

                    <p class="description">
                        {{$Newss->Description}}
                    </p>
                    <h7 class="title"><a href="  {{$Newss->URL}}">Read More</a></h7>
                </div>

@endforeach
            </div>

        </div>
    </section><!-- #services -->

    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeIn">
        <div class="container text-center">
            <h3>Our Postion Holders</h3>


            <div class="row">

                {{--Postion Holder    --}}
                @foreach($postions as $Newss)

                    <div  class=" col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">

                        <h4 class="title" style="color: #0a0a0a">{{$Newss->Title}}</h4>
                        <h4 class="title" style="color: #0a0a0a">{{$Newss->Session}}</h4>

                        <p class="description" >
                            {!! $Newss->StudentS !!}
                        </p>
                        <h7  class="title" style="color: #0a0a0a" >{{$Newss->Postion}}</h7>

                    </div>

                @endforeach
            </div>

        </div>
        {{$postions->links()}}
    </section><!-- #call-to-action -->

    <!--==========================
      Skills Section
    ============================-->
    <section id="skills">
        <div class="container">

            <header class="section-header">
                <h3>Our strength </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
            </header>

            <div class="skills-content">

                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                        <span class="skill">Pass out Student<i class="val">10971</i></span>
                    </div>
                </div>

                <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                        <span class="skill">Enrolled Students <i class="val">6038</i></span>
                    </div>
                </div>

                <div class="progress">
                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                        <span class="skill">  Programs Offered<i class="val">39</i></span>
                    </div>
                </div>

                <div class="progress">
                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
                        <span class="skill">PhD Faculty <i class="val">225</i></span>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!--==========================
      Facts Section
    ============================-->
    {{--<section id="facts"  class="wow fadeIn">--}}
        {{--<div class="container">--}}

            {{--<header class="section-header">--}}
                {{--<h3>Facts</h3>--}}
                {{--<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>--}}
            {{--</header>--}}

            {{--<div class="row counters">--}}

                {{--<div class="col-lg-3 col-6 text-center">--}}
                    {{--<span data-toggle="counter-up">274</span>--}}
                    {{--<p>Clients</p>--}}
                {{--</div>--}}

                {{--<div class="col-lg-3 col-6 text-center">--}}
                    {{--<span data-toggle="counter-up">421</span>--}}
                    {{--<p>Projects</p>--}}
                {{--</div>--}}

                {{--<div class="col-lg-3 col-6 text-center">--}}
                    {{--<span data-toggle="counter-up">1,364</span>--}}
                    {{--<p>Hours Of Support</p>--}}
                {{--</div>--}}

                {{--<div class="col-lg-3 col-6 text-center">--}}
                    {{--<span data-toggle="counter-up">18</span>--}}
                    {{--<p>Hard Workers</p>--}}
                {{--</div>--}}

            {{--</div>--}}

            {{--<div class="facts-img">--}}
                {{--<img src="{{('Home/img/facts-img.png')}}" alt="" class="img-fluid">--}}
            {{--</div>--}}

        {{--</div>--}}
    {{--</section><!-- #facts -->--}}

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio"  class="section-bg" >
        <div class="container">

            <header class="section-header">
                <h3 class="section-title">Projects</h3>
            </header>

            <div class="row">
                <div class="col-lg-12">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">Artificial intelligence</li>
                        <li data-filter=".filter-web">Andorid</li>
                        <li data-filter=".filter-card">Image Processing</li>
                        <li data-filter=".filter-web">Web</li>

                    </ul>
                </div>
            </div>

            <div class="row portfolio-container">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
                    <div class="portfolio-wrap">
                        <figure>

                            <img src="{{('Home/img/portfolio/app1.jpg')}}" class="img-fluid" alt="">
                            <a href="{{('Home/img/portfolio/app1.jpg')}}" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                            <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="#">App 1</a></h4>
                            <p>App</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-wrap">
                        <figure>

                            <img src="{{('Home/img/portfolio/web3.jpg')}}" class="img-fluid" alt="">
                            <a href="{{('Home/img/portfolio/web3.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                            <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="#">Web 3</a></h4>
                            <p>Web</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
                    <div class="portfolio-wrap">
                        <figure>

                            <img src="{{('Home/img/portfolio/app2.jpg')}}" class="img-fluid" alt="">
                            <a href="{{('Home/img/portfolio/app2.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                            <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="#">App 2</a></h4>
                            <p>App</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
                    <div class="portfolio-wrap">
                        <figure>

                            <img src="{{('Home/img/portfolio/card2.jpg')}}" class="img-fluid" alt="">
                            <a href="{{('Home/img/portfolio/card2.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                            <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="#">Card 2</a></h4>
                            <p>Card</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-wrap">
                        <figure>

                            <img src="{{('Home/img/portfolio/web2.jpg')}}" class="img-fluid" alt="">
                            <a href="{{('Home/img/portfolio/web2.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                            <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="#">Web 2</a></h4>
                            <p>Web</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
                    <div class="portfolio-wrap">
                        <figure>

                            <img src="{{('Home/img/portfolio/app3.jpg')}}" class="img-fluid" alt="">
                            <a href="{{('Home/img/portfolio/app3.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                            <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="#">App 3</a></h4>
                            <p>App</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
                    <div class="portfolio-wrap">
                        <figure>

                            <img src="{{('Home/img/portfolio/card1.jpg')}}" class="img-fluid" alt="">
                            <a href="{{('Home/img/portfolio/card1.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                            <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="#">Card 1</a></h4>
                            <p>Card</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-wrap">
                        <figure>

                            <img src="{{('Home/img/portfolio/card3.jpg')}}" class="img-fluid" alt="">
                            <a href="{{('Home/img/portfolio/card3.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                            <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="#">Card 3</a></h4>
                            <p>Card</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
                    <div class="portfolio-wrap">
                        <figure>

                            <img src="{{('Home/img/portfolio/web1.jpg')}}" class="img-fluid" alt="">
                            <a href="{{('Home/img/portfolio/web1.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                            <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="#">Web 1</a></h4>
                            <p>Web</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section> <!-- #portfolio -->





    <section id="services">
        <div class="container">

            <header class="section-header wow fadeInUp">
                <h3>Rules/SOP</h3>
                <p>


                    Below is the list Rules And SOP For FYP .

                </p>
            </header>

            <div class="row">

                {{--Postion Holder    --}}


                <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                    <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
                    <h4 class="title"><a href="">Supervision</a></h4>
                    <p class="description">
<b>
                        Faculty of Department of Computer Science, CIIT-LHR, with designation lecturer and above is eligible for supervision of FYP. Others can co-supervise.
                        Every CS faculty member eligible for supervision will supervise or co-supervise at least one project every semester.
                        Maximum three FYPs can be registered for supervision in a semester.
</b>
                    </p>
                </div>

                <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                    <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
                    <h4 class="title"><a href="">Students</a></h4>
                    <p class="description">
<b>
                        Eligible for registration in FYP-1 after the completion of 6 semesters with IP status.
                        There can be minimum 2 and maximum 3 members in a group.
                        All deliverables are required by the announced date, otherwise 1 credit/day will be deducted on late submission.
                        All group members must belong to same degree. So BSSE and BSCS students can't join each other in one group. In same way, SDP and DDP students can't mix in one group. Students of different batch can make groups i.e. if some student could not pick FYP with their normal batch, they can register it with their junior batch (of same degree and program type (SDP or DDP)

</b>                  </p>
                </div>
                <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                    <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
                    <h4 class="title"><a href="">Supervisor(SOP)</a></h4>
                    <p class="description"><b>
                        Submit ideas for students as per given format before the last date of proposal submission.
                        Help students for the preparation of proposal.
                        Prepare similarity report of proposal through Turnitin.
                        Ask students for the proposal submission to relevant person before the final date of submission.
                        Arrange regular fortnightly meetings (at least twice in a month) with students during the whole year and prepare minutes of all meetings on prescribed form available for download on main page.
                        Submission of FYP-1 report to relevant person before the given date.
                        Preparation of FYP folder as per following order and format:
                        Proposal
                        Minutes of all meetings
                        FYP-1 evaluation (Credit out of 10)
                        FYP-2 evaluation (Credit out of 30)
                        Recommend external examiners to convener FYP management committee.
                        Prepare similarity report of FYP-2 through Turnitin.
                        Ask students for the FYP-2 reports submission to relevant person before the final date of submission.
                        Submission of FYP folder to relevant person before the given date.
                        </b></p>
                </div>




            </div>

        </div>
    </section><!-- #services -->

    <!--==========================
      Clients Section
    ============================-->
    {{--<section id="clients" class="wow fadeInUp">--}}
        {{--<div class="container">--}}

            {{--<header class="section-header">--}}
                {{--<h3>WorkShop</h3>--}}
            {{--</header>--}}

            {{--<div class="owl-carousel clients-carousel">--}}
                {{--<img src="{{('Home/img/clients/client-1.png')}}" alt="">--}}
                {{--<img src="{{('Home/img/clients/client-2.png')}}" alt="">--}}
                {{--<img src="{{('Home/img/clients/client-3.png')}}" alt="">--}}
                {{--<img src="{{('Home/img/clients/client-4.png')}}" alt="">--}}
                {{--<img src="{{('Home/img/clients/client-5.png')}}" alt="">--}}
                {{--<img src="{{('Home/img/clients/client-6.png')}}" alt="">--}}
                {{--<img src="{{('Home/img/clients/client-7.png')}}" alt="">--}}
                {{--<img src="{{('Home/img/clients/client-8.png')}}" alt="">--}}
            {{--</div>--}}

        {{--</div>--}}
    {{--</section><!-- #clients -->--}}

    {{--<!--==========================--}}
      {{--Clients Section--}}
    {{--============================-->--}}
    {{--<section id="clients" class="wow fadeInUp">--}}
        {{--<div class="container">--}}

            {{--<header class="section-header">--}}
                {{--<h3>Rule/sop</h3>--}}
            {{--</header>--}}

            {{--<div class="owl-carousel clients-carousel">--}}
                {{--<img src="{{('Home/img/testimonial-1.jpg')}}" alt="">--}}
                {{--<img src="{{('Home/img/testimonial-2.jpg')}}" alt="">--}}
                {{--<img src="{{('Home/img/testimonial-3.jpg')}}" alt="">--}}
                {{--<img src="{{('Home/img/testimonial-4.jpg')}}" alt="">--}}

            {{--</div>--}}

        {{--</div>--}}
    {{--</section><!-- #clients -->--}}

    <!--==========================
      Team Section
    ============================-->
    <section id="team">
        <div class="container">
            <div class="section-header wow fadeInUp">
                <h3>Team</h3>
                <p>

                    However, to explain to you how all this mistaken idea of ​​denouncing pleasure and pain
                </p>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6 wow fadeInUp">
                    <div class="member">
                        <img src="{{('Home/img/team-1.jpg')}}" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Ahsan Ashraf</h4>
                                <span></span>
                                <span>Product Manager</span>
                                <div class="social">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="member">
                        <img src="{{('Home/img/team-2.jpg')}}" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Mohtisam </h4>
                                <span></span>
                                <div class="social">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="member">
                        <img src="{{('Home/img/team-3.jpg')}}" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Muhammad Umar</h4>
                                <span></span>
                                <div class="social">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="member">
                        <img src="{{('Home/img/team-4.jpg')}}" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>MS Shina Ashraf</h4>
                                <span>Supervisor</span>
                                <div class="social">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- #team -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
        <div class="container">

            <div class="section-header">
                <h3>Contact Us</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
            </div>

            <div class="row contact-info">

                <div class="col-md-4">
                    <div class="contact-address">
                        <i class="ion-ios-location-outline"></i>
                        <h3>Address</h3>
                        <address>Lahore(54000),Punjab,Pakistan</address>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-phone">
                        <i class="ion-ios-telephone-outline"></i>
                        <h3>Phone Number</h3>
                        <p><a href="tel:+155895548855">+923067395766</a></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-email">
                        <i class="ion-ios-email-outline"></i>
                        <h3>Email</h3>
                        <p><a href="mailto:info@example.com">rjahsan43@gmail.com</a></p>
                    </div>
                </div>

            </div>

            {{--<div class="form">--}}
                    {{--<div id="sendmessage">Your message has been sent. Thank you!</div>--}}
                {{--<div id="errormessage"></div>--}}
                {{--<form action="" method="post" role="form" class="contactForm">--}}
                    {{--<div class="form-row">--}}
                        {{--<div class="form-group col-md-6">--}}
                            {{--<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />--}}
                            {{--<div class="validation"></div>--}}
                        {{--</div>--}}
                        {{--<div class="form-group col-md-6">--}}
                            {{--<input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />--}}
                            {{--<div class="validation"></div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />--}}
                        {{--<div class="validation"></div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--<textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>--}}
                        {{--<div class="validation"></div>--}}
                    {{--</div>--}}

                    {{--<div class="text-center"><button type="submit">Send Message</button></div>--}}
                {{----}}
            {{--</form>--}}
            {{--</div>--}}

        </div>
    </section><!-- #contact -->

</main>

<!--==========================
  Footer
============================-->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-info">
                    <h3>ePMS</h3>
                    <p>

                        This is to build automated system to handle almost all the tasks of FYP lifecycle
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="#">About us</a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="#">Services</a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="#">Terms of service</a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h4>Contact Us</h4>
                    <p>

                         <br>
                        <strong>Phone:</strong>+923067395766<br>
                        <strong>Email:</strong> rjahsan43@gmail.com<br>
                    </p>

                    <div class="social-links">
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                    </div>

                </div>

                <div class="col-lg-3 col-md-6 footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>

                    Comming Soon
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit"  value="Subscribe">
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong>ePMS</strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
            -->
          
        </div>
    </div>
</footer><!-- #footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<div id="preloader"></div>

<!-- JavaScript Libraries -->
<script src="{{('Home/lib/jquery/jquery.min.js')}}"></script>
<script src="{{('Home/lib/jquery/jquery-migrate.min.js')}}"></script>
<script src="{{('Home/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{('Home/lib/easing/easing.min.js')}}"></script>
<script src="{{('Home/lib/superfish/hoverIntent.js')}}"></script>
<script src="{{('Home/lib/superfish/superfish.min.js')}}"></script>
<script src="{{('Home/lib/wow/wow.min.js')}}"></script>
<script src="{{('Home/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{('Home/lib/counterup/counterup.min.js')}}"></script>
<script src="{{('Home/lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{('Home/lib/isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{('Home/lib/lightbox/js/lightbox.min.js')}}"></script>
<script src="{{('Home/lib/touchSwipe/jquery.touchSwipe.min.js')}}"></script>
<!-- Contact Form JavaScript File -->
<script src="{{('Home/contactform/contactform.js')}}"></script>

<!-- Template Main Javascript File -->
<script src="{{('Home/js/main.js')}}"></script>

</body>
</html>
