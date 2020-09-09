<html>
    <head><title>About Us Page</title></head>
<body>
    <?php
    include("navigation-bar.php");
    ?>
    <!--       overlay background image -->       
        
            <div class="row justify-content-md-center" id="overlap-contact" >
                <div class="col-md-12 col-sm-12 col-lg-12">
                    <div class=" bg-overlay" id="contact-overlay">
                           
                    </div>
                </div>
            </div>  
<!--        </div>-->
<!--        end overlay---->

           <div class="container" style="margin-top:5%;">
               <h4 align="center" style="font-size:40px;" >Contact Details</h4><br>
                <div class="row" style="margin-top:3%;">
                    <div class="col-md-4" >
                    <div class="row" id="contact">
                        <i class="fa fa-user-circle" id="user-circle"aria-hidden="true"></i>
                             <p id="contact-support" style="float:right;"><span id="cnt-dtl">Contact Support</span></p>
                        </div>    
                       <div class="col-md-12" style="margin-left:-4%;margin-top:15%;background-color:#f2f2f2;margin-top:3%;">
                         <div class="row" >
                             <i class="fa fa-address-card" id="fa-address" aria-hidden="true"></i>
                             <h6 style="margin-left:10%;margin-top:5%;">Jon Doe.<br>Visit us at:<br>Example.com<br>Box 564, Disneyland<br>USA</h6>
                        </div><br>
                        <div class="row" style="margin-top:-10%;">
                             <i class="fa fa-phone-square" id="fa-phone" aria-hidden="true"></i>
                            <h6 style="margin-left:15%;margin-top:6%;">9876543210</h6>
                        </div><br>
                        <div class="row" style="margin-top:-5%;">
                             <i class="fa fa-envelope-o" id="fa-mail" aria-hidden="true"></i>
                            <h6 style="margin-left:13%;margin-top:4%;margin-bottom:10%;">abcd@gmail.com<br></h6>
                         </div>
                           <div class="row" style="margin-top:-5%;">
                            <i class="fa fa-envelope" id="fa-email-fil" aria-hidden="true"></i>
                            <h6 style="margin-left:13%;margin-top:4%;margin-bottom:10%;">efgh@gmail.com<br></h6>
                         </div>
                        </div>
                    </div>
                  <div class="col-md-8" >
                       <img  src="images/map.jpg"  width="100%" height="67%">
                    </div>

               </div>    
        </div>
    <div class="  container-fluid contact" id="image-contact" >
        <h4 align="center" style="font-size:40px;color:white;" >Send Us a message</h4>
        <div class="row justify-content-md-center" style="margin-top:5%;">
            <div class="col-md-6 col-sm-3" id="form-detail"  >
                <div class="contact-form">
                    <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4" for="fname" style="color:white;">First Name:</label>
                            <div class="col-md-10 col-sm-10">
                            <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname">
                        </div>
                    </div>
                         <div class="form-group">
                        <label class="control-label col-md-4 " for="lname"  style="color:white;">Last Name:</label>
                            <div class="col-md-10">
                            <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname">
                        </div>
                    </div>
                         <div class="form-group">
                        <label class="control-label col-md-4" for="email"  style="color:white;">Email:</label>
                            <div class="col-md-10">
                            <input type="email" class="form-control" id="fname" placeholder="Enter Email" name="email">
                        </div>
                    </div></div>
                    </div>
                      <div class="col-md-6 col-sm-3" id="form-detail"  >
                          <div class="contact-form">
                         <div class="form-group">
                        <label class="control-label col-md-4" for="num"  style="color:white;">Number:</label>
                            <div class="col-md-10">
                                    <input type="tel" class="form-control" id="num" placeholder="Enter Number" name="num">
                        </div>
                    </div>
                         <div class="form-group">
                        <label class="control-label col-md-4" for="comment"  style="color:white;">Comment:</label>
                            <div class="col-md-10">
                                 <textarea class="form-control" rows="5" id="comment" placeholder="Comment"></textarea>
                        </div>
                    </div>
                        <div class="form-group">
                            <div class="col-md-offset-2  ">
                                <button type="submit" class="btn btn-info" id="contact-button"  style="color:white;">Submit</button>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 
     
    
 <!--        footer
        <?php
    include("footer.php");
    ?>
<!--        end-->
    </body>
</html>