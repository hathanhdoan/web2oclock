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
                            <a href="{{route('admin.list_location_approval')}}" class="nav-link"><i class="fa fa-check-square-o"></i> Duyệt nhà hàng</a>
                            <li><a href="{{route('admin.list_location')}}" class="nav-link"><i class="fa fa fa-list-ul"></i> Danh sách nhà hàng</a></li>
                            <li><a href="{{route('admin.list_user_get')}}" class="nav-link"><i class="fa fa-user"></i> Tài khoản người dùng</a></li>
                            <a href="{{route('admin.list_admin_get')}}" class="nav-link"><i class="fa fa-user"></i> Tài khoản admin</a></li>
                            <li><a href="{{route('admin.statistic')}}" class="nav-link"><i class="fa fa-bar-chart"></i> Thống kê</a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="col-lg-9">
                <div id="product" class="box">
                    <h1>Sửa thông tin người dùng</h1>
                    <hr>
                    <form action="{{route('admin.update_admin_post',[$user->Id])}}" enctype="multipart/form-data"  method="post">
                        {{----}}
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                    <label for="Name">Mã người dùng</label>
                                    <input id="Id" name="Id" type="text" value="{{$user['Id']}}" readonly="true" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <label for="Name">Tên người dùng</label>
                                    <input id="DisplayName" name="DisplayName" type="text" value="{{$user['DisplayName']}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <label for="Email">Email</label>
                                    <input id="Email" name="Email" type="text" value="{{$user['Email']}}"
                                           class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <label for="Password">Password</label>
                                    <input id="Password" name="Password" type="text" value="{{$user['Password']}}"
                                           class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label name="space2"></label>
                            </div>
                            <div class="col-md-12 text-center">
                                <button id="submit" name="submit" type="submit" value="Submit" class="btn btn-primary">
                                    <i class="fa fa-save	"></i> Lưu

                                </button>
                            </div>

                        </div>
                        <!-- /.row-->
                    </form>
                    <div class="col-lg-12">
                        <label name="space3"></label>
                    </div>
                </div>
            </div>
            <!-- /.col-md-9-->
        </div>

    </div>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzlVX517mZWArHv4Dt3_JVG0aPmbSE5mE&callback=initMap" async defer>
    </script>
    <script>
        function initMap() {
            x = document.getElementById("Latitude").value;
            y = document.getElementById("Longitude").value;
            const myLatlng = { lat: 10.776530, lng: 106.700981 };
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 16,
                center: new google.maps.LatLng(x, y),
            });
            // Create the initial InfoWindow.
            let infoWindow = new google.maps.InfoWindow({
                content: "Tọa độ: "+x+", "+y,
                position: myLatlng,
            });
            infoWindow.open(map);
            // Configure the click listener.
            map.addListener("click", (mapsMouseEvent) => {
                // Close the current InfoWindow.
                infoWindow.close();
                // Create a new InfoWindow.
                infoWindow = new google.maps.InfoWindow({
                    position: mapsMouseEvent.latLng,
                });
                infoWindow.setContent(
                    JSON.stringify(mapsMouseEvent.latLng.toJSON(), null, 2)
                );
                let location = mapsMouseEvent.latLng.toJSON();
                document.getElementById('Latitude').value = location.lat;
                document.getElementById('Longitude').value = location.lng;
                infoWindow.open(map);


            });
        }
    </script>
    <script>
        CKEDITOR.config.toolbar = [

            { name: 'document',  items:[ 'Source','-','DocProps','Preview','Print','-','Templates' ] },

            {name: 'clipboard', items : [ 'Cut','Copy','Paste','-','Undo','Redo' ] },
            '/',
            { name: 'styles' , items : [ 'Styles','Format','Font','FontSize' ]},

            { name: 'links',  items:[ 'Link','Unlink','Anchor' ] }
        ];
    </script>

@endsection
