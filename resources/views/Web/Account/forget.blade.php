@extends('Web.Layout.app')
@section('content')
    <div class="row" id="resetPasswordObj" api-reset-passsword="{{route('api.account.send_mail')}}"
         data-login-google = "{{$data_login_google ?? null}}">
        <div class="col-md-6">
            <img id="img-login" style="width: 100%" src="{{asset('images/background/hihihi-1.jpg')}}">
        </div>
        <div class="col-md-6 col-sm-12 panel-login-right">
            <div class="container">
                <h4 class="mb-20">QUÊN MẬT KHẨU</h4>
                <div class="my-card" style="padding: 20px;border-radius: 15px; box-shadow: -1px 1px 9px 0px #00c851">
                    <div class="login-form-group">
                        <b>Email:</b>
                        <input id="txb-email" type="email" value="thanhdoan1411998@gmail.com" placeholder="Email" class="form-control">
                        <p class="error"></p>
                    </div>
                    <div class="login-form-group">
                        <button id="btn-reset-password" type="submit" class="btn btn-primary">Gửi</button>
                    </div>
                    <div style="text-align: center; margin-top: 5px">
                        <a href="login">Đăng nhập</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        function ResetPasswordObj() {
            this.email = $('#txb-email').val();
            this.api_reset_password = $('#resetPasswordObj').attr('api-reset-passsword');

            this.login = function () {
                $.ajax({
                    method: "POST",
                    data : {
                        email : this.email
                    },
                    url:  this.api_reset_password,
                })
                    .done(function (data) {
                        if(data.success){
                            helper.showNotification(data['message'],'success');
                        }else{
                            helper.showNotification(data['message'],'danger');
                        }
                    });
            };

            this.setEmail = function (val){
                this.email = val;
            }
            return this;
        };
        $(document).ready(function () {
            initial();
            var resetPasswordObj = new ResetPasswordObj();

            $("#txb-email").change(function (){
                resetPasswordObj.setEmail($(this).val());
            });
            $("#btn-reset-password").click(function () {
                loginObj.login()
            });
        });
    </script>
@endsection
