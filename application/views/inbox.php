<!DOCTYPE html>
<html>
    <head>
       
        <meta charset="utf-8">
        <base href="<?=base_url()."assets/";?>">
        <title></title>      
        <link href="css/settings_page.css" media="all" rel="stylesheet" type="text/css">
   <link href="css/sellerfrontstyle.css" rel="stylesheet">
        <link id="callCss" rel="stylesheet" href="bootstrap/css/bootstrap.min.css" media="screen">

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
                            <aside class="db-sidebar">
                                <div class="db-sidebar-inner">
                                  <nav class="db-nav">
                                  <ul>
                                            <li>Public Profile Settings</li>
                                            <li><a href="#" fsource="loggedin_Profile_Settings" style="color:#060">Account Settings</a></li>
                                        </ul>
                                        <ul>
                                            <li><h5>Actions</h5></li>
                                            <li><a href="#" fsource="loggedin_Profile_Settings" style="color:#060">Account Settings</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </aside>
                            <section class="db-content">
                                <div class="db-content-inner">
                                    <header class="db-header cf">
                                        <h3>
                                           My Inbox
                                        </h3>
                                    </header>
                                    <div class="profile-form">
                                        
                                        <div class="db-summary db-order-stats">
                                            <a href="#/new">0<small>InBox</small></a>
                                            <a href="#/active">0<small>Unread</small></a>
                                            <a href="#/completed">3<small>Read</small></a>
                                            <a href="#/completed">3<small>Archived</small></a>
                                         
                                        </div>

                                       
                                        


                                        <!--<a class="btn btn-info" href="#register" role="button" data-toggle="modal">View Order Details</a>-->

    
                                    <form accept-charset="UTF-8" action="#" class="edit_user" enctype="multipart/form-data" id="edit_user_1421605" method="post">
                                            

                                            <div style="margin:0;padding:0;display:inline">
                                                 <ul id="tabsxz" class="nav nav-tabs"  data-tabs="tabs">
                                                        <li class="active"><a href="#InBox" data-toggle="tab">InBox</a></li>
                                                        <li><a href="#seller" data-toggle="tab">UnRead</a></li>
                                                        <li><a href="#seller" data-toggle="tab">Read</a></li>
                                                        <li><a href="#seller" data-toggle="tab">Archived</a></li>
                                                        <a class ="btn" href="#imal" style="float:right" >Archive Selected</a>
                                                </ul>


                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="InBox">
                                                         
                                                            <table class="table table-hover"  id="inboxcontent">
                                                           <tr>
                                                                <td width="7%" ><input type="checkbox" name="checkbox" style="width:30px;"/></td>
                                                                 <td width="7%"><img class="avatar" alt="" src="images/uploaded/users/avatar1.jpg"></td>
                                                                 <td width="15%" style="text-align:left" >imal 95</td>
                                                                 <td width="55%"> half of the text</td>
                                                                 <td width="15%"> 05thJuly 2013</td>
                                                           </tr>
                                                            <tr >
                                                                <td width="7%" ><input type="checkbox" name="checkbox" style="width:30px;"/></td>
                                                                 <td width="7%"><img class="avatar" alt="" src="images/uploaded/users/avatar1.jpg"></td>
                                                                 <td width="15%" style="text-align:left" >imal 95</td>
                                                                 <td width="55%"> half of the text</td>
                                                                 <td width="15%"> 05thJuly 2013</td>
                                                           </tr>

                                                           
                                                                
                                                            </table>
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

                                                    <div class="tab-pane" id="seller">
                                                            <p>This is the second tab</p>
                                                    </div>
                                                </div>
                                            
                                            </div>
                                            <div class="form-divi"></div>
                                        </form>
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

      $("#inboxcontent tr").click(function(e){

            window.location = "Inbox_message_discussion.htm";
      });
    </script>
</html>