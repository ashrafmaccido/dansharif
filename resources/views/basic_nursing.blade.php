@extends("layouts.app")


@section("styles")
<style>
    .page-title-area {
        padding-top: 50px;
        padding-bottom: 50px;
        background-image: url(/assets/images/page-title-bg/basic-nursing.jpg);
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
            <h2>Basic Nursing</h2>
            <ul>
                <li>
                    <a href="/">
                        Home
                    </a>
                </li>
                <li class="active">Basic Nursing</li>
            </ul>
        </div>
    </div>
</div>
<section class="courses-details-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="main-default-content mr-15">
                    <img src="{{ asset('assets/images/basic-nursing.jpg') }}" alt="Image">
                    <div class="gap-20"></div>
                    <h3>Overview</h3>
                    <p>
                        The contemporary nurse constantly faces series of technological,
                        management, administrative, political and economic changes
                        involving new ideas, new values and new problems that may need on
                        the spot decision and solution. It is therefore, obvious that
                        contemporary nurse need new orientations derived from the study of
                        the past to help them cope successfully with the developing changes
                        in the health care industry today.
                    </p>
                    <p>
                        Basic Nursing is a 3 years program specifically designed to instill the appropriate knowledge, skills and attitude to
                        respond and adapt to current and future health priorities and needs. At the conclusion of this programme, nurses
                        should be capable to face these current and rapidly changing challenges within the health care industry.
                    </p>
                    <div class="gap-20"></div>
                    <h3>Aim</h3>
                    <p>
                    The aim of this programme is to prepare competent polyvalent 
                        nurse practitioners who will used solving skills in providing safe, 
                        acceptable, effective and affordable health services to meet the health 
                        needs of individuals, families and the community at all level of care.
                    </p>
                    <div class="gap-20"></div>
                    <h3>Requirements</h3>
                    <p>
                        Candidate for admission into Basic Nursing Programme must possess the senior secondary certificate or its equivalent with five 
                        credits in English Language, Mathematics, Physics, Chemistry and Biology at not more 2 sitting 
                        (NECO-NECO or WAEC-WAEC).  
                    </p>
                    <!-- <ul>
                        <li>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus</li>
                        <li>Cras ultricies ligula sed magna dictum porta. </li>
                        <li>Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.</li>
                        <li>Curabitur aliquet quam id dui posuere blandit. </li>
                        <li>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. </li>
                    </ul> -->
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
                                <span>₦380,000 / year</span>
                            </li>
                            <li>
                                Requirements
                                <span>WAEC or NECO or NBTE</span>
                            </li>
                            <li>
                                Accomodation (optional)
                                <span>₦50,000 / year</span>
                            </li>
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
                    <h3>Programmes</h3>
                    <ul>
                        <li>
                            <a href="#">Post Basic Nursing</a>
                        </li>
                        <li>
                            <a href="#">Public Health Nursing</a>
                        </li>
                        <li>
                            <a href="{{ url('programmes/basic-midwifery') }}">Basic Midwifery</a>
                        </li>
                        <li>
                            <a href="#">Post Basic Midwifery</a>
                        </li>
                        <li>
                            <a href="#">Community Midwifery</a>
                        </li>
                        <li>
                            <a href="#">Continuing Education</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection