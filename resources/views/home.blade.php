@extends("layouts.app")

@section("content")
<section class="banner-area bg-3 jarallax pb-100" data-jarallax='{"speed": 0.3}'>
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="banner-content">
                            <h1>A world standard, fully equipped college of nursing sciences.</h1>
                            <div class="courses-link">
                                <a href="#">
                                    Explore our programmes
                                    <i class="ri-arrow-right-line"></i>
                                </a>
                                <a href="#" class="study-online">
                                    Apply for admission
                                    <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="video-button">
                            <a href="https://web.facebook.com/gandujehalarci/videos/4408772222479233" class="popup-youtube video-btn">
                                <i class="flaticon-play-button"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <ul class="social-link">
        <li>
            <a href="https://www.facebook.com/gandujehalarci/" target="_blank">
                Facebook
            </a>
        </li>
        <li>
            <a href="https://www.instagram.com/dansharif_nursing_science_kano/" target="_blank">
                Instagram
            </a>
        </li>
    </ul>
</section>
<section class="about-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-img mr-15">
                    <img src="assets/images/about-img.jpg" alt="Image">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content ml-15">
                    <span>About DCNS</span>
                    <h4><em>"a trained nurse is a blessing to humanity"</em></h4>
                    <p style="color: #000; margin-bottom: 5px;">
                        Dansharif College Of Nursing Sciences Kano, is incepted from the lifelong passion 
                        and commitment to humanity of the Founder Alh Rabiu Dansharif, this is to respond 
                        to the demand of quality and affordable health workers specifically Nurses and Midwives 
                        in our community. At Dansharif College of Nursing Sciences, our education system inspires the next generation.
                        DCNS is:
                    </p>
                    <ul style="color: #000;">
                        <li>Approved by Nursing & Midwifery Council of Nigeria.</li>
                        <li>Affiliated to World Standard Universities.</li>
                        <li>Students Clinical Experience from Renowned Hospitals.</li>
                    </ul>
                    <a href="#" class="default-btn">
                        Learn more
                        <i class="ri-arrow-right-line"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="study-area pt-100 pb-70">
    <div class="container">
        <div class="section-title white-title">
            <h2>Study at DCNS</h2>
            <h4 style="color: #fff;">For enquiries, contact us on 082 444 343</h4>
        </div>
        <div class="row justify-content-center">
            <div class="study-slider owl-carousel owl-theme">
                <div class="single-study style-img">
                    <a href="#">
                        <img src="assets/images/study/study-1.jpg" alt="Image">
                    </a>
                    <div class="single-study-content text-center">
                        <h3>
                            <a href="#">ND/HND Nursing</a>
                        </h3>
                    </div>
                </div>
                <div class="single-study style-img">
                    <a href="#">
                        <img src="assets/images/study/study-2.jpg" alt="Image">
                    </a>
                    <div class="single-study-content text-center">
                        <h3>
                            <a href="#">Community Nursing</a>
                        </h3>
                    </div>
                </div>
                <div class="single-study style-img">
                    <a href="#">
                        <img src="assets/images/study/study-4.jpg" alt="Image">
                    </a>
                    <div class="single-study-content text-center">
                        <h3>
                            <a href="#">Basic Midwifery</a>
                        </h3>
                    </div>
                </div>
                <div class="single-study style-img">
                    <a href="#">
                        <img src="assets/images/study/study-5.jpg" alt="Image">
                    </a>
                    <div class="single-study-content text-center">
                        <h3>
                            <a href="#">Community Midwifery</a>
                        </h3>
                    </div>
                </div>
                {{-- <div class="single-study style-img">
                    <a href="#">
                        <img src="assets/images/study/study-2.jpg" alt="Image">
                    </a>
                    <div class="single-study-content text-center">
                        <h3>
                            <a href="#">Post Basic Nursing</a>
                        </h3>
                    </div>
                </div>
                <div class="single-study style-img">
                    <a href="#">
                        <img src="assets/images/study/study-3.jpg" alt="Image">
                    </a>
                    <div class="single-study-content text-center">
                        <h3>
                            <a href="#">Public Health Nursing</a>
                        </h3>
                    </div>
                </div>
                <div class="single-study style-img">
                    <a href="#">
                        <img src="assets/images/study/study-4.jpg" alt="Image">
                    </a>
                    <div class="single-study-content text-center">
                        <h3>
                            <a href="#">Basic Midwifery</a>
                        </h3>
                    </div>
                </div>
                <div class="single-study style-img">
                    <a href="#">
                        <img src="assets/images/study/study-5.jpg" alt="Image">
                    </a>
                    <div class="single-study-content text-center">
                        <h3>
                            <a href="#">Post Basic Midwifery</a>
                        </h3>
                    </div>
                </div>
                <div class="single-study style-img">
                    <a href="#">
                        <img src="assets/images/study/study-6.jpg" alt="Image">
                    </a>
                    <div class="single-study-content text-center">
                        <h3>
                            <a href="#">Community Midwifery</a>
                        </h3>
                    </div>
                </div>
                <div class="single-study style-img">
                    <a href="#">
                        <img src="assets/images/study/study-7.jpg" alt="Image">
                    </a>
                    <div class="single-study-content text-center">
                        <h3>
                            <a href="#">Continuing Education</a>
                        </h3>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</section>
<section class="our-campus-information-area pb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-7">
                <div class="campus-img">
                    <img src="assets/images/campus-img.jpg" alt="Image">
                </div>
            </div>
            <div class="col-xl-5">
                <div class="campus-content">
                    <span>Our Campus</span>
                    <h3 style="color: #fff;">At DCNS, we are proud to have different students across diffrent zones, tribes, backgrounds and religions.</h3>
                    <ul style="color: #fff;">
                        <li>State of the art IT Facility</li>
                        <li>Condusive Student Accomodation</li>
                        <li>Bus Transportation System</li>
                    </ul>
                    <a href="#" class="read-more">
                        Find out more
                        <span class="ri-arrow-right-line"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <section class="blog-area pt-100 pb-70">
<div class="container">
<div class="section-title">
<h2>News & Events</h2>
</div>
<div class="row justify-content-md-center">
<div class="col-lg-4 col-md-6">
<div class="single-blog">
<a href="blog-details.html" class="blog-img">
<img src="assets/images/blog/blog-1.jpg" alt="Image">
<span>Academics</span>
</a>
<div class="blog-content">
<ul>
<li>
<i class="ri-calendar-line"></i>
<span>26 March, 2021</span>
</li>
</ul>
<h3>
<a href="blog-details.html">
How I applying to university
</a>
</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam animi dicta ex labore. Ipsum nobis amet nisi voluptate corporis consectetur adipisicing elit alias</p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="single-blog">
<a href="blog-details.html" class="blog-img">
<img src="assets/images/blog/blog-2.jpg" alt="Image">
<span>Academics</span>
</a>
<div class="blog-content">
<ul>
<li>
<i class="ri-calendar-line"></i>
<span>28 March, 2021</span>
</li>
</ul>
<h3>
<a href="blog-details.html">
What and where choosing to study
</a>
</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam animi dicta ex labore. Ipsum nobis amet nisi voluptate corporis consectetur adipisicing elit alias</p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="single-blog">
<a href="blog-details.html" class="blog-img">
<img src="assets/images/blog/blog-3.jpg" alt="Image">
<span>Academics</span>
</a>
<div class="blog-content">
<ul>
<li>
<i class="ri-calendar-line"></i>
<span>29 March, 2021</span>
</li>
</ul>
<h3>
<a href="blog-details.html">
A day in the life of a student
</a>
</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam animi dicta ex labore. Ipsum nobis amet nisi voluptate corporis consectetur adipisicing elit alias</p>
</div>
</div>
</div>
</div>
</div>
</section> -->

@endsection