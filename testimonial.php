<?php include('header.php'); ?>
<div class="contact-banner"> <br>
    <h1 class="center white-text" style="padding-top: 150px;"> Testimonial</h1>
</div>

<?php include_once('mysqli_connect.php');
$q = "SELECT * FROM testimonial ";
$result = mysqli_query ($dbcon, $q);
if (mysql_num_rows($result) == 0){
$show = 'hidden';
}
else{
    $show = '';
}
?>
<div class="container" <?php echo $show ?> >
    <section class="text-xs-center wow fadeInUp" data-wow-delay="0.2s">
        <div class="row">
            <div id="multi-item-example" class="carousel testimonial-carousel slide carousel-multi-item wow fadeIn" data-ride="carousel">
                <div class="controls-top"> <a class="btn-floating btn-small mdb-color" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a> <a class="btn-floating btn-small mdb-color" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a></div>
                <ol class="carousel-indicators">
                    <li data-target="#multi-item-example" data-slide-to="0" class="active mdb-color"></li>
                    <li data-target="#multi-item-example" data-slide-to="1" class="mdb-color"></li>
                    <li data-target="#multi-item-example" data-slide-to="2" class="mdb-color"></li>
                </ol>
                
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active" id="test">  
                    <?php 
                        include_once('mysqli_connect.php');
			                     $q = "SELECT * FROM testimonial ORDER BY RAND() LIMIT 3 ";
                                    $result = mysqli_query ($dbcon, $q);
                        $n = 1;
                    while($row = mysqli_fetch_object($result))
                         { ?>        
            
                 <div class="col-md-4 <?php if ($n > 1){echo 'hidden-sm-down'; } ?>">
                            <div class="testimonial">
                                <div class="avatar"> <img src="testimonials/<?php echo $row->image ?>" class="rounded-circle img-fluid"></div>
                                <h4><?php echo $row->name ?></h4>
                                <h5><?php echo $row->email ?></h5>
                                <p><i class="fa fa-quote-left"></i> <?php echo $row->message ?></p>
                                <div class="orange-text"> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star-half-full"> </i></div>
                            </div>
                        </div>
                    <?php  $n++; } ?>
                    </div>
                    <div class="carousel-item" id="test">  
                    <?php 
                        include_once('mysqli_connect.php');
			                     $q = "SELECT * FROM testimonial ORDER BY RAND() LIMIT 3 ";
                                    $result = mysqli_query ($dbcon, $q);
                        $n = 1;
                    while($row = mysqli_fetch_object($result))
                         { ?>        
            
                 <div class="col-md-4 <?php if ($n > 1){echo 'hidden-sm-down'; } ?>">
                            <div class="testimonial">
                                <div class="avatar"> <img src="testimonials/<?php echo $row->image ?>"  class="rounded-circle img-fluid"></div>
                                <h4><?php echo $row->name ?></h4>
                                <h5><?php echo $row->email ?></h5>
                                <p><i class="fa fa-quote-left"></i> <?php echo $row->message ?></p>
                                <div class="orange-text"> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star-half-full"> </i></div>
                            </div>
                        </div>
                    <?php  $n++; } ?>
                    </div>  
                    <div class="carousel-item" id="test">  
                    <?php 
                        include_once('mysqli_connect.php');
			                     $q = "SELECT * FROM testimonial ORDER BY RAND() LIMIT 3 ";
                                    $result = mysqli_query ($dbcon, $q);
                        $n = 1;
                    while($row = mysqli_fetch_object($result))
                         { ?>        
            
                 <div class="col-md-4 <?php if ($n > 1){echo 'hidden-sm-down'; } ?>">
                            <div class="testimonial">
                                <div class="avatar"> <img src="testimonials/<?php echo $row->image ?>"  class="rounded-circle img-fluid"></div>
                                <h4><?php echo $row->name ?></h4>
                                <h5><?php echo $row->email ?></h5>
                                <p><i class="fa fa-quote-left"></i> <?php echo $row->message ?></p>
                                <div class="orange-text"> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star-half-full"> </i></div>
                            </div>
                        </div>
                    <?php  $n++; } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include('footer.php'); ?>
