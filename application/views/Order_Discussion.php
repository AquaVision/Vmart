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
        <link href="css/MainStyleForAllpages.css" rel="stylesheet">


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
                                    <h2>Order #VM<?php echo $basic->orderid ?></h2>
                                    <p>Buyer :&nbsp;<a href=""><?php echo $buyer->username ?></a>&nbsp;|&nbsp;Date : <?php echo $basic->date_int ?></p>
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
                                                <td><?php echo $basic->title ?></td>
                                                <td><?php echo $basic->Qty ?></td>
                                                <td><?php echo $basic->duration ?> Days</td>
                                                <td><?php echo $basic->total_amount ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>


                                <div class="form-wizard">
                                    <div class="navbar steps" style="margin-left: 0px; margin-right: 0px; border-bottom: none !important;">
                                        <div class="navbar-inner">
                                            <ul class="row-fluid nav nav-pills">

                                                <?php
                                                $sellerid = $basic->selleruserid;
                                                $status = $basic->status;
                                                $progressbar = "progress-success";
                                                $buttonmssage = "Mark this As On Delivery";

                                                $statuspresntage = 0;
                                                $whichis = array("", "", "");
                                                if ($status == "IN_PROGRESS") {
                                                    $whichis[0] = "active";
                                                    $statuspresntage = 33;
                                                } else if ($status == "ON_DELIVERY") {
                                                    $whichis[1] = "active";
                                                    $statuspresntage = 66;
                                                    $buttonmssage = "Change this As In Progress";
                                                } else if ($status == "COMPLETED") {
                                                    $whichis[2] = "active";
                                                    $statuspresntage = 100;
                                                }

                                                if ($status == "REJECTED") {
                                                    $progressbar = "progress-danger";
                                                    $whichis[2] = "active";
                                                    $statuspresntage = 100;
                                                    $buttonmssage = "";
                                                }
                                                ?>


                                                <li class="span4 <?php echo $whichis[0] ?>">
                                                    <a href="#tab1" data-toggle="tab" class="step active">
                                                        <span class="number">1</span>
                                                        <span class="desc"><i class="icon-ok"></i> Ordered</span>   
                                                    </a>
                                                </li>
                                                <li class="span4 <?php echo $whichis[1] ?>">
                                                    <a href="#tab2" data-toggle="tab" class="step">
                                                        <span class="number">2</span>
                                                        <span class="desc"><i class="icon-ok"></i> On Delivery</span>   

                                                    </a>
                                                </li>
                                                <li class="span4 <?php echo $whichis[2] ?>">
                                                    <a href="#tab3" data-toggle="tab" class="step">
                                                        <span class="number">3</span>
                                                        <span class="desc"><i class="icon-ok"></i> Completed</span>   
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" style="margin-left: 25px; margin-right: 25px;">
                                    <div class="progress <?php echo $progressbar ?> progress-striped active">
                                        <div class="bar" style="width: <?php echo $statuspresntage; ?>%;"></div>
                                    </div>
                                </div>

                                <?php if (($buttonmssage != "") && ($basic->status != "COMPLETED")) { ?>
                                    <form class="form-horizontal" action="<?php echo site_url() ?>Orders/chnageState" method="post">
                                        <input type="hidden" value="<?php echo $basic->orderid ?>" name="oderid" />
                                        <button type="submit" class="btn" style="margin-left: 25px;"><?php echo $buttonmssage ?></button>

                                    </form>
                                <?php } ?>
                                <!--End Order Status Viewer-->

                                <!--Start Conversation-->
                                <div style="margin-left: 25px; margin-right: 25px;">
                                    &nbsp;
                                    <div class="portlet-body" id="chats">
                                        <div class="scroller" data-height="343px" data-always-visible="1" data-rail-visible1="1">
                                            <ul class="chats" id="chatparent">
                                                <?php
                                                foreach ($messages as $msg) {

                                                    $MSGuserid = $msg->user_messaged;

                                                    $msgtype = $msg->type;
                                                    if (($sellerid == $MSGuserid) && ($msgtype == "NORMAL" )) {
                                                        ?>

                                                        <li class="in">
                                                            <img class="avatar" alt="" src="<?php echo get_assets_path() . getprofilePic() ?>" />
                                                            <div class="message">
                                                                <span class="arrow"></span>
                                                                <a  class="name"><?php echo getUsername() ?></a>
                                                                <span class="datetime"><?php echo $msg->created_date ?></span>
                                                                <span class="body">
                                                                    <?php echo $msg->message ?>
                                                                </span>
                                                            </div>
                                                        </li>


                                                        <?php
                                                    } else if ((($buyer->userid) == $MSGuserid) && ($msgtype == "NORMAL" )) {
                                                        ?>

                                                        <li class="out">
                                                            <img class="avatar" alt="" src="<?php echo get_assets_path() . $buyer->profile_pic ?>" />
                                                            <div class="message">
                                                                <span class="arrow"></span>
                                                                <a  class="name"><?php echo $buyer->username ?></a>
                                                                <span class="datetime"><?php echo $msg->created_date ?></span>
                                                                <span class="body">
                                                                    <?php echo $msg->message ?>
                                                                </span>
                                                            </div>
                                                        </li>

                                                        <?php
                                                    } else if ($msgtype == "SPECIAL") {
                                                        
                                                        
                                                        $coloer = "#6BA5E7";
                                                        if ($msg->user_messaged == -2) {
                                                            $coloer = "#35aa47";
                                                        }else if($msg->user_messaged == -3){
                                                            $coloer = "#C56423";      
                                                        }
                                                        ?>

                                                        <li class="out" style="text-align: center; background-color: <?=$coloer ?>; color: white; margin-top: 10px; border-bottom: 10px;">
                                                            <h5><?php echo $msg->message ?></h5>
                                                            <?php echo $msg->created_date ?>
                                                        </li>      

                                                        <?php
                                                    }
                                                    ?>





                                                <?php } ?>


                                            </ul>
                                        </div>
                                        <div class="chat-form"> 
                                            <form action="<?php echo site_url() . "Orders/addComment" ?>"  method="post">
                                                <div class="input-cont">   
                                                    <input class="m-wrap" id="discuss" type="text" name="comment" placeholder="Type a message here..." />
                                                </div>
                                                <div class="btn-cont"> 

                                                    <input type="hidden" value="<?php echo $basic->orderid ?>" name="oderid" />
                                                    <span class="arrow"></span>
                                                    <button type="submit"  style="margin-top:12px; margin-left:5px;" class="btn blue icn-only"><i class="icon-ok icon-white"></i></button>

                                                </div>
                                            </form>
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
    <script src="js/bootvalidate/assets/js/jquery.validate.min.js"></script>
    <script src="js/Common.js"></script>
</html>