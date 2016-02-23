<div id="top-bar">
	<div class="container clearfix">
		<div class="col_half nobottommargin hidden-xs">
			<p class="nobottommargin"><strong>Call:</strong> 1 (800) 264-0644 | <strong>Email:</strong> info@graceframe.com</p>
		</div>
		<div class="col_half col_last fright nobottommargin">
			<div class="top-links">

				<ul>
					<li><a href="#">USD</a>
						<ul>
							<li><a href="#">EUR</a></li>
							<li><a href="#">AUD</a></li>
							<li><a href="#">GBP</a></li>
						</ul>
					</li>
					<li><a href="#">EN</a>
						<ul>
							<li><a href="#"><img src="{!! asset('/frontend/images/icons/flags/french.png') !!}" alt="French"> FR</a></li>
							<li><a href="#"><img src="{!! asset('/frontend/images/icons/flags/italian.png') !!}" alt="Italian"> IT</a></li>
							<li><a href="#"><img src="{!! asset('/frontend/images/icons/flags/german.png') !!}" alt="German"> DE</a></li>
						</ul>
					</li>
					<li><a href="#">Login</a>
						<div class="top-link-section">
							<form id="top-login" role="form">
								<div class="input-group" id="top-login-username">
									<span class="input-group-addon"><i class="icon-user"></i></span>
									<input type="email" class="form-control" placeholder="Email address" required="">
								</div>
								<div class="input-group" id="top-login-password">
									<span class="input-group-addon"><i class="icon-key"></i></span>
									<input type="password" class="form-control" placeholder="Password" required="">
								</div>
								<label class="checkbox">
								  <input type="checkbox" value="remember-me"> Remember me
								</label>
								<button class="btn btn-danger btn-block" type="submit">Sign in</button>
							</form>
						</div>
					</li>

                        <li><a href="/order">My Order <span class="fa fa-briefcase"></span></a></li>
                        <li><a href="/cart">Cart <span class="fa fa-shopping-cart"></span></a></li>
                        <li><a href="/auth/logout">Logout Auth::user()->name</a></li>
                 
				</ul>
			</div><!-- .top-links end -->
		</div>
	</div>
</div><!-- #top-bar end -->