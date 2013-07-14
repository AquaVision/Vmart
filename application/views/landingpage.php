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
        <div id="main" class="">
            <div class="span12 ">
                <div class="span12">
                    <div class="mainContent">
                        <h4 class="muted">Top Items</h4>
                        <ul class="thumbnails masonry" style="position: relative; height: 1230px;">

                            <?php foreach ($top_items as $item ): ?>
                                <li class="span3 masonry-brick" style="position: absolute; top: 0px; left: 0px; cursor:pointer">

                                    <div class="thumbnail">
                                        <img alt=""  src="<?php echo get_assets_path().$item->item_image; ?>">
                                        <div class="caption">
                                            <h6 class="itemtitle" ><?php echo $item->title; ?></h6>
                                            <div class="row" style="margin-left:0px; margin-bottom:5px;">
                                                <div class="span6 ratex <?php echo get_formatted_rating($item->rating); ?>" style="margin-left:0px;"></div>
                                                <div class="span1 nuberofsales" style="margin-left:0px;"><?php echo $item->num_of_sales; ?></div>
                                            </div>

                                            <p>
                                                <a class="btn primary details show_magnifier_modal" 
                                                    data-itemid="<?php echo $item->item_id; ?>"
                                                    data-imgurl="<?php echo get_assets_path().$item->item_image; ?>"
                                                    data-itemtitle="<?php echo $item->title; ?>"
                                                    data-itemprice="<?php echo $item->price ;?>"
                                                    ><i class="icon-zoom-in"></i>
                                                </a> 
                                                <a class="btn addto add-to-cart" data-itemid="<?php echo $item->item_id; ?>" href="#" rel="1"><i class="icon-shopping-cart"></i></a> 
                                                <span class="label label-info price" ><?php echo $item->price ;?></span>
                                            </p>

                                        </div>
                                    </div>

                                </li>
                                
                            <?php endforeach; ?>
                            
                        </ul>
                        <div class="pagination">
                            <ul>
                                <li><a href="#">Prev</a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <div class="span12">
                <div class="span12">
                    <div class="mainContent">


                        <div class="span12">
                            <div class="span7" style="margin-left:0px; height:460px; width:530px;">

                                <h4 class="muted">Latest Items</h4>
                                <ul class="thumbnails masonry"  id="vertical-ticker">                       
                                    <li >
                                        <div class="thumbnail row" style="margin-left:0px;">
                                            <div class="span3" style="margin-left:0px; width:140px; height:98px;">
                                                <img alt="" src="./images/fixed_images/13.png" >
                                            </div>
                                            <div class="span3" style="margin-left:0px; width:50% padding:0px; height:98px;">
                                                <div class="caption" style="padding-top:0px; padding-bottom:0px;">
                                                    <h6 class="itemtitle">Item 1 Item 1 Item 1 Item 1 Item 1</h6>
                                                    <span class="description">hello</span>
                                                    <div class="row" style="margin-left:0px; margin-bottom:2px; margin-top:3px;">
                                                        <div class="span6 ratex fivestars_4_0" style="margin-left:0px;"></div>
                                                        <div class="span1 nuberofsales" style="margin-left:0px;">(123)</div>
                                                    </div>

                                                    <p > <span class="label label-info price">10.00000/=</span></p>

                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li >
                                        <div class="thumbnail row" style="margin-left:0px;">
                                            <div class="span3" style="margin-left:0px; width:140px; height:98px;">
                                                <img alt="" src="./images/fixed_images/14.png" >
                                            </div>
                                            <div class="span3" style="margin-left:0px; width:50% padding:0px; height:98px;">
                                                <div class="caption" style="padding-top:0px; padding-bottom:0px;">
                                                    <h6 class="itemtitle">Item 1 Item 1 Item 1 Item 1 Item 1</h6>
                                                    <span class="description">hello</span>
                                                    <div class="row" style="margin-left:0px; margin-bottom:2px; margin-top:3px;">
                                                        <div class="span6 ratex fivestars_4_5" style="margin-left:0px;"></div>
                                                        <div class="span1 nuberofsales" style="margin-left:0px;">(123)</div>
                                                    </div>

                                                    <p > <span class="label label-info price">10.00000/=</span></p>

                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li >
                                        <div class="thumbnail row" style="margin-left:0px;">
                                            <div class="span3" style="margin-left:0px; width:140px; height:98px;">
                                                <img alt="" src="./images/fixed_images/15.png" >
                                            </div>
                                            <div class="span3" style="margin-left:0px; width:50% padding:0px; height:98px;">
                                                <div class="caption" style="padding-top:0px; padding-bottom:0px;">
                                                    <h6 class="itemtitle">Item 1 Item 1 Item 1 Item 1 Item 1</h6>
                                                    <span class="description">hello</span>
                                                    <div class="row" style="margin-left:0px; margin-bottom:2px; margin-top:3px;">
                                                        <div class="span6 ratex fivestars_5_0" style="margin-left:0px;"></div>
                                                        <div class="span1 nuberofsales" style="margin-left:0px;">(123)</div>
                                                    </div>

                                                    <p > <span class="label label-info price">10.00000/=</span></p>

                                                </div>
                                            </div>
                                        </div>
                                    </li>



                                </ul>


                            </div>



                            <div class="span8" style="margin-left:0px; width:620px;">
                                <div  style="margin-left:10px; padding-top:0px;">
                                    <h5 class="muted">Our top sellers</h5>
                                    <ul class="thumbnails masonry" style="position: relative; " id="topsellers">



                                        <li class="span3 masonry-brick">
                                            <div class="thumbnail" >
                                                <img alt="" src="./images/uploaded/users/user1.jpg">
                                                <div class="caption">
                                                    <h6 class="itemtitle">Item 1 Item 1 Item 1 Item 1 Item 1</h6>
                                                    <div class="row" style="margin-left:0px; margin-bottom:5px;">
                                                        <div class="span6 fivestars_0" style="margin-left:0px;"></div>

                                                    </div>


                                                </div>
                                            </div>
                                        </li>

                                        <li class="span3 masonry-brick">
                                            <div class="thumbnail" style="margin-right:0px;">
                                                <img alt="" src="./images/uploaded/users/user2.jpg">
                                                <div class="caption">
                                                    <h6 class="itemtitle">Item 1 Item 1 Item 1 Item 1 Item 1</h6>
                                                    <div class="row" style="margin-left:0px; margin-bottom:5px;">
                                                        <div class="span6 fivestars_0" style="margin-left:0px;"></div>

                                                    </div>


                                                </div>
                                            </div>
                                        </li>
                                        <li class="span3 masonry-brick" >
                                            <div class="thumbnail" >
                                                <img alt="" src="./images/uploaded/users/user3.jpg">
                                                <div class="caption">
                                                    <h6 class="itemtitle">Item 1 Item 1 Item 1 Item 1 Item 1</h6>
                                                    <div class="row" style="margin-left:0px; margin-bottom:5px;">
                                                        <div class="span6 fivestars_0" style="margin-left:0px;"></div>

                                                    </div>


                                                </div>
                                            </div>
                                        </li>

                                        <li class="span3 masonry-brick" >
                                            <div class="thumbnail" >
                                                <img alt="" src="./images/uploaded/users/user4.jpg">
                                                <div class="caption">
                                                    <h6 class="itemtitle">Item 1 Item 1 Item 1 Item 1 Item 1</h6>
                                                    <div class="row" style="margin-left:0px; margin-bottom:5px;">
                                                        <div class="span6 fivestars_0" style="margin-left:0px;"></div>

                                                    </div>


                                                </div>
                                            </div>
                                        </li>

                                        <li class="span3 masonry-brick" >
                                            <div class="thumbnail" >
                                                <img alt="" src="./images/uploaded/users/user1.jpg">
                                                <div class="caption">
                                                    <h6 class="itemtitle">Item 1 Item 1 Item 1 Item 1 Item 1</h6>
                                                    <div class="row" style="margin-left:0px; margin-bottom:5px;">
                                                        <div class="span6 fivestars_0" style="margin-left:0px;"></div>

                                                    </div>


                                                </div>
                                            </div>
                                        </li>


                                        <li class="span3 masonry-brick" >
                                            <div class="thumbnail" >
                                                <img alt="" src="./images/uploaded/users/user3.jpg">
                                                <div class="caption">
                                                    <h6 class="itemtitle">Item 1 Item 1 Item 1 Item 1 Item 1</h6>
                                                    <div class="row" style="margin-left:0px; margin-bottom:5px;">
                                                        <div class="span6 fivestars_0" style="margin-left:0px;"></div>

                                                    </div>


                                                </div>
                                            </div>
                                        </li>


                                    </ul>


                                    <div class="pagination">
                                        <ul>
                                            <li><a href="#">Prev</a></li>
                                            <li class="active">
                                                <a href="#">1</a>
                                            </li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">Next</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
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
                    row_height  :   '109px',
                    speed       :   2000,
                    interval    :   4000,
                    mousestop   :   true,
                    direction   :   'up'
                });
            });
                                                                                                                
                                                                                                                
            $('#btnModalSignIn').on('click',function(){
                $('#usrSignInLi').css({display:'none'});
    
                $('#usrLgdInLi').css({display:'block'});
                                                                                                                    
                                                                                                                    
                                                                                                                    
            });
                                                                                                                
                                                                                                               
            


            //Script for Magnifier Model
            $(".show_magnifier_modal").on('click',function(e)
            {
                var item_id= $(this).data("itemid");
                var item_image = $(this).data("imgurl");
                var item_title = $(this).data("itemtitle");
                var item_price = $(this).data("itemprice");


                var url = "../Vmart_alt/get_item_details/"+item_id;
                $.get(url, function(data) {
                    $('#mag-itemtitle').html(data);
                    $('#mag-itemimg').attr('src',item_image);
                    $('#mag-itemdesc').html(item_title);
                    $('#mag-itemprice').html(item_price);
                    $("#mngitemid").data("itemid",item_id);
                }).success(function() {
                    $('#item_magnifier').modal({show:true});
                });
            });

        </script>



    </body></html>