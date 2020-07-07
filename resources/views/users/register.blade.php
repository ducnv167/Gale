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
