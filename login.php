<?php require_once('header2.php'); ?>
    <div class="contact-banner">
        <br>
        <h1 class="center white-text" style="padding-top: 150px;"> Testimonial Login</h1> </div>
    <div class="container">
        <br>
        <section>
            <br>
            <div class="page-header center" id="login">
                <h4>Enter your username and password to continue.</h4> <br><br></div>
            <!-- End Page Header -->
            <form name="login" method="POST" action="login_function.php" class="form-horizontal">
                <fieldset>
                    <div class="row">
                        <div class="col-md-5 offset-md-2">
                            <div class="md-form"> <i class="fa fa-user prefix"></i>
                                <input type="email" id="login_email" name="login_email" class="form-control validate" required>
                                <label for="name" data-error="incorrect mail" data-success="correct">Enter your username or Email</label>
                            </div>
                        </div>
                        <div class="col-md-5 ">
                            <div class="md-form"> <i class="fa fa-lock prefix"></i>
                                <input type="password" id="login_psword" name="login_psword" class="form-control validate" required>
                                <label for="name" >Enter your Password</label>
                            </div>
                        </div>
                    </div>
                    <div class="text-muted center">
                      <!--  <p><a href="pwrecover.php">Forgot password?</a></p>-->
                         <div class="center">
                            <button type="submit" name="submit" id="submit" class="btn btn-default btn-rounded btn-how"><span class="fa fa-log-in"></span> Login</button>
                        </div>
                    </div>
                    <br>
                </fieldset>
            </form>
            <!-- End the row -->
        </section>
    </div>
    <?php require_once('footer.php'); ?>