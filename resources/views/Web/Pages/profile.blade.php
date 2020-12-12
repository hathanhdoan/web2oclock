@extends('Web.Layout.app')
@section('content')
    <div>
        <div class="row" style="padding: 0px 20px">
            <div id="menu-left" class="col-md-4 col-lg-3">
                <section id="menu-left-panel" is-hidden="yes">

                    <!-- Card -->
                    <div class="card booking-card card-menu-left" style="width: 18rem;">
                        <!-- Card content -->
                        <div class="card-body">

                            <!-- Title -->
                            <div class="row">
                                <div class="ml-10 mr-10">
                                    <img class="avatar" src="images/Screenshot_50.png">
                                </div>
                                <div style="padding: 8px 0px">
                                    <h5 class="card-title font-weight-bold"><a>Khám phá</a></h5>
                                </div>
                            </div>
                            <!-- Data -->
                            <ul class="menu-sidebar-custom nav nav-tabs">
                                <li><a href="#history" data-toggle="tab" class="mb-2">Nhật ký hoạt động<i
                                            class="fas fa-angle-right arrow-menu-left"></i></a></li>
                                <li><a href="#saved" data-toggle="tab" class="mb-2">Nhà hàng đã lưu<i
                                            class="fas fa-angle-right arrow-menu-left"></i></a></li>
                                <li><a href="#owner-res" data-toggle="tab" class="mb-2">Địa điểm của bạn<i
                                            class="fas fa-angle-right arrow-menu-left"></i></a></li>
                                <li><a class="mb-2">55 Đặng Thùy Trâm<i class="fas fa-angle-right arrow-menu-left"></i></a>
                                </li>
                            </ul>

                            <!-- Text -->
                        </div>

                    </div>
                    <!-- Card -->

                </section>
            </div>
            <div class="col-md-8 col-lg-9 tab-content">
                <div id="history" class="tab-pane fade in active">
                    <div class="history-card">
                        <div class="row" style="padding: 5px">
                            <img class="avatar" src="images/Screenshot_50.png">
                            <div style="margin-left: 10px">
                                <p style="margin-bottom: 0px">Ban đã tạo nhà hàng <b>TEXAS CHICKEN</b> vào lúc <b>12/01/2021
                                        10:00:51</b></p>
                                <a href="#">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <div class="history-card">
                        <div class="row" style="padding: 5px">
                            <img class="avatar" src="images/Screenshot_50.png">
                            <div style="margin-left: 10px">
                                <p style="margin-bottom: 0px">Ban đã lưu <b>TEXAS CHICKEN</b> vào lúc <b>12/01/2021
                                        10:00:51</b></p>
                                <a href="#">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <div class="history-card">
                        <div class="row" style="padding: 5px">
                            <img class="avatar" src="images/Screenshot_50.png">
                            <div style="margin-left: 10px">
                                <p style="margin-bottom: 0px">Ban đã bình luận nhà hàng <b>TEXAS CHICKEN</b> vào lúc <b>12/01/2021
                                        10:00:51</b></p>
                                <a href="#">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="saved" style="padding-left: 10px" class="tab-pane fade">
                    <div class="row">
                        <div class="saved-res">
                            <section>
                                <div class="card booking-card" style="max-width: 22rem;">
                                    <div class="view overlay"><img
                                            src="https://mdbootstrap.com/img/Photos/Horizontal/Food/8-col/img (5).jpg"
                                            alt="Card image cap" class="card-img-top"> <a href="#!">
                                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                        </a></div>
                                    <div class="card-body"><h4 class="card-title font-weight-bold"><a href="#">Texas Chicken</a>
                                        </h4>
                                        <ul class="list-unstyled list-inline rating mb-0">
                                            <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i>
                                            </li>
                                            <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i>
                                            </li>
                                            <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i>
                                            </li>
                                            <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i>
                                            </li>
                                            <li class="list-inline-item"><i class="fas fa-star-half-alt amber-text"></i>
                                            </li>
                                            <li class="list-inline-item"><p class="text-muted">4.5 (413)</p></li>
                                        </ul>
                                        <a class="mb-2"><i class="fas fa-map-marker-alt"></i>&nbsp; 55 Đặng Thùy Trâm,
                                            quận....</a>
                                        <p class="card-text"></p>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="saved-res">
                            <section>
                                <div class="card booking-card" style="max-width: 22rem;">
                                    <div class="view overlay"><img
                                            src="https://mdbootstrap.com/img/Photos/Horizontal/Food/8-col/img (5).jpg"
                                            alt="Card image cap" class="card-img-top"> <a href="#!">
                                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                        </a></div>
                                    <div class="card-body"><h4 class="card-title font-weight-bold"><a>Texas Chicken</a>
                                        </h4>
                                        <ul class="list-unstyled list-inline rating mb-0">
                                            <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i>
                                            </li>
                                            <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i>
                                            </li>
                                            <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i>
                                            </li>
                                            <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i>
                                            </li>
                                            <li class="list-inline-item"><i class="fas fa-star-half-alt amber-text"></i>
                                            </li>
                                            <li class="list-inline-item"><p class="text-muted">4.5 (413)</p></li>
                                        </ul>
                                        <a class="mb-2"><i class="fas fa-map-marker-alt"></i>&nbsp; 55 Đặng Thùy Trâm,
                                            quận....</a>
                                        <p class="card-text"></p>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="saved-res">
                            <section>
                                <div class="card booking-card" style="max-width: 22rem;">
                                    <div class="view overlay"><img
                                            src="https://mdbootstrap.com/img/Photos/Horizontal/Food/8-col/img (5).jpg"
                                            alt="Card image cap" class="card-img-top"> <a href="#!">
                                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                        </a></div>
                                    <div class="card-body"><h4 class="card-title font-weight-bold"><a>Texas Chicken</a>
                                        </h4>
                                        <ul class="list-unstyled list-inline rating mb-0">
                                            <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i>
                                            </li>
                                            <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i>
                                            </li>
                                            <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i>
                                            </li>
                                            <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i>
                                            </li>
                                            <li class="list-inline-item"><i class="fas fa-star-half-alt amber-text"></i>
                                            </li>
                                            <li class="list-inline-item"><p class="text-muted">4.5 (413)</p></li>
                                        </ul>
                                        <a class="mb-2"><i class="fas fa-map-marker-alt"></i>&nbsp; 55 Đặng Thùy Trâm,
                                            quận....</a>
                                        <p class="card-text"></p>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="saved-res">
                            <section>
                                <div class="card booking-card" style="max-width: 22rem;">
                                    <div class="view overlay"><img
                                            src="https://mdbootstrap.com/img/Photos/Horizontal/Food/8-col/img (5).jpg"
                                            alt="Card image cap" class="card-img-top"> <a href="#!">
                                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                        </a></div>
                                    <div class="card-body"><h4 class="card-title font-weight-bold"><a>Texas Chicken</a>
                                        </h4>
                                        <ul class="list-unstyled list-inline rating mb-0">
                                            <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i>
                                            </li>
                                            <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i>
                                            </li>
                                            <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i>
                                            </li>
                                            <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i>
                                            </li>
                                            <li class="list-inline-item"><i class="fas fa-star-half-alt amber-text"></i>
                                            </li>
                                            <li class="list-inline-item"><p class="text-muted">4.5 (413)</p></li>
                                        </ul>
                                        <a class="mb-2"><i class="fas fa-map-marker-alt"></i>&nbsp; 55 Đặng Thùy Trâm,
                                            quận....</a>
                                        <p class="card-text"></p>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
                <div id="owner-res" style="padding-left: 10px" class="tab-pane fade">
                    <div class="row">
                        <div class="saved-res">
                            <section>
                                <div class="card booking-card" style="max-width: 22rem;">
                                    <div class="view overlay"><img
                                            src="https://mdbootstrap.com/img/Photos/Horizontal/Food/8-col/img (5).jpg"
                                            alt="Card image cap" class="card-img-top"> <a href="#!">
                                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                        </a></div>
                                    <div class="card-body"><h4 class="card-title font-weight-bold"><a href="#">Texas Chicken</a>
                                        </h4>
                                        <ul class="list-unstyled list-inline rating mb-0">
                                            <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i>
                                            </li>
                                            <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i>
                                            </li>
                                            <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i>
                                            </li>
                                            <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i>
                                            </li>
                                            <li class="list-inline-item"><i class="fas fa-star-half-alt amber-text"></i>
                                            </li>
                                            <li class="list-inline-item"><p class="text-muted">4.5 (413)</p></li>
                                        </ul>
                                        <a class="mb-2"><i class="fas fa-map-marker-alt"></i>&nbsp; 55 Đặng Thùy Trâm,
                                            quận....</a>
                                        <p class="card-text"></p>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="saved-res">
                            <section>
                                <div class="card booking-card" style="max-width: 22rem;">
                                    <div class="view overlay"><img
                                            src="https://mdbootstrap.com/img/Photos/Horizontal/Food/8-col/img (5).jpg"
                                            alt="Card image cap" class="card-img-top"> <a href="#!">
                                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                        </a></div>
                                    <div class="card-body"><h4 class="card-title font-weight-bold"><a>Texas Chicken</a>
                                        </h4>
                                        <ul class="list-unstyled list-inline rating mb-0">
                                            <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i>
                                            </li>
                                            <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i>
                                            </li>
                                            <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i>
                                            </li>
                                            <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i>
                                            </li>
                                            <li class="list-inline-item"><i class="fas fa-star-half-alt amber-text"></i>
                                            </li>
                                            <li class="list-inline-item"><p class="text-muted">4.5 (413)</p></li>
                                        </ul>
                                        <a class="mb-2"><i class="fas fa-map-marker-alt"></i>&nbsp; 55 Đặng Thùy Trâm,
                                            quận....</a>
                                        <p class="card-text"></p>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="saved-res">
                            <section>
                                <div class="card booking-card" style="max-width: 22rem;">
                                    <div class="view overlay"><img
                                            src="https://mdbootstrap.com/img/Photos/Horizontal/Food/8-col/img (5).jpg"
                                            alt="Card image cap" class="card-img-top"> <a href="#!">
                                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                        </a></div>
                                    <div class="card-body"><h4 class="card-title font-weight-bold"><a>Texas Chicken</a>
                                        </h4>
                                        <ul class="list-unstyled list-inline rating mb-0">
                                            <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i>
                                            </li>
                                            <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i>
                                            </li>
                                            <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i>
                                            </li>
                                            <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i>
                                            </li>
                                            <li class="list-inline-item"><i class="fas fa-star-half-alt amber-text"></i>
                                            </li>
                                            <li class="list-inline-item"><p class="text-muted">4.5 (413)</p></li>
                                        </ul>
                                        <a class="mb-2"><i class="fas fa-map-marker-alt"></i>&nbsp; 55 Đặng Thùy Trâm,
                                            quận....</a>
                                        <p class="card-text"></p>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="saved-res">
                            <p class="wait-for-accept"><i class="fas fa-clock"></i>Đang chờ duyệt</p>
                            <section style="opacity: 0.5">
                                <div class="card booking-card" style="max-width: 22rem;">
                                    <div class="view overlay"><img
                                            src="https://mdbootstrap.com/img/Photos/Horizontal/Food/8-col/img (5).jpg"
                                            alt="Card image cap" class="card-img-top"> <a href="#!">
                                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                        </a></div>
                                    <div class="card-body"><h4 class="card-title font-weight-bold"><a>Texas Chicken</a>
                                        </h4>
                                        <ul class="list-unstyled list-inline rating mb-0">
                                            <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i>
                                            </li>
                                            <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i>
                                            </li>
                                            <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i>
                                            </li>
                                            <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i>
                                            </li>
                                            <li class="list-inline-item"><i class="fas fa-star-half-alt amber-text"></i>
                                            </li>
                                            <li class="list-inline-item"><p class="text-muted">4.5 (413)</p></li>
                                        </ul>
                                        <a class="mb-2"><i class="fas fa-map-marker-alt"></i>&nbsp; 55 Đặng Thùy Trâm,
                                            quận....</a>
                                        <p class="card-text"></p>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
