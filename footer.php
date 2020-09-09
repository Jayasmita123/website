<html>
<body>
<!--        footer-->
  
<button class="btn btn-primary scroll-top" id="scroll" data-scroll="up" type="button">
<i class="fa fa-chevron-up"></i>
</button>
    <script>
    $(document).ready(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $('.scroll-top').fadeIn();
    } else {
      $('.scroll-top').fadeOut();
    }
  });

  $('.scroll-top').click(function () {
    $("html, body").animate({
      scrollTop: 0
    }, 100);
      return false;
  });

    });</script>
        <div class="container-fluid" id="sd">
            <div class="row justify-content-md-center"   >
                 <div class="col-md-3" style="margin-top:3%;">
                     <ul><li><h5 style="color:gray">INTERESTING INFOS </h5></li>
                         <li>Lorem ipsum dolor sit amet.</li>
                         <li>Consectetuer adipiscing elit.</li>
                         <li>Aenean commodo ligula eget dolor.</li>
                     </ul>
                </div>
                <div class="col-md-3" style="margin-top:3%;">
                     <ul><li><h5 style="color:gray">ENFOLD L.A.</h5></li>
                         <li>1818 N Vermont Ave</li>
                         <li>Los Angeles,CA,United States</li>
                         <li>(555) 774 433</li><br>
                         <li>LA@entold.startup.com</li>
                     </ul>
                </div>
                <div class="col-md-3" style="margin-top:3%;">
                    <ul ><li><h5 style="color:gray">ENFOLD DETROTIT</h5></li>
                         <li>4870 Cass Ave</li>
                         <li>Detroit,MI, United States</li><br><li>(555) 389 976</li><br>
                        <li>detroit@entold-startup.com</li>
                     </ul>
                </div>
                <div class="col-md-3" style="margin-top:3%;">
                     <ul ><li><h5 style="color:gray">SITEMAP</h5></li>
                         <li><a href="#"> Contact</a></li>
                         <li><a href="#">Home  </a></li>
                         <li><a href="#">News</a></li>
                          <li><a href="#">Our Story</a></li>
                          <li><a href="#">Princing</a></li>
                          <li><a href="#">Products</a></li>
                     </ul>
                </div>
            </div>
             <div class="container">
                 <div class="row " >
<!--                   <div class="col-md-2"> -->
                        <i class="fa fa-twitter" style="font-size:40px;color:#1da1f2;"  aria-hidden="true"></i>
<!--                     </div>-->
                       <div class="col-md-1">
                           <p style="color:white;font-size:13px">follow <br><strong>on Twitter</strong></p>
                        </div>
<!--                        <div class="col-md-2">-->
                            <i class="fa fa-rss" style="font-size:40px;color:orange;" aria-hidden="true"></i>
<!--                     </div>               -->
                        <div class="col-md-1">
                           <p style="color:white;font-size:12px"> Subscribe<br><strong>on RSS Feed</strong> </p>
                        </div>
                    </div>
             </div>
        </div>
<!--        end-->
</body>
</html>