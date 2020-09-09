<!DOCTYPE html>
<html>
    <head><title>News Page</title></head>
    <body>
        <?php
            include("navigation-bar.php");
        ?>
          <!--       overlay background image -->       
        
            <div class="row justify-content-md-center" id="overlap-news" >
                <div class="col-md-12 col-sm-12 col-lg-12">
                    <div class=" bg-overlay" id="news-overlay">     
                    </div>
                </div>
            </div>  
            <div class="container" style="margin-top:5%;">
                <div class="row">
                    <div class="col-md-12">
                    <section id="demos">
                        <h1 align="center">Our Products</h1>
                <div class="row justify-content-md-center">
                    <div class="col-lg-12 col-sm-12 col-md-12 ">
                        <div class="owl-carousel owl-theme" >
                            <div class="item" id="item">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="images/img/lenovo.jpg" alt="Card image cap">
                                        <div class="card-body"><h4>Lenovo </h4>
                                            <p class="card-text" id="about-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam accumsan dolor id enim lacinia, sed feugiat ex suscipit. Nunc molestie malesuada pellentesque.</p>
                                        </div>
                                </div>
                            </div>
                            <div class="item" id="item">
                                  <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="images/img/hp.jpg" alt="Card image cap">
                                        <div class="card-body"><h4>HP </h4>
                                            <p class="card-text" id="about-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam accumsan dolor id enim lacinia, sed feugiat ex suscipit. Nunc molestie malesuada pellentesque.</p>
                                        </div>
                                </div>
                            </div>
                            <div class="item" id="item">
                                  <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="images/img/dell.jpg" alt="Card image cap">
                                        <div class="card-body"><h4>Dell </h4>
                                            <p class="card-text" id="about-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam accumsan dolor id enim lacinia.</p>
                                        </div>
                                </div>
                            </div>
                            <div class="item" id="item">
                                  <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="images/img/acer.jpg" alt="Card image cap">
                                        <div class="card-body"><h4>Acer </h4>
                                            <p class="card-text" id="about-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam accumsan dolor id enim lacinia, sed feugiat ex suscipit. Nunc molestie malesuada pellentesque.</p>
                                        </div>
                                </div>
                            </div>
                            <div class="item" id="item">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="images/img/vovo.jpg" alt="Card image cap">
                                        <div class="card-body"><h4>Vivo</h4>
                                            <p class="card-text" id="about-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam accumsan dolor id enim lacinia,sed feugiat ex suscipit.Nunc molestie malesuada pellentesque.sed feugiat ex suscipit. Nunc molestie malesuada</p>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <script type="text/javascript">
                            $('.owl-carousel').owlCarousel({
                                            loop:true,
                                            margin:0,
                                            autoplayTimeout: 1000,
                                            autoplay: true,
                                            responsive:{
                                                            0:{items:1},
                                                            600:{items:2},
                                                            1000:{items:3}
                                                        }
                                        })
                        </script> 
                    </div>
                </div>
            </section>
                    </div>
                </div>
                
                <div class="row" style="margin-top:5%;">
                    <div class="col-md-6">
                        <img src="images/img/news-laptop.jpg" width="100%" class="img-thumbnail" height="80%">                    
                    </div>
                     <div class="col-md-6">
                        <h4>Something about Products</h4>
                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <div id="accordion">
<!--                                <div class="card">-->
                                    <div class="card-header" >
                                        <a id="contact-card" class="card-link" data-toggle="collapse" href="#collapseOne">
                                           <p style="color:black"> Some kind of feature</p>
                                        </a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        </div>
                                    </div>
<!--                                </div>-->
<!--                                <div class="card">-->
                                    <div class="card-header">
                                        <a id="contact-card" class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                                            <p style="color:black"> Check this feature</p>
                                        </a>
                                    </div>
                                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        </div>
                                    </div>
<!--                                </div>-->
<!--                                <div class="card">-->
                                    <div class="card-header">
                                        <a id="contact-card" class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                                            <p style="color:black">some more feature</p>
                                        </a>
                                    </div>
                                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        </div>
                                    </div>
<!--                                </div>-->
                            </div>                   
                        </div>
                    </div>
                </div>
               <div class="container-fluid contact" id="news-mail" >
        <h4 align="center" style="font-size:40px;" ><p align="center" style="margin-top:8%;font-size:50px;font-weight:40;color:white;">Get <strong>in touch</strong></p></h4>
                     <p align="center" style="font-size:40px;font-weight:30;color:white;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lacus lectus, lobortis sit amet eleifend eleifend, iaculis ac justo.</p>
        <div class="row justify-content-md-center " >
            <div class="col-md-6 " id="form-detail" align="center" >
                <div class="contact-form">
                    <div class="form-group">
<!--                        <label class="control-label col-sm-4" for="fname">First Name:</label>-->
                        <div class="row" >
<!--                            <div class="col-sm-4">-->
                            <input type="text" class="form-control" id="usr" placeholder=" Name" name="fname">
<!--                        </div>-->
<!--                        <div class="col-sm-4">-->
                               <input type="email" class="form-control" id="email" placeholder=" Email" name="email">
<!--                        </div>-->
                   </div>
                         <div class="form-group" style="margin-top:3%;">
<!--                        <label class="control-label col-sm-4" for="comment">Comment:</label>-->
                            <div class="col-sm-10">
                                 <textarea class="form-control" rows="5" id="comment" placeholder="message"></textarea>
                        </div>
                    </div>
                        <div class="form-group">
                          <center>  <div class="clo-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-info buttonfx curtaindown" id="btn">Submit</button>
                              </div></center>
                        </div>
                    </div>
                </div>
            </div>
                   </div>
        </div>

        <?php
            include("footer.php");
        ?>
    </body>
</html>