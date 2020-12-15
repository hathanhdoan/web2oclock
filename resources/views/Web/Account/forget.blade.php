@extends('Web.Layouts.app')
@section('content')
    <div class="wrap" id="send-mail" class="mb-5 login" api-send-mail="{{route('api.account.send_mail')}}">
        <div class="register">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img class="w-100 register-img images" data-src="../assets/images/profile/quen-mat-khau.png" alt="">
                    </div>
                    <div class="col-md-6">
                        <h3 class="register-title">QUÊN MẬT KHẨU</h3>
                        <form>
                            <div class="form-group">
                                <label class="register-label" for="email">Email để lấy lại mật khẩu</label>
                                <input v-validate="'required|email'" data-vv-as="Email" name="email"
                                       v-model="data_create.email" type="email" class="form-control register-input" id="email" placeholder="Nhập email của bạn">
                                <div v-cloak v-show="errors.has('email')" class="error">
                                    <i class="fas fa-exclamation-circle error-icon"></i>
                                    <span class="error-text">@{{ errors.first('email') }}</span>
                                </div>
                            </div>
                            <p class="register-label">Vui lòng nhập email mà bạn có để lấy lại mật khẩu?</p>
                            <button  v-show="!loading" @click.stop.prevent="sendMail()" type="submit" class="button button-register">GỬI</button>
                            <button v-show="loading" type="submit" class="button button-register"><i class="fas fa-spinner fa-spin mr-3"></i>GỬI</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        var sendMail = new objectSendMail('#send-mail');
        function objectSendMail(element) {
            var timeout = null;
            Vue.use(VeeValidate, {
                locale: 'vi',
                fieldsBagName: 'vvFields'
            });
            this.vm = new Vue({
                el:element,
                data:{
                    loading: false,
                    api_send_mail: $(element).attr('api-send-mail'),
                    data_create: {
                        email:''
                    },
                },
                methods:{
                    sendMail: function(){
                        var vm = this;
                        vm.loading = true;
                        this.$validator.validate().then(valid => {
                            if(valid) {
                                axios.post(vm.api_send_mail, vm.data_create).then(function (response) {
                                    vm.loading = false;
                                    var data = response.data;
                                    if (data.error) {
                                        helper.showNotification(data.message, 'danger')
                                        return;
                                    }
                                    helper.showNotification(data.message, 'success')
                                })
                            }else {
                                vm.loading = false;
                            }

                        })
                    },
                },

                created: function () {

                },
                watch:{

                }
            });
            return this;
        }

    </script>
@endsection
