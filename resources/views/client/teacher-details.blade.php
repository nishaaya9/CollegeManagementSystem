@extends('client.parent')
@section('content')
<!-- crumbs area start -->
<div class="crumbs-area">
    <div class="container">
        <div class="crumb-content">
            <h4 class="crumb-title"><span>Our</span> teachers</h4>
        </div>
    </div>
</div>
<!-- crumbs area end -->
<!-- teacher details area start -->
<div class="teacher-details pt--120 pb--60">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="tch-left-thumb">
                    <img src="assets/images/teacher/tch-left-thumb.jpg" alt="image">
                </div>
            </div>
            <div class="col-lg-8">
                <div class="teacher-contenttchd-content pl-5 pb-5">
                    <h3>Monika</h3>
                    <span>CSE Deperment Head</span>
                    <ul class="list-inline mt-4 mb-4">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-deviantart"></i></a></li>
                        <li><a href="#"><i class="fa fa-github"></i></a></li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo <span>inventore</span> veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet voluptatem.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- teacher details area end -->
<!-- related course area start -->
<div class="related-course pb--40">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="section-title">
                    <h3>Monikas <span class="primary-color">other </span> courses</h3>
                </div>
            </div>
        </div>
        <div class="course-list">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="w-cs-single">
                        <img src="assets/images/course/cs-small-thumb1.jpg" alt="image">
                        <div class="fix">
                            <p class="mb-0"><a href="#">Ui / Ux Design</a></p>
                            <span><i class="fa fa-clock-o"></i> AUGUST 6, 2017</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="w-cs-single">
                        <img src="assets/images/course/cs-small-thumb2.jpg" alt="image">
                        <div class="fix">
                            <p class="mb-0"><a href="#">Learn Java</a></p>
                            <span><i class="fa fa-clock-o"></i> AUGUST 6, 2017</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="w-cs-single">
                        <img src="assets/images/course/cs-small-thumb3.jpg" alt="image">
                        <div class="fix">
                            <p class="mb-0"><a href="#">C++</a></p>
                            <span><i class="fa fa-clock-o"></i> AUGUST 6, 2017</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="w-cs-single">
                        <img src="assets/images/course/cs-small-thumb4.jpg" alt="image">
                        <div class="fix">
                            <p class="mb-0"><a href="#">Seo</a></p>
                            <span><i class="fa fa-clock-o"></i> AUGUST 6, 2017</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- related course area end -->

<!-- cta area start -->
<div class="cta-area secondary-bg has-color ptb--50">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-9">
                <div class="cta-content">
                    <p class="mb-2">Click to Join the Advance Workshop</p>
                    <h2>Training in advance networking</h2>
                </div>
            </div>
            <div class="col-md-3">
                <div class="cta-btn">
                    <a class="btn btn-light btn-round" href="#">Join Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- cta area end -->
@stop