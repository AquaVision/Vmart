<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>      
        <link href="css/settings_page.css" media="all" rel="stylesheet" type="text/css">
        <link  rel="stylesheet" href="bootstrap/css/bootstrap.min.css" media="screen">
        <link href="css/sellerfrontstyle.css" rel="stylesheet">

        <style type="text/css">

        </style>

    </head>

    <body class="body-db" data-twttr-rendered="true">

            <div id="header">
            <?php include_once "includes/navbar.php" ?>
        </div>
        <div id="main-wrapper" style="padding-top: 47px;">
            <div class="main-content">
                <div class="db-container container-fluid">
                    <div class="row-fluid">
                        <div class="span12">
                           <?php include_once "includes/settings_rightbar.php" ?>
                            <section class="db-content">
                                <div class="db-content-inner">
                                    <header class="db-header cf">
                                        <h3>
                                            My Shopping
                                        </h3>
                                    </header>
                                    <div class="profile-form">
                                        
                                        <div class="db-summary db-order-stats">
                                            <a href="#/new">0<small>InProgress</small></a>
                                            <a href="#/active">0<small>Purchased</small></a>
                                            <a href="#/completed">3<small>Completed</small></a>
                                            <a href="#/delivered">0<small>Cancelled</small></a>
                                        </div>

                                        <table class="table table-striped table-hover table-bordered table-condensed" id="sales_data_tbl" >
                                            <thead>
                                                <th>Seller</th>
                                                <th>Sales Item</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Due In</th>
                                                <th>Status</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div>
                                                            <img src="" height="32" width="32">
                                                            <i class="icon-user"></i>
                                                            Lakmal55
                                                        </div>
                                                    </td>
                                                    <td>Necklace</td>
                                                    <td>2</td>
                                                    <td>2500</td>
                                                    <td>05<sup>th</sup>July 2013</td>
                                                    <td style="background-color: #468847;">Delivered&nbsp;<i class=" icon-thumbs-up"></i></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div>
                                                            <img src="" height="32" width="32">
                                                            <i class="icon-user"></i>
                                                            Imaa95
                                                        </div>
                                                    </td>
                                                    <td>Dongle</td>
                                                    <td>1</td>
                                                    <td>3500</td>
                                                    <td>02<sup>th</sup>June 2013</td>
                                                    <td style="background-color: #468847;">Delivered&nbsp;<i class=" icon-thumbs-up"></i></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div>
                                                            <img src="" height="32" width="32">
                                                            <i class="icon-user"></i>
                                                            Vat69
                                                        </div>
                                                    </td>
                                                    <td>Cocunet</td>
                                                    <td>2</td>
                                                    <td>1500</td>
                                                    <td>20<sup>th</sup>August 2013</td>
                                                    <td style="background-color: #468847;">Delivered&nbsp;<i class=" icon-thumbs-up"></i></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div>
                                                            <img src="" height="32" width="32">
                                                            <i class="icon-user"></i>
                                                            Anu89
                                                        </div>
                                                    </td>
                                                    <td>Bangle</td>
                                                    <td>4</td>
                                                    <td>5500</td>
                                                    <td>15<sup>th</sup>Sep 2013</td>
                                                    <td style="background-color: #b94a48;">Not Delivered&nbsp;<i class=" icon-thumbs-down"></i></td>
                                                </tr>

                                            </tbody>
                                        </table>

                                        


                                        <!--<a class="btn btn-info" href="#register" role="button" data-toggle="modal">View Order Details</a>-->

        
                                       
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
       <?php include_once "includes/footer.php" ?>
    </footer>
        </div>
    </body>
    <script src="jquerylib/jquery-1.10.1.min.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
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