<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">Luxury Gale</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                <li class="nav-item"><a href="agent.html" class="nav-link">Agent</a></li>
                <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="properties.html" class="nav-link">Properties</a></li>
                <li class="nav-item"><p data-toggle="modal" data-target="#myModalRegister" class="nav-link">Register</p>
                </li>
                <li class="nav-item"><p class="nav-link" data-toggle="modal" data-target="#myModal">Login</p></li>
            </ul>
        </div>
    </div>
</nav>
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
                                <p data-toggle="modal" data-target="#myModalRegister" class="signup-image-link">Create
                                    an account</p>
                            </div>

                            <div class="signin-form">
                                <h2 class="form-title">Sign up</h2>
                                <form method="post" class="register-form" id="login-form"
                                      action="{{route('users.loginHandling')}}">
                                    @csrf
                                    <div class="form-group1">
                                        <label for="your_name"><i
                                                    class="zmdi zmdi-account material-icons-name"></i></label>
                                        <input type="email" name="email" id="your_name" placeholder="Your Name"
                                               required/>
                                    </div>
                                    <div class="form-group1">
                                        <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                        <input type="password" name="password" id="your_pass" placeholder="Password"
                                               minlength="6" required/>
                                    </div>
                                    <div class="form-group1">
                                        <input type="checkbox" name="remember-me" id="remember-me" class="agree-term"/>
                                        <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember
                                            me</label>
                                    </div>
                                    <div class="form-group1 form-button">
                                        <input type="submit" name="signin" id="signin" class="form-submit"
                                               value="Log in"/>
                                    </div>
                                </form>
                                <div class="social-login">
                                    <span class="social-label">Or login with</span>
                                    <ul class="socials">
                                        <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                        <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                        <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="modal fade" id="myModalRegister" role="dialog">
        <div class="modal-dialog modal-dialog modal-lg">
            <div class="modal-content">
                <section class="signup">
                    <div class="container">
                        <div class="signup-content">
                            <div class="signup-form">
                                <h2 class="form-title">Register</h2>
                                <form method="post" action="{{route('users.store')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group1">
                                        <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                        <input type="text"
                                               class="<?php echo $errors->first('name') ? 'form-control is-invalid' : ''?>"
                                               name="name" id="name" value="{{old('name')}}" placeholder="Your Name"
                                               minlength="3" required/>
                                    </div>
                                    @if($errors->first('name'))
                                        <p class="text-danger">{{$errors->first('name')}}</p>
                                    @endif
                                    <div class="form-group1">
                                        <label for="email"><i class="zmdi zmdi-email"></i></label>
                                        <input type="email"
                                               class="<?php echo $errors->first('email') ? 'form-control is-invalid' : ''?>"
                                               name="email" id="email" value="{{old('email')}}"
                                               placeholder="Your Email"/>
                                    </div>
                                    @if($errors->first('email'))
                                        <p class="text-danger">{{$errors->first('email')}}</p>
                                    @endif
                                    <div class="form-group1">
                                        <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                        <input type="password" value="{{old('password')}}"
                                               class="<?php echo $errors->first('password') ? 'form-control is-invalid' : ''?>"
                                               name="password"
                                               id="pass" placeholder="Password" min="6" required/>
                                    </div>
                                    @if($errors->first('password'))
                                        <p class="text-danger">{{$errors->first('password')}}</p>
                                    @endif
                                    <div class="form-group1">
                                        <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                        <input type="password"
                                               class="<?php echo $errors->first('repeatPassword') ? 'form-control is-invalid' : ''?>"
                                               name="repeatPassword" id="re_pass" placeholder="Repeat your password"
                                               min="6" required/>
                                    </div>
                                    @if($errors->first('repeatPassword'))
                                        <p class="text-danger">{{$errors->first('repeatPassword')}}</p>
                                    @endif
                                    <div class="form-group1">
                                        <label for="pass"><i class="fas fa-phone"></i></label>
                                        <input type="number" value="{{old('phone')}}"
                                               class="<?php echo $errors->first('phone') ? 'form-control is-invalid' : ''?>"
                                               name="phone"
                                               id="pass" placeholder="Phone" min="10" required/>
                                    </div>
                                    @if($errors->first('phone'))
                                        <p class="text-danger">{{$errors->first('phone')}}</p>
                                    @endif
                                    <div class="form-group">
                                        <select
                                                class="form-control form-control-sm <?php echo $errors->first('role') ? 'is-invalid' : ''?>"
                                                name="role" required>
                                            <option selected disabled>Role</option>
                                            <option <?php echo old('role') == 'Admin' ? 'selected' : ''?> >Admin
                                            </option>
                                            <option <?php echo old('role') == 'Leaser' ? 'selected' : ''?>>Leaser
                                            </option>
                                            <option <?php echo old('role') == 'Render' ? 'selected' : ''?>>Renter
                                            </option>
                                        </select>
                                    </div>
                                    @if($errors->first('role'))
                                        <p class="text-danger">{{$errors->first('role')}}</p>
                                    @endif
                                    <hr>
                                    <div class="form-group">
                                        <input type="file"
                                               class="form-control-file <?php echo $errors->first('image') ? 'is-invalid' : ''?>"
                                               name="image">
                                    </div>
                                    @if($errors->first('image'))
                                        <p class="text-danger">{{$errors->first('image')}}</p>
                                    @endif
                                    <div class="form-group1 form-button">
                                        <input type="submit" name="signup" id="signup" class="form-submit"
                                               value="Register"/>
                                    </div>
                                </form>
                            </div>
                            <div class="signup-image">
                                <figure><img src="{{asset('users/images/signup-image.jpg')}}" alt="sing up image">
                                </figure>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
