<?php include('header.php'); ?>
<div class="contact-banner">
    <br>
    <h1 class="center white-text" style="padding-top: 150px;"> Contact Us</h1>
</div>


<div class="container">
<section class="section">
    <!--Section sescription-->
    <br>
    <p class="section-description mb-5"><strong>Can't find what you're looking for? Please </strong> don’t hesitate to ask about something that’s not listed. ?</p>

    <div class="row">

        <!--First column-->
        <div class="col-md-8">
            <form action="sub.php" method="post">
                <!--First row-->
                <div class="row">
                    <!--First column-->
                    <div class="col-md-6">
                        <div class="md-form">
                            <div class="md-form">
                                <input type="text" id="name" name="name" class="form-control" required>
                                <label for="name" class="" data-error="wrong" data-success="right">Your name</label>
                            </div>
                        </div>
                    </div>

                    <!--Second column-->
                    <div class="col-md-6">
                        <div class="md-form">
                            <div class="md-form">
                                <input type="email" id="email" name="email" class="form-control" required>
                                <label for="email" class="" data-error="wrong" data-success="right">Your email</label>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.First row-->
                <!--Third row-->
                <div class="row">
                    <!--First column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" class="md-textarea" required></textarea>
                            <label for="message">Your message</label>
                        </div>

                    </div>
                </div>
                <!--/.Third row-->
                

            <div class="center-on-small-only">
                <button class="btn btn-outline-secondary btn-rounded waves-effect" type="submit"> Submit <i class="fa fa-check ml-1"></i></button>
            </div>
            </form>
        </div>
        <!--.First column-->

        <!--Second column-->
        <div class="col-md-4">
            <ul class="contact-icons">
                <li><i class="fa fa-map-marker fa-2x"></i>
                    <p>Lagos, Nigeria</p>
                </li>

                <li><i class="fa fa-phone fa-2x"></i>
                    <p>+234 817 068 4216</p>
                </li>

                <li><i class="fa fa-envelope fa-2x"></i>
                    <p> contact@bizfocusva.com</p>
                </li>
            </ul>
        </div>
        <!--.Second column-->

    </div>
</section>
</div>

<?php include('footer.php'); ?>