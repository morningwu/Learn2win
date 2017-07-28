<div class="support_panel" id="sliding_panel">
		<div class="container">
			<div class="row">
				<div class="span9">
					<h4 class="m_title">HOW TO SHOP</h4>
					<div class="m_content how_to_shop">
						<div class="row">
							<div class="span3">
								<span class="number">1</span> Login or create new account.
							</div>
							<div class="span3">
								<span class="number">2</span> Review your order.
							</div>
							<div class="span3">
								<span class="number">3</span> Payment &amp; <strong>FREE</strong> shipment
							</div>
						</div>
						<p>If you still have problems, please let us know, by sending an email to support@website.com . Thank you!</p>
					</div><!-- end how to shop steps -->
				</div>
				<div class="span3">
					<h4 class="m_title">SHOWROOM HOURS</h4>
					<div class="m_content">
					Mon-Fri 9:00AM - 6:00AM<br>
					Sat - 9:00AM-5:00PM<br>
					Sundays by appointment only!
					</div>
				</div>
			</div>
		</div>
	</div><!-- end support panel -->
    
	<div class="login_register_stuff hide"><!-- Login/Register Modal forms - hidded by default to be opened through modal -->
		<div id="login_panel">
			<div class="inner-container login-panel">
				<h3 class="m_title">登入</h3>
				<form id="login_form" name="login_form" method="post">
					<a href="#" class="create_account" onClick="ppOpen('#register_panel', '280');">註冊帳戶</a>
					<input type="text" id="username" name="username" class="inputbox" placeholder="Username">
					<input type="password" id="password" name="password" class="inputbox" placeholder="Password">
					<input type="submit" id="login" name="submit" value="登入">
					<a href="#" class="login_facebook">login with facebook</a>
				</form>
				<div class="links"><a href="#" onClick="ppOpen('#forgot_panel', '350');">忘記帳戶?</a> / <a href="#" onClick="ppOpen('#forgot_panel', '350');">忘記密碼?</a></div>
			</div>
		</div><!-- end login panel -->

		<!-- Account Function -->
            
		<div id="register_panel">
			<div class="inner-container register-panel">
				<h3 class="m_title">註冊試用帳戶</h3>
				<form id="register_form" name="register_form" method="post" action="">
					<p>
						登入名稱：<input type="text" name="username" class="inputbox" placeholder="登入名稱">
					</p>
					<p>
						登入密碼：<input type="password" name="password" class="inputbox" placeholder="登入密碼">
					</p>
					<p>
						家長姓名：<input type="text" name="parent_name" class="inputbox" placeholder="家長姓名">
					</p>

					<p>
						聯絡電話：<input type="text" name="tel" class="inputbox" placeholder="聯絡電話">
					</p>
					<p>
						聯絡電郵：<input type="text" name="email" class="inputbox" placeholder="聯絡電郵">
					</p>
					<p>
						學生姓名：<input type="text" name="student_name" class="inputbox" placeholder="學生姓名">
					</p>

					<p>
						學生年級	：<input type="text" name="student_level" class="inputbox" placeholder="學生年級">
					</p>

						<input type="submit" name="submit" value="註冊">
					</p>
				</form>
				<!--<div class="links"><a href="#" onClick="ppOpen('#login_panel', '800');">已經註冊？請登入</a></div>-->
			</div>
		</div><!-- end register panel -->

		<div id="forgot_panel">
			<div class="inner-container forgot-panel">
				<h3 class="m_title">FORGOT YOUR DETAILS?</h3>
				<form id="forgot_form" name="forgot_form" method="post">
					<p>
						<input type="text" id="forgot-email" name="email" class="inputbox" placeholder="Email Address">
					</p>
					<p>
						<input type="submit" id="recover" name="submit" value="SEND MY DETAILS!">
					</p>
				</form>
				<div class="links"><a href="#" onClick="ppOpen('#login_panel', '800');">AAH, WAIT, I REMEMBER NOW!</a></div>
			</div>
		</div><!-- end register panel -->
	</div><!-- end login register stuff -->