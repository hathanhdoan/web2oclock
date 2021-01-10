@extends('Web.Layout.app')
@section('content')
    <div class="row" id="moreObj" style="margin: 0px 0px 10px" long="{{\request()->long ?? ''}}" lat="{{\request()->lat ?? ''}}"
    res-list="{{is_array($data) ? json_encode($data) : ''}}">
        @foreach($data as $res)
            <div class="saved-res" style="@media (max-width:400px) {
                width: 167px !important;
            }">
                <section>
                    <div class="card booking-card" style="max-width: 22rem;">
                        <div class="view overlay"><img
                                src="{{$res['IsFoody']==1 ? $res['PhotoUrl'] : ('/'.$res['PhotoUrl'])}}"
                                alt="Card image cap" class="card-img-top"> <a href="res-detail/{{$res['Id']}}">
                                <div class="mask rgba-white-slight waves-effect waves-light"></div>
                            </a></div>
                        <div class="card-body"><h4 class="card-title font-weight-bold"><a href="/res-detail/{{$res['Id']}}">{{$res['name_summary']}}</a>
                                <p class="mt-10"><i class="mr-10 fas fa-clock"></i><span>{{$res['restaurant_detail']['open_time']}}</span></p>
                            </h4>
                            <a class="mb-2"><i class="fas fa-map-marker-alt"></i>&nbsp;{{$res['address_summary']}}</a>
                            <p class="card-text"></p>
                        </div>
                    </div>
                </section>
            </div>
        @endforeach
            <div id="map2" style="overflow: hidden;height: 275px;max-width: 1135px; margin-top: 150px;margin: auto;
    border-radius: 10px;"></div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function (){

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

        function initMap() {
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
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzlVX517mZWArHv4Dt3_JVG0aPmbSE5mE&callback=initMap">
    </script>
@endsection
