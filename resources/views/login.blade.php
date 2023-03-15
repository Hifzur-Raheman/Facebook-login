<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{  url('public/resources/images/favicon.png')}}" type="image/png" />
    <!--plugins-->
    <link href="{{ url('public/assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
    <link href="{{ url('public/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
    <link href="{{ url('public/assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
    <!-- loader-->
    <link href="{{ url('public/assets/css/pace.min.css')}}" rel="stylesheet" />
    <script src="{{ url('public/assets/js/pace.min.js')}}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{ url('public/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ url('public/assets/css/bootstrap-extended.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="{{ url('public/assets/css/app.css')}}" rel="stylesheet">
    <link href="{{ url('public/assets/css/icons.css')}}" rel="stylesheet">
    <title>{{ SITE_TITLE }}</title>
    <style> 
.btn-login {
  color: #fff;
  background-color: #370001;
  border-color: #FFA200;
}
.btn-login:hover {
  color: #fff;
  background-color: #551a1a;
  border-color: #FFA200;
}
.btn-check:focus + .btn-login,
.btn-login:focus {
  color: #fff;
  background-color:#551a1a;
  border-color: #FFA200;
  box-shadow: 0 0 0 0.25rem #551a1a;
}
.btn-check:active + .btn-login,
.btn-check:checked + .btn-login,
.btn-login.active,
.btn-login:active,
.show > .btn-login.dropdown-toggle {
  color: #fff;
  background-color: #551a1a;
  border-color: #FFA200;
}
.btn-check:active + .btn-login:focus,
.btn-check:checked + .btn-login:focus,
.btn-login.active:focus,
.btn-login:active:focus,
.show > .btn-login.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.25rem #551a1a;
}
.btn-login.disabled,
.btn-login:disabled {
  color: #fff;
  background-color: #551a1a;
  border-color: #551a1a;
}


</style>
</head>

<body class="bg-login-smp">
    <!--wrapper-->
    <div class="wrapper">
		<div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
			<div class="container-fluid">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
					<div class="col mx-auto">
						<!-- <div class="mb-4 text-center">
							<img src="{{ url('public/assets/images/logo-img.png')}}" width="180" alt="" />
						</div> -->
						<div class="card">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="text-center">
										<h3 class="">Sign in</h3>
										<!-- <p>Don't have an account yet? <a href="authentication-signup.html">Sign up here</a>
										</p> -->
									</div>
                                    <div class="row">
                    <div class="col-md-12">
                        @if (session()->get('error'))
                        <div class="alert border-0 border-start border-5 border-danger alert-dismissible fade show py-2">
                            <div class="d-flex align-items-center">
                                <div class="font-35 text-danger"><i class='bx bxs-message-square-x'></i>
                                </div>
                                <div class="ms-3">
                                    <div class="text-danger">{{ session()->get('error') }}</div>
                                </div>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        @if (session()->get('success'))
                        <div class="alert border-0 border-start border-5 border-success alert-dismissible fade show py-2">
                            <div class="d-flex align-items-center">
                                <div class="font-35 text-success"><i class='bx bxs-check-circle'></i>
                                </div>
                                <div class="ms-3">
                                    <div class="text-success">{{ session()->get('success'); }}</div>
                                </div>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                    </div>
                </div>
									<div class="d-grid">
										<!-- <a class="btn my-4 shadow-sm btn-white" href="javascript:;"> <span class="d-flex justify-content-center align-items-center">
                          <img class="me-2" src="{{ url('public/assets/images/icons/search.svg')}}" width="16" alt="Image Description">
                          <span>Sign in with Google</span>
											</span>
										</a> -->
                                         <a href="{{ url('auth/facebook') }}" class="btn btn-facebook"><i class="bx bxl-facebook"></i>Sign in with Facebook</a>
									</div>
									<!-- <div class="login-separater text-center mb-4"> <span>OR SIGN IN WITH EMAIL</span>
										<hr/>
									</div>
									<div class="form-body">
										<form class="row g-3">
											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Email Address</label>
												<input type="email" class="form-control" id="inputEmailAddress" placeholder="Email Address">
											</div>
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Enter Password</label>
												<div class="input-group" id="show_hide_password">
													<input type="password" class="form-control border-end-0" id="inputChoosePassword" value="12345678" placeholder="Enter Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
													<label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
												</div>
											</div>
											<div class="col-md-6 text-end">	<a href="authentication-forgot-password.html">Forgot Password ?</a>
											</div>
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" class="btn btn-primary"><i class="bx bxs-lock-open"></i>Sign in</button>
												</div>
											</div>
										</form>
									</div> -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
	</div>
    <!--end wrapper-->
    <!-- Bootstrap JS -->
    <script src="{{  url('public/assets/js/bootstrap.bundle.min.js')}}"></script>
    <!--plugins-->
    <script src="{{  url('public/assets/js/jquery.min.js')}}"></script>
    <script src="{{  url('public/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
    <script src="{{  url('public/assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
    <script src="{{  url('public/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
    <!--Password show & hide js -->
    <script>

$(function() {
            'use strict';

            /**
             * login-form validation
             * @date: 2021-12-10 
             * 
             */
            $("#form_login").on('submit', function(e) {
                e.preventDefault();
                let valid = true;
                let form = $(this).get(0);
                let emailPattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
                let email = $("#email").val();
                let err_email = "{{ __('message.Enter Valid Email Address') }}";
                let password = $("#password").val();
                let err_password = "{{ __('message.Enter Valid Password') }}";

                if (email.length === 0 || !emailPattern.test(email)) {
                    $(".err_email").text(err_email);
                    $('#email').addClass('is-invalid');
                    valid = false;
                } else {
                    $(".err_email").text('');
                    $('#email').addClass('is-valid');
                    $('#email').removeClass('is-invalid');

                }
                if (password.length === 0) {
                    $(".err_password").text(err_password);
                    $('#password').addClass('is-invalid');
                    valid = false;
                } else {
                    $(".err_password").text('');
                    $('#password').addClass('is-valid');
                    $('#password').removeClass('is-invalid');
                }
                if (valid) {
                    form.submit();
                }
            });
            // End :: login validation

      
            $("#show_hide_password a").on('click', function(event) {
                event.preventDefault();
                if ($('#show_hide_password input').attr("type") == "text") {
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass("bx-hide");
                    $('#show_hide_password i').removeClass("bx-show");
                } else if ($('#show_hide_password input').attr("type") == "password") {
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass("bx-hide");
                    $('#show_hide_password i').addClass("bx-show");
                }
            });
        });
    </script>
    <!--app JS-->
    <script src="{{ url('public/assets/js/app.js') }}"></script>
</body>

</html>