<!doctype html>
<html class="no-js" lang="zxx">

<!-- index28:48-->
@include('Web.Layout.header')
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- Begin Body Wrapper -->
<div class="body-wrapper" id="app" api-logout="{{route('api.account.logout')}}">

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
    <div class="system_message">
        <div class="title"></div>
    </div>
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
    <div id="commentPictureModel" class="modal fade modal-wrapper" tabindex="-1" role="dialog">
        <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="/images/new_logo.png" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="/images/slider/foody-slider1.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="/images/slider/foody-slider1.jpg" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <i style="font-size: x-large" class="fas fa-angle-left"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <i style="font-size: x-large" class="fas fa-angle-right"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quick View | Modal Area End Here -->
    <!-- Model comment -->
{{--    <div class="modal fade modal-wrapper" id="comment" >--}}
{{--        <div class="modal-dialog modal-dialog-centered" role="document">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="modal-body">--}}
{{--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                        <span aria-hidden="true">&times;</span>--}}
{{--                    </button>--}}
{{--                    <div class="modal-inner-area row">--}}
{{--                        <div class="col-lg-5 col-md-6 col-sm-6">--}}
{{--                            <!-- Product Details Left -->--}}
{{--                            <div class="product-details-left">--}}
{{--                                <div class="product-details-images slider-navigation-1">--}}
{{--                                    <div class="lg-image">--}}
{{--                                        <img src="/images/product/large-size/1.jpg" alt="product image">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-4" style="padding-right: 5px !important; text-align: right">--}}
{{--                                        <p>Vị trí</p>--}}
{{--                                        <p>Giá cả</p>--}}
{{--                                        <p>Chất lượng</p>--}}
{{--                                        <p>Dịch vụ</p>--}}
{{--                                        <p>Không gian</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-6" style=" padding-left: 5px !important; text-align: left">--}}
{{--                                        <input class="custom-range" type="range" min="0" max="10">--}}
{{--                                        <input class="custom-range" type="range" min="0" max="10">--}}
{{--                                        <input class="custom-range" type="range" min="0" max="10">--}}
{{--                                        <input class="custom-range" type="range" min="0" max="10">--}}
{{--                                        <input class="custom-range" type="range" min="0" max="10">--}}
{{--                                    </div>--}}
{{--                                    <div class="col-2" style="padding-left: 5px !important; text-align: left">--}}
{{--                                        <p style="color: #9c25b9!important;">25</p>--}}
{{--                                        <p style="color: #00c851 !important;">7</p>--}}
{{--                                        <p style="color: black!important;">7</p>--}}
{{--                                        <p style="color: red!important;">2</p>--}}
{{--                                        <p style="color: red!important;">2</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!--// Product Details Left -->--}}
{{--                        </div>--}}

{{--                        <div class="col-lg-7 col-md-6 col-sm-6">--}}
{{--                            <div class="product-details-view-content pt-60">--}}
{{--                                <div class="product-info">--}}
{{--                                    <h2>Ahihi - Fruit & Yogurt - Shop Online</h2>--}}
{{--                                    <span class="product-details-ref">55 Đặng Thùy Trâm, BÌnh Thạnh</span>--}}
{{--                                    <div class="product-desc">--}}
{{--                                        <textarea>--}}
{{--                                                    100% cotton double printed dress. Black and white striped top and orange high waisted skater skirt bottom. Lorem ipsum dolor sit amet, consectetur adipisicing elit. quibusdam corporis, earum facilis et nostrum dolorum accusamus similique eveniet quia pariatur.--}}
{{--                                        </textarea>--}}
{{--                                    </div>--}}
{{--                                    <p>Chọn hình</p>--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="select-img-comment"><img class="img-comment" src="/images/slider/foody-slider1.jpg"><i class="cancel far fa-times-circle"></i></div>--}}
{{--                                        <div class="select-img-comment"><img class="img-comment" src="/images/slider/foody-slider1.jpg"><i class="cancel far fa-times-circle"></i></div>--}}
{{--                                        <div class="select-img-comment"><img class="img-comment" src="/images/slider/foody-slider1.jpg"><i class="cancel far fa-times-circle"></i></div>--}}
{{--                                        <div class="select-img-comment"><img class="img-comment" src="/images/slider/foody-slider1.jpg"><i class="cancel far fa-times-circle"></i></div>--}}
{{--                                        <div class="select-img-comment"> <input style="margin-top: -5px; opacity: 0; height: 140px" type="file"><i id="add-img-comment" class="fas fa-plus"></i></div>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- Quick View | Modal Area End Here -->

</div>
<!-- Body Wrapper End Here -->
<!-- jQuery-V1.12.4 -->
<script src="/js/vendor/jquery-1.12.4.min.js"></script>
<!-- Popper js -->
<script src="/js/vendor/popper.min.js"></script>
<!-- Bootstrap V4.1.3 Fremwork js -->
<script src="/js/bootstrap.min.js"></script>
<!-- Ajax Mail js -->
<script src="/js/ajax-mail.js"></script>
<!-- Meanmenu js -->
<script src="/js/jquery.meanmenu.min.js"></script>
<!-- Wow.min js -->
<script src="/js/wow.min.js"></script>
<!-- Slick Carousel js -->
<script src="/js/slick.min.js"></script>
<!-- Owl Carousel-2 js -->
<script src="/js/owl.carousel.min.js"></script>
<!-- Magnific popup js -->
<script src="/js/jquery.magnific-popup.min.js"></script>
<!-- Isotope js -->
<script src="/js/isotope.pkgd.min.js"></script>
<!-- Imagesloaded js -->
<script src="/js/imagesloaded.pkgd.min.js"></script>
<!-- Mixitup js -->
<script src="/js/jquery.mixitup.min.js"></script>
<!-- Countdown -->
<script src="/js/jquery.countdown.min.js"></script>
<!-- Counterup -->
<script src="/js/jquery.counterup.min.js"></script>
<!-- Waypoints -->
<script src="/js/waypoints.min.js"></script>
<!-- Barrating -->
<script src="/js/jquery.barrating.min.js"></script>
<!-- Jquery-ui -->
<script src="/js/jquery-ui.min.js"></script>
<!-- Venobox -->
<script src="/js/venobox.min.js"></script>
<!-- Nice Select js -->
<script src="/js/jquery.nice-select.min.js"></script>
<!-- ScrollUp js -->
<script src="/js/scrollUp.min.js"></script>
<!-- Main/Activator js -->
<script src="/js/main.js"></script>
<script src="/js/vue.js"></script>
<script src="/js/axios.min.js"></script>
@yield('script')
</body>
<script>
    function App(){
        this.api_logout = $('#app').attr('api-logout');

        this.logout = function (){
            var token = localStorage.getItem('token');
            $.ajax({
                method: "GET",
                headers : {
                    "Authorization" : "Bearer " + token
                },
                url : this.api_logout
            }).done(function (data,error){
                if(data.success){
                    localStorage.removeItem('user');
                    localStorage.removeItem('token');
                    window.location.href = '/login'
                }else{
                    helper.showNotification(data.message,'danger');
                }
            }).fail(function (data){
                helper.showNotification(data.responseJSON.message, 'danger');
            });
        }
        this.initial = function (){
            var user = localStorage.getItem('user');
            if(user){
                user = JSON.parse(user);
                var avatar = user['Avatar'] ? user['Avatar'] : '/images/menu/logo/avatar.jpg'
                var name = user['DisplayName'] ? user['DisplayName'] : user['email'];
                $('#avatar').attr('src',avatar);
                $('#display-name').text(name);
                $('#login-info').removeClass('hide-elm');

            }else{
                $('#btn-login-index').removeClass('hide-elm');
            }
        }
        return this;
    }
    $(document).ready(function (){
        $(document).trigger('vue-loaded');
        var app = new App();
        app.initial();
        $('#btn-logout').click(function (){
            app.logout();
        });
        $('#btn-login-index').click(function (){
            window.location.href = 'login';
        });
    });
</script>
<!-- index30:23-->
</html>
