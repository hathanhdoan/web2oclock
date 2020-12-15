@extends('Web.Layouts.app')
@section('content')
    <div class="wrap">
        <div class="register" id='register' api-register="{{route('api.account.register')}}">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img class="w-100 images d-none d-sm-block" data-src="../assets/images/profile/dang-ky.png"
                             alt="">
                    </div>
                    <div class="col-md-6">
                        <form>
                            <div class="form-group register-form">
                                <label class="register-label" for="name">Tên tài khoản</label>
                                <input v-validate="'required'" data-vv-as="Tên" name="name"
                                    v-model="data_register.name" type="text" class="form-control register-input" id="name"
                                       placeholder="Nhập tên tài khoản">
                                <div v-cloak v-show="errors.has('name')" class="error">
                                    <i class="fas fa-exclamation-circle error-icon"></i>
                                    <span class="error-text">@{{ errors.first('name') }}</span>
                                </div>
                            </div>
                            <div class="form-group register-form">
                                <label class="register-label" for="email">Email</label>
                                <input v-validate="'required|email'" data-vv-as="Email" name="email"
                                       v-model="data_register.email" type="email" class="form-control register-input" id="email"
                                       placeholder="Nhập email">
                                <div v-cloak v-show="errors.has('email')" class="error">
                                    <i class="fas fa-exclamation-circle error-icon"></i>
                                    <span class="error-text">@{{ errors.first('email') }}</span>
                                </div>
                            </div>
                            <div class="form-group register-form">
                                <label class="register-label" for="exampleInputPassword1">Mật khẩu</label>
                                <input v-validate="'required|min:6'" data-vv-as="Mật khẩu" name="password"
                                       v-model="data_register.password" type="password" class="form-control register-input" id="exampleInputPassword1"
                                       placeholder="Nhập mật khẩu">
                                <div v-cloak v-show="errors.has('password')" class="error">
                                    <i class="fas fa-exclamation-circle error-icon"></i>
                                    <span class="error-text">@{{ errors.first('password') }}</span>
                                </div>
                            </div>

                            <button v-if="!loading" @click.stop.prevent="register()" type="submit" class="button button-register">Đăng ký</button>
                            <button  v-if="loading"  type="submit" class="button button-register d-none"><i
                                    class="fas fa-spinner fa-spin mr-3"></i>Đăng ký
                            </button>
                        </form>
                        <a class="register-link" href="/login">Đã có tài khoản ĐĂNG NHẬP</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        var register = new objectRegister('#register');

        function objectRegister(element) {
            var timeout = null;
            Vue.use(VeeValidate, {
                locale: 'vi',
                fieldsBagName: 'vvFields'
            });
            this.vm = new Vue({
                el: element,
                data: {
                    loading: false,
                    api_register: $(element).attr('api-register'),
                    token: '',
                    data_register: {
                        name: '',
                        email: '',
                        password: '',
                        confirm_password: '',
                    },

                },
                methods: {
                    register: function () {
                        var vm = this;

                        vm.loading = true;
                        this.$validator.validate().then(valid => {
                            if (valid) {
                                axios.post(vm.api_register, vm.data_register).then(function (response) {
                                    vm.loading = false;
                                    var data = response.data;
                                    if (data.error) {
                                        var message = data.message;
                                        if(data.message[0]){
                                            message = '<ul style="list-style-type: none">';
                                            for(index in data.message){
                                                message += '<li>- '+ data.message[index] + '</li>'
                                            }
                                            message += '</ul>'
                                        }
                                        helper.showNotification(message, 'danger');
                                        return;
                                    }
                                    helper.showNotification(data.message, 'success');
                                    var t = setTimeout(function () {
                                        window.location = '/login'
                                    },2000)
                                })
                            }else{
                                vm.loading = false;
                            }
                        })
                    },
                },

                created: function () {
                },
                watch: {}
            });
            return this;
        }

    </script>
@endsection
