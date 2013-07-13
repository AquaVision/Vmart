<html lang="en">

    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <base href="<?= base_url() . "assets/"; ?>">
        <title>Aqua Vision</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">


        <!-- Bootstrap style --> 
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">



        <!--Main style for all pages-->
        <link href="css/MainStyleForAllpages.css" rel="stylesheet" media="screen">   
        <link href="css/sellerfrontstyle.css" rel="stylesheet"> 

        <!-- Bootstrap style responsive --> 
        <link href="css/responseive_base/bootstrap-responsive.min.css" rel="stylesheet">

        <!-- Google-code-prettify --> 

        <!-- fav and touch icons -->
        <link rel="shortcut icon" href="images/fixed_images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/fixed_images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/fixed_images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/fixed_images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="images/fixed_images/ico/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="http://wbpreview.com/previews/WB00H3A42/images/favicon.ico">
        <style type="text/css" id="enject"></style>


        <style type="text/css">
            .footera
            {
                color:#ccc; font-size:11px; padding:0; line-height:24px; display:block;
            }


        </style>


    </head>
    <body style="">
        <div id="header">
            <?php $this->load->view('includes/navbar'); ?>
        </div>

        <!--Modal for Sign IN-->
        <div id="modalSignIn" class="modal hide fade" aria-labelledby="modalLable" aria-hidden="true" style="width: 292px;top: 5%;left: 96%;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></button>
                <h3 id="modalLabel" style="text-align:center;">Sign In</h3>
            </div>

            <div class="modal-body">

                <div class="span2">
                    <a href=""><img src="./images/uploaded/facebook-login-button.png" style="width: 100%;margin-bottom: 10px;margin-left: 20px;"></a>
                </div>

                <form>
                    <div class="controls">
                        <!--<div class="span2" style="text-align:center;padding-top:6px;">Username :</div>-->
                        <input type="text" class="span3" placeholder="username" id="inputinfo"><br>

                        <!--<div class="span2" style="text-align:center;padding-top:6px;">Password :</div>-->
                        <input type="text" class="span3" placeholder="password" id="inputinfo">
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button id="btnModalSignIn" class="btn btn-primary" data-dismiss="modal" aria-hidden="ture">Sign In</button>
                <button class="btn btn-danger" data-dismiss="modal" aria-hidden="ture">Cancel</button>
            </div>
        </div>


        <!--End Modal for Sign IN-->

        <!-- Header End====================================================================== -->
        <div id="carouselBlk" class="container" >
            <div id="myCarousel" class="carousel slide" style="margin-top:23px;">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1" ></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>
                <!-- Carousel items -->
                <div class="carousel-inner">
                    <div class="active item"><img style="width:100%" src="images/fixed_images/1.jpg" alt="">
                        <div class="carousel-caption">
                            <h4>Second Thumbnail label</h4>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        </div>
                    </div>
                    <div class="item"><img style="width:100%" src="images/fixed_images/2.jpg" alt="">
                        <div class="carousel-caption">
                            <h4>Second Thumbnail label</h4>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        </div>
                    </div>
                    <div class="item"><img style="width:100%" src="images/fixed_images/3.jpg" alt="">
                        <div class="carousel-caption">
                            <h4>Second Thumbnail label</h4>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        </div>
                    </div>
                    <div class="item"><img style="width:100%" src="images/fixed_images/4.jpg" alt="">
                        <div class="carousel-caption">
                            <h4>Second Thumbnail label</h4>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        </div>
                    </div>
                </div>
                <!-- Carousel nav -->
                <a class="left carousel-control" href="http://bootstrapshoppingcart.com/preview/bootstrapshop/#myCarousel" data-slide="prev">‹</a>
                <a class="right carousel-control" href="http://bootstrapshoppingcart.com/preview/bootstrapshop/#myCarousel" data-slide="next">›</a>
            </div>
        </div>

        <div id="mainBody">
            <div class="container">
                <div class="row">
                    <!-- Sidebar ================================================== -->
                    <div id="sidebar" class="span3">          <div class="thumbnail" style="margin-bottom:10px; padding:10px;">
                            <a id="myCart" href="http://bootstrapshoppingcart.com/preview/bootstrapshop/product_summary.html">
                                Nithya </a>is a <br>
                            <div class="row" style="width:70%; margin-left:0px;">
                                <div class="ratingx span 12">
                                    <div class="full"></div>
                                    <div class="empty"></div>
                                    <div class="empty"></div>
                                    <div class="empty"></div>
                                    <div class="empty"></div>
                                </div>
                            </div>
                            rated seller
                        </div>
                        <!--End Seller Rating-->

                        <!--Start USSD Activation-->
                        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                            You can get to know about the latest products of Nithya by Subsribing to her USSD channel
                        </div>
                        <!--End USSD Activation-->

                        <!--Start Accordion-->
                        <ul id="sidenav01" class="accordion nav nav-department  nav-tabs nav-stacked ulstyle">

                            <li class="accordion-group">
                                <a href="" data-toggle="collapse" data-target="#subnav00" data-parent="#sidenav01" class="accordion-toggle activex collapsed">
                                    <i class="icon-chevron-right pull-right"></i>Page 1 
                                </a>
                                <ul id="subnav00" class="nav nav-list accordian-child collapse" style="height: auto;">
                                    <li><a href="#1">Page 1.1</a></li>
                                    <li><a href="#1">Page 1.2</a></li>
                                    <li><a href="#6">Page 1.3</a></li>
                                </ul>
                            </li>

                            <li class="accordion-group">
                                <a href="" data-toggle="collapse" data-target="#subnav01" data-parent="#sidenav01" class="accordion-toggle collapsed">
                                    <i class="icon-chevron-right pull-right"></i>Page 2 
                                </a>
                                <ul id="subnav01" class="nav nav-list collapse accordian-child">
                                    <li><a href="#1">Page 2.1</a></li>
                                    <li><a href="#1">Page 2.2</a></li>
                                    <li><a href="#6">Page 2.3</a></li>
                                </ul>
                            </li>

                            <li class="accordion-group">
                                <a href="" data-toggle="collapse" data-target="#subnav03" data-parent="#sidenav01" class="accordion-toggle collapsed">
                                    <i class="icon-chevron-right pull-right"></i>Page 3 
                                </a>
                                <ul id="subnav03" class="nav nav-list collapse accordian-child">
                                    <li><a href="#1">Page 3.1</a></li>
                                    <li><a href="#1">Page 3.2</a></li>
                                    <li><a href="#6">Page 3.3</a></li>
                                </ul>
                            </li>

                        </ul>



                        <!--End Accordion-->

                        <!--Start Featured Products-->
                        <div class="well well-small">
                            <h6><a href="">Nithya</a>'s Featured Products</h6>
                        </div>

                        <!--Start Featured Product One-->
                        <div class="thumbnail">
                            <img src="" title="Nithya's One" alt="" height="160px" width="160px">
                            <div class="caption">
                                <h5>Product Caption</h5>
                                <h4 style="text-align:center">
                                    <a class="btn" href="images/fixed_images/detail.htm">
                                        <i class="icon-zoom-in"></i>
                                    </a> 
                                    <a class="btn" href="http://bootstrapshoppingcart.com/preview/bootstrapshop/product_details.html#">
                                        Add to 
                                        <i class="icon-shopping-cart"></i>
                                    </a> 
                                    <a class="btn btn-primary" href="http://bootstrapshoppingcart.com/preview/bootstrapshop/product_details.html#">$222.00</a>
                                </h4>
                            </div>
                        </div><br>
                        <!--End Featured Product One-->

                        <!--Start Featured Product Two-->
                        <div class="thumbnail">
                            <img src="" title="Nithya's One" alt="" height="160px" width="160px">
                            <div class="caption">
                                <h5>Product Caption 2</h5>
                                <h4 style="text-align:center">
                                    <a class="btn" href="images/fixed_images/detail.htm">
                                        <i class="icon-zoom-in"></i>
                                    </a> 
                                    <a class="btn" href="http://bootstrapshoppingcart.com/preview/bootstrapshop/product_details.html#">
                                        Add to 
                                        <i class="icon-shopping-cart"></i>
                                    </a> 
                                    <a class="btn btn-primary" href="http://bootstrapshoppingcart.com/preview/bootstrapshop/product_details.html#">$222.00</a>
                                </h4>
                            </div>
                        </div><br>
                        <!--End Featured Product Two-->
                        <!--End Featured Products-->

                        <!--Start Customer Feed-->
                        <div class="thumbnail">

                            <div class="caption">
                                <h5>What people think about <a href="">Nithya</a></h5>
                                <marquee behavior="scroll" direction="up" scrollamount="2">
                                    <div class="well roolingitem">
                                        <img src="http://localhost/BootStrapStore/mystore/images/uploaded/star.png" height="32" width="32">Says: &nbsp; 
                                        <p>Nithya is aweseome</p>
                                    </div>

                                    <div class="well roolingitem">
                                        <img src="http://localhost/BootStrapStore/mystore/images/uploaded/star.png" height="32" width="32">Says: &nbsp; 
                                        <p>Nithya is aweseome</p>
                                    </div>

                                    <div class="well roolingitem">
                                        <img src="http://localhost/BootStrapStore/mystore/images/uploaded/star.png" height="32" width="32">Says:&nbsp; 
                                        <p>Thank you for visiting Shades Of Luxury, eBay's premier destination for authentic luxury eye-wear. Shades of Luxury has been in the eye-wear business for over 30 years and has been a trusted eBay vendor for 10 years. We are successful only because of you, our customers, who continuously come </p>
                                    </div>

                                    <div class="well roolingitem">
                                        <img src="http://localhost/BootStrapStore/mystore/images/uploaded/star.png" height="32" width="32">Says:&nbsp; 
                                        <p>Nithya is aweseome</p>
                                    </div>

                                </marquee>
                            </div>
                        </div>  
                        <!--End Customer Feed-->


                    </div>

                    <!-- Sidebar end=============================================== -->

                    <div class="span9">
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a> <span class="divider">/</span></li>
                            <li><a href="products.html">Products</a> <span class="divider">/</span></li>
                            <li class="active">product Details</li>
                        </ul> 
                        <div class="row">   
                            <div id="gallery" class="span5" >
                                <a href="images/fixed_images/f1.jpg" title="Fujifilm FinePix S2950 Digital Camera">
                                    <img src="images/fixed_images/f1.jpg" style="width:100%" alt="Fujifilm FinePix S2950 Digital Camera">
                                </a>

                                <div class="span12 moroptions" style="width:470px; margin-left:0px;">
                                    <div class="item">
                                        <a href="images/fixed_images/f1.jpg"> <img style="width:29%" src="images/fixed_images/f1.jpg" alt=""></a>
                                        <a href="images/fixed_images/f2.jpg"> <img style="width:29%" src="images/fixed_images/f2.jpg" alt=""></a>
                                        <a href="images/fixed_images/f3.jpg"> <img style="width:29%" src="images/fixed_images/f3.jpg" alt=""></a>
                                    </div>
                                </div>



                            </div>
                            <div class="span4">
                                <h3>Fujifilm FinePix S2950 Digital Camera  </h3>
                                <small>- (14MP, 18x Optical Zoom) 3-inch LCD</small>
                                <hr class="soft">
                                <form class="form-horizontal qtyFrm">
                                    <div class="control-group">
                                        <label class="control-label" style="text-align:left" ><h3>$222.00</h3></label>
                                        <div class="controls" style="height:60px; text-align:right">
                                            <input type="number"  placeholder="Qty."  style="width:60px; margin-top:20px">
                                        </div><br>
                                        <button type="submit" class="btn btn-large btn-primary pull-right"> Add to cart <i class=" icon-shopping-cart"></i></button>
                                    </div>
                                </form>




                                <hr class="soft clr">
                                <p>
                                    14 Megapixels. 18.0 x Optical Zoom. 3.0-inch LCD Screen. Full HD photos and 1280 x 720p HD movie capture. ISO sensitivity ISO6400 at reduced resolution. 
                                    Tracking Auto Focus. Motion Panorama Mode. Face Detection technology with Blink detection and Smile and shoot mode. 4 x AA batteries not included. WxDxH 110.2 ×81.4x73.4mm. 
                                    Weight 0.341kg (excluding battery and memory card). Weight 0.437kg (including battery and memory card).

                                </p>
                                <a class="btn btn-small pull-right" href="#detail">More Details</a>
                                <br class="clr">
                                <a href="#" name="detail"></a>

                            </div>

                            <div class="span9" style="margin-top:50px;">
                                <ul id="productDetail" class="nav nav-tabs">
                                    <li class="active"><a href="#home" data-toggle="tab">Product Details</a></li>

                                </ul>
                                <div id="myTabContent" class="tab-content">
                                    <div class="tab-pane fade active in" id="home">
                                        <h4>Product Information</h4>
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr class="techSpecRow"><th colspan="2">Product Details</th></tr>
                                                <tr class="techSpecRow"><td class="techSpecTD1">Brand: </td><td class="techSpecTD2">Fujifilm</td></tr>
                                                <tr class="techSpecRow"><td class="techSpecTD1">Model:</td><td class="techSpecTD2">FinePix S2950HD</td></tr>
                                                <tr class="techSpecRow"><td class="techSpecTD1">Released on:</td><td class="techSpecTD2"> 2011-01-28</td></tr>
                                                <tr class="techSpecRow"><td class="techSpecTD1">Dimensions:</td><td class="techSpecTD2"> 5.50" h x 5.50" w x 2.00" l, .75 pounds</td></tr>
                                                <tr class="techSpecRow"><td class="techSpecTD1">Display size:</td><td class="techSpecTD2">3</td></tr>
                                            </tbody>
                                        </table>

                                        <h5>Features</h5>
                                        <p>
                                            14 Megapixels. 18.0 x Optical Zoom. 3.0-inch LCD Screen. Full HD photos and 1280 x 720p HD movie capture. ISO sensitivity ISO6400 at reduced resolution. Tracking Auto Focus. Motion Panorama Mode. Face Detection technology with Blink detection and Smile and shoot mode. 4 x AA batteries not included. WxDxH 110.2 ×81.4x73.4mm. Weight 0.341kg (excluding battery and memory card). Weight 0.437kg (including battery and memory card).<br>
                                            OND363338
                                        </p>

                                        <h4>Editorial Reviews</h4>
                                        <h5>Manufacturer's Description </h5>
                                        <p>
                                            With a generous 18x Fujinon optical zoom lens, the S2950 really packs a punch, especially when matched with its 14 megapixel sensor, large 3.0" LCD screen and 720p HD (30fps) movie capture.
                                        </p>

                                        <h5>Electric powered Fujinon 18x zoom lens</h5>
                                        <p>
                                            The S2950 sports an impressive 28mm – 504mm* high precision Fujinon optical zoom lens. Simple to operate with an electric powered zoom lever, the huge zoom range means that you can capture all the detail, even when you're at a considerable distance away. You can even operate the zoom during video shooting. Unlike a bulky D-SLR, bridge cameras allow you great versatility of zoom, without the hassle of carrying a bag of lenses.
                                        </p>
                                        <h5>Impressive panoramas</h5>
                                        <p>
                                            With its easy to use Panoramic shooting mode you can get creative on the S2950, however basic your skills, and rest assured that you will not risk shooting uneven landscapes or shaky horizons. The camera enables you to take three successive shots with a helpful tool which automatically releases the shutter once the images are fully aligned to seamlessly stitch the shots together in-camera. It's so easy and the results are impressive.
                                        </p>

                                        <h5>Sharp, clear shots</h5>
                                        <p>
                                            Even at the longest zoom settings or in the most challenging of lighting conditions, the S2950 is able to produce crisp, clean results. With its mechanically stabilised 1/2 3", 14 megapixel CCD sensor, and high ISO sensitivity settings, Fujifilm's Dual Image Stabilisation technology combines to reduce the blurring effects of both hand-shake and subject movement to provide superb pictures.
                                        </p>
                                    </div>


                                </div>
                                <br class="clr">
                            </div>
                        </div>
                    </div>

                </div>
            </div>






        </div>
    </div>

</div>


<!-- Footer ================================================================== -->
<footer class="footer ">
    <?php $this->load->view('includes/footer.php'); ?>
</footer>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
<script src="jquerylib/jquery-1.10.1.min.js" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/prettify_base.js"></script>
<script src="js/bootshop_base.js"></script>
<script src="jquerylib/jquery.lightbox-0.5.js"></script>

<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/accordianMenu.js"></script>
<script src="js/sellerfront.js"></script>

<script type="text/javascript">

    $('#btnModalSignIn').on('click',function(){
        $('#usrSignInLi').css({display:'none'});
        $('#usrLgdInLi').css({display:'block'});
    });


</script>


<!-- Themes switcher section ============================================================================================= -->

<span id="themesBtn"></span>



</body></html>