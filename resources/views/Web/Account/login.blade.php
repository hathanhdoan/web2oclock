@extends('Web.Layout.app')
@section('content')
    <div class="row">
        <div class="col-md-6">
            <img id="img-login" style="width: 100%" src="images/background/hihihi-1.jpg">
        </div>
        <div class="col-md-6 col-sm-12 panel-login-right">
            <div class="container">
                <h4 class="mb-20">ĐĂNG NHẬP</h4>
                <div class="my-card" style="padding: 20px;border-radius: 15px; box-shadow: -1px 1px 9px 0px #00c851">
                    <div class="login-form-group">
                        <b>Email:</b>
                        <input type="email" placeholder="Email" class="form-control">
                    </div>
                    <div class="login-form-group">
                        <b>Mật khẩu:</b>
                        <input type="password" placeholder="Mật khẩu" class="form-control">
                    </div>
                    <div class="login-form-group form-inline">
                        <input style="width: 15px; height: 15px" type="checkbox" class="form-control mr-10"><span>Nhớ mật khẩu</span>
                    </div>
                    <div class="login-form-group">
                        <button class="btn btn-primary" >Đăng nhập</button>

                        <button class="loginBtn loginBtn--google">
                            Login with Google
                        </button>
                    </div>
                    <div style="text-align: center; margin-top: 5px">
                        <p>Bạn chưa có tài khoản? <a href="">ĐĂNG KÝ</a> ngay</p>
                        <a href="#">Quên mật khẩu</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        function LoginObject(){
            let methods = {};
            methods.login = function (){
                console.log('Method login');
            }
            return methods;
        };
        $(document).ready(function (){
            var loginObject = new LoginObject();
            loginObject.login();
        });
    </script>
@endsection
