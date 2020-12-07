<!doctype html>
<html class="no-js" lang="zxx">

<!-- index28:48-->
@include('Web.Layout.header')
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- Begin Body Wrapper -->
<div class="body-wrapper" id="main">
    <!-- Begin Header Area -->
    @include('Web.Layout.menu-top')
    {{--    Menu Left--}}
{{--    <div id="menu-left">--}}
{{--        <a id="scrollUp-custom" @click.stop.prevent="showMenuLeft()"--}}
{{--           style="position: absolute; bottom:207px;right:268px; z-index: 2147483647;"><i class="fas fa-bars"></i></a>--}}
{{--        <section id="menu-left-panel" is-hidden="yes">--}}

{{--            <!-- Card -->--}}
{{--            <div class="card booking-card card-menu-left" style="width: 18rem;">--}}
{{--                <!-- Card content -->--}}
{{--                <div class="card-body">--}}

{{--                    <!-- Title -->--}}
{{--                    <h4 style="margin-left: 40px" class="card-title font-weight-bold"><a>Khám phá</a></h4>--}}
{{--                    <!-- Data -->--}}
{{--                    <ul class="menu-sidebar-custom">--}}
{{--                        <li><a class="mb-2">55 Đặng Thùy Trâm<i class="fas fa-angle-right arrow-menu-left"></i></a></li>--}}
{{--                        <li><a class="mb-2">55 Đặng Thùy Trâm<i class="fas fa-angle-right arrow-menu-left"></i></a></li>--}}
{{--                        <li><a class="mb-2">55 Đặng Thùy Trâm<i class="fas fa-angle-right arrow-menu-left"></i></a></li>--}}
{{--                        <li><a class="mb-2">55 Đặng Thùy Trâm<i class="fas fa-angle-right arrow-menu-left"></i></a></li>--}}
{{--                    </ul>--}}

{{--                    <!-- Text -->--}}
{{--                </div>--}}

{{--            </div>--}}
{{--            <!-- Card -->--}}

{{--        </section>--}}
{{--    </div>--}}
{{--    End menu left--}}
    @yield('content')
    <!-- Li's Trendding Products Area End Here -->
    <!-- Begin Footer Area -->
    @include('Web.Layout.footer')
    <!-- Footer Area End Here -->
    <!-- Begin Quick View | Modal Area -->
    <div class="modal fade modal-wrapper" id="exampleModalCenter" >
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal-inner-area row">
                        <div class="col-lg-5 col-md-6 col-sm-6">
                            <!-- Product Details Left -->
                            <div class="product-details-left">
                                <div class="product-details-images slider-navigation-1">
                                    <div class="lg-image">
                                        <img src="images/product/large-size/1.jpg" alt="product image">
                                    </div>
                                    <div class="lg-image">
                                        <img src="images/product/large-size/2.jpg" alt="product image">
                                    </div>
                                    <div class="lg-image">
                                        <img src="images/product/large-size/3.jpg" alt="product image">
                                    </div>
                                    <div class="lg-image">
                                        <img src="images/product/large-size/4.jpg" alt="product image">
                                    </div>
                                    <div class="lg-image">
                                        <img src="images/product/large-size/5.jpg" alt="product image">
                                    </div>
                                    <div class="lg-image">
                                        <img src="images/product/large-size/6.jpg" alt="product image">
                                    </div>
                                </div>
                                <div class="product-details-thumbs slider-thumbs-1">
                                    <div class="sm-image"><img src="images/product/small-size/1.jpg" alt="product image thumb"></div>
                                    <div class="sm-image"><img src="images/product/small-size/2.jpg" alt="product image thumb"></div>
                                    <div class="sm-image"><img src="images/product/small-size/3.jpg" alt="product image thumb"></div>
                                    <div class="sm-image"><img src="images/product/small-size/4.jpg" alt="product image thumb"></div>
                                    <div class="sm-image"><img src="images/product/small-size/5.jpg" alt="product image thumb"></div>
                                    <div class="sm-image"><img src="images/product/small-size/6.jpg" alt="product image thumb"></div>
                                </div>
                            </div>
                            <!--// Product Details Left -->
                        </div>

                        <div class="col-lg-7 col-md-6 col-sm-6">
                            <div class="product-details-view-content pt-60">
                                <div class="product-info">
                                    <h2>Today is a good day Framed poster</h2>
                                    <span class="product-details-ref">Reference: demo_15</span>
                                    <div class="rating-box pt-20">
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
                                    <div class="product-variants">
                                        <div class="produt-variants-size">
                                            <label>Dimension</label>
                                            <select class="nice-select">
                                                <option value="1" title="S" selected="selected">40x60cm</option>
                                                <option value="2" title="M">60x90cm</option>
                                                <option value="3" title="L">80x120cm</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="single-add-to-cart">
                                        <form action="#" class="cart-quantity">
                                            <div class="quantity">
                                                <label>Quantity</label>
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" value="1" type="text">
                                                    <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                    <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                </div>
                                            </div>
                                            <button class="add-to-cart" type="submit">Add to cart</button>
                                        </form>
                                    </div>
                                    <div class="product-additional-info pt-25">
                                        <a class="wishlist-btn" href="wishlist.html"><i class="fa fa-heart-o"></i>Add to wishlist</a>
                                        <div class="product-social-sharing pt-25">
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
        </div>
    </div>
    <!-- Quick View | Modal Area End Here -->

    <!-- Model more comment picture -->
    <div class="modal fade modal-wrapper" id="commentPictureModel" >
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal-inner-area row">
                        <div class="row" style="padding: 20px 20px 0px 20px">
                            <div class="col-sm-4" style="text-align: center; padding: 2px !important; ">
                                <img class="comment-image" style="text-align: center" src="images/slider/foody-slider1.jpg">
                            </div>
                            <div class="col-sm-4" style="text-align: center; padding: 2px !important;">
                                <img class="comment-image"  src="images/slider/foody-slider1.jpg">
                            </div>
                            <div class="col-sm-4" style="text-align: center; padding: 2px !important;">
                                <img class="comment-image" src="images/slider/foody-slider1.jpg">
                            </div>
                            <div class="col-sm-4" style="text-align: center; padding: 2px !important;">
                                <img class="comment-image" src="images/slider/foody-slider1.jpg">
                            </div>
                            <div class="col-sm-4" style="text-align: center; padding: 2px !important;">
                                <img class="comment-image" src="images/slider/foody-slider1.jpg">
                            </div>
                            <div class="col-sm-4" style="text-align: center; padding: 2px !important;">
                                <img class="comment-image" src="images/slider/foody-slider1.jpg">
                            </div>
                            <div class="col-sm-4" style="text-align: center; padding: 2px !important;">
                                <img class="comment-image" src="images/slider/foody-slider1.jpg">
                            </div>
                            <div class="col-sm-4" style="text-align: center; padding: 2px !important;">
                                <img class="comment-image" src="images/slider/foody-slider1.jpg">
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
            </div>
        </div>
    </div>
    <!-- Quick View | Modal Area End Here -->
</div>
<!-- Body Wrapper End Here -->
<!-- jQuery-V1.12.4 -->
<script src={{asset("js/vendor/jquery-1.12.4.min.js")}}></script>
<!-- Popper js -->
<script src={{asset("js/vendor/popper.min.js")}}></script>
<!-- Bootstrap V4.1.3 Fremwork js -->
<script src={{asset("js/bootstrap.min.js")}}></script>
<!-- Ajax Mail js -->
<script src={{asset("js/ajax-mail.js")}}></script>
<!-- Meanmenu js -->
<script src={{asset("js/jquery.meanmenu.min.js")}}></script>
<!-- Wow.min js -->
<script src={{asset("js/wow.min.js")}}></script>
<!-- Slick Carousel js -->
<script src={{asset("js/slick.min.js")}}></script>
<!-- Owl Carousel-2 js -->
<script src={{asset("js/owl.carousel.min.js")}}></script>
<!-- Magnific popup js -->
<script src={{asset("js/jquery.magnific-popup.min.js")}}></script>
<!-- Isotope js -->
<script src={{asset("js/isotope.pkgd.min.js")}}></script>
<!-- Imagesloaded js -->
<script src={{asset("js/imagesloaded.pkgd.min.js")}}></script>
<!-- Mixitup js -->
<script src={{asset("js/jquery.mixitup.min.js")}}></script>
<!-- Countdown -->
<script src={{asset("js/jquery.countdown.min.js")}}></script>
<!-- Counterup -->
<script src={{asset("js/jquery.counterup.min.js")}}></script>
<!-- Waypoints -->
<script src={{asset("js/waypoints.min.js")}}></script>
<!-- Barrating -->
<script src={{asset("js/jquery.barrating.min.js")}}></script>
<!-- Jquery-ui -->
<script src={{asset("js/jquery-ui.min.js")}}></script>
<!-- Venobox -->
<script src={{asset("js/venobox.min.js")}}></script>
<!-- Nice Select js -->
<script src={{asset("js/jquery.nice-select.min.js")}}></script>
<!-- ScrollUp js -->
<script src={{asset("js/scrollUp.min.js")}}></script>
<!-- Main/Activator js -->
<script src={{asset("js/main.js")}}></script>
<script src={{asset("js/vue.js")}}></script>
<script src={{asset("js/axios.min.js")}}></script>
@yield('script')
</body>
<script>
    $.holdReady(true);
    axios.defaults.timeout = 1200000;
    var navbarNav = new objectMain('#main');

    function objectMain(element) {
        if (!$(element).length) {
            return;
        }
        var timeout = null;
        // Vue.config.devtools = true;
        this.vm = new Vue({
            el: element,
            data: {
                // loading: false,
                // api_logout: $(element).attr('api-logout'),
                // token: '',
                // count_cart: 0,
                // user: JSON.parse(localStorage.getItem('user'))
            },
            methods: {
                showMenuLeft:function (){
                    let is_hidden = $('#menu-left-panel').attr('is-hidden');
                    if(is_hidden == 'yes'){
                        $('#menu-left-panel').css('visibility','unset');
                        $('.card-menu-left').css('visibility','unset');
                        $('#menu-left-panel').attr('is-hidden','no')
                    }else {
                        $('.card-menu-left').css('visibility','hidden');
                        $('#menu-left-panel').css('visibility','hidden !i');
                        $('#menu-left-panel').attr('is-hidden','yes')
                    }

                }
                // getLocal:function(){
                //     $.get("https://ipinfo.io/json", function (response) {
                //         if(response.hasOwnProperty('country')){
                //             localStorage.setItem('location',JSON.stringify(response))
                //         }
                //     }, "jsonp");
                // },
                // logout: function () {
                //     var vm = this;
                //     vm.loading = true;
                //     if (!localStorage.getItem("token") || !localStorage.getItem("user")) {
                //         window.location = '/login';
                //     }
                //     var token = 'Bearer ' + localStorage.getItem('token').replace(/['"]+/g, '');
                //     this.token = token;
                //     var config = {
                //         headers: {
                //             Authorization: this.token,
                //             'Content-Type': 'application/json;charset=UTF-8',
                //         }
                //     };
                //     axios.get(vm.api_logout, config).then(function (response) {
                //         vm.loading = false;
                //         var data = response.data;
                //         localStorage.removeItem('user');
                //         localStorage.removeItem('token');
                //         if (localStorage.getItem('expiresIn')) {
                //             localStorage.removeItem('expiresIn');
                //             localStorage.removeItem('login_time');
                //         }
                //         window.location = '/login';
                //     })
                //
                // }
            },
            created: function () {
                console.log(222);
            },
            mounted: function () {
                $(document).trigger('vue-loaded');
            }
        });
    }
</script>
<!-- index30:23-->
</html>
