<div class="container">
    <div class="modal fade" id="myModalRegister" role="dialog">
        <div class="modal-dialog modal-dialog modal-lg">
            <div class="modal-content">
                <section class="signup">
                    <div class="container">
                        <div class="signup-content">
                            <div class="signup-form">
                                <h2 class="form-title">Register</h2>
                                <form id="registerForm" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group1">
                                        <label class="label-custom" for="name"><i
                                                class="zmdi zmdi-account material-icons-name"></i></label>
                                        <input type="text"
                                               name="name" id="nameInput" value="{{old('name')}}"
                                               placeholder="Your Name"
                                        />
                                    </div>
                                    <div role="alert" id="nameError">
                                        <strong></strong>
                                    </div>
                                    <div class="form-group1">
                                        <label class="label-custom" for="email"><i class="zmdi zmdi-email"></i></label>
                                        <input type="email"
                                               name="email" id="emailInput" value="{{old('email')}}"
                                               placeholder="Your Email"/>
                                    </div>
                                    <div role="alert" id="emailError">
                                        <strong></strong>
                                    </div>
                                    <div class="form-group1">
                                        <label class="label-custom" for="pass"><i class="zmdi zmdi-lock"></i></label>
                                        <input type="password" value="{{old('password')}}"
                                               name="password"
                                               id="passwordInput" placeholder="Password"/>
                                    </div>
                                    <div role="alert" id="passwordError">
                                        <strong></strong>
                                    </div>
                                    <div class="form-group1">
                                        <label class="label-custom" for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                        <input type="password"
                                               name="repeatPassword" id="repeatPasswordInput"
                                               placeholder="Repeat your password"
                                        />
                                    </div>
                                    <div role="alert" id="repeatPasswordError">
                                        <strong></strong>
                                    </div>
                                    <div class="form-group1">
                                        <label class="label-custom" for="pass"><i class="fas fa-phone"></i></label>
                                        <input type="number" value="{{old('phone')}}"
                                               name="phone"
                                               id="phoneInput" placeholder="Phone"/>
                                    </div>
                                    <div role="alert" id="phoneError">
                                        <strong></strong>
                                    </div>
                                    <div class="form-group">
                                        <select
                                            class="form-control form-control-sm"
                                            name="role" id="roleInput" required>
                                            <option selected disabled>Role</option>
                                            <option <?php echo old('role') == 'Admin' ? 'selected' : ''?> >Admin
                                            </option>
                                            <option <?php echo old('role') == 'Leaser' ? 'selected' : ''?>>Leaser
                                            </option>
                                            <option <?php echo old('role') == 'Render' ? 'selected' : ''?>>Renter
                                            </option>
                                        </select>
                                    </div>
                                    <div role="alert" id="roleError">
                                        <strong></strong>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <input type="file"
                                               class="form-control-file"
                                               name="image" id="imageInput">
                                    </div>
                                    <div role="alert" id="imageError">
                                        <strong></strong>
                                    </div>
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
<script>
    $(function () {
        $('#registerForm').submit(function (e) {
            e.preventDefault();
            let formData = new FormData(this);
            $.ajax({
                method: "POST",
                headers: {
                    Accept: "application/json"
                },
                url: "{{route('users.store')}}",
                data: formData,
                contentType: false,
                processData: false,
                success: () => window.location.assign("#"),
                error: (response) => {
                    if (response.status === 422) {
                        let errors = response.responseJSON.errors;

                        Object.keys(errors).forEach(function (key) {
                            console.log("#" + key + "Error");
                            $("#" + key + "Input").addClass('form-control is-invalid');
                            $("#" + key + "Error").css({'margin-top':'-20px','margin-bottom':'30px'}).children('strong').css('color','red').text(errors[key][0]);
                        });
                    } else {
                        window.location.reload();
                    }
                }
            })
        });
    })
</script>
