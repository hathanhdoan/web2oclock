@extends('Web.Layout.app')
@section('content')
    <!-- Header Area End Here -->
    <!-- Begin Slider With Banner Area -->
    <button onclick="getLocation()">Try It</button>
    <div id="index-obj" class="slider-with-banner" api-get-nearest="{{route('api.res.nearest')}}">
        <div class="container">
            <div class="row">
                <!-- Begin Slider Area -->
                <div class="col-lg-12 col-md-12">
                    <div class="slider-area">
                        <div class="slider-active owl-carousel">
                            <!-- Begin Single Slide Area -->
                            <div class="single-slide align-center-left  animation-style-01 bg-1">
                                <div class="slider-progress"></div>
                                <div class="slider-content">
                                    <h2>Khuyến mãi 50% ngay hôm nay</h2>
                                    <div class="default-btn slide-btn">
                                        <a class="links" href="shop-left-sidebar.html">XEM NGAY</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Slide Area End Here -->
                            <!-- Begin Single Slide Area -->
                            <div class="single-slide align-center-left animation-style-02 bg-2">
                                <div class="slider-progress"></div>
                                <div class="slider-content">
                                    <h2>Ưu đãi cuối tuần</h2>
                                    <div class="default-btn slide-btn">
                                        <a class="links" href="shop-left-sidebar.html">XEM NGAY</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Slide Area End Here -->
                            <!-- Begin Single Slide Area -->
                            <div class="single-slide align-center-left animation-style-01 bg-3">
                                <div class="slider-progress"></div>
                                <div class="slider-content">
                                    <h2>Thực đơn đặc biệt ngày cuối tuần</h2>
                                    <div class="default-btn slide-btn">
                                        <a class="links" href="shop-left-sidebar.html">XEM NGAY</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Slide Area End Here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider With Banner Area End Here -->
    <!-- Begin suggested Product Area -->
    <div class="product-area pt-60 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="li-product-tab">
                        <ul class="nav li-product-menu">
                            <li><a class="active" data-toggle="tab"
                                   href="#li-new-product"><span>Gợi ý dành cho bạn</span></a></li>
                            {{--                            <li><a data-toggle="tab" href="#li-bestseller-product"><span>Bestseller</span></a></li>--}}
                            {{--                            <li><a data-toggle="tab" href="#li-featured-product"><span>Featured Products</span></a></li>--}}
                        </ul>
                    </div>
                    <!-- Begin Li's Tab Menu Content Area -->
                </div>
            </div>
            <div class="tab-content">
                <div id="li-new-product" class="tab-pane active show" role="tabpanel">
                    <div class="row">
                        <div class="recommend-product-active product-active owl-carousel">
                            <section>

                                <!-- Card -->
                                <div class="card booking-card" style="max-width: 22rem;">

                                    <!-- Card image -->
                                    <div class="view overlay">
                                        <img class="card-img-top"
                                             src="https://mdbootstrap.com/img/Photos/Horizontal/Food/8-col/img (5).jpg"
                                             alt="Card image cap">
                                        <a href="#!">
                                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                        </a>
                                    </div>

                                    <!-- Card content -->
                                    <div class="card-body">

                                        <!-- Title -->
                                        <h4 class="card-title font-weight-bold"><a>Texas Chicken</a></h4>
                                        <!-- Data -->
                                        <ul class="list-unstyled list-inline rating mb-0">
                                            <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"> </i>
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
                                        <p class="card-text">Đoàn: Đồ ăn rất ngon, nên thử</p>
                                        <!-- Text -->
                                        <p class="card-text"></p>
                                        <hr class="my-1">
                                        <ul class="add-actions-link">
                                            <li><a data-toggle="tooltip" data-placement="top" title="Lưu"
                                                   class="links-details" href="wishlist.html">
                                                    <i class="fa fa-bookmark"></i>
                                                </a>
                                            </li>
                                            <li><a data-toggle="tooltip" data-placement="top" title="Thích"
                                                   class="links-details" href="wishlist.html">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                            </li>
                                            <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                   data-placement="top" title="Xem nhanh"
                                                   class="links-details" href="wishlist.html">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                                <!-- Card -->

                            </section>
                            <section>

                                <!-- Card -->
                                <div class="card booking-card" style="max-width: 22rem;">

                                    <!-- Card image -->
                                    <div class="view overlay">
                                        <img class="card-img-top"
                                             src="https://mdbootstrap.com/img/Photos/Horizontal/Food/8-col/img (5).jpg"
                                             alt="Card image cap">
                                        <a href="#!">
                                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                        </a>
                                    </div>

                                    <!-- Card content -->
                                    <div class="card-body">

                                        <!-- Title -->
                                        <h4 class="card-title font-weight-bold"><a>Texas Chicken</a></h4>
                                        <!-- Data -->
                                        <ul class="list-unstyled list-inline rating mb-0">
                                            <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"> </i>
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
                                        <p class="card-text">Đoàn: Đồ ăn rất ngon, nên thử</p>
                                        <!-- Text -->
                                        <p class="card-text"></p>
                                        <hr class="my-1">
                                        <ul class="add-actions-link">
                                            <li><a data-toggle="tooltip" data-placement="top" title="Lưu"
                                                   class="links-details" href="wishlist.html">
                                                    <i class="fa fa-bookmark"></i>
                                                </a>
                                            </li>
                                            <li><a data-toggle="tooltip" data-placement="top" title="Thích"
                                                   class="links-details" href="wishlist.html">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                            </li>
                                            <li><a data-toggle="tooltip" data-placement="top" title="Xem nhanh"
                                                   class="links-details" href="wishlist.html">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                                <!-- Card -->

                            </section>
                            <section>

                                <!-- Card -->
                                <div class="card booking-card" style="max-width: 22rem;">

                                    <!-- Card image -->
                                    <div class="view overlay">
                                        <img class="card-img-top"
                                             src="https://mdbootstrap.com/img/Photos/Horizontal/Food/8-col/img (5).jpg"
                                             alt="Card image cap">
                                        <a href="#!">
                                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                        </a>
                                    </div>

                                    <!-- Card content -->
                                    <div class="card-body">

                                        <!-- Title -->
                                        <h4 class="card-title font-weight-bold"><a>Texas Chicken</a></h4>
                                        <!-- Data -->
                                        <ul class="list-unstyled list-inline rating mb-0">
                                            <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"> </i>
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
                                        <p class="card-text">Đoàn: Đồ ăn rất ngon, nên thử</p>
                                        <!-- Text -->
                                        <p class="card-text"></p>
                                        <hr class="my-1">
                                        <ul class="add-actions-link">
                                            <li><a data-toggle="tooltip" data-placement="top" title="Lưu"
                                                   class="links-details" href="wishlist.html">
                                                    <i class="fa fa-bookmark"></i>
                                                </a>
                                            </li>
                                            <li><a data-toggle="tooltip" data-placement="top" title="Thích"
                                                   class="links-details" href="wishlist.html">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                            </li>
                                            <li><a data-toggle="tooltip" data-placement="top" title="Xem nhanh"
                                                   class="links-details" href="wishlist.html">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                                <!-- Card -->

                            </section>
                            <section>

                                <!-- Card -->
                                <div class="card booking-card" style="max-width: 22rem;">

                                    <!-- Card image -->
                                    <div class="view overlay">
                                        <img class="card-img-top"
                                             src="https://mdbootstrap.com/img/Photos/Horizontal/Food/8-col/img (5).jpg"
                                             alt="Card image cap">
                                        <a href="#!">
                                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                        </a>
                                    </div>

                                    <!-- Card content -->
                                    <div class="card-body">

                                        <!-- Title -->
                                        <h4 class="card-title font-weight-bold"><a>Texas Chicken</a></h4>
                                        <!-- Data -->
                                        <ul class="list-unstyled list-inline rating mb-0">
                                            <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"> </i>
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
                                        <p class="card-text">Đoàn: Đồ ăn rất ngon, nên thử</p>
                                        <!-- Text -->
                                        <p class="card-text"></p>
                                        <hr class="my-1">
                                        <ul class="add-actions-link">
                                            <li><a data-toggle="tooltip" data-placement="top" title="Lưu"
                                                   class="links-details" href="wishlist.html">
                                                    <i class="fa fa-bookmark"></i>
                                                </a>
                                            </li>
                                            <li><a data-toggle="tooltip" data-placement="top" title="Thích"
                                                   class="links-details" href="wishlist.html">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                            </li>
                                            <li><a data-toggle="tooltip" data-placement="top" title="Xem nhanh"
                                                   class="links-details" href="wishlist.html">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                                <!-- Card -->

                            </section>
                            <section>

                                <!-- Card -->
                                <div class="card booking-card" style="max-width: 22rem;">

                                    <!-- Card image -->
                                    <div class="view overlay">
                                        <img class="card-img-top"
                                             src="https://mdbootstrap.com/img/Photos/Horizontal/Food/8-col/img (5).jpg"
                                             alt="Card image cap">
                                        <a href="#!">
                                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                        </a>
                                    </div>

                                    <!-- Card content -->
                                    <div class="card-body">

                                        <!-- Title -->
                                        <h4 class="card-title font-weight-bold"><a>Texas Chicken</a></h4>
                                        <!-- Data -->
                                        <ul class="list-unstyled list-inline rating mb-0">
                                            <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"> </i>
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
                                        <p class="card-text">Đoàn: Đồ ăn rất ngon, nên thử</p>
                                        <!-- Text -->
                                        <p class="card-text"></p>
                                        <hr class="my-1">
                                        <ul class="add-actions-link">
                                            <li><a data-toggle="tooltip" data-placement="top" title="Lưu"
                                                   class="links-details" href="wishlist.html">
                                                    <i class="fa fa-bookmark"></i>
                                                </a>
                                            </li>
                                            <li><a data-toggle="tooltip" data-placement="top" title="Thích"
                                                   class="links-details" href="wishlist.html">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                            </li>
                                            <li><a data-toggle="tooltip" data-placement="top" title="Xem nhanh"
                                                   class="links-details" href="wishlist.html">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                                <!-- Card -->

                            </section>
                            <section>

                                <!-- Card -->
                                <div class="card booking-card" style="max-width: 22rem;">

                                    <!-- Card image -->
                                    <div class="view overlay">
                                        <img class="card-img-top"
                                             src="https://mdbootstrap.com/img/Photos/Horizontal/Food/8-col/img (5).jpg"
                                             alt="Card image cap">
                                        <a href="#!">
                                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                        </a>
                                    </div>

                                    <!-- Card content -->
                                    <div class="card-body">

                                        <!-- Title -->
                                        <h4 class="card-title font-weight-bold"><a>Texas Chicken</a></h4>
                                        <!-- Data -->
                                        <ul class="list-unstyled list-inline rating mb-0">
                                            <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"> </i>
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
                                        <p class="card-text">Đoàn: Đồ ăn rất ngon, nên thử</p>
                                        <!-- Text -->
                                        <p class="card-text"></p>
                                        <hr class="my-1">
                                        <ul class="add-actions-link">
                                            <li><a data-toggle="tooltip" data-placement="top" title="Lưu"
                                                   class="links-details" href="wishlist.html">
                                                    <i class="fa fa-bookmark"></i>
                                                </a>
                                            </li>
                                            <li><a data-toggle="tooltip" data-placement="top" title="Thích"
                                                   class="links-details" href="wishlist.html">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                            </li>
                                            <li><a data-toggle="tooltip" data-placement="top" title="Xem nhanh"
                                                   class="links-details" href="wishlist.html">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                                <!-- Card -->

                            </section>
                        </div>
                    </div>
                </div>
                <div id="li-bestseller-product" class="tab-pane" role="tabpanel">
                    <div class="row">
                        <div class="product-active owl-carousel">
                            <div class="col-lg-12">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="single-product">
                                            <img src="images/product/large-size/12.jpg" alt="Li's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                    </div>
                                    <div class="product_desc">
                                        <div class="product_desc_info">
                                            <div class="product-review">
                                                <h5 class="manufacturer">
                                                    <a href="shop-left-sidebar.html">Graphic Corner</a>
                                                </h5>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h4><a class="product_name" href="single-product">Accusantium dolorem1</a>
                                            </h4>
                                            <div class="price-box">
                                                <span class="new-price">$46.80</span>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul class="add-actions-link">
                                                <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                <li><a class="links-details" href="wishlist.html"><i
                                                            class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" title="quick view" class="quick-view-btn"
                                                       data-toggle="modal" data-target="#exampleModalCenter"><i
                                                            class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="single-product">
                                            <img src="images/product/large-size/11.jpg" alt="Li's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                    </div>
                                    <div class="product_desc">
                                        <div class="product_desc_info">
                                            <div class="product-review">
                                                <h5 class="manufacturer">
                                                    <a href="shop-left-sidebar.html">Studio Design</a>
                                                </h5>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h4><a class="product_name" href="single-product">Mug Today is a good
                                                    day</a></h4>
                                            <div class="price-box">
                                                <span class="new-price new-price-2">$71.80</span>
                                                <span class="old-price">$77.22</span>
                                                <span class="discount-percentage">-7%</span>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul class="add-actions-link">
                                                <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                <li><a class="links-details" href="wishlist.html"><i
                                                            class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" title="quick view" class="quick-view-btn"
                                                       data-toggle="modal" data-target="#exampleModalCenter"><i
                                                            class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="single-product">
                                            <img src="images/product/large-size/10.jpg" alt="Li's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                    </div>
                                    <div class="product_desc">
                                        <div class="product_desc_info">
                                            <div class="product-review">
                                                <h5 class="manufacturer">
                                                    <a href="shop-left-sidebar.html">Graphic Corner</a>
                                                </h5>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h4><a class="product_name" href="single-product">Accusantium dolorem1</a>
                                            </h4>
                                            <div class="price-box">
                                                <span class="new-price">$46.80</span>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul class="add-actions-link">
                                                <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                <li><a class="links-details" href="wishlist.html"><i
                                                            class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" title="quick view" class="quick-view-btn"
                                                       data-toggle="modal" data-target="#exampleModalCenter"><i
                                                            class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="single-product">
                                            <img src="images/product/large-size/9.jpg" alt="Li's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                    </div>
                                    <div class="product_desc">
                                        <div class="product_desc_info">
                                            <div class="product-review">
                                                <h5 class="manufacturer">
                                                    <a href="shop-left-sidebar.html">Studio Design</a>
                                                </h5>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h4><a class="product_name" href="single-product">Mug Today is a good
                                                    day</a></h4>
                                            <div class="price-box">
                                                <span class="new-price new-price-2">$71.80</span>
                                                <span class="old-price">$77.22</span>
                                                <span class="discount-percentage">-7%</span>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul class="add-actions-link">
                                                <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                <li><a class="links-details" href="wishlist.html"><i
                                                            class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" title="quick view" class="quick-view-btn"
                                                       data-toggle="modal" data-target="#exampleModalCenter"><i
                                                            class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="single-product">
                                            <img src="images/product/large-size/8.jpg" alt="Li's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                    </div>
                                    <div class="product_desc">
                                        <div class="product_desc_info">
                                            <div class="product-review">
                                                <h5 class="manufacturer">
                                                    <a href="shop-left-sidebar.html">Graphic Corner</a>
                                                </h5>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h4><a class="product_name" href="single-product">Accusantium dolorem1</a>
                                            </h4>
                                            <div class="price-box">
                                                <span class="new-price">$46.80</span>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul class="add-actions-link">
                                                <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                <li><a class="links-details" href="wishlist.html"><i
                                                            class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" title="quick view" class="quick-view-btn"
                                                       data-toggle="modal" data-target="#exampleModalCenter"><i
                                                            class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="single-product">
                                            <img src="images/product/large-size/7.jpg" alt="Li's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                    </div>
                                    <div class="product_desc">
                                        <div class="product_desc_info">
                                            <div class="product-review">
                                                <h5 class="manufacturer">
                                                    <a href="shop-left-sidebar.html">Studio Design</a>
                                                </h5>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h4><a class="product_name" href="single-product">Mug Today is a good
                                                    day</a></h4>
                                            <div class="price-box">
                                                <span class="new-price new-price-2">$71.80</span>
                                                <span class="old-price">$77.22</span>
                                                <span class="discount-percentage">-7%</span>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul class="add-actions-link">
                                                <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                <li><a class="links-details" href="wishlist.html"><i
                                                            class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" title="quick view" class="quick-view-btn"
                                                       data-toggle="modal" data-target="#exampleModalCenter"><i
                                                            class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                        </div>
                    </div>
                </div>
                <div id="li-featured-product" class="tab-pane" role="tabpanel">
                    <div class="row">
                        <div class="product-active owl-carousel">
                            <div class="col-lg-12">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="single-product">
                                            <img src="images/product/large-size/3.jpg" alt="Li's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                    </div>
                                    <div class="product_desc">
                                        <div class="product_desc_info">
                                            <div class="product-review">
                                                <h5 class="manufacturer">
                                                    <a href="shop-left-sidebar.html">Graphic Corner</a>
                                                </h5>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h4><a class="product_name" href="single-product">Accusantium dolorem1</a>
                                            </h4>
                                            <div class="price-box">
                                                <span class="new-price">$46.80</span>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul class="add-actions-link">
                                                <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                <li><a class="links-details" href="wishlist.html"><i
                                                            class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" title="quick view" class="quick-view-btn"
                                                       data-toggle="modal" data-target="#exampleModalCenter"><i
                                                            class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="single-product">
                                            <img src="images/product/large-size/5.jpg" alt="Li's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                    </div>
                                    <div class="product_desc">
                                        <div class="product_desc_info">
                                            <div class="product-review">
                                                <h5 class="manufacturer">
                                                    <a href="shop-left-sidebar.html">Studio Design</a>
                                                </h5>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h4><a class="product_name" href="single-product">Mug Today is a good
                                                    day</a></h4>
                                            <div class="price-box">
                                                <span class="new-price new-price-2">$71.80</span>
                                                <span class="old-price">$77.22</span>
                                                <span class="discount-percentage">-7%</span>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul class="add-actions-link">
                                                <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                <li><a class="links-details" href="wishlist.html"><i
                                                            class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" title="quick view" class="quick-view-btn"
                                                       data-toggle="modal" data-target="#exampleModalCenter"><i
                                                            class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="single-product">
                                            <img src="images/product/large-size/7.jpg" alt="Li's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                    </div>
                                    <div class="product_desc">
                                        <div class="product_desc_info">
                                            <div class="product-review">
                                                <h5 class="manufacturer">
                                                    <a href="shop-left-sidebar.html">Graphic Corner</a>
                                                </h5>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h4><a class="product_name" href="single-product">Accusantium dolorem1</a>
                                            </h4>
                                            <div class="price-box">
                                                <span class="new-price">$46.80</span>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul class="add-actions-link">
                                                <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                <li><a class="links-details" href="wishlist.html"><i
                                                            class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" title="quick view" class="quick-view-btn"
                                                       data-toggle="modal" data-target="#exampleModalCenter"><i
                                                            class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="single-product">
                                            <img src="images/product/large-size/9.jpg" alt="Li's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                    </div>
                                    <div class="product_desc">
                                        <div class="product_desc_info">
                                            <div class="product-review">
                                                <h5 class="manufacturer">
                                                    <a href="shop-left-sidebar.html">Studio Design</a>
                                                </h5>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h4><a class="product_name" href="single-product">Mug Today is a good
                                                    day</a></h4>
                                            <div class="price-box">
                                                <span class="new-price new-price-2">$71.80</span>
                                                <span class="old-price">$77.22</span>
                                                <span class="discount-percentage">-7%</span>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul class="add-actions-link">
                                                <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                <li><a class="links-details" href="wishlist.html"><i
                                                            class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" title="quick view" class="quick-view-btn"
                                                       data-toggle="modal" data-target="#exampleModalCenter"><i
                                                            class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="single-product">
                                            <img src="images/product/large-size/11.jpg" alt="Li's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                    </div>
                                    <div class="product_desc">
                                        <div class="product_desc_info">
                                            <div class="product-review">
                                                <h5 class="manufacturer">
                                                    <a href="shop-left-sidebar.html">Graphic Corner</a>
                                                </h5>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h4><a class="product_name" href="single-product">Accusantium dolorem1</a>
                                            </h4>
                                            <div class="price-box">
                                                <span class="new-price">$46.80</span>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul class="add-actions-link">
                                                <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                <li><a class="links-details" href="wishlist.html"><i
                                                            class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" title="quick view" class="quick-view-btn"
                                                       data-toggle="modal" data-target="#exampleModalCenter"><i
                                                            class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="single-product">
                                            <img src="images/product/large-size/12.jpg" alt="Li's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                    </div>
                                    <div class="product_desc">
                                        <div class="product_desc_info">
                                            <div class="product-review">
                                                <h5 class="manufacturer">
                                                    <a href="shop-left-sidebar.html">Studio Design</a>
                                                </h5>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h4><a class="product_name" href="single-product">Mug Today is a good
                                                    day</a></h4>
                                            <div class="price-box">
                                                <span class="new-price new-price-2">$71.80</span>
                                                <span class="old-price">$77.22</span>
                                                <span class="discount-percentage">-7%</span>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul class="add-actions-link">
                                                <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                <li><a class="links-details" href="wishlist.html"><i
                                                            class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" title="quick view" class="quick-view-btn"
                                                       data-toggle="modal" data-target="#exampleModalCenter"><i
                                                            class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- suggested Product End Here -->
    <!-- Li's Static Banner Area End Here -->
    <!-- Begin nearest Product Area -->
    <section class="product-area li-laptop-product pt-60 pb-45">
        <div class="container">
            <div class="row">
                <!-- Begin Li's Section Area -->
                <div class="col-lg-12">
                    <div class="li-section-title">
                        <h2>
                            <span>Gần đây</span>
                        </h2>
                    </div>
                    <div class="product-container">
                        <div class="row">
                            <div>
                                <section>
                                    <div class="card booking-card" style="max-width: 22rem;">
                                        <div class="view overlay"><img
                                                src="https://mdbootstrap.com/img/Photos/Horizontal/Food/8-col/img (5).jpg"
                                                alt="Card image cap" class="card-img-top"> <a href="#!">
                                                <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                            </a></div>
                                        <div class="card-body"><h4 class="card-title font-weight-bold"><a>Texas
                                                    Chicken</a>
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
                                                <li class="list-inline-item"><i
                                                        class="fas fa-star-half-alt amber-text"></i>
                                                </li>
                                                <li class="list-inline-item"><p class="text-muted">4.5 (413)</p></li>
                                            </ul>
                                            <a class="mb-2"><i class="fas fa-map-marker-alt"></i>&nbsp; 55 Đặng Thùy
                                                Trâm,
                                                quận....</a>
                                            <p class="card-text"></p>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div>
                                <section>
                                    <div class="card booking-card" style="max-width: 22rem;">
                                        <div class="view overlay"><img
                                                src="https://mdbootstrap.com/img/Photos/Horizontal/Food/8-col/img (5).jpg"
                                                alt="Card image cap" class="card-img-top"> <a href="#!">
                                                <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                            </a></div>
                                        <div class="card-body"><h4 class="card-title font-weight-bold"><a>Texas
                                                    Chicken</a>
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
                                                <li class="list-inline-item"><i
                                                        class="fas fa-star-half-alt amber-text"></i>
                                                </li>
                                                <li class="list-inline-item"><p class="text-muted">4.5 (413)</p></li>
                                            </ul>
                                            <a class="mb-2"><i class="fas fa-map-marker-alt"></i>&nbsp; 55 Đặng Thùy
                                                Trâm,
                                                quận....</a>
                                            <p class="card-text"></p>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div>
                                <section>
                                    <div class="card booking-card" style="max-width: 22rem;">
                                        <div class="view overlay"><img
                                                src="https://mdbootstrap.com/img/Photos/Horizontal/Food/8-col/img (5).jpg"
                                                alt="Card image cap" class="card-img-top"> <a href="#!">
                                                <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                            </a></div>
                                        <div class="card-body"><h4 class="card-title font-weight-bold"><a>Texas
                                                    Chicken</a>
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
                                                <li class="list-inline-item"><i
                                                        class="fas fa-star-half-alt amber-text"></i>
                                                </li>
                                                <li class="list-inline-item"><p class="text-muted">4.5 (413)</p></li>
                                            </ul>
                                            <a class="mb-2"><i class="fas fa-map-marker-alt"></i>&nbsp; 55 Đặng Thùy
                                                Trâm,
                                                quận....</a>
                                            <p class="card-text"></p>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div>
                                <section>
                                    <div class="card booking-card" style="max-width: 22rem;">
                                        <div class="view overlay"><img
                                                src="https://mdbootstrap.com/img/Photos/Horizontal/Food/8-col/img (5).jpg"
                                                alt="Card image cap" class="card-img-top"> <a href="#!">
                                                <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                            </a></div>
                                        <div class="card-body"><h4 class="card-title font-weight-bold"><a>Texas
                                                    Chicken</a>
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
                                                <li class="list-inline-item"><i
                                                        class="fas fa-star-half-alt amber-text"></i>
                                                </li>
                                                <li class="list-inline-item"><p class="text-muted">4.5 (413)</p></li>
                                            </ul>
                                            <a class="mb-2"><i class="fas fa-map-marker-alt"></i>&nbsp; 55 Đặng Thùy
                                                Trâm,
                                                quận....</a>
                                            <p class="card-text"></p>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Li's Section Area End Here -->
            </div>
        </div>
    </section>
    <div id="map" style="overflow: hidden;height: 275px;max-width: 1135px; margin-top: 150px;margin: auto;
    border-radius: 10px;"></div>
    <!-- nearest Product End Here -->
    <!-- Begin banner -->
    <div class="li-static-home" style="margin-top: 20px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Begin Li's Static Home Image Area -->
                    <div class="li-static-home-image"></div>
                    <!-- Li's Static Home Image Area End Here -->
                    <!-- Begin Li's Static Home Content Area -->
                    <div class="li-static-home-content">
                        <p>Khuyến mãi <span>20%</span>mỗi cuối tuần</p>
                        <h2>Chuối nhà hàng</h2>
                        <h2>2 O'CLOCK</h2>
                        <p class="schedule">
                            Giá chỉ từ
                            <span> 50.000 đ</span>
                        </p>
                        <div class="default-btn">
                            <a href="shop-left-sidebar.html" class="links">Xem ngay</a>
                        </div>
                    </div>
                    <!-- Li's Static Home Content Area End Here -->
                </div>
            </div>
        </div>
    </div>
    <!-- banner End Here -->
    <!-- Begin saved Product Area -->
    <div class="product-area pt-60 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="li-product-tab">
                        <ul class="nav li-product-menu">
                            <li><a class="active" data-toggle="tab"
                                   href="#li-new-product"><span>Đã lưu</span></a></li>
                            {{--                            <li><a data-toggle="tab" href="#li-bestseller-product"><span>Bestseller</span></a></li>--}}
                            {{--                            <li><a data-toggle="tab" href="#li-featured-product"><span>Featured Products</span></a></li>--}}
                        </ul>
                    </div>
                    <!-- Begin Li's Tab Menu Content Area -->
                </div>
            </div>
            <div class="tab-content">
                <div id="li-new-product" class="tab-pane active show" role="tabpanel">
                    <div class="row">
                        <div class="recommend-product-active product-active owl-carousel">
                            <section>

                                <!-- Card -->
                                <div class="card booking-card" style="max-width: 22rem;">

                                    <!-- Card image -->
                                    <div class="view overlay">
                                        <img class="card-img-top"
                                             src="https://mdbootstrap.com/img/Photos/Horizontal/Food/8-col/img (5).jpg"
                                             alt="Card image cap">
                                        <a href="#!">
                                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                        </a>
                                    </div>

                                    <!-- Card content -->
                                    <div class="card-body">

                                        <!-- Title -->
                                        <h4 class="card-title font-weight-bold"><a>Texas Chicken</a></h4>
                                        <!-- Data -->
                                        <ul class="list-unstyled list-inline rating mb-0">
                                            <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"> </i>
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
                                        <p class="card-text">Đoàn: Đồ ăn rất ngon, nên thử</p>
                                        <!-- Text -->
                                        <p class="card-text"></p>
                                        <hr class="my-1">
                                        <ul class="add-actions-link">
                                            <li><a data-toggle="tooltip" data-placement="top" title="Lưu"
                                                   class="links-details" href="wishlist.html">
                                                    <i class="fa fa-bookmark"></i>
                                                </a>
                                            </li>
                                            <li><a data-toggle="tooltip" data-placement="top" title="Thích"
                                                   class="links-details" href="wishlist.html">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                            </li>
                                            <li><a data-toggle="tooltip" data-placement="top" title="Xem nhanh"
                                                   class="links-details" href="wishlist.html">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                                <!-- Card -->

                            </section>
                            <section>

                                <!-- Card -->
                                <div class="card booking-card" style="max-width: 22rem;">

                                    <!-- Card image -->
                                    <div class="view overlay">
                                        <img class="card-img-top"
                                             src="https://mdbootstrap.com/img/Photos/Horizontal/Food/8-col/img (5).jpg"
                                             alt="Card image cap">
                                        <a href="#!">
                                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                        </a>
                                    </div>

                                    <!-- Card content -->
                                    <div class="card-body">

                                        <!-- Title -->
                                        <h4 class="card-title font-weight-bold"><a>Texas Chicken</a></h4>
                                        <!-- Data -->
                                        <ul class="list-unstyled list-inline rating mb-0">
                                            <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"> </i>
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
                                        <p class="card-text">Đoàn: Đồ ăn rất ngon, nên thử</p>
                                        <!-- Text -->
                                        <p class="card-text"></p>
                                        <hr class="my-1">
                                        <ul class="add-actions-link">
                                            <li><a data-toggle="tooltip" data-placement="top" title="Lưu"
                                                   class="links-details" href="wishlist.html">
                                                    <i class="fa fa-bookmark"></i>
                                                </a>
                                            </li>
                                            <li><a data-toggle="tooltip" data-placement="top" title="Thích"
                                                   class="links-details" href="wishlist.html">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                            </li>
                                            <li><a data-toggle="tooltip" data-placement="top" title="Xem nhanh"
                                                   class="links-details" href="wishlist.html">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                                <!-- Card -->

                            </section>
                            <section>

                                <!-- Card -->
                                <div class="card booking-card" style="max-width: 22rem;">

                                    <!-- Card image -->
                                    <div class="view overlay">
                                        <img class="card-img-top"
                                             src="https://mdbootstrap.com/img/Photos/Horizontal/Food/8-col/img (5).jpg"
                                             alt="Card image cap">
                                        <a href="#!">
                                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                        </a>
                                    </div>

                                    <!-- Card content -->
                                    <div class="card-body">

                                        <!-- Title -->
                                        <h4 class="card-title font-weight-bold"><a>Texas Chicken</a></h4>
                                        <!-- Data -->
                                        <ul class="list-unstyled list-inline rating mb-0">
                                            <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"> </i>
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
                                        <p class="card-text">Đoàn: Đồ ăn rất ngon, nên thử</p>
                                        <!-- Text -->
                                        <p class="card-text"></p>
                                        <hr class="my-1">
                                        <ul class="add-actions-link">
                                            <li><a data-toggle="tooltip" data-placement="top" title="Lưu"
                                                   class="links-details" href="wishlist.html">
                                                    <i class="fa fa-bookmark"></i>
                                                </a>
                                            </li>
                                            <li><a data-toggle="tooltip" data-placement="top" title="Thích"
                                                   class="links-details" href="wishlist.html">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                            </li>
                                            <li><a data-toggle="tooltip" data-placement="top" title="Xem nhanh"
                                                   class="links-details" href="wishlist.html">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                                <!-- Card -->

                            </section>
                            <section>

                                <!-- Card -->
                                <div class="card booking-card" style="max-width: 22rem;">

                                    <!-- Card image -->
                                    <div class="view overlay">
                                        <img class="card-img-top"
                                             src="https://mdbootstrap.com/img/Photos/Horizontal/Food/8-col/img (5).jpg"
                                             alt="Card image cap">
                                        <a href="#!">
                                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                        </a>
                                    </div>

                                    <!-- Card content -->
                                    <div class="card-body">

                                        <!-- Title -->
                                        <h4 class="card-title font-weight-bold"><a>Texas Chicken</a></h4>
                                        <!-- Data -->
                                        <ul class="list-unstyled list-inline rating mb-0">
                                            <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"> </i>
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
                                        <p class="card-text">Đoàn: Đồ ăn rất ngon, nên thử</p>
                                        <!-- Text -->
                                        <p class="card-text"></p>
                                        <hr class="my-1">
                                        <ul class="add-actions-link">
                                            <li><a data-toggle="tooltip" data-placement="top" title="Lưu"
                                                   class="links-details" href="wishlist.html">
                                                    <i class="fa fa-bookmark"></i>
                                                </a>
                                            </li>
                                            <li><a data-toggle="tooltip" data-placement="top" title="Thích"
                                                   class="links-details" href="wishlist.html">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                            </li>
                                            <li><a data-toggle="tooltip" data-placement="top" title="Xem nhanh"
                                                   class="links-details" href="wishlist.html">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                                <!-- Card -->

                            </section>
                            <section>

                                <!-- Card -->
                                <div class="card booking-card" style="max-width: 22rem;">

                                    <!-- Card image -->
                                    <div class="view overlay">
                                        <img class="card-img-top"
                                             src="https://mdbootstrap.com/img/Photos/Horizontal/Food/8-col/img (5).jpg"
                                             alt="Card image cap">
                                        <a href="#!">
                                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                        </a>
                                    </div>

                                    <!-- Card content -->
                                    <div class="card-body">

                                        <!-- Title -->
                                        <h4 class="card-title font-weight-bold"><a>Texas Chicken</a></h4>
                                        <!-- Data -->
                                        <ul class="list-unstyled list-inline rating mb-0">
                                            <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"> </i>
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
                                        <p class="card-text">Đoàn: Đồ ăn rất ngon, nên thử</p>
                                        <!-- Text -->
                                        <p class="card-text"></p>
                                        <hr class="my-1">
                                        <ul class="add-actions-link">
                                            <li><a data-toggle="tooltip" data-placement="top" title="Lưu"
                                                   class="links-details" href="wishlist.html">
                                                    <i class="fa fa-bookmark"></i>
                                                </a>
                                            </li>
                                            <li><a data-toggle="tooltip" data-placement="top" title="Thích"
                                                   class="links-details" href="wishlist.html">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                            </li>
                                            <li><a data-toggle="tooltip" data-placement="top" title="Xem nhanh"
                                                   class="links-details" href="wishlist.html">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                                <!-- Card -->

                            </section>
                            <section>

                                <!-- Card -->
                                <div class="card booking-card" style="max-width: 22rem;">

                                    <!-- Card image -->
                                    <div class="view overlay">
                                        <img class="card-img-top"
                                             src="https://mdbootstrap.com/img/Photos/Horizontal/Food/8-col/img (5).jpg"
                                             alt="Card image cap">
                                        <a href="#!">
                                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                        </a>
                                    </div>

                                    <!-- Card content -->
                                    <div class="card-body">

                                        <!-- Title -->
                                        <h4 class="card-title font-weight-bold"><a>Texas Chicken</a></h4>
                                        <!-- Data -->
                                        <ul class="list-unstyled list-inline rating mb-0">
                                            <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"> </i>
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
                                        <p class="card-text">Đoàn: Đồ ăn rất ngon, nên thử</p>
                                        <!-- Text -->
                                        <p class="card-text"></p>
                                        <hr class="my-1">
                                        <ul class="add-actions-link">
                                            <li><a data-toggle="tooltip" data-placement="top" title="Lưu"
                                                   class="links-details" href="wishlist.html">
                                                    <i class="fa fa-bookmark"></i>
                                                </a>
                                            </li>
                                            <li><a data-toggle="tooltip" data-placement="top" title="Thích"
                                                   class="links-details" href="wishlist.html">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                            </li>
                                            <li><a data-toggle="tooltip" data-placement="top" title="Xem nhanh"
                                                   class="links-details" href="wishlist.html">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                                <!-- Card -->

                            </section>
                        </div>
                    </div>
                </div>
                <div id="li-bestseller-product" class="tab-pane" role="tabpanel">
                    <div class="row">
                        <div class="product-active owl-carousel">
                            <div class="col-lg-12">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="single-product">
                                            <img src="images/product/large-size/12.jpg" alt="Li's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                    </div>
                                    <div class="product_desc">
                                        <div class="product_desc_info">
                                            <div class="product-review">
                                                <h5 class="manufacturer">
                                                    <a href="shop-left-sidebar.html">Graphic Corner</a>
                                                </h5>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h4><a class="product_name" href="single-product">Accusantium dolorem1</a>
                                            </h4>
                                            <div class="price-box">
                                                <span class="new-price">$46.80</span>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul class="add-actions-link">
                                                <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                <li><a class="links-details" href="wishlist.html"><i
                                                            class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" title="quick view" class="quick-view-btn"
                                                       data-toggle="modal" data-target="#exampleModalCenter"><i
                                                            class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="single-product">
                                            <img src="images/product/large-size/11.jpg" alt="Li's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                    </div>
                                    <div class="product_desc">
                                        <div class="product_desc_info">
                                            <div class="product-review">
                                                <h5 class="manufacturer">
                                                    <a href="shop-left-sidebar.html">Studio Design</a>
                                                </h5>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h4><a class="product_name" href="single-product">Mug Today is a good
                                                    day</a></h4>
                                            <div class="price-box">
                                                <span class="new-price new-price-2">$71.80</span>
                                                <span class="old-price">$77.22</span>
                                                <span class="discount-percentage">-7%</span>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul class="add-actions-link">
                                                <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                <li><a class="links-details" href="wishlist.html"><i
                                                            class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" title="quick view" class="quick-view-btn"
                                                       data-toggle="modal" data-target="#exampleModalCenter"><i
                                                            class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="single-product">
                                            <img src="images/product/large-size/10.jpg" alt="Li's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                    </div>
                                    <div class="product_desc">
                                        <div class="product_desc_info">
                                            <div class="product-review">
                                                <h5 class="manufacturer">
                                                    <a href="shop-left-sidebar.html">Graphic Corner</a>
                                                </h5>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h4><a class="product_name" href="single-product">Accusantium dolorem1</a>
                                            </h4>
                                            <div class="price-box">
                                                <span class="new-price">$46.80</span>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul class="add-actions-link">
                                                <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                <li><a class="links-details" href="wishlist.html"><i
                                                            class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" title="quick view" class="quick-view-btn"
                                                       data-toggle="modal" data-target="#exampleModalCenter"><i
                                                            class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="single-product">
                                            <img src="images/product/large-size/9.jpg" alt="Li's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                    </div>
                                    <div class="product_desc">
                                        <div class="product_desc_info">
                                            <div class="product-review">
                                                <h5 class="manufacturer">
                                                    <a href="shop-left-sidebar.html">Studio Design</a>
                                                </h5>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h4><a class="product_name" href="single-product">Mug Today is a good
                                                    day</a></h4>
                                            <div class="price-box">
                                                <span class="new-price new-price-2">$71.80</span>
                                                <span class="old-price">$77.22</span>
                                                <span class="discount-percentage">-7%</span>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul class="add-actions-link">
                                                <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                <li><a class="links-details" href="wishlist.html"><i
                                                            class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" title="quick view" class="quick-view-btn"
                                                       data-toggle="modal" data-target="#exampleModalCenter"><i
                                                            class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="single-product">
                                            <img src="images/product/large-size/8.jpg" alt="Li's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                    </div>
                                    <div class="product_desc">
                                        <div class="product_desc_info">
                                            <div class="product-review">
                                                <h5 class="manufacturer">
                                                    <a href="shop-left-sidebar.html">Graphic Corner</a>
                                                </h5>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h4><a class="product_name" href="single-product">Accusantium dolorem1</a>
                                            </h4>
                                            <div class="price-box">
                                                <span class="new-price">$46.80</span>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul class="add-actions-link">
                                                <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                <li><a class="links-details" href="wishlist.html"><i
                                                            class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" title="quick view" class="quick-view-btn"
                                                       data-toggle="modal" data-target="#exampleModalCenter"><i
                                                            class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="single-product">
                                            <img src="images/product/large-size/7.jpg" alt="Li's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                    </div>
                                    <div class="product_desc">
                                        <div class="product_desc_info">
                                            <div class="product-review">
                                                <h5 class="manufacturer">
                                                    <a href="shop-left-sidebar.html">Studio Design</a>
                                                </h5>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h4><a class="product_name" href="single-product">Mug Today is a good
                                                    day</a></h4>
                                            <div class="price-box">
                                                <span class="new-price new-price-2">$71.80</span>
                                                <span class="old-price">$77.22</span>
                                                <span class="discount-percentage">-7%</span>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul class="add-actions-link">
                                                <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                <li><a class="links-details" href="wishlist.html"><i
                                                            class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" title="quick view" class="quick-view-btn"
                                                       data-toggle="modal" data-target="#exampleModalCenter"><i
                                                            class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                        </div>
                    </div>
                </div>
                <div id="li-featured-product" class="tab-pane" role="tabpanel">
                    <div class="row">
                        <div class="product-active owl-carousel">
                            <div class="col-lg-12">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="single-product">
                                            <img src="images/product/large-size/3.jpg" alt="Li's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                    </div>
                                    <div class="product_desc">
                                        <div class="product_desc_info">
                                            <div class="product-review">
                                                <h5 class="manufacturer">
                                                    <a href="shop-left-sidebar.html">Graphic Corner</a>
                                                </h5>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h4><a class="product_name" href="single-product">Accusantium dolorem1</a>
                                            </h4>
                                            <div class="price-box">
                                                <span class="new-price">$46.80</span>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul class="add-actions-link">
                                                <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                <li><a class="links-details" href="wishlist.html"><i
                                                            class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" title="quick view" class="quick-view-btn"
                                                       data-toggle="modal" data-target="#exampleModalCenter"><i
                                                            class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="single-product">
                                            <img src="images/product/large-size/5.jpg" alt="Li's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                    </div>
                                    <div class="product_desc">
                                        <div class="product_desc_info">
                                            <div class="product-review">
                                                <h5 class="manufacturer">
                                                    <a href="shop-left-sidebar.html">Studio Design</a>
                                                </h5>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h4><a class="product_name" href="single-product">Mug Today is a good
                                                    day</a></h4>
                                            <div class="price-box">
                                                <span class="new-price new-price-2">$71.80</span>
                                                <span class="old-price">$77.22</span>
                                                <span class="discount-percentage">-7%</span>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul class="add-actions-link">
                                                <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                <li><a class="links-details" href="wishlist.html"><i
                                                            class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" title="quick view" class="quick-view-btn"
                                                       data-toggle="modal" data-target="#exampleModalCenter"><i
                                                            class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="single-product">
                                            <img src="images/product/large-size/7.jpg" alt="Li's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                    </div>
                                    <div class="product_desc">
                                        <div class="product_desc_info">
                                            <div class="product-review">
                                                <h5 class="manufacturer">
                                                    <a href="shop-left-sidebar.html">Graphic Corner</a>
                                                </h5>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h4><a class="product_name" href="single-product">Accusantium dolorem1</a>
                                            </h4>
                                            <div class="price-box">
                                                <span class="new-price">$46.80</span>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul class="add-actions-link">
                                                <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                <li><a class="links-details" href="wishlist.html"><i
                                                            class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" title="quick view" class="quick-view-btn"
                                                       data-toggle="modal" data-target="#exampleModalCenter"><i
                                                            class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="single-product">
                                            <img src="images/product/large-size/9.jpg" alt="Li's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                    </div>
                                    <div class="product_desc">
                                        <div class="product_desc_info">
                                            <div class="product-review">
                                                <h5 class="manufacturer">
                                                    <a href="shop-left-sidebar.html">Studio Design</a>
                                                </h5>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h4><a class="product_name" href="single-product">Mug Today is a good
                                                    day</a></h4>
                                            <div class="price-box">
                                                <span class="new-price new-price-2">$71.80</span>
                                                <span class="old-price">$77.22</span>
                                                <span class="discount-percentage">-7%</span>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul class="add-actions-link">
                                                <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                <li><a class="links-details" href="wishlist.html"><i
                                                            class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" title="quick view" class="quick-view-btn"
                                                       data-toggle="modal" data-target="#exampleModalCenter"><i
                                                            class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="single-product">
                                            <img src="images/product/large-size/11.jpg" alt="Li's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                    </div>
                                    <div class="product_desc">
                                        <div class="product_desc_info">
                                            <div class="product-review">
                                                <h5 class="manufacturer">
                                                    <a href="shop-left-sidebar.html">Graphic Corner</a>
                                                </h5>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h4><a class="product_name" href="single-product">Accusantium dolorem1</a>
                                            </h4>
                                            <div class="price-box">
                                                <span class="new-price">$46.80</span>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul class="add-actions-link">
                                                <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                <li><a class="links-details" href="wishlist.html"><i
                                                            class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" title="quick view" class="quick-view-btn"
                                                       data-toggle="modal" data-target="#exampleModalCenter"><i
                                                            class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="single-product">
                                            <img src="images/product/large-size/12.jpg" alt="Li's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                    </div>
                                    <div class="product_desc">
                                        <div class="product_desc_info">
                                            <div class="product-review">
                                                <h5 class="manufacturer">
                                                    <a href="shop-left-sidebar.html">Studio Design</a>
                                                </h5>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h4><a class="product_name" href="single-product">Mug Today is a good
                                                    day</a></h4>
                                            <div class="price-box">
                                                <span class="new-price new-price-2">$71.80</span>
                                                <span class="old-price">$77.22</span>
                                                <span class="discount-percentage">-7%</span>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul class="add-actions-link">
                                                <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                <li><a class="links-details" href="wishlist.html"><i
                                                            class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" title="quick view" class="quick-view-btn"
                                                       data-toggle="modal" data-target="#exampleModalCenter"><i
                                                            class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- saved ProductEnd Here -->
    <!-- Begin new Products Area -->
    <section class="product-area li-laptop-product pt-60 pb-45">
        <div class="container">
            <div class="row">
                <!-- Begin Li's Section Area -->
                <div class="col-lg-12">
                    <div class="li-section-title">
                        <h2>
                            <span>Mới nhất</span>
                        </h2>
                    </div>
                    <div class="product-container">
                        <div class="row">
                            <div>
                                <section>
                                    <div class="card booking-card" style="max-width: 22rem;">
                                        <div class="view overlay"><img
                                                src="https://mdbootstrap.com/img/Photos/Horizontal/Food/8-col/img (5).jpg"
                                                alt="Card image cap" class="card-img-top"> <a href="#!">
                                                <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                            </a></div>
                                        <div class="card-body"><h4 class="card-title font-weight-bold"><a>Texas
                                                    Chicken</a>
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
                                                <li class="list-inline-item"><i
                                                        class="fas fa-star-half-alt amber-text"></i>
                                                </li>
                                                <li class="list-inline-item"><p class="text-muted">4.5 (413)</p></li>
                                            </ul>
                                            <a class="mb-2"><i class="fas fa-map-marker-alt"></i>&nbsp; 55 Đặng Thùy
                                                Trâm,
                                                quận....</a>
                                            <p class="card-text"></p>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div>
                                <section>
                                    <div class="card booking-card" style="max-width: 22rem;">
                                        <div class="view overlay"><img
                                                src="https://mdbootstrap.com/img/Photos/Horizontal/Food/8-col/img (5).jpg"
                                                alt="Card image cap" class="card-img-top"> <a href="#!">
                                                <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                            </a></div>
                                        <div class="card-body"><h4 class="card-title font-weight-bold"><a>Texas
                                                    Chicken</a>
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
                                                <li class="list-inline-item"><i
                                                        class="fas fa-star-half-alt amber-text"></i>
                                                </li>
                                                <li class="list-inline-item"><p class="text-muted">4.5 (413)</p></li>
                                            </ul>
                                            <a class="mb-2"><i class="fas fa-map-marker-alt"></i>&nbsp; 55 Đặng Thùy
                                                Trâm,
                                                quận....</a>
                                            <p class="card-text"></p>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div>
                                <section>
                                    <div class="card booking-card" style="max-width: 22rem;">
                                        <div class="view overlay"><img
                                                src="https://mdbootstrap.com/img/Photos/Horizontal/Food/8-col/img (5).jpg"
                                                alt="Card image cap" class="card-img-top"> <a href="#!">
                                                <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                            </a></div>
                                        <div class="card-body"><h4 class="card-title font-weight-bold"><a>Texas
                                                    Chicken</a>
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
                                                <li class="list-inline-item"><i
                                                        class="fas fa-star-half-alt amber-text"></i>
                                                </li>
                                                <li class="list-inline-item"><p class="text-muted">4.5 (413)</p></li>
                                            </ul>
                                            <a class="mb-2"><i class="fas fa-map-marker-alt"></i>&nbsp; 55 Đặng Thùy
                                                Trâm,
                                                quận....</a>
                                            <p class="card-text"></p>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div>
                                <section>
                                    <div class="card booking-card" style="max-width: 22rem;">
                                        <div class="view overlay"><img
                                                src="https://mdbootstrap.com/img/Photos/Horizontal/Food/8-col/img (5).jpg"
                                                alt="Card image cap" class="card-img-top"> <a href="#!">
                                                <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                            </a></div>
                                        <div class="card-body"><h4 class="card-title font-weight-bold"><a>Texas
                                                    Chicken</a>
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
                                                <li class="list-inline-item"><i
                                                        class="fas fa-star-half-alt amber-text"></i>
                                                </li>
                                                <li class="list-inline-item"><p class="text-muted">4.5 (413)</p></li>
                                            </ul>
                                            <a class="mb-2"><i class="fas fa-map-marker-alt"></i>&nbsp; 55 Đặng Thùy
                                                Trâm,
                                                quận....</a>
                                            <p class="card-text"></p>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div>
                                <section>
                                    <div class="card booking-card" style="max-width: 22rem;">
                                        <div class="view overlay"><img
                                                src="https://mdbootstrap.com/img/Photos/Horizontal/Food/8-col/img (5).jpg"
                                                alt="Card image cap" class="card-img-top"> <a href="#!">
                                                <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                            </a></div>
                                        <div class="card-body"><h4 class="card-title font-weight-bold"><a>Texas
                                                    Chicken</a>
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
                                                <li class="list-inline-item"><i
                                                        class="fas fa-star-half-alt amber-text"></i>
                                                </li>
                                                <li class="list-inline-item"><p class="text-muted">4.5 (413)</p></li>
                                            </ul>
                                            <a class="mb-2"><i class="fas fa-map-marker-alt"></i>&nbsp; 55 Đặng Thùy
                                                Trâm,
                                                quận....</a>
                                            <p class="card-text"></p>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Li's Section Area End Here -->
            </div>
        </div>
    </section>

    {{--    <div id="map" style="overflow: hidden;height: 275px;max-width: 1135px; margin-top: 150px;margin: auto;--}}
    {{--    border-radius: 10px;"></div>--}}
@endsection
@section('script')
    <script>
        // function getLocation() {
        //     if (navigator.geolocation) {
        //         console.log('HERE');
        //         navigator.geolocation.getCurrentPosition(showPosition);
        //     } else {
        //         console.log("Geolocation is not supported by this browser.");
        //     }
        // }
        //
        // function showPosition(position) {
        //     console.log('hehe');
        //     console.log('Lat: '+ position.coords.latitude+ ' Lng: '+ position.coords.longitude);
        // }
        function IndexObj() {
            this.Latitude = '';
            this.Longitude = '';
            this.api_get_nearest = $('#index-obj').attr('api-get-nearest');

            this.showPosition = function (position) {
                console.log('Lat: ' + position.coords.latitude + ' Lng: ' + position.coords.longitude);
                this.Latitude = position.coords.latitude;
                this.Longitude = position.coords.longitude;
            }
            this.getLocation = function () {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(this.showPosition);
                }
            }
            return this;
        }

        $(document).ready(function () {
            console.log('Day nek');
            var indexObj = new IndexObj();
            indexObj.getLocation();
        })

    </script>
    <script>
        function createElement(name, text = '', css_string = null, attr_list = null) {
            var elm = document.createElement(name);
            elm.textContent = text
            if (css_string) {
                elm.style.cssText = css_string;
            }
            if (attr_list) {
                for (var attribute in attr_list) {
                    elm.setAttribute(attribute, attr_list[attribute]);
                }
            }
            return elm;
        }

        var customLabel = {
            restaurant: {
                label: ''
            },
            bar: {
                label: 'B'
            }
        };

        function initMap() {
            if (navigator.geolocation) {
                console.log('HEHEHE');
                navigator.geolocation.getCurrentPosition(function (position){
                    console.log('Lat: '+ position.coords.latitude+ ' Lng: '+ position.coords.longitude);
                    $.ajax({
                        method: 'POST',
                        data: {
                            user_location: {
                                Latitude : position.coords.latitude,
                                Longitude: position.coords.longitude
                            }
                        },
                        url : $('#index-obj').attr('api-get-nearest')
                    }).done(function (data){
                        if(data.success){
                            var map = new google.maps.Map(document.getElementById('map'), {
                                // center: new google.maps.LatLng(10.8139, 106.717),
                                center: new google.maps.LatLng(position.coords.latitude, position.coords.longitude),
                                zoom: 12
                            });
                            var infoWindow = new google.maps.InfoWindow;

                            // Change this depending on the name of your PHP or XML file
                            // var res_list = [
                            //     {
                            //         "id": "640",
                            //         "name": "Cháo Vịt Thanh Đa (Gốc Nhà Lá) - Bình Quới",
                            //         "address": "118 Bình Qưới, P. 27, Quận Bình Thạnh, TP. HCM",
                            //         "lat": "10.8139",
                            //         "lng": "106.717",
                            //         "type": "restaurant"
                            //     },
                            //     {
                            //         id: "643",
                            //         name: "Buffet Atrium Cafe - Lotte Legend Saigon Hotel",
                            //         address: "2A - 4A Tôn Đức Thắng, P. Bến Nghé, Quận 1, Quận 1, TP. HCM",
                            //         lat: "10.7782",
                            //         lng: "106.707",
                            //         type: "restaurant"
                            //     },
                            //     {
                            //         id: "687",
                            //         name: "Buffet Thanh Niên",
                            //         address: "11 Nguyễn Văn Chiêm, Quận 1, TP. HCM",
                            //         lat: "10.7817",
                            //         lng: "106.699",
                            //         type: "restaurant",
                            //     },
                            //     {
                            //         id: "1024",
                            //         name: "Tuệ Mẫn Cafe - Êm Đềm Một Không Gian",
                            //         address: "452 Cây Trâm, P.9, Quận Gò Vấp, TP. HCM",
                            //         lat: "10.8437",
                            //         lng: "106.648",
                            //         type: "restaurant"
                            //     },
                            //     {
                            //         id: "1043",
                            //         name: "Khu Ăn Vặt An Dương Vương",
                            //         address: "An Dương Vương , Quận 5, TP. HCM",
                            //         lat: "10.7607",
                            //         lng: "106.682",
                            //         type: "restaurant"
                            //     },
                            //     {
                            //         id: "1256",
                            //         name: "Đất Cafe - Phong Cách Nhà Vườn",
                            //         address: "343/5 Tô Hiến Thành, P. 12, Quận 10, TP. HCM",
                            //         lat: "10.7764",
                            //         lng: "106.665",
                            //         type: "restaurant"
                            //     },
                            //     {
                            //         id: "1259",
                            //         name: "Khúc Mùa Thu Cafe",
                            //         address: "22/3 Đường Số 21, P. 8, Quận Gò Vấp, TP. HCM",
                            //         lat: "10.8407",
                            //         lng: "106.651",
                            //         type: "restaurant"
                            //     },
                            //     {
                            //         id: "1393",
                            //         name: "Bánh Canh Cua Hoàng Lan - Vĩnh Viễn",
                            //         address: "484 Vĩnh Viễn, Quận 10, TP. HCM",
                            //         lat: "10.7633",
                            //         lng: "106.665",
                            //         type: "restaurant"
                            //     },
                            //     {
                            //         id: "1399",
                            //         name: "Pasha - Ẩm Thực Thổ Nhĩ Kỳ",
                            //         address: "25 Đông Du, P. Bến Nghé, Quận 1, TP. HCM",
                            //         lat: "10.7761",
                            //         lng: "106.705",
                            //         type: "restaurant",
                            //     },
                            //     {
                            //         id: "1422", name: "Quán Ăn Chay Thuyền Viên - Nguyễn Văn Đậu",
                            //         address: "11 - 13 Nguyễn Văn Đậu, P. 5, Quận Phú Nhuận, TP. HCM", lat: "10.8044", lng: "106.687",
                            //         type: "restaurant"
                            //     }
                            // ];
                            var res_list = data.data
                            Array.prototype.forEach.call(res_list, function (res) {
                                var id = res['Id'];
                                var name = res['Name'];
                                var address = res['Address'];
                                var type = 'restaurant';
                                var point = new google.maps.LatLng(
                                    parseFloat(res['Latitude']),
                                    parseFloat(res['Longitude']));

                                var infowincontent = document.createElement('div');
                                var res_name = createElement('a', name, null, {
                                    'id': 'res_name_gg_map',
                                    'href': '#',
                                    'target': '_blank'
                                });
                                infowincontent.appendChild(res_name);
                                infowincontent.appendChild(document.createElement('br'));

                                var text = createElement('text', address, null, null, null);
                                infowincontent.appendChild(text);
                                infowincontent.appendChild(document.createElement('br'));

                                var time_label = createElement('strong', 'Giờ mở cửa: ', 'font-style:italic', null);
                                infowincontent.appendChild(time_label);

                                var time = createElement('text', '5:00 -16h:00', 'color:green; font-weight:bold', null);
                                infowincontent.appendChild(time);
                                var icon = customLabel[type] || {};
                                var marker = new google.maps.Marker({
                                    map: map,
                                    position: point,
                                    label: icon.label
                                });
                                marker.addListener('click', function () {
                                    infoWindow.setContent(infowincontent);
                                    infoWindow.open(map, marker);
                                });
                            });
                        }
                    })

                });
            }
        }

    </script>
    <script defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzlVX517mZWArHv4Dt3_JVG0aPmbSE5mE&callback=initMap">
    </script>
@endsection
