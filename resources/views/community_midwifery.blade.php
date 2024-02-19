@extends("layouts.app")


@section("styles")
<style>
    .page-title-area {
        padding-top: 50px;
        padding-bottom: 50px;
        background-image: url(/assets/images/page-title-bg/basic-midwifery.jpg);
    }

    .ptb-100 {
        padding-top: 50px;
        padding-bottom: 50px;
    }
</style>
@endsection

@section("content")
<div class="page-title-area bg-21">
    <div class="container">
        <div class="page-title-content">
            <h2>Community Midwifery</h2>
            <ul>
                <li>
                    <a href="/">
                        Home
                    </a>
                </li>
                <li class="active">Community Midwifery</li>
            </ul>
        </div>
    </div>
</div>
<section class="courses-details-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="main-default-content mr-15">
                    <img src="{{ asset('assets/images/basic-midwifery.jpg') }}" alt="Image">
                    <div class="gap-20"></div>
                    <h3>Overview</h3>
                    <p>
                        The maternal and child health challenge in the country is indeed enormous as shown by 
                        indicators such as maternal mortality rate of about 545/100,000 live births (NDHS 2008) 
                        and neonatal mortality rate of 40/1000 with majority of the deaths occurring at the rural 
                        community level (NDHS 2008). 
                    </p> 
                    <p> Community Midwifery is a 3 years program specifically designed for the training of midwives 
                        who are critical to the delivery of safe maternal and child health services at the community level. 
                        At the conclusion of this programme, midwives should be capable of functioning in all areas including Primary Health Care, make independent judgment, 
                        manage normal midwifery, provide appropriate care including family planning and refer individual with high risk pregnancies.
                    </p>
                    <div class="gap-20"></div>
                    <h3>Aim</h3>
                    <p>
                        The aim of this programme is to prepare competent, skilled, versatile and autonomous midwifery practitioners, 
                        who are capable of providing high level health care to individuals and expectant families in the homes, 
                        communities, health centres, hospitals and clinics in the rural and urban centres of the society.
                    </p>
                    <div class="gap-20"></div>
                    <h3>Requirements</h3>
                    <p>
                        Candidates for admission into Community Midwifery Programme must possess the senior secondary 
                        school certificate or its equivalent with credit in at least five (5) subjects i.e. Physics, 
                        Chemistry, Biology, English and Mathematics at not more than two (2) sittings.
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="courses-sidebar ml-15">
                    <div class="courses-single-sidebar mb-0">
                        <h3 class="text-center">Information & Fees</h3>
                        <ul>
                            <li>
                                Duration
                                <span>3 years</span>
                            </li>
                            <li>
                                Campus
                                <span>Yankaba</span>
                            </li>
                            <li>
                                Tuition
                                <span>₦414,000 / year</span>
                                <br>
                                (including accomodation)
                            </li>
                            {{-- <li>
                                Requirements
                                <span>WAEC or NECO or NBTE</span>
                            </li> --}}
                            {{-- <li>
                                Accomodation (optional)
                                <span>₦70,000 / year</span>
                            </li> --}}
                            <li>
                                Language
                                <span>English</span>
                            </li>
                            <li>
                                Admissions
                                <span>January & August</span>
                            </li>
                        </ul>
                        <div class="text-center">
                            <a href="http://dcns.schoolpal.ng/" target="_blank" class="default-btn" style="margin-top: 30px;">
                                CLICK TO APPLY NOW
                            </a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-widget categories ml-15" style="background-color: #fff; border: 1px solid #ccc; margin-top: 30px;">
                    <h3>Other Programmes</h3>
                    <ul>
                        <li>
                            <a href="{{ url('programmes/nursing') }}">ND/HND Nursing</a>
                        </li>
                        <li>
                            <a href="{{ url('programmes/basic-midwifery') }}">Community Midwifery</a>
                        </li>
                        <li>
                            <a href="{{ url('programmes/community-nursing') }}">Community Nursing</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection