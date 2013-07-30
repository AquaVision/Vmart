<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <base href="<?= base_url() . "assets/"; ?>">
        <title></title>      
        <link href="css/settings_page.css" media="all" rel="stylesheet" type="text/css">
        <link  rel="stylesheet" href="bootstrap/css/bootstrap.min.css" media="screen">
        <link href="css/sellerfrontstyle.css" rel="stylesheet">
        <link href="css/MainStyleForAllpages.css" rel="stylesheet">

        <style type="text/css">

        </style>

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
                                <div class="db-content-inner">
                                    <header class="db-header cf">
                                        <h3>
                                            Orders
                                        </h3>
                                    </header>
                                    <div class="profile-form">

                                        <div class="db-summary db-order-stats">
                                            <a href="<?php echo site_url() . "Orders/AllOrders/IN_PROGRESS"; ?>"><?php echo $ordercount["progress"] ?><small>New Orders</small></a>
                                            <a href="<?php echo site_url() . "Orders/AllOrders/ON_DELIVERY"; ?>"><?php echo $ordercount["delivery"] ?><small>Delivery</small></a>
                                            <a href="<?php echo site_url() . "Orders/AllOrders/COMPLETED"; ?>"><?php echo $ordercount["complete"] ?><small>Completed</small></a>
                                            <a href="<?php echo site_url() . "Orders/AllOrders/REJECTED"; ?>"><?php echo $ordercount["rejected"] ?><small>Rejected</small></a>
                                        </div>

                                        <table class="table  table-hover table-bordered table-condensed" id="inboxcontent" style="width:100% font-size:11px;" >
                                            <thead>
                                            <th width="18%" height="29"><strong>Buyer</strong></th>
                                            <th width="37%"><strong>Sales Item</strong></th>
                                            <th width="6%"><strong>Quantity</strong></th>
                                            <th width="9%"><strong>Price</strong></th>
                                            <th width="14%"><strong>Due In</strong></th>
                                            <th width="15%"><strong>Status</strong></th>

                                            <tbody>

                                                <?php
                                                if ($type == "current_orders") {
                                                    $count = 0;
                                                    foreach ($data as $shopsalles) {
                                                        ++$count;
                                                        ?>


                                                <tr onclick="window.location='<?php echo site_url()."Orders/OrderDiscussion/{$shopsalles->orderid}" ?>'">
                                                            <td align="left" valign="middle">
                                                                <div>
                                                                    <img class="avatar" alt="" src="<?php echo get_assets_path() . "/$shopsalles->profile_pic" ?>">
                                                                    &nbsp; <?php echo $shopsalles->username ?>
                                                                </div>
                                                            </td>
                                                            <td valign="middle"><?php echo $shopsalles->title ?></td>
                                                            <td align="right" valign="middle"><?php echo $shopsalles->Qty ?></td>
                                                            <td align="right" valign="middle"><?php echo $shopsalles->total_amount ?></td>
                                                            <td align="center" valign="middle"><?php echo $shopsalles->date_int ?></td>
                                                            <?php
                                                            $status = $shopsalles->status;
                                                            $thumbs = "";
                                                            $word = "";
                                                            if ($status == "IN_PROGRESS") {
                                                                $status = "justgot";
                                                                $word = "New Order";
                                                            } else if ($status == "ON_DELIVERY") {
                                                                $status = "working";
                                                                $word = "Delivery";
                                                            } else if ($status == "COMPLETED") {
                                                                $status = "done";
                                                                $word = "Completed";
                                                                $thumbs = "icon-thumbs-up";
                                                            } else if ($status == "REJECTED") {
                                                                $status = "rejected";
                                                                $word = "Rejected";
                                                                $thumbs = "icon-thumbs-down";
                                                            }
                                                            ?>


                                                            <td valign="middle" class="statusofproduct <?php echo $status ?>"  ><?php echo $word ?>&nbsp;<i class="<?php echo $thumbs ?>"></i></td>
                                                        </tr>

                                                    <?php }
                                                } ?>


                                            </tbody>
                                        </table>




                                        <!--<a class="btn btn-info" href="#register" role="button" data-toggle="modal">View Order Details</a>-->



                                        <div class="pagination" style="text-align:center">
                                            <?php if($count > 20){ ?>
                                            <ul>
                                                <li><a href="#">Prev</a></li>
                                                <li><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#">5</a></li>
                                                <li><a href="#">Next</a></li>
                                            </ul>
                                            <?php } ?>
                                        </div>

                                    </div>
                                    <div class="form-divi"></div>
                                    </form>

                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>

            <div id="register" class="modal hide fade" aria-labelledby="modalLable" aria-hidden="true">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></button>
                    <h3 id="modalLabel">Order Details</h3>
                </div>

                <div class="modal-body">

                    <form>

                    </form>

                </div>

                <div class="modal-footer">
                    <button class="btn btn-danger" data-dismiss="modal" aria-hidden="ture">Cancel</button>
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
    <script type="text/javascript" src="js/Common.js"></script>
    <script type="text/javascript">
        $('#sales_data_tbl').on('click', 'tbody tr', function(event) {
            //var cells = cells = this.getElementsByTagName('td');
            //$('#register').modal('show');
            //alert($(this).text());
            window.location.replace("http://stackoverflow.com");
        }
    );
    </script>
</html>