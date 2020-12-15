@extends('Web.Layouts.app')
@section('content')
    <div class="wrap">
        <div class="register">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img class="w-100 register-img images" data-src="../assets/images/profile/dang-nhap.png" alt="">
                    </div>
                    <div class="col-md-6" id="login-contents" api-login="{{route('api.account.login')}}"
                         data-login-google="{{$data_login_google ?? 0}}"
                         email-cookie="{{$_COOKIE['email']??''}}" password-cookie="{{$_COOKIE['password']??''}}"
                         check-me="{{isset($_COOKIE['email'])?true:false}}"
                         api-check-has-password="{{route('api.account.check_has_password')}}"
                         browser-id="{{request()->browser_id??''}}">
                        <form>
                            <div class="form-group register-form">
                                <label class="register-label" for="name">Email</label>
                                <input v-validate="'required|email'" data-vv-as="Email" name="email"
                                       v-model="data_login.email" type="email" class="form-control register-input"
                                       id="name"
                                       placeholder="Nhập email">
                                <div v-cloak v-show="errors.has('email')" class="error">
                                    <i class="fas fa-exclamation-circle error-icon"></i>
                                    <span class="error-text">@{{ errors.first('email') }}</span>
                                </div>
                            </div>
                            <div class="form-group register-form">
                                <label class="register-label" for="exampleInputPassword1">Mật khẩu</label>
                                <input v-validate="'required|min:6'" data-vv-as="Mật khẩu" name="password"
                                       v-model="data_login.password" type="password" class="form-control register-input"
                                       id="exampleInputPassword1"
                                       placeholder="Nhập mật khẩu">
                                <div v-cloak v-show="errors.has('password')" class="error">
                                    <i class="fas fa-exclamation-circle error-icon"></i>
                                    <span class="error-text">@{{ errors.first('password') }}</span>
                                </div>
                            </div>
                            <div class="form-check-inline">
                                <input v-model="data_login.remember" type="checkbox"
                                       class="form-check-input register-box" id="exampleCheck1">
                                <label class="form-check-label register-check" for="exampleCheck1">Ghi nhớ đăng
                                    nhập</label>
                            </div>
                            <a href="/forget-password" class="register-forget">Quên mật khẩu?</a>

                            <button v-if="!loading" type="submit" @click.stop.prevent="login()"
                                    class="button button-register">Đăng nhập
                            </button>
                            <button v-if="loading" type="submit" class="button button-register">
                                <i class="fas fa-spinner fa-spin"></i>Đăng nhập
                            </button>

                            <button type="submit" @click.stop.prevent="loginGoogle()" class="button button-google"><img
                                    class="align-top"
                                    src="../assets/images/profile/flat-color-icons_google.png"
                                    alt=""> ĐĂNG NHẬP BẰNG GOOGLE
                            </button>
                        </form>
                        <a class="register-link" href="/register">Chưa có tài khoản ĐĂNG KÝ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        var login = new objectLogin('#login-contents');

        function objectLogin(element) {
            var timeout = null;
            Vue.use(VeeValidate, {
                locale: 'vi',
                fieldsBagName: 'vvFields'
            });
            this.vm = new Vue({
                el: element,
                data: {
                    loading: false,
                    api_login: $(element).attr('api-login'),
                    data_login_google: $(element).attr('data-login-google'),
                    api_check_has_password: $(element).attr('api-check-has-password'),
                    browser_id: $(element).attr('browser-id'),
                    token: '',
                    data_login: {
                        email: $(element).attr('email-cookie'),
                        password: $(element).attr('password-cookie'),
                        remember: $(element).attr('check-me'),
                    },
                    xhtml: '',
                },
                methods: {
                    login: function () {
                        var vm = this;
                        vm.loading = true
                        this.$validator.validate().then(valid => {
                            if (valid) {
                                vm.isLoading = true;
                                axios.post(vm.api_login, vm.data_login).then(function (response) {
                                    vm.loading = false;
                                    var data = response.data;
                                    if (data.error) {
                                        helper.showNotification(data.message, 'danger');
                                        return;
                                    }
                                    localStorage.setItem("token", JSON.stringify(data.token));
                                    localStorage.setItem("user", JSON.stringify(data.user));
                                    if (localStorage.getItem('next_url')) {
                                        var next_url = localStorage.getItem('next_url');
                                        localStorage.removeItem('next_url');
                                        window.location = next_url;
                                    } else {
                                        window.location = '/';
                                    }
                                })
                            } else {
                                vm.loading = false
                            }
                        })
                    },

                    loginGoogle: function () {
                        window.location = '/auth/google'
                    },
                    checkHasPassword: function ($email) {
                        var vm = this;
                        axios.get(vm.api_check_has_password, {params: {email: $email}}).then(function (response) {
                            var data = response.data;
                            if (data.error) {
                                helper.showNotification(data.message, 'danger');
                                vm.loading = false;
                                return;
                            }

                            if (localStorage.getItem('next_url')) {
                                var next_url = localStorage.getItem('next_url');
                                localStorage.removeItem('next_url');
                                window.location = next_url;
                            } else {
                                window.location = '/';
                            }

                            // if (!data.data) {
                            //     window.location = '/change-password';
                            // } else {
                            //     if (localStorage.getItem('next_url')) {
                            //         var next_url = localStorage.getItem('next_url');
                            //         localStorage.removeItem('next_url');
                            //         window.location = next_url;
                            //     } else {
                            //         window.location = '/';
                            //     }
                            // }
                        })
                    },
                },

                created: function () {
                    if (this.browser_id != '') {
                        localStorage.setItem('browser_id', this.browser_id);
                    }
                    if (localStorage.getItem("token") && localStorage.getItem("user")) {
                        window.location = '/';
                    }
                    if (this.data_login_google != 0) {
                        var data_login_google = JSON.parse(this.data_login_google);
                        localStorage.setItem("token", JSON.stringify(data_login_google.token));
                        localStorage.setItem("user", JSON.stringify(data_login_google.user));
                        this.checkHasPassword(data_login_google.user.email);
                    }

                },
                watch: {}
            });
            return this;
        }

    </script>
@endsection
