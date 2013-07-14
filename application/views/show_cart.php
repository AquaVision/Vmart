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

            .show-cart-table thead
            {
                background-color: black;
                color: white;

            }

            .show-cart-table thead th
            {
                text-align: center;  
            }

            .show-cart-table tfoot td
            {
                text-align: center;  
            }


            .show-cart-table tbody tr
            {
                height: 100px;
            }

            .show-cart-table tbody td
            {
                height: 50px;
                padding: 37px 20px 0px 20px; 
                text-align: center;
            }

            .show-cart-table tbody td img
            {
                height: 60px;
            }

            .show-cart-table tbody td img.rm-cart-i
            {
                height: 100%;
            }        

            .show-cart-table tbody td.sc-td-image
            {
                padding: 18px 0px 0px 17px;
            }


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

                            <!--<?php $this->load->view('includes/settings_rightbar.php'); ?>-->

                            <section class="db-content" style="margin-right: 0;">
                                <div class="db-content-inner">
                                    <header class="db-header cf">

                                        <h3>
                                            <img src="http://localhost/Vmart/assets/images/fixed_images/shopping_cart.png">
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            Shopping Cart
                                        </h3>
                                    </header>
                                    <div class="profile-form">

                                        <div class="db-summary db-order-stats"><a href="#/new">0<small>Items</small></a><a href="#/active">0<small>Total Price</small></a><a href="#/delivered">0<small>Status</small></a></div>

                                        <!--Show cart details in a table-->
                                        <?php
                                        echo '<table class="table table-hover show-cart-table "> 
                                       
                                          
                                            <thead>
                                                <th>Item</th>
                                                <th></th>
                                                <th>Unit Price</th>
                                                <th>Quantiy</th>
                                                <th>Sub Total</th>
                                                <th></th>
                                            </thead>
                                            
                                            <tbody> ';
                                        ?>
                                        <tr>
                                            <td class="sc-td-image"><img src="http://localhost/Vmart/assets/images/fixed_images/12.png" ></td>
                                            <td><h5>Stone Necklace</h5></td>
                                            <td><h5>1500</h5</td>
                                            <td><h5>10</h5</td>
                                            <td><h5>15000</h5</td>
                                            <td ><h5><a href=""><img class="rm-cart-i" src="http://localhost/Vmart/assets/images/fixed_images/Remove-icon.png" ></a></h5></td>
                                        </tr>
                                        <?php
                                        foreach ($cart_data as $items) {

                                            echo '<tr>';
                                           
                                           
                                                echo '<td class="sc-td-image"><img src="'.get_assets_path(). $items['item_image'] .'" ></td>';
                                                echo '<td><h5>' . $items['name'] . '</h5></td>';
                                                echo '<td><h5>' . $items['price'] . '</h5></td>';
                                                echo '<td><h5>' . $items['qty'] . '</h5></td>';
                                                echo '<td><h5>' . $items['subtotal'] . '</h5></td>';
                                                echo '<td ><h5><a href="" class="" data-rowid='.$items['rowid'].'><img class="rm-cart-i" src="http://localhost/Vmart/assets/images/fixed_images/Remove-icon.png" ></a></h5></td>';
                                            
                                            
                                            echo '</tr>';
                                        }
                                        echo '</tbody>
                                            <tfoot>
                                            <tr>
                                                <td colspan="3"></td>
                                                <td colspan="1" ><h3>Grand Total</h3></td>
                                                <td colspan="1" ><h3 style="color:red;">Rs 45000</h3></td>
                                            </tr>

                                            <tr>
                                                <td colspan="3"></td>
                                                <td colspan="1" ><img src="http://localhost/Vmart/assets/images/fixed_images/continue_shopping.png" style="height:"></td>
                                                <td colspan="1" ><img src="http://localhost/Vmart/assets/images/fixed_images/checkout_btn.png"></td>
                                            </tr>

                                        </tfoot>
                                                </table>';
                                        ?>                                



                                        <!--EndShow cart details in a table-->


                                        <div class="pagination" style="text-align:center">
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