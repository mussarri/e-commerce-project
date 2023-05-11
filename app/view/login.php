<?php require view('static/header') ?>


<section id="form"><!--form-->
    <div class="container">
        <div class="row">
            <div class="col-sm-9" style="margin: 0 100px">
                <?php if ($error = isError()): ?>
                    <div class="alert alert-danger">
                        <?= $error ?>
                    </div>
                <?php endif; ?>

                <?php if ($success = isSuccess()): ?>
                    <div class="alert alert-success">
                        <?= $success ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="col-sm-4 col-sm-offset-1">
                <div class="login-form"><!--login form-->
                    <h2>Login to your account</h2>
                    <form action="" method="post">
                        <input type="text" name="username" placeholder="Name"/>
                        <input type="password" name="password" placeholder="Password"/>
                        <input type="hidden" name="login">
                        <span>
								<input type="checkbox" class="checkbox">
								Keep me signed in
							</span>
                        <button type="submit" name="submit" value="1" class="btn btn-default">Login</button>
                    </form>
                </div><!--/login form-->
            </div>
            <div class="col-sm-1">
                <h2 class="or">OR</h2>
            </div>
            <div class="col-sm-4">
                <div class="signup-form"><!--sign up form-->
                    <h2>New User Signup!</h2>
                    <form action="" method="post">
                        <div class="form-flex">
                            <input type="text" name="firstname" placeholder="First Name"/>
                            <input type="text" name="lastname" placeholder="Last Name"/>
                        </div>
                        <div class="form-flex">
                            <input type="text" name="username" placeholder="Name"/>
                            <input type="text" name="tel" placeholder="Tel"/>
                        </div>
                        <input type="email" name="email" placeholder="Email Address"/>

                        <input type="text" name="address" placeholder="Address"/>
                        <div class="form-flex">
                            <input type="password" name="password" placeholder="Password"/>
                            <input type="password" name="password2" placeholder="Password again"/>
                        </div>
                        <input type="hidden" name="register">
                        <button type="submit" class="btn btn-default">Signup</button>
                    </form>
                </div><!--/sign up form-->
            </div>
        </div>
    </div>
</section><!--/form-->

<?php require view('static/footer') ?>

