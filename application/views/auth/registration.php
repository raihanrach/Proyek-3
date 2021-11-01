<!-- WRAPPER -->
<div id="wrapper">
    <div class="vertical-align-wrap">
        <div class="vertical-align-middle">
            <div class="auth-box ">
                <div class="left">
                    <div class="content">
                        <div class="header">
                            <!-- <div class="logo text-center"><img src="assets/img/logo-dark.png" alt="Klorofil Logo"></div> -->
                            <div class="text-center">
                                <strong class="lead">Login to your account</strong>
                            </div>
                        </div>
                        <form class="user" action="index.php">
                            <div class="form-group">
                                <!-- <label for="signin-email" class="control-label sr-only">Email</label> -->
                                <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <!-- <label for="signin-password" class="control-label sr-only">Password</label> -->
                                <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Enter your email address">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Enter Password">

                                </div>
                                <!-- <label for="signin-password" class="control-label sr-only">Password</label> -->
                                <div class="col-sm-6">
                                    <!-- <label for="signin-password" class="control-label sr-only">Password</label> -->
                                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                                </div>
                            </div>

                            <!-- <div class="form-group clearfix">
									<label class="fancy-checkbox element-left">
										<input type="checkbox">
										<span>Remember me</span>
									</label>
								</div> -->
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Register Account</button>
                            <div class="bottom">
                                <!-- <div class="text-center"><a href="">Forgot password?</a></div> -->
                                <div class="text-center"><a href="<?= base_url('auth') ?>">Already have an account ? Login !</a></div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="right">
                    <div class="overlay"></div>
                    <div class="content text">
                        <h1 class="heading">Sistem Manajemen Pengelolaan Kegiatan Masjid Raya An-Nur Polinema</h1>
                        <!-- <p>by  </p> -->
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<!-- END WRAPPER -->