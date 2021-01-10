@extends('Web.Layout.app')
@section('content')
    <div class="row" id="moreObj" style="margin: 0px 0px 10px"
         type="{{\request()->type}}" api-get-open-res="{{route('api.res.get_open_res')}}"
         api-get-nearest="{{route('api.res.nearest')}}"
         api-get-suggest="{{route('api.res.suggest')}}">

    </div>
    <div id="map2" style="overflow: hidden;height: 275px;max-width: 1135px; margin-top: 150px;margin: auto;
    border-radius: 10px;"></div>
@endsection
@section('script')
    <script>
        function MoreObject() {
            this.api_get_open_res = $('#moreObj').attr('api-get-open-res');
            this.page=1;
            var pr = this;
            this.getOpenRes = function (long, lat) {
                $.ajax({
                    url: pr.api_get_open_res,
                    method: 'POST',
                    data: {
                        user_location: {
                            Latitude: lat,
                            Longitude: long
                        },
                        page : pr.page
                    }
                }).done(function (result) {
                    if (result.success) {
                        var res_list = result.data;
                        $xhtml = $('#moreObj').html();
                        for (i in res_list) {
                            $xhtml += '<div class="saved-res">\n' +
                                '                <section>\n' +
                                '                    <div class="card booking-card" style="max-width: 22rem;">\n' +
                                '                        <div class="view overlay"><img\n' +
                                '                                src="' + res_list[i]['PhotoUrl'] + '"\n' +
                                '                                alt="Card image cap" class="card-img-top"> <a href="res-detail/' + res_list[i]['Id'] + '">\n' +
                                '                                <div class="mask rgba-white-slight waves-effect waves-light"></div>\n' +
                                '                            </a></div>\n' +
                                '                        <div class="card-body"><h4 class="card-title font-weight-bold"><a href="res-detail/' + res_list[i]['Id'] + '">' + res_list[i]['Name'] + '</a>\n' +
                                '                                <p class="mt-10"><i class="mr-10 fas fa-clock"></i><span>' + res_list[i]['restaurant_detail']['open_time'] + '</span></p>\n' +
                                '                            </h4>\n' +
                                '                            <a class="mb-2"><i class="fas fa-map-marker-alt"></i>&nbsp;' + res_list[i]['address_summary'] + '</a>\n' +
                                '                            <p class="card-text"></p>\n' +
                                '                        </div>\n' +
                                '                    </div>\n' +
                                '                </section>\n' +
                                '            </div>'
                        }
                        $('#moreObj').html($xhtml);
                    } else {

                    }
                })
            }
            this.getNearest = function () {
                $.ajax({
                    method: 'POST',
                    data: {
                        user_location: {
                            Latitude: 10.8380621,
                            Longitude: 106.78649750000001
                        },
                        page : pr.page
                    },
                    url: $('#moreObj').attr('api-get-nearest')
                }).done(function (data) {
                    var res_list = data.data;
                    $xhtml = $('#moreObj').html();
                    for (i in res_list) {
                        $xhtml += '<div class="saved-res">\n' +
                            '                <section>\n' +
                            '                    <div class="card booking-card" style="max-width: 22rem;">\n' +
                            '                        <div class="view overlay"><img\n' +
                            '                                src="' + res_list[i]['PhotoUrl'] + '"\n' +
                            '                                alt="Card image cap" class="card-img-top"> <a href="res-detail/' + res_list[i]['Id'] + '">\n' +
                            '                                <div class="mask rgba-white-slight waves-effect waves-light"></div>\n' +
                            '                            </a></div>\n' +
                            '                        <div class="card-body"><h4 class="card-title font-weight-bold"><a href="res-detail/' + res_list[i]['Id'] + '">' + res_list[i]['Name'] + '</a>\n' +
                            '                                <p class="mt-10"><i class="mr-10 fas fa-clock"></i><span>' + res_list[i]['restaurant_detail']['open_time'] + '</span></p>\n' +
                            '                            </h4>\n' +
                            '                            <a class="mb-2"><i class="fas fa-map-marker-alt"></i>&nbsp;' + res_list[i]['address_summary'] + '</a>\n' +
                            '                            <p class="card-text"></p>\n' +
                            '                        </div>\n' +
                            '                    </div>\n' +
                            '                </section>\n' +
                            '            </div>'
                    }
                    $('#moreObj').html($xhtml);
                })
            }
            this.get_suggest_res = function (customer_id) {
                $.ajax({
                    method: 'POST',
                    data: {
                        user_id: customer_id
                    },
                    url: $('#moreObj').attr('api-get-suggest')
                }).done(function (data) {
                    var res_list = data.data;
                    $xhtml = $('#moreObj').html();
                    for (i in res_list) {
                        $xhtml += '<div class="saved-res">\n' +
                            '                <section>\n' +
                            '                    <div class="card booking-card" style="max-width: 22rem;">\n' +
                            '                        <div class="view overlay"><img\n' +
                            '                                src="' + res_list[i]['PhotoUrl'] + '"\n' +
                            '                                alt="Card image cap" class="card-img-top"> <a href="res-detail/' + res_list[i]['Id'] + '">\n' +
                            '                                <div class="mask rgba-white-slight waves-effect waves-light"></div>\n' +
                            '                            </a></div>\n' +
                            '                        <div class="card-body"><h4 class="card-title font-weight-bold"><a href="res-detail/' + res_list[i]['Id'] + '">' + res_list[i]['Name'] + '</a>\n' +
                            '                                <p class="mt-10"><i class="mr-10 fas fa-clock"></i><span>' + res_list[i]['restaurant_detail']['open_time'] + '</span></p>\n' +
                            '                            </h4>\n' +
                            '                            <a class="mb-2"><i class="fas fa-map-marker-alt"></i>&nbsp;' + res_list[i]['address_summary'] + '</a>\n' +
                            '                            <p class="card-text"></p>\n' +
                            '                        </div>\n' +
                            '                    </div>\n' +
                            '                </section>\n' +
                            '            </div>'
                    }
                    $('#moreObj').html($xhtml);
                })
            }
            this.setPage = function (val){
                this.page = val;
            }
            return this;
        }

        $(document).ready(function () {
            var type = $('#moreObj').attr('type');
            var moreObj = new MoreObject();
            var long = 106.7864965;
            var lat = 10.8380984;
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function (position) {
                    long = position.coords.longitude;
                    lat = position.coords.latitude;
                    console.log('Lat: ' + position.coords.latitude + ' Lng: ' + position.coords.longitude);
                });
            }
            // moreObj.getOpenRes(long,lat);
            // moreObj.getNearest();
            var user = localStorage.getItem('user');
            switch (type) {
                case 'nearest':
                    moreObj.getNearest();
                    break;
                case 'open':
                    moreObj.getOpenRes(long,lat);
                    break;
                case 'suggest':
                    if (user) {
                        user = JSON.parse(user);
                        moreObj.get_suggest_res(user['Id']);
                    } else {
                        helper.showNotification('Vui lòng đăng nhập', 'danger')
                    }
                    break
            }

        });
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

            function initMap2() {
                console.log('initial map 2........');
                var res_list = $('#moreObj').attr('res-list');
                res_list = JSON.parse(res_list);
                var long = $('#moreObj').attr('long');
                var lat = $('#moreObj').attr('lat');
                if(!long){
                    long = res_list[0]['Longitude'];
                }
                if(!lat){
                    lat = res_list[0]['Latitude'];
                }
                var map = new google.maps.Map(document.getElementById('map2'), {
                    // center: new google.maps.LatLng(10.8139, 106.717),
                    center: new google.maps.LatLng(lat, long),
                    zoom: 15
                });
                var infoWindow = new google.maps.InfoWindow;
                console.log(res_list);
                Array.prototype.forEach.call(res_list, function (res) {
                    var id = res['Id'];
                    var name = res['Name'];
                    var address = res['Address'];
                    var type = 'restaurant';
                    var open_time = res['restaurant_detail'] ? res['restaurant_detail']['open_time'] : 'Chưa có dữ liệu'
                    var point = new google.maps.LatLng(
                        parseFloat(res['Latitude']),
                        parseFloat(res['Longitude']));

                    var infowincontent = document.createElement('div');
                    var res_name = createElement('a', name, null, {
                        'id': 'res_name_gg_map',
                        'href': '/res-detail/'+id,
                        'target': '_blank'
                    });
                    infowincontent.appendChild(res_name);
                    infowincontent.appendChild(document.createElement('br'));

                    var text = createElement('text', address, null, null, null);
                    infowincontent.appendChild(text);
                    infowincontent.appendChild(document.createElement('br'));

                    var time_label = createElement('strong', 'Giờ mở cửa: ', 'font-style:italic', null);
                    infowincontent.appendChild(time_label);

                    var time = createElement('text', open_time, 'color:green; font-weight:bold', null);
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

        </script>
        <script defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzlVX517mZWArHv4Dt3_JVG0aPmbSE5mE&callback=initMap2">
        </script>
@endsection
