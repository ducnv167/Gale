<link rel="stylesheet" href="{{asset('users/css/style.css')}}">
<div class="container">
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-dialog modal-lg">
            <div class="modal-content">
                <section class="sign-in">
                    <div class="container">
                        <div class="signin-content">
                            <div class="signin-image">
                                <figure><img src="{{asset('users/images/signin-image.jpg')}}" alt="sing up image">
                                </figure>
                                <p data-toggle="modal" data-target="#myModalRegister" class="signup-image-link btn" data-dismiss="modal">Tạo tài khoản</p>
                                <hr>
                                <p data-toggle="modal" data-target="#myModalForgotPassword" class="signup-image-link btn" data-dismiss="modal">Quên mật khẩu</p>
                            </div>
                            <div class="signin-form">
                                <h2 class="form-title">Đăng nhập</h2>
                                <form method="post" class="register-form" id="login-form"
                                      action="{{route('users.loginHandling')}}">
                                    @csrf
                                    <div class="form-group1">
                                        <input type="email" name="email" id="your_name" placeholder="Your Email"
                                               required/>
                                    </div>
                                    <div class="form-group1">
                                        <label class="label-custom" for="your_pass"><i
                                                    class="zmdi zmdi-lock"></i></label>
                                        <input type="password" name="password" id="your_pass" placeholder="Password"
                                               minlength="6" required/>
                                    </div>
{{--                                    <div class="form-group1">--}}
{{--                                        <input type="checkbox" name="remember-me" id="remember-me" class="agree-term"/>--}}
{{--                                        <label for="remember-me"--}}
{{--                                               class="label-custom label-agree-term"><span><span></span></span>Remember--}}
{{--                                            me</label>--}}
{{--                                    </div>--}}
                                    <div class="form-group1 form-button">
                                        <input type="submit" name="signin" id="signin" class="form-submit"
                                               value="Đăng nhập"/>
                                    </div>
                                </form>
                                <div class="social-login">
                                    <span class="social-label">Hoặc</span>
                                    <ul class="socials">
                                        <li><a href="{{route('login-google','google')}}"><i
                                                    class="display-flex-center zmdi zmdi-google"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>
</div>


