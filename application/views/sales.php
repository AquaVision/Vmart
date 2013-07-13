<!DOCTYPE html>
<html>
<head>
    
    <meta charset="utf-8">
    <base href="<?=base_url()."assets/";?>">
    <title></title>      
    <link href="css/settings_page.css" media="all" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" media="screen">
    <link href="css/sellerfrontstyle.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="bootstrap/file-upload/bootstrap-fileupload.css">
    <link href="bootstrap/css/bootstrap-combined.no-icons.min.css" rel="stylesheet"> 
    <link href="bootstrap/font-awesome/css/font-awesome.css" rel="stylesheet">
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
                                    Sales Statistics
                                </h3>
                            </header>
                            <div class="profile-form">
                              <div class="db-summary db-order-stats"><a>$43750<small>Earned</small></a><a href="#/active">5690<small>Taken Items</small></a><a href="#/completed">$2340<small>Rending Clearence</small></a><a href="#/delivered">$75000<small>Loaded to Bank</small></a></div>

                                <hr/>


                                <ul id="tabsxz" class="nav nav-tabs" class="nav nav-tabs" data-tabs="tabs">
                                    <li class="active"><a href="#general" data-toggle="tab">General</a></li>
                                    <li><a href="#seller" data-toggle="tab">Seller</a></li>
                                    
                                </ul>


                                <div class="tab-content">

                                    <div class="tab-pane active" id="general">
                                        <!-- This is the first tab -->
                                        <div id="container" style="min-width: 400px; height: 400px; margin: 0 auto"></div>
                                        
                                  </div>

                                  <div class="tab-pane" id="seller">

                                   <p>This is the second tab</p>
                                   
                          </div>
                      </div>




                  </div>
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

<script src="jquerylib/jquery-1.10.1.min.js" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
<script src="bootstrap/file-upload/bootstrap-fileupload.js" type="text/javascript"></script>
<script type="text/javascript">
jQuery(document).ready(function ($) {
    $('#tabsxz').tab();
    $("#howussd").popover();
    $("html").click(function(){

        $('#howussd').popover('hide');
    });
    $('#howussd').click(function(event){
    event.stopPropagation();
});



    $("#bankselector").on("change",function(){

        var conceptName = $('#bankselector').find(":selected").text();
        var conceptval = $('#bankselector').find(":selected").val();

        $("#bankname").val(conceptName);
        $("#banknamecode").val(conceptval);
        
    });
});



</script>
<script type="text/javascript">
$(function () {
        $('#container').highcharts({
            chart: {
                type: 'area'
            },
            title: {
                text: 'Historic and Estimated Sales Growth Statistics by Month'
            },
            subtitle: {
                text: 'Source: VMART.lk'
            },
            xAxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
                tickmarkPlacement: 'on',
                title: {
                    enabled: false
                }
            },
            yAxis: {
                title: {
                    text: 'US dollers'
                },
                labels: {
                    formatter: function() {
                        return this.value / 1000;
                    }
                }
            },
            tooltip: {
                shared: true,
                valueSuffix: ' millions'
            },
            plotOptions: {
                area: {
                    stacking: 'normal',
                    lineColor: '#666666',
                    lineWidth: 1,
                    marker: {
                        lineWidth: 1,
                        lineColor: '#666666'
                    }
                }
            },
            series: [{
                name: 'earings',
                data: [502, 635, 809, 947, 1402, 3634, 5268, 111, 133, 221, 767, 1766,]
            }, {
                name: 'necklesses',
                data: [106, 107, 111, 133, 221, 767, 1766, 809, 947, 1402, 3634, 5268]
            }, {
                name: 'rings',
                data: [163, 203, 276, 408, 547, 729, 628, 339, 818, 1201, 111, 133,]
            }, {
                name: 'pendents',
                data: [18, 31, 54, 156, 339, 818, 1201, 111, 133, 221, 767, 1766,]
            }, {
                name: 'bracelets',
                data: [2, 2, 2, 6, 13, 30, 46, 55, 65, 67, 70, 75]
            }]
        });
    });
</script>
<script src="js/highchart/highcharts.js"></script>
<script src="js/highchart/modules/exporting.js"></script>
</body>
</html>