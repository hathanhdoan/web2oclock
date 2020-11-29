@extends('Web.Layout.adminindex')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- breadcrumb-->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li aria-current="page" class="breadcrumb-item active">Admin</li>
                    </ol>
                </nav>
            </div>
            <div class="col-lg-3">
                <!--
                *** PAGES MENU ***
                _________________________________________________________
                -->
                <div class="card sidebar-menu mb-4">
                    <div class="card-header">
                        <h3 class="h4 card-title">Admin</h3>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-pills flex-column">
                            <a href="{{route('admin.add_location')}}" class="nav-link"><i class="fa fa-plus-square-o"></i> Thêm nhà hàng</a>
                            {{--<a href="customer-wishlist.html" class="nav-link"><i class="fa fa-heart"></i> My wishlist</a>--}}
                            <a href="#" class="nav-link"><i class="fa fa-check-square-o"></i> Duyệt nhà hàng</a>
                            <li><a href="#" class="nav-link active"><i class="fa fa fa-list-ul"></i> Danh sách nhà hàng</a></li>
                            <li><a href="#" class="nav-link"><i class="fa fa-bar-chart"></i> Thống kê</a></li>
                            <li><a href="#" class="nav-link"><i class="fa fa-user"></i> Tài khoản</a></li>
                            <a href="#" class="nav-link"><i class="fa fa-sign-out"></i> Đăng xuất</a>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="col-lg-9">
                <div class="box">
                    <h1>Danh sách sản phẩm</h1>
                    {{--<p class="text-muted">If you have any questions, please feel free to <a href="contact.html">contact us</a>, our customer service center is working for you 24/7.</p>--}}
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div>
                                    <label for="City">Thành phố</label>
                                    <select id="City" name="City" class="form-control">
                                        <option selected>--Chọn--</option>
                                        <option value="Tp.HCM">Tp.HCM</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <div>
                                    <label for="District">Quận</label>
                                    <select id="District" name="District" class="form-control">
                                        <option selected>--Chọn--</option>
                                        <option value="Quận 1">Quận 1</option>
                                        <option value="Quận 2">Quận 2</option>
                                        <option value="Quận 3">Quận 3</option>
                                        <option value="Quận 4">Quận 4</option>
                                        <option value="Quận 5">Quận 5</option>
                                        <option value="Quận 6">Quận 6</option>
                                        <option value="Quận 7">Quận 7</option>
                                        <option value="Quận 8">Quận 8</option>
                                        <option value="Quận 9">Quận 9</option>
                                        <option value="Quận 10">Quận 10</option>
                                        <option value="Quận 11">Quận 11</option>
                                        <option value="Quận 12">Quận 12</option>
                                        <option value="Quận Thủ Đức">Quận Thủ Đức</option>
                                        <option value="Quận Gò Vấp">Quận Gò Vấp</option>
                                        <option value="Quận Bình Thạnh">Quận Bình Thạnh</option>
                                        <option value="Quận Tân Phú">Quận Tân Phú</option>
                                        <option value="Quận Phú Nhuận">Quận Phú Nhuận</option>
                                        <option value="Quận Bình Tân">Quận Bình Tân</option>
                                        <option value="Huyện Củ Chi">Huyện Củ Chi</option>
                                        <option value="Huyện Hóc Môn">Huyện Hóc Môn</option>
                                        <option value="Huyện Bình Chánh">Huyện Bình Chánh</option>
                                        <option value="Huyện Nhà Bè">Huyện Nhà Bè</option>
                                        <option value="Huyện Cần Giờ">Huyện Cần Giờ</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        {{--<div class="col-md-4">--}}
                        {{--<a class="btn btn-primary btn-sm" onclick="getTable(this)">Xác--}}
                        {{--nhận</a>--}}
                        {{--</div>--}}
                        <div class="table-responsive table table-bordered table-striped" >
                            <table style="height: auto" class="table table-hover">
                                <th></th>
                                @if(isset($res_list))
                                    @foreach($res_list as $item)
                                        <div id="list">{{$item['Name']}}</div>
                                    @endforeach
                                @endif
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col-md-9-->
        </div>

    </div>


@endsection
