<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <base href="<?= base_url() . "assets/"; ?>">
        <title></title>      
        <link href="css/settings_page.css" media="all" rel="stylesheet" type="text/css">
        <link  rel="stylesheet" href="bootstrap/css/bootstrap.min.css" media="screen">


        <link href="css/sellerfrontstyle.css" rel="stylesheet">
        <link href="bootstrap/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link href="bootstrap/MetronicExtracted/css/style.css" rel="stylesheet" />



    </head>

    <body class="body-db" data-twttr-rendered="true">

        <div id="header">
            <?php $this->load->view('includes/navbar'); ?>
        </div>

        <div id="main-wrapper" style="padding-top: 47px;">
            <div class="main-content">
                <div class="db-container container-fluid">
                    <div class="row-fluid">
                        <div class="span12">
                            <?php $this->load->view('includes/settings_rightbar.php'); ?>
                            <section class="db-content">
                                <div style="margin-left: 25px;">
                                    <h2>Order #FO4298090085</h2>
                                    <p>Buyer :&nbsp;<a href="">Lakmal55</a>&nbsp;|&nbsp;Date : 05<sup>th</sup>June 2013</p>
                                </div>

                                <!--Order Details Table-->
                                <div style="margin-left: 25px; margin-right: 25px;">
                                    <table class="table table-striped ">
                                        <thead>
                                        <th width="55%">Item</th>
                                        <th width="15%">Qty.</th>
                                        <th width="15%">Duration</th>
                                        <th width="15%">Amount</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Necklace</td>
                                                <td>2</td>
                                                <td>2weeks</td>
                                                <td>2500</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!--End Order Details Table-->


                                <!--Order Status Viewer-->
                                <!--
                                <div class="row" style="margin-left: 25px; margin-right: 25px;">
                                        <div class="span3 status-viwer">
                                            <div style="border-radius 10px; -moz-border-radius 10px; -webkit-border-radius 10px; width: 20px; height: 20px; background: red; border: solid black 1px;">&nbsp;</div>
                                        </div>

                                        <div class="span3 status-viwer">

                                        </div>

                                        <div class="span3 status-viwer">

                                        </div>

                                        <div class="span3 status-viwer">

                                        </div>                                                                                                              
                                </div>
                                -->

                                <div class="form-wizard">
                                    <div class="navbar steps" style="margin-left: 0px; margin-right: 0px;">
                                        <div class="navbar-inner">
                                            <ul class="row-fluid nav nav-pills">
                                                <li class="span3 active">
                                                    <a href="#tab1" data-toggle="tab" class="step active">
                                                        <span class="number">1</span>
                                                        <span class="desc"><i class="icon-ok"></i> Ordered</span>   
                                                    </a>
                                                </li>
                                                <li class="span3">
                                                    <a href="#tab2" data-toggle="tab" class="step">
                                                        <span class="number">2</span>
                                                        <span class="desc"><i class="icon-ok"></i> Shipped</span>   
                                                    </a>
                                                </li>
                                                <li class="span3">
                                                    <a href="#tab3" data-toggle="tab" class="step">
                                                        <span class="number">3</span>
                                                        <span class="desc"><i class="icon-ok"></i> Shipping</span>   
                                                    </a>
                                                </li>
                                                <li class="span3">
                                                    <a href="#tab4" data-toggle="tab" class="step">
                                                        <span class="number">4</span>
                                                        <span class="desc"><i class="icon-ok"></i> Delivered</span>   
                                                    </a> 
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" style="margin-left: 25px; margin-right: 25px;">
                                    <div class="progress progress-striped active">
                                        <div class="bar" style="width: 20%;"></div>
                                    </div>
                                </div>

                                <!--End Order Status Viewer-->

                                <!--Start Conversation-->
                                <div style="margin-left: 25px; margin-right: 25px;">
                                    &nbsp;
                                    <div class="portlet-body" id="chats">
                                        <div class="scroller" data-height="343px" data-always-visible="1" data-rail-visible1="1">
                                            <ul class="chats" id="chatparent">
                                                <li class="in">
                                                    <img class="avatar" alt="" src="images/uploaded/users/avatar1.jpg" />
                                                    <div class="message">
                                                        <span class="arrow"></span>
                                                        <a href="#" class="name">Bob Nilson</a>
                                                        <span class="datetime">at Jul 25, 2012 11:09</span>
                                                        <span class="body">
                                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                                        </span>
                                                    </div>
                                                </li>
                                                <li class="out">
                                                    <img class="avatar" alt="" src="images/uploaded/users/avatar2.jpg" />
                                                    <div class="message">
                                                        <span class="arrow"></span>
                                                        <a href="#" class="name">Lisa Wong</a>
                                                        <span class="datetime">at Jul 25, 2012 11:09</span>
                                                        <span class="body">
                                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                                        </span>
                                                    </div>
                                                </li>
                                                <li class="in">
                                                    <img class="avatar" alt="" src="images/uploaded/users/avatar1.jpg" />
                                                    <div class="message">
                                                        <span class="arrow"></span>
                                                        <a href="#" class="name">Bob Nilson</a>
                                                        <span class="datetime">at Jul 25, 2012 11:09</span>
                                                        <span class="body">
                                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                                        </span>
                                                    </div>
                                                </li>
                                                <li class="out">
                                                    <img class="avatar" alt="" src="images/uploaded/users/avatar1.jpg" />
                                                    <div class="message">
                                                        <span class="arrow"></span>
                                                        <a href="#" class="name">Richard Doe</a>
                                                        <span class="datetime">at Jul 25, 2012 11:09</span>
                                                        <span class="body">
                                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                                        </span>
                                                    </div>
                                                </li>
                                                <li class="in">
                                                    <img class="avatar" alt="" src="images/uploaded/users/avatar1.jpg" />
                                                    <div class="message">
                                                        <span class="arrow"></span>
                                                        <a href="#" class="name">Richard Doe</a>
                                                        <span class="datetime">at Jul 25, 2012 11:09</span>
                                                        <span class="body">
                                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                                        </span>
                                                    </div>
                                                </li>
                                                <li class="out">
                                                    <img class="avatar" alt="" src="images/uploaded/users/avatar1.jpg" />
                                                    <div class="message">
                                                        <span class="arrow"></span>
                                                        <a href="#" class="name">Bob Nilson</a>
                                                        <span class="datetime">at Jul 25, 2012 11:09</span>
                                                        <span class="body">
                                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                                        </span>
                                                    </div>
                                                </li>
                                                <li class="in">
                                                    <img class="avatar" alt="" src="images/uploaded/users/avatar2.jpg" />
                                                    <div class="message">
                                                        <span class="arrow"></span>
                                                        <a href="#" class="name">Richard Doe</a>
                                                        <span class="datetime">at Jul 25, 2012 11:09</span>
                                                        <span class="body">
                                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
                                                            sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                                        </span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="chat-form">
                                            <div class="input-cont">   
                                                <input class="m-wrap" id="discuss" type="text" placeholder="Type a message here..." />
                                            </div>
                                            <div class="btn-cont"> 
                                                <span class="arrow"></span>
                                                <a href="javascript:;" id="postdiscuss" style="margin-top:12px; margin-left:5px;" class="btn blue icn-only"><i class="icon-ok icon-white"></i></a>
                                            </div>
                                        </div>
                                        &nbsp;
                                    </div>
                                </div>
                                <!--End of Conversation-->

                                <div style="margin-left: 25px; margin-right: 25px;margin-bottom: 25px; ">
                                    <div class="row"> 
                                        <div class="span4 pull-right">
                                            <p style="display:block;">Other</p>
                                            <a href="" style="display:block;"><i class="icon-circle-arrow-right"></i>&nbsp;Cancel Order</a><br>
                                            <a href="" style="display:block;"><i class="icon-circle-arrow-right"></i>&nbsp;Contact Buyer/Seller</a>
                                        </div>
                                    </div>
                                </div>


                            </section>
                        </div>
                    </div>
                </div>
            </div>



            <footer class="footer ">
                <?php $this->load->view('includes/footer.php'); ?>
            </footer>
        </div>
    </body>
    <script src="jquerylib/jquery-1.10.1.min.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
    <script src="js/Common.js"></script>
</html>