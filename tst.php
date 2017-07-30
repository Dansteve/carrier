<?php include('session.php');include('header2.php'); ?>
<div class="contact-banner">
    <br>
    <h1 class="center white-text" style="padding-top: 150px;"> Testimonial</h1>
</div>
<div class="container">
<br>        
    <p class="center">Testimonial form</p>
    <p class="center">Fill the Testimonial form to upload new Testimonial</p>
    <br><br>
<form  enctype="multipart/form-data" method="post" action="test.php">
    <div class="row">
   <div class="col-md-4 offset-md-1" id="images">
          <div class="file-field">
        <div class="btn btn-primary btn-sm">
            <span>Choose file</span>
            <input type="file" name="fileToUpload" id="fileToUpload" required>
        </div>
        <div class="file-path-wrapper">
           <input class="file-path valid" type="text" placeholder="Upload your file" disabled>
        </div>
    </div>
        </div>
        <div class="col-md-3">
            <div class="md-form">
                <i class="fa fa-user prefix"></i>
                <input type="text" id="name" name="name" class="form-control validate"  required>
                <label for="name" >Enter Name</label>
            </div>
        </div> 
        <div class="col-md-4">
            <div class="md-form">
                <i class="fa fa-envelope prefix"></i>
                <input type="email" id="email" name="email" class="form-control validate" required>
                <label for="email" data-error="incorrect mail" data-success="correct" >Enter email</label>
            </div>
        </div>
    </div>
    <!--/.First row-->
<br><br>
    <!--Second row-->
    <div class="row">
            <!--First column-->
        <div class="col-md-10 offset-md-1">
            <div class="md-form">
                <textarea type="text" id="message" name="message" class="md-textarea" required></textarea>
                <label for="message">Type your Testimonial</label>
            </div>

        </div>
    </div>
    <div class="row">
            <!--First column-->
        <div class="col-md-5 offset-md-5">
           <div class="center-on-small-only">
                <button class="btn btn-outline-secondary btn-rounded waves-effect" type="submit"> Submit <i class="fa fa-check ml-1"></i></button>
            </div>
        </div>
    </div>
    </form>
</div>
<br>

<script>
$(document).ready(function() {
     $(':button[type="submit"]').prop('disabled', true);
     $('input[type="text"]').keyup(function() {
        if($(this).val() != '') {
           $(':button[type="submit"]').prop('disabled', false);
        }
     });
 });
</script>

<?php include('footer2.php'); ?>