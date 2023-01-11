@include("layouts.header")
<body>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('img/login-bg.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST" action="{{ route("post_login") }}">
                    @csrf
					
                    <img class="login100-form-logo" src="{{ url("img/books.png") }}">
					<span class="login100-form-title p-b-34 p-t-27">
						Đăng nhập vào MyCloud
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Nhập địa chỉ email">
						<input class="input100" type="text" name="email" placeholder="Email" autocomplete="off" required>
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Nhập mật khẩu">
						<input class="input100" type="password" name="password" placeholder="Password" required>
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember_me">
						<label class="label-checkbox100" for="ckb1">
							Ghi nhớ tôi
						</label>
					</div>
					<div class="container-login100-form-btn">
						<a class="login100-form-btn" style="margin-right: 20px;" href="{{ url("signup") }}">
							Đăng ký
                        </a>
						<button class="login100-form-btn" type="submit" name="loginBtn">
							Đăng nhập
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>