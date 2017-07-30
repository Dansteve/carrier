<?php include('header.php'); ?>
    <div class="container">
        <section>
            <div class="page-header" id="login">
                <h2>Recover password.<small> Enter your email address to continue.</small></h2> </div>
            <!-- End Page Header -->
            <div class="row">
                <div class="col-lg-6 col-lg-offset-2">
                    <form name="recover" method="POST" role="form" class="form-horizontal">
                        <fieldset>
                            <br>
                            <!--<p >

                    LOL! u're a Dummy shey you know? How the hell did you forget your password? I mean, who does that.. Hey! thats me kidding. Let's help you recover it. First, type in ur email in the box below: oya  <br>



                </p>-->
                            <!-- Username-->
                            <div class="form-group">
                                <label for="email" class="col-lg-2 control-label">Email </label>
                                <div class="col-lg-8 input-group" style="margin-left: 25px; margin-bottom: 15px;"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your Email"> </div>
                            </div>
                            <!-- End form group -->
                            <div class="form-group">
                                <div class="col-lg-10 col-lg-offset-8">
                                    <button type="submit" name="submit" id="submit" value="Reset Password" class="btn btn-default btn-how"><span class="glyphicon glyphicon-lock"></span> Reset</button>
                                </div>
                            </div>
                            <br> </fieldset>
                    </form>
                </div>
            </div>
        </section>
    </div>
<?php include('header.php'); ?>