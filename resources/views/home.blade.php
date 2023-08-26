@extends('layouts.app')

@section('content')

<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('assets/images/manchette.jpeg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 style="color: white; font-size: 25px; font-weight: bold; opacity: 100px ">D-CLIC : former au numérique les talents féminins de demain</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('assets/images/DCLIC_Mad.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 style="color: white; font-size: 25px; font-weight: bold; opacity: 100px ">>A l’occasion de la journée mondiale des compétences des jeunes, le 15 juillet 2023, retour sur le déploiement dans quatre nouveaux pays du programme DCLIC de formation aux métiers du numérique</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('assets/images/DCLIC_PRo.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 style="color: white; font-size: 25px; font-weight: bold; opacity: 100px ">>Pour renforcer les compétences numériques des jeunes de l’espace francophone et multiplier leurs chances d’accéder à des emplois décents, en entreprises et dans l’entreprenariat, l’OIF met en œuvre le programme « D-CLIC, formez-vous au numérique »</h5>
      </div>
    </div></h5>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        <div class="container">
            <div class="section-header text-center"><br>
                <a href="{{ route('evenement') }}"><h2 class="title">EVENEMENTS</h2></a>
            </div>
            @foreach($evenement as $evenement)
            <div class="section-wrapper">
                <div class="row g-4 justify-content-center row-cols-xl-3 row-cols-md-2 row-cols-1">
                    <div class="col">
                        <div class="course-item">
                            <div class="course-inner">
                                <div class="course-thumb">
                                    <img src="assets/images/course/01.jpg" alt="course">
                                    <a href="{{ asset($evenement->photos) }}"></a>
                                </div>
                                <h6>{{ $evenement->titre}}</h6>
                                <h2>{{ $evenement->description}}</h2>
                                <h2>{{ $evenement->lieu}}</h2>
                                <h2>{{ $evenement->date}}</h2>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- course section ending here -->


    <!-- abouts section start here -->
    <div class="about-section">
        <div class="container">
            <div class="row justify-content-center row-cols-xl-2 row-cols-1 align-items-end flex-row-reverse">
                <div class="col">
                    <div class="about-right padding-tb">
                        <div class="section-header">
                            <span class="subtitle">About Our Edukon</span>
                            <h2 class="title">Good Qualification Services And Better Skills</h2>
                            <p>Distinctively provide acces mutfuncto users whereas transparent proceses somes ncentivize eficient functionalities rather than extensible archtectur communicate leveraged services and cross-platform.</p>
                        </div>
                        <div class="section-wrapper">
                            <ul class="lab-ul">
                                <li>
                                    <div class="sr-left">
                                        <img src="assets/images/about/icon/01.jpg" alt="about icon">
                                    </div>
                                    <div class="sr-right">
                                        <h5>Skilled Instructors</h5>
                                        <p>Distinctively provide acces mutfuncto users whereas communicate leveraged services</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="sr-left">
                                        <img src="assets/images/about/icon/02.jpg" alt="about icon">
                                    </div>
                                    <div class="sr-right">
                                        <h5>Get Certificate</h5>
                                        <p>Distinctively provide acces mutfuncto users whereas communicate leveraged services</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="sr-left">
                                        <img src="assets/images/about/icon/03.jpg" alt="about icon">
                                    </div>
                                    <div class="sr-right">
                                        <h5>Online Classes</h5>
                                        <p>Distinctively provide acces mutfuncto users whereas communicate leveraged services</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="about-left">
                        <div class="about-thumb">
                            <img src="assets/images/about/01.png" alt="about">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about section ending here -->


    <!-- Instructors Section Start Here -->
    <div class="instructor-section padding-tb section-bg">
        <div class="container">
            <div class="section-header text-center">
                <span class="subtitle">World-class Instructors</span>
                <h2 class="title">Classes Taught By Real Creators</h2>
            </div>
            <div class="section-wrapper">
                <div class="row g-4 justify-content-center row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4">
                    <div class="col">
                        <div class="instructor-item">
                            <div class="instructor-inner">
                                <div class="instructor-thumb">
                                    <img src="assets/images/instructor/01.jpg" alt="instructor">
                                </div>
                                <div class="instructor-content">
                                    <a href="team-single.html"><h4>Emilee Logan</h4></a>
                                    <p>Master of Education Degree</p>
                                    <span class="ratting">
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="instructor-footer">
                                <ul class="lab-ul d-flex flex-wrap justify-content-between align-items-center">
                                    <li><i class="icofont-book-alt"></i> 08 courses</li>
                                    <li><i class="icofont-users-alt-3"></i> 30 students</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="instructor-item">
                            <div class="instructor-inner">
                                <div class="instructor-thumb">
                                    <img src="assets/images/instructor/02.jpg" alt="instructor">
                                </div>
                                <div class="instructor-content">
                                    <a href="team-single.html"><h4>Donald Logan</h4></a>
                                    <p>Master of Education Degree</p>
                                    <span class="ratting">
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="instructor-footer">
                                <ul class="lab-ul d-flex flex-wrap justify-content-between align-items-center">
                                    <li><i class="icofont-book-alt"></i> 08 courses</li>
                                    <li><i class="icofont-users-alt-3"></i> 30 students</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="instructor-item">
                            <div class="instructor-inner">
                                <div class="instructor-thumb">
                                    <img src="assets/images/instructor/03.jpg" alt="instructor">
                                </div>
                                <div class="instructor-content">
                                    <a href="team-single.html"><h4>Oliver Porter</h4></a>
                                    <p>Master of Education Degree</p>
                                    <span class="ratting">
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="instructor-footer">
                                <ul class="lab-ul d-flex flex-wrap justify-content-between align-items-center">
                                    <li><i class="icofont-book-alt"></i> 08 courses</li>
                                    <li><i class="icofont-users-alt-3"></i> 30 students</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="instructor-item">
                            <div class="instructor-inner">
                                <div class="instructor-thumb">
                                    <img src="assets/images/instructor/04.jpg" alt="instructor">
                                </div>
                                <div class="instructor-content">
                                    <a href="team-single.html"><h4>Nahla Jones</h4></a>
                                    <p>Master of Education Degree</p>
                                    <span class="ratting">
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="instructor-footer">
                                <ul class="lab-ul d-flex flex-wrap justify-content-between align-items-center">
                                    <li><i class="icofont-book-alt"></i> 08 courses</li>
                                    <li><i class="icofont-users-alt-3"></i> 30 students</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center footer-btn">
                    <p>Want to help people learn, grow and achieve more in life?<a href="team.html">Become an instructor</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Instructors Section Ending Here -->


    <!-- student feedbak section start here -->
    <div class="student-feedbak-section padding-tb shape-img">
        <div class="container">
            <div class="section-header text-center">
                <span class="subtitle">Loved by 200,000+ students</span>
                <h2 class="title">Students Community Feedback</h2>
            </div>
            <div class="section-wrapper">
                <div class="row justify-content-center row-cols-lg-2 row-cols-1">
                    <div class="col">
                        <div class="sf-left">
                            <div class="sfl-thumb">
                                <img src="assets/images/feedback/01.jpg" alt="student feedback">
                                <a href="https://www.youtube-nocookie.com/embed/jP649ZHA8Tg" class="video-button" data-rel="lightcase"><i class="icofont-ui-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="stu-feed-item">
                            <div class="stu-feed-inner">
                                <div class="stu-feed-top">
                                    <div class="sft-left">
                                        <div class="sftl-thumb">
                                            <img src="assets/images/feedback/student/01.jpg" alt="student feedback">
                                        </div>
                                        <div class="sftl-content">
                                            <a href="#"><h6>Oliver Beddows</h6></a>
                                            <span>UX designer</span>
                                        </div>
                                    </div>
                                    <div class="sft-right">
                                        <span class="ratting">
                                            <i class="icofont-ui-rating"></i>
                                            <i class="icofont-ui-rating"></i>
                                            <i class="icofont-ui-rating"></i>
                                            <i class="icofont-ui-rating"></i>
                                            <i class="icofont-ui-rating"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="stu-feed-bottom">
                                    <p>Rapidiously buildcollaboration anden deas sharing viaing and with bleedng edgeing nterfaces fnergstcally plagiarize teams anbuling paradgms whereas goingi forward process and monetze</p>
                                </div>
                            </div>
                        </div>
                        <div class="stu-feed-item">
                            <div class="stu-feed-inner">
                                <div class="stu-feed-top">
                                    <div class="sft-left">
                                        <div class="sftl-thumb">
                                            <img src="assets/images/feedback/student/02.jpg" alt="student feedback">
                                        </div>
                                        <div class="sftl-content">
                                            <a href="#"><h6>Madley Pondor</h6></a>
                                            <span>UX designer</span>
                                        </div>
                                    </div>
                                    <div class="sft-right">
                                        <span class="ratting">
                                            <i class="icofont-ui-rating"></i>
                                            <i class="icofont-ui-rating"></i>
                                            <i class="icofont-ui-rating"></i>
                                            <i class="icofont-ui-rating"></i>
                                            <i class="icofont-ui-rating"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="stu-feed-bottom">
                                    <p>Rapidiously buildcollaboration anden deas sharing viaing and with bleedng edgeing nterfaces fnergstcally plagiarize teams anbuling paradgms whereas goingi forward process and monetze</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- student feedbak section ending here -->


    <!-- blog section start here -->
    <div class="blog-section padding-tb section-bg">
        <div class="container">
            <div class="section-header text-center">
                <span class="subtitle">FORM OUR BLOG POSTS</span>
                <h2 class="title">More Articles From Resource Library</h2>
            </div>
            <div class="section-wrapper">
                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 justify-content-center g-4">
                    <div class="col">
                        <div class="post-item">
                            <div class="post-inner">
                                <div class="post-thumb">
                                    <a href="blog-single.html"><img src="assets/images/blog/01.jpg" alt="blog thumb"></a>
                                </div>
                                <div class="post-content">
                                    <a href="blog-single.html"><h4>Scottish Creatives To Receive Funded Business.</h4></a>
                                    <div class="meta-post">
                                        <ul class="lab-ul">
                                            <li><i class="icofont-ui-user"></i>Begrass Tyson</li>
                                            <li><i class="icofont-calendar"></i>April 23,2021</li>
                                        </ul>
                                    </div>
                                    <p>Pluoresnts customize prancing apcente customer service anding ands asing in straelg Interacvely cordinate performe</p>
                                </div>
                                <div class="post-footer">
                                    <div class="pf-left">
                                        <a href="blog-single.html" class="lab-btn-text">Read more <i class="icofont-external-link"></i></a>
                                    </div>
                                    <div class="pf-right">
                                        <i class="icofont-comment"></i>
                                        <span class="comment-count">3</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="post-item">
                            <div class="post-inner">
                                <div class="post-thumb">
                                    <a href="blog-single.html"><img src="assets/images/blog/02.jpg" alt="blog thumb"></a>
                                </div>
                                <div class="post-content">
                                    <a href="blog-single.html"><h4>Scottish Creatives To Receive Funded Business.</h4></a>
                                    <div class="meta-post">
                                        <ul class="lab-ul">
                                            <li><i class="icofont-ui-user"></i>Begrass Tyson</li>
                                            <li><i class="icofont-calendar"></i>April 23,2021</li>
                                        </ul>
                                    </div>
                                    <p>Pluoresnts customize prancing apcente customer service anding ands asing in straelg Interacvely cordinate performe</p>
                                </div>
                                <div class="post-footer">
                                    <div class="pf-left">
                                        <a href="blog-single.html" class="lab-btn-text">Read more <i class="icofont-external-link"></i></a>
                                    </div>
                                    <div class="pf-right">
                                        <i class="icofont-comment"></i>
                                        <span class="comment-count">3</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="post-item">
                            <div class="post-inner">
                                <div class="post-thumb">
                                    <a href="blog-single.html"><img src="assets/images/blog/03.jpg" alt="blog thumb"></a>
                                </div>
                                <div class="post-content">
                                    <a href="blog-single.html"><h4>Scottish Creatives To Receive Funded Business.</h4></a>
                                    <div class="meta-post">
                                        <ul class="lab-ul">
                                            <li><i class="icofont-ui-user"></i>Begrass Tyson</li>
                                            <li><i class="icofont-calendar"></i>April 23,2021</li>
                                        </ul>
                                    </div>
                                    <p>Pluoresnts customize prancing apcente customer service anding ands asing in straelg Interacvely cordinate performe</p>
                                </div>
                                <div class="post-footer">
                                    <div class="pf-left">
                                        <a href="blog-single.html" class="lab-btn-text">Read more <i class="icofont-external-link"></i></a>
                                    </div>
                                    <div class="pf-right">
                                        <i class="icofont-comment"></i>
                                        <span class="comment-count">3</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog section ending here -->


    <!-- Achievement section start here -->
    <div class="achievement-section padding-tb">
        <div class="container">
            <div class="section-header text-center">
                <span class="subtitle">START TO SUCCESS</span>
                <h2 class="title">Achieve Your Goals With Edukon</h2>
            </div>
            <div class="section-wrapper">
                <div class="counter-part mb-4">
                    <div class="row g-4 row-cols-lg-4 row-cols-sm-2 row-cols-1 justify-content-center">
                        <div class="col">
                            <div class="count-item">
                                <div class="count-inner">
                                    <div class="count-content">
                                        <h2><span class="count" data-to="30" data-speed="1500"></span><span>+</span></h2>
                                        <p>Years of Language Education Experience</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="count-item">
                                <div class="count-inner">
                                    <div class="count-content">
                                        <h2><span class="count" data-to="3080" data-speed="1500"></span><span>+</span></h2>
                                        <p>Learners Enrolled in Edukon Courses</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="count-item">
                                <div class="count-inner">
                                    <div class="count-content">
                                        <h2><span class="count" data-to="330" data-speed="1500"></span><span>+</span></h2>
                                        <p>Qualified Teachers And Language Experts</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="count-item">
                                <div class="count-inner">
                                    <div class="count-content">
                                        <h2><span class="count" data-to="2300" data-speed="1500"></span><span>+</span></h2>
                                        <p>Innovative Foreign Language Courses</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="achieve-part">
                    <div class="row g-4 row-cols-1 row-cols-lg-2">
                        <div class="col">
                            <div class="achieve-item">
                                <div class="achieve-inner">
                                    <div class="achieve-thumb">
                                        <img src="assets/images/achive/01.png" alt="achieve thumb">
                                    </div>
                                    <div class="achieve-content">
                                        <h4>Start Teaching Today</h4>
                                        <p>Seamlessly engage technically sound coaborative reintermed goal oriented content rather than ethica</p>
                                        <a href="#" class="lab-btn"><span>Become A Instructor</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="achieve-item">
                                <div class="achieve-inner">
                                    <div class="achieve-thumb">
                                        <img src="assets/images/achive/02.png" alt="achieve thumb">
                                    </div>
                                    <div class="achieve-content">
                                        <h4>If You Join Our Course</h4>
                                        <p>Seamlessly engage technically sound coaborative reintermed goal oriented content rather than ethica</p>
                                        <a href="#" class="lab-btn"><span>Register For Free</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Achievement section ending here -->




@endsection
