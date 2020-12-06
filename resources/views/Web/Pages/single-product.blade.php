@extends('Web.Layout.app')
@section('content')
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Single Product</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Li's Breadcrumb Area End Here -->
    <!-- content-wraper start -->
    <div class="content-wraper my-card">
        <div class="container">
            <div class="row single-product-area">
                <div class="col-lg-5 col-md-6">
                    <div class="lg-image">
                        <a class="popup-img venobox vbox-item" href="images/product/large-size/1.jpg" data-gall="myGallery">
                            <img id="detail-product-img" src="images/slider/foody-slider1.jpg" alt="product image">
                        </a>
                    </div>
                </div>

                <div class="col-lg-7 col-md-6">
                    <div class="product-details-view-content pt-20">
                        <div class="product-info">
                            <h2>Today is a good day Framed poster</h2>
                            <span class="product-details-ref">Reference: demo_15</span>
                            <div class="rating-box pt-10">
                                <ul class="rating rating-with-review-item">
                                    <li><i class="fa fa-star-o"></i></li>
                                    <li><i class="fa fa-star-o"></i></li>
                                    <li><i class="fa fa-star-o"></i></li>
                                    <li class="no-star"><i class="fa fa-star-o"></i></li>
                                    <li class="no-star"><i class="fa fa-star-o"></i></li>
                                    <li class="review-item"><a href="#">Read Review</a></li>
                                    <li class="review-item"><a href="#">Write Review</a></li>
                                </ul>
                            </div>
                            <div class="price-box pt-20">
                                <span class="new-price new-price-2">$57.98</span>
                            </div>
                            <div class="product-desc">
                                <p>
                                            <span>100% cotton double printed dress. Black and white striped top and orange high waisted skater skirt bottom. Lorem ipsum dolor sit amet, consectetur adipisicing elit. quibusdam corporis, earum facilis et nostrum dolorum accusamus similique eveniet quia pariatur.
                                            </span>
                                </p>
                            </div>
                            <div class="product-additional-info mb-20">
                                <a class="wishlist-btn" href="wishlist.html"><i class="fa fa-heart-o"></i>Add to wishlist</a>
                                <div class="product-social-sharing pt-15">
                                    <ul>
                                        <li class="facebook"><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
                                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                                        <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i>Google +</a></li>
                                        <li class="instagram"><a href="#"><i class="fa fa-instagram"></i>Instagram</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wraper end -->
    <!-- Begin Product Area -->
    <div class="product-area pt-35">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="li-product-tab">
                        <ul class="nav li-product-menu">
                            <li><a class="active" data-toggle="tab" href="#description"><span>Description</span></a></li>
                            <li><a data-toggle="tab" href="#product-details"><span>Product Details</span></a></li>
                            <li><a data-toggle="tab" href="#reviews"><span>Reviews</span></a></li>
                        </ul>
                    </div>
                    <!-- Begin Li's Tab Menu Content Area -->
                </div>
            </div>
            <div class="tab-content">
                <div id="description" class="tab-pane" role="tabpanel">
                    <div class="product-description">
                        <span>The best is yet to come! Give your walls a voice with a framed poster. This aesthethic, optimistic poster will look great in your desk or in an open-space office. Painted wooden frame with passe-partout for more depth.</span>
                    </div>
                </div>
                <div id="product-details" class="tab-pane" role="tabpanel">
                    <div class="product-details-manufacturer">
                        <a href="#">
                            <img src="images/product-details/1.jpg" alt="Product Manufacturer Image">
                        </a>
                        <p><span>Reference</span> demo_7</p>
                        <p><span>Reference</span> demo_7</p>
                    </div>
                </div>
                <div id="reviews" class="tab-pane active show" role="tabpanel">
                    <div class="product-reviews">
                        <div class="my-card comment-panel">
                            <div class="comment-header">
                                <div class="row">
                                    <div class="mt-10 mb-10 ml-20 mr-10">
                                        <img class="avatar" src="images/Screenshot_50.png">
                                    </div>
                                    <div class="mt-10">
                                        <p class="comment-user" style="margin-bottom: -5px !important;">Hà Thanh Đoàn</p>
                                        <p style="margin-bottom: -5px !important; font-size: 12px !important;">12/01/2021 10:20:21</p>
                                    </div>
                                    <p class="rating-point">5</p>
                                </div>
                            </div>
                            <div class="my-comment-body">
                                <div class="comment-content">
                                    <p style="color: black; margin-bottom: 0px !important;">sjflksd lkdsjfkl  jflksdkf jfklsdjf lsfjkdjl sjdflk
                                        sjflksd lkdsjfkl  jflksdkf jfklsdjf lsfjkdjl sjdflk
                                        sjflksd lkdsjfkl  jflksdkf jfklsdjf lsfjkdjl
                                        sjflksd lkdsjfkl  jflksdkf jfklsdjf lsfjkdjl
                                        sjflksd lkdsjfkl  jflksdkf jfklsdjf lsfjkdjl
                                        sjflksd lkdsjfkl  jflksdkf jfklsdjf lsfjkdjl
                                        sjflksd lkdsjfkl  jflksdkf jfklsdjf lsfjkdjl</p>
                                    <a href="#">See more</a>
                                </div>
                                <div class="comment-picture">
                                    <div class="row" style="padding: 20px">
                                        <div class="col-sm-4" style="text-align: center; padding: 2px !important; ">
                                            <img class="comment-image" style="text-align: center" src="images/slider/foody-slider1.jpg">
                                        </div>
                                        <div class="col-sm-4" style="text-align: center; padding: 2px !important;">
                                            <img class="comment-image"  src="images/slider/foody-slider1.jpg">
                                        </div>
                                        <div class="col-sm-4" style="text-align: center; padding: 2px !important;">
                                            <img class="comment-image" src="images/slider/foody-slider1.jpg">
                                        </div>
                                        {{--                                            <div class="col-md-4" style="text-align: center; padding: 2px !important;">--}}
                                        {{--                                                <img class="comment-image" src="images/slider/foody-slider1.jpg">--}}
                                        {{--                                            </div>--}}
                                    </div>
                                </div>
                            </div>
                            <div class="comment-footer">
                                <div class="row mb-5">
                                    <div class="mr-20">
                                        <i style="color: blue" class="fa fa-heart mr-5"></i><span>van A và 10 người khác</span>
                                    </div>
                                </div>
                                <hr class="my-hr">
                                <div class="row mb-5">
                                    <div class="mr-20">
                                        <i class="fa fa-heart mr-5"></i><span>Like</span>
                                    </div>
                                    <div class="mr-20">
                                        <i class="fa fa-comment mr-5" ></i><span>Comment</span>
                                    </div>
                                    <div  class="mr-20">
                                        <i class="fa fa-exclamation-triangle report-btn mr-5"></i><span>Rort</span>
                                    </div>
                                </div>
                                <hr class="my-hr">
                                <div class="pb-5 sub-comment" >
                                    <div class="row">
                                        <div class="mt-10 mb-10 ml-20 mr-10">
                                            <img class="avatar" src="images/Screenshot_50.png">
                                        </div>
                                        <div class="mt-10">
                                            <p class="comment-user" style="margin-bottom: -5px !important;">Hà Thanh Đoàn</p>
                                            <p style="margin-bottom: -5px !important; font-size: 12px !important;">12/01/2021 10:20:21</p>
                                        </div>
                                    </div>
                                    <div class="comment-content" style="margin: -7px 10px 0px 52px">
                                        <p>hehehehehehehehehehehehehehehehehehehehehehehehehehehheheheheheheheheheheheheheheheheheheheheheheheheheheheheheheheheheheheheheheheheheheehehehehehehehehehehehehehehehe</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="my-card comment-panel">
                            <div class="comment-header">
                                <div class="row">
                                    <div class="mt-10 mb-10 ml-20 mr-10">
                                        <img class="avatar" src="images/Screenshot_50.png">
                                    </div>
                                    <div class="mt-10">
                                        <p class="comment-user" style="margin-bottom: -5px !important;">Hà Thanh Đoàn</p>
                                        <p style="margin-bottom: -5px !important; font-size: 12px !important;">12/01/2021 10:20:21</p>
                                    </div>
                                    <p class="rating-point">5</p>
                                </div>
                            </div>
                            <div class="my-comment-body">
                                <div class="comment-content">
                                    <p style="color: black; margin-bottom: 0px !important;">sjflksd lkdsjfkl  jflksdkf jfklsdjf lsfjkdjl sjdflk
                                        sjflksd lkdsjfkl  jflksdkf jfklsdjf lsfjkdjl sjdflk
                                        sjflksd lkdsjfkl  jflksdkf jfklsdjf lsfjkdjl
                                        sjflksd lkdsjfkl  jflksdkf jfklsdjf lsfjkdjl
                                        sjflksd lkdsjfkl  jflksdkf jfklsdjf lsfjkdjl
                                        sjflksd lkdsjfkl  jflksdkf jfklsdjf lsfjkdjl
                                        sjflksd lkdsjfkl  jflksdkf jfklsdjf lsfjkdjl</p>
                                    <a href="#">See more</a>
                                </div>
                                <div class="comment-picture">
                                    <div class="row" style="padding: 20px">
                                        <div class="col-sm-4" style="text-align: center; padding: 2px !important; ">
                                            <img class="comment-image" style="text-align: center" src="images/slider/foody-slider1.jpg">
                                        </div>
                                        <div class="col-sm-4" style="text-align: center; padding: 2px !important;">
                                            <img class="comment-image"  src="images/slider/foody-slider1.jpg">
                                        </div>
                                        <div class="col-sm-4" style="text-align: center; padding: 2px !important;">
                                            <img class="comment-image" src="images/slider/foody-slider1.jpg">
                                        </div>
                                        {{--                                            <div class="col-md-4" style="text-align: center; padding: 2px !important;">--}}
                                        {{--                                                <img class="comment-image" src="images/slider/foody-slider1.jpg">--}}
                                        {{--                                            </div>--}}
                                    </div>
                                </div>
                            </div>
                            <div class="comment-footer">
                                <div class="row mb-5">
                                    <div class="mr-20">
                                        <i style="color: blue" class="fa fa-heart mr-5"></i><span>van A và 10 người khác</span>
                                    </div>
                                </div>
                                <hr class="my-hr">
                                <div class="row mb-5">
                                    <div class="mr-20">
                                        <i class="fa fa-heart mr-5"></i><span>Like</span>
                                    </div>
                                    <div class="mr-20">
                                        <i class="fa fa-comment mr-5" ></i><span>Comment</span>
                                    </div>
                                    <div  class="mr-20">
                                        <i class="fa fa-exclamation-triangle report-btn mr-5"></i><span>Rort</span>
                                    </div>
                                </div>
                                <hr class="my-hr">
                                <div class="pb-5 sub-comment" >
                                    <div class="row">
                                        <div class="mt-10 mb-10 ml-20 mr-10">
                                            <img class="avatar" src="images/Screenshot_50.png">
                                        </div>
                                        <div class="mt-10">
                                            <p class="comment-user" style="margin-bottom: -5px !important;">Hà Thanh Đoàn</p>
                                            <p style="margin-bottom: -5px !important; font-size: 12px !important;">12/01/2021 10:20:21</p>
                                        </div>
                                    </div>
                                    <div class="comment-content" style="margin: -7px 10px 0px 52px">
                                        <p>hehehehehehehehehehehehehehehehehehehehehehehehehehehheheheheheheheheheheheheheheheheheheheheheheheheheheheheheheheheheheheheheheheheheheehehehehehehehehehehehehehehehe</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Area End Here -->
    <!-- Begin Li's Laptop Product Area -->
    <section class="product-area li-laptop-product pt-30 pb-50">
        <div class="container">
            <div class="row">
                <!-- Begin Li's Section Area -->
                <div class="col-lg-12">
                    <div class="li-section-title">
                        <h2>
                            <span>15 other products in the same category:</span>
                        </h2>
                    </div>
                    <div class="row">
                        <div class="product-active owl-carousel">
                            <div class="col-lg-12">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="single-product.html">
                                            <img src="images/product/large-size/1.jpg" alt="Li's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                    </div>
                                    <div class="product_desc">
                                        <div class="product_desc_info">
                                            <div class="product-review">
                                                <h5 class="manufacturer">
                                                    <a href="product-details.html">Graphic Corner</a>
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
                                            <h4><a class="product_name" href="single-product.html">Accusantium dolorem1</a></h4>
                                            <div class="price-box">
                                                <span class="new-price">$46.80</span>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul class="add-actions-link">
                                                <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
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
                                        <a href="single-product.html">
                                            <img src="images/product/large-size/2.jpg" alt="Li's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                    </div>
                                    <div class="product_desc">
                                        <div class="product_desc_info">
                                            <div class="product-review">
                                                <h5 class="manufacturer">
                                                    <a href="product-details.html">Studio Design</a>
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
                                            <h4><a class="product_name" href="single-product.html">Mug Today is a good day</a></h4>
                                            <div class="price-box">
                                                <span class="new-price new-price-2">$71.80</span>
                                                <span class="old-price">$77.22</span>
                                                <span class="discount-percentage">-7%</span>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul class="add-actions-link">
                                                <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
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
                                        <a href="single-product.html">
                                            <img src="images/product/large-size/3.jpg" alt="Li's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                    </div>
                                    <div class="product_desc">
                                        <div class="product_desc_info">
                                            <div class="product-review">
                                                <h5 class="manufacturer">
                                                    <a href="product-details.html">Graphic Corner</a>
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
                                            <h4><a class="product_name" href="single-product.html">Accusantium dolorem1</a></h4>
                                            <div class="price-box">
                                                <span class="new-price">$46.80</span>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul class="add-actions-link">
                                                <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
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
                                        <a href="single-product.html">
                                            <img src="images/product/large-size/4.jpg" alt="Li's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                    </div>
                                    <div class="product_desc">
                                        <div class="product_desc_info">
                                            <div class="product-review">
                                                <h5 class="manufacturer">
                                                    <a href="product-details.html">Studio Design</a>
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
                                            <h4><a class="product_name" href="single-product.html">Mug Today is a good day</a></h4>
                                            <div class="price-box">
                                                <span class="new-price new-price-2">$71.80</span>
                                                <span class="old-price">$77.22</span>
                                                <span class="discount-percentage">-7%</span>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul class="add-actions-link">
                                                <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
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
                                        <a href="single-product.html">
                                            <img src="images/product/large-size/5.jpg" alt="Li's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                    </div>
                                    <div class="product_desc">
                                        <div class="product_desc_info">
                                            <div class="product-review">
                                                <h5 class="manufacturer">
                                                    <a href="product-details.html">Graphic Corner</a>
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
                                            <h4><a class="product_name" href="single-product.html">Accusantium dolorem1</a></h4>
                                            <div class="price-box">
                                                <span class="new-price">$46.80</span>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul class="add-actions-link">
                                                <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
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
                                        <a href="single-product.html">
                                            <img src="images/product/large-size/6.jpg" alt="Li's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                    </div>
                                    <div class="product_desc">
                                        <div class="product_desc_info">
                                            <div class="product-review">
                                                <h5 class="manufacturer">
                                                    <a href="product-details.html">Studio Design</a>
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
                                            <h4><a class="product_name" href="single-product.html">Mug Today is a good day</a></h4>
                                            <div class="price-box">
                                                <span class="new-price new-price-2">$71.80</span>
                                                <span class="old-price">$77.22</span>
                                                <span class="discount-percentage">-7%</span>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul class="add-actions-link">
                                                <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Li's Section Area End Here -->
            </div>
        </div>
    </section>
@endsection
