<!DOCTYPE html>
<html>
    <head>


        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">   
        <base href="<?= base_url() . "assets/"; ?>">
        <title>Vmart.lk</title>


        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" media="screen">
        <link href="css/sellerfrontstyle.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/Tickersellerfront.css">
        <link href="css/MainStyleForAllpages.css" rel="stylesheet">

        <link rel="shortcut icon" href="http://wbpreview.com/previews/WB00H3A42/images/favicon.ico">
        <meta name="chromesniffer" id="chromesniffer_meta" content="{&quot;jQuery&quot;:&quot;1.7.1&quot;,&quot;Bootstrap&quot;:-1}"><script type="text/javascript" src="chrome-extension://homgcnaoacgigpkkljjjekpignblkeae/detector.js"></script><script>window["_GOOG_TRANS_EXT_VER"] = "1";
        </script>
    </head>
    <body class="">


        <div id="header">
            <?php $this->load->view('includes/navbar'); ?>
            <div class="headerimglk" ></div>
        </div>
        <div id="main" class="row mp-container" style="margin-left: 0px;">
            <div class="span12 ">
                <div class="span12">
                    <div class="mainContent">
                        <h4 class="muted">Top Items</h4>
                        <ul class="thumbnails masonry" id="landingcontent" style="position: relative; height: 1230px;">

                            <?php foreach ($top_items as $item): ?>
                                <li class="span3 masonry-brick" style="position: absolute; top: 0px; left: 0px; cursor:pointer" onclick="window.location='<?php echo site_url("Item/get_item/{$item->item_id}") ?>'">

                                    <div class="vmartthumb">
                                        <img alt=""   src="<?php echo get_assets_path() . $item->MainImageUrl; ?>">
                                        <div class="caption">
                                            <h6 class="itemtitle" ><?php echo $item->title; ?></h6>
                                            <div class="row raterowma" style="margin-left:0px; margin-bottom:5px;">
                                                <div class="span6 ratex <?php echo get_formatted_rating($item->rating); ?>" style="margin-left:0px;"></div>
                                                <div class="span1 nuberofsales" style="margin-left:0px;">(<?php echo $item->rating; ?>)</div>
                                            </div>

                                            <p>
                                                <a class="btn primary details show_magnifier_modal" 
                                                   data-itemid="<?php echo $item->item_id; ?>"
                                                   data-imgurl="<?php echo get_assets_path() . $item->MainImageUrl; ?>"
                                                   data-itemtitle="<?php echo $item->title; ?>"
                                                   data-itemprice="<?php echo $item->price; ?>"
                                                   ><i class="icon-zoom-in"></i>
                                                </a> 
                                                <a class="btn addto add-to-cart" data-itemid="<?php echo $item->item_id; ?>" href="#" rel="1"><i class="icon-shopping-cart"></i></a> 
                                                <span style="float: right; margin-top: 0px; margin-right:4px;" class="label label-info price" ><?php echo $item->price; ?>&nbsp;<?php echo $item->price_currancy; ?></span>
                                            </p>

                                        </div>
                                    </div>

                                </li>

                            <?php endforeach; ?>

                        </ul>
                        <div class="pagination">
                            <div class="gig-load-more" style="display: block;">
                                <a  class="btn-standard-lrg btn-white" style="cursor: pointer">See More</a>
                            </div>
                            <hr class="loadmore" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="span12">
                <div class="span12">
                    <div class="mainContent" style="margin-left:0px;">
                        <div class="row" style="padding-left: 15px; padding-right: 20px; ">
                            <div class="span6" style="width: 50%; margin-left: auto; " >

                                <h4 class="muted">Latest Items</h4>


                                <ul class="thumbnails masonry"  id="vertical-ticker" style="margin-top: 29px;">                       
                                    <?php
                                    foreach ($latestitems as $item):
                                        ?>
                                        <li style="cursor: pointer" onclick="window.location='<?php echo site_url("Item/get_item/{$item->item_id}") ?>'" >
                                            <div class="thumbnail row" style="margin-left:0px;">
                                                <div class="span3" style="margin-left:0px; width:140px; height:120px;">
                                                    <img alt="" style="height: 100%" src="<?php echo get_assets_path() . $item->MainImageUrl; ?>" >
                                                </div>
                                                <div class="span3" style="margin-left:0px; width:50% padding:0px; height:98px;">
                                                    <div class="caption" style="padding-top:0px; padding-bottom:0px;">
                                                        <h6 class="itemtitle"><?php echo $item->title; ?></h6>
                                                        <span class="description"><?php echo $item->daysx; ?> days</span>
                                                        <div class="row" style="margin-left:0px; margin-bottom:2px; margin-top:3px;">
                                                            <div class="span6 ratex <?php echo get_formatted_rating($item->rating); ?>" style="margin-left:0px;"></div>
                                                            <div class="span1 nuberofsales" style="margin-left:0px;">(<?php echo $item->rating; ?>)</div>
                                                        </div>


                                                        <p > <span class="label label-info price"><?php echo $item->price; ?>&nbsp;<?php echo $item->price_currancy; ?></span></p>

                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>

                                </ul>
                            </div>
                            <div class="span6" style="width: 50%; margin-left: auto;">

                                <h4 class="muted">Our top sellers</h4>
                                <ul class="thumbnails " style="position: relative; " >


                                    <?php foreach ($topsellers as $seller): ?>
                                        <li style="cursor: pointer" class="span3 masonry-brick topsellerx">
                                            <img alt="user" class="thumbnail topsellerimg" width="100"  src="<?php echo get_assets_path() . "/" . $seller->shopname_pic ?>">
                                            <div class="whoisseller" ><?php echo $seller->shopname ?></div>
                                        </li>

                                    <?php endforeach; ?>





                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="pagination">
                    <div class="gig-load-more" style="display: block;">
                        <a  class="btn-standard-lrg btn-white" style="cursor: pointer">See More</a>
                    </div>
                    <hr class="loadmore"/>
                </div>
            </div>


        </div>

        <footer class="footer ">
            <?php $this->load->view('includes/footer.php'); ?>
        </footer>


        <!--Modal for Item Magnifier-->
        <div id="item_magnifier" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <a class="close" data-dismiss="modal">×</a>
                <h3 id="mag-itemtitle"></h3>
            </div>
            <div class="modal-body">
                <div class="thumbnail img">
                    <img alt="" id="mag-itemimg">
                </div>
                <p id="mag-itemdesc"></p>
            </div>
            <div class="modal-footer">
                <span class="label label-info price" id="mag-itemprice"></span>
                <a class="btn addto add-to-cart" data-itemid = ""  id="mngitemid" href="#" rel="1">Add to <i class="icon-shopping-cart"></i></a>
            </div>
        </div>
        <!--End Modal for Item Magnifier-->
        <input type="hidden" id="siteurl" value="<?php echo site_url() ?>" />
        <div class="alert alert-danger notificationaiy">
            <p></p>
            
        </div>

        <script src="jquerylib/jquery-1.10.1.min.js"></script>
        <script src="js/jquery.masonry.min.js"></script>
        <script src="bootstrap/js/bootstrap.js"></script>
        <script src="js/sellerfront.js"></script>
        <script type="text/javascript" src="js/jquery.totemticker.js"></script>
        <script src="js/bootvalidate/assets/js/jquery.validate.min.js"></script>
        <script type="text/javascript" src="js/Common.js"></script>
        <script type="text/javascript">
            $(function(){
                $('#vertical-ticker').totemticker({
                    row_height  :   '133px',
                    speed       :   4000,
                    interval    :   7000,
                    mousestop   :   true,
                    direction   :   'down'
                });
            });
                                                                                                                
                                                                                                                
            $('#btnModalSignIn').on('click',function(){
                $('#usrSignInLi').css({display:'none'});
    
                $('#usrLgdInLi').css({display:'block'});
                                                                                                    
            });
                           

            //Script for Magnifier Model
            
        </script>



    </body>

</html>