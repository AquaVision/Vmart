<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <base href="<?= base_url() . "assets/"; ?>">
    <title>My Items</title>
    <link href="css/settings_page.css" media="all" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" type="text/css" href="bootstrap/file-upload/bootstrap-fileupload.css">
    <link href="bootstrap/css/bootstrap-combined.no-icons.min.css" rel="stylesheet"> 
    <link href="bootstrap/font-awesome/css/font-awesome.css" rel="stylesheet">

</head>

<body class="body-db" data-twttr-rendered="true">


    <div id="main-wrapper" style="padding-top: 47px;">
        <div class="main-content">
            <div class="db-container container-fluid">
                <div class="row-fluid">
                    <div class="span12">
                        


                        <aside class="db-sidebar">
                            <div class="db-sidebar-inner">
                                <nav class="db-nav">
                                    <h5 class="muted">Public Profile Settings</h5>
                                      <ul >
                                        <li style="margin-left:10px;"><a href="public_profile_seller.htm"  style="color:#060">> Seller </a></li>
                                        <li style="margin-left:10px;"><a href="public_profile_buyer.htm"  style="color:#060">> Buyer </a></li>
                                    </ul>
                                    <ul>
                                        <h5 class="muted">Account Settings</h5>
                                        <li style="margin-left:10px;"><a href="public_profile_settings.htm" fsource="loggedin_Profile_Settings" style="color:#060">> Settings</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </aside>



                    <section class="db-content">
                        <div class="db-content-inner">
                            <header class="db-header cf">
                                <h3>
                                    My Items
                                </h3>
                            </header>
                            <div class="profile-form">

                                            <div class="db-summary db-order-stats">
                                                <a>4<small>All Items</small></a>
                                                <a href="#/active">0<small>Suspended</small></a>
                                                <a href="#/completed">1<small>Deleted</small></a>
                                                <a href="#/delivered">3<small>Popular</small></a>
                                            </div>
                                

                                <ul id="tabsxz" class="nav nav-tabs" class="nav nav-tabs" data-tabs="tabs">

                                    <li class="active"><a href="#items" data-toggle="tab">Current Items</a></li>
                                    <li><a href="#create-item" data-toggle="tab">Create Item</a></li>
                                    
                                </ul>


                                <div class="tab-content" style="">

                                    <div class="tab-pane active" id="items">
                                        <!-- This is the first tab -->
                                        <div id="container" style="min-width: 400px; height: 500px; margin: 0 auto">

                                            <!--Current Items Div-->
                                            <div id="items-div">

                                                <table class="table">

                                                    <tr>
                                                        <td style="width:30%">
                                                            <a href="" class="thumbnail">
                                                                <img src="./images/fixed_images/15.png" style="width:212px;height:135px;">
                                                            </a>
                                                        </td>
                                                        <td class="span6">
                                                            <h5>Earings : </h5>
                                                            <div style="margin: 1px 1px 1px 1px; font-size:11px">
                                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                            </div>                                                            
                                                        </td>
                                                        <td class="span3">
                                                            <div style="margin: 15px 1px 1px 1px;">
                                                                <p>Price : 3500/- Rs</p>
                                                                <p><a href=""> <i class="icon-trash"></i> Remove</a></p>
                                                                <p><a href=""> <i class="icon-pause"></i> Suspend</a></p>
                                                                <p><a href=""> <i class="icon-edit"></i> Edit</a></p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td style="width:30%">
                                                            <a href="" class="thumbnail">
                                                                <img src="./images/fixed_images/12.png" style="width:212px;height:135px;">
                                                            </a>
                                                        </td>
                                                        <td class="span6">
                                                            <h5>Pendent : </h5>
                                                            <div style="margin: 1px 1px 1px 1px; font-size:11px">
                                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                            </div>                                                            
                                                        </td>
                                                        <td class="span3">
                                                            <div style="margin: 15px 1px 1px 1px;">
                                                                <p>Price : 2500/- Rs</p>
                                                                <p><a href=""> <i class="icon-trash"></i> Remove</a></p>
                                                                <p><a href=""> <i class="icon-pause"></i> Suspend</a></p>
                                                                <p><a href=""> <i class="icon-edit"></i> Edit</a></p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                     <tr>
                                                        <td style="width:30%">
                                                            <a href="" class="thumbnail">
                                                                <img src="./images/fixed_images/14.png" style="width:212px;height:135px;">
                                                            </a>
                                                        </td>
                                                        <td class="span6">
                                                            <h5>Necklace : </h5>
                                                            <div style="margin: 1px 1px 1px 1px; font-size:11px">
                                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                            </div>                                                            
                                                        </td>
                                                        <td class="span3">
                                                            <div style="margin: 15px 1px 1px 1px;">
                                                                <p>Price : 5500/- Rs</p>
                                                                <p><a href=""> <i class="icon-trash"></i> Remove</a></p>
                                                                <p><a href=""> <i class="icon-pause"></i> Suspend</a></p>
                                                                <p><a href=""> <i class="icon-edit"></i> Edit</a></p>
                                                            </div>
                                                        </td>
                                                    </tr>                                   

                                                    
                                                </table>


                                            </div><!--End Current Items Div-->

                                        </div>

                                        <!--Start Pager-->
                                        <div style="margin: 1px 12px 1px 12px;">
                                            <ul class="pager">
                                              <li class="previous">
                                                <a href="#">&larr; Previous</a>
                                              </li>
                                              <li class="next">
                                                <a href="#">&nbsp;Next &nbsp;&rarr; &nbsp;</a>
                                              </li>
                                            </ul>
                                        </div>
                                        <!--End Pager-->
                                    </div><!--End First Tab Pane--> 

                                    <!--Create Item Div-->
                                    <div class="tab-pane" id="create-item" style="min-width: 400px; margin: 0 auto">

                                        <form class="form-horizontal" onsubmit="return false;">
                                            <fieldset>

                                              <div class="control-group">
                                                <label class="control-label" for="input01">Title</label>
                                                <div class="controls">
                                                  <input type="text" class="input-xxlarge trololo" id="input01">
                                                </div>
                                              </div>

                                              <div class="control-group">
                                                <label class="control-label" for="input01">Similar</label>
                                                <div class="controls">
                                                  <input type="text" class="input-xxlarge trololo" id="input01">
                                                </div>
                                              </div>   


                                              <div class="control-group">
                                                <label class="control-label" for="input01">Price</label>
                                                <div class="controls">
                                                  <input type="number" class="input-xxlarge trololo span5" id="input01">
                                                  <select id="select01" class="trololo span6">
                                                    <option>-Currency-</option>
                                                    <option>LKR</option>
                                                    <option>USD</option>
                                                    <option>AUD</option>
                                                    <option>UAD</option>
                                                    <option>KUR</option>
                                                  </select>
                                                </div>
                                              </div>        

                                              <div class="control-group">
                                                <label class="control-label" for="input01">Quantity</label>
                                                <div class="controls">
                                                  <input type="number" class="input-large trololo" id="input01">
                                                </div>
                                              </div> 

                                              <div class="control-group">
                                                <label class="control-label" for="select01">Category</label>
                                                <div class="controls">
                                                  <select id="select01" class="trololo">
                                                    <option>-None-</option>
                                                    <option>Jewellery</option>
                                                    <option>Ornaments</option>
                                                    <option>Handicrafts</option>
                                                    <option>Miscellaneous</option>
                                                  </select>
                                                </div>
                                              </div>

                                              <div class="control-group">
                                                <label class="control-label" for="textarea">Description</label>
                                                <div class="controls">
                                                  <textarea class="input-xxlarge trololo" id="textarea" rows="3"></textarea>
                                                </div>
                                              </div>

                                              <div class="controls" style="">



                                                <table>
                                                    
                                                    <tr>
                                                        <td style="width:30%" >
                                                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                                              <div class="fileupload-new thumbnail" style="width:150px;height:95px;">
                                                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image"  
                                                                style="width:150px;height:95px;"/>
                                                              </div>
                                                              <div class="fileupload-preview fileupload-exists thumbnail" 
                                                              style="width: 150px; height: 95px; line-height: 20px;">
                                                              </div>
                                                              <div>
                                                                <span class="btn btn-file">
                                                                    <span class="fileupload-new">
                                                                        <i class="icon-folder-open"></i>
                                                                    </span>
                                                                    <span class="fileupload-exists">
                                                                        <i class="icon-pencil"></i>
                                                                    </span>
                                                                    <input type="file" />
                                                                </span>
                                                                <a href="#" class="btn fileupload-exists" data-dismiss="fileupload" style="margin-left: 80px;">
                                                                    <i class="icon-remove"></i>
                                                                </a>
                                                              </div>
                                                            </div>
                                                        </td>

                                                        <td style="width:5.15%" ></td>
                                                        <td style="width:30%" >
                                                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                                              <div class="fileupload-new thumbnail" style="width:150px;height:95px;">
                                                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image"  
                                                                style="width:150px;height:95px;"/>
                                                              </div>
                                                              <div class="fileupload-preview fileupload-exists thumbnail" 
                                                              style="width: 150px; height: 95px; line-height: 20px;">
                                                              </div>
                                                              <div>
                                                                <span class="btn btn-file">
                                                                    <span class="fileupload-new">
                                                                        <i class="icon-folder-open"></i>
                                                                    </span>
                                                                    <span class="fileupload-exists">
                                                                        <i class="icon-pencil"></i>
                                                                    </span>
                                                                    <input type="file" />
                                                                </span>
                                                                <a href="#" class="btn fileupload-exists" data-dismiss="fileupload" style="margin-left: 80px;">
                                                                    <i class="icon-remove"></i>
                                                                </a>
                                                              </div>
                                                            </div>
                                                        </td>

                                                        <td style="width:5.15%" ></td>

                                                        <td style="width:30%" >
                                                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                                              <div class="fileupload-new thumbnail" style="width:150px;height:95px;">
                                                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image"  
                                                                style="width:150px;height:95px;"/>
                                                              </div>
                                                              <div class="fileupload-preview fileupload-exists thumbnail" 
                                                              style="width: 150px; height: 95px; line-height: 20px;">
                                                              </div>
                                                              <div>
                                                                <span class="btn btn-file">
                                                                    <span class="fileupload-new">
                                                                        <i class="icon-folder-open"></i>
                                                                    </span>
                                                                    <span class="fileupload-exists">
                                                                        <i class="icon-pencil"></i>
                                                                    </span>
                                                                    <input type="file" />
                                                                </span>
                                                                <a href="#" class="btn fileupload-exists" data-dismiss="fileupload" style="margin-left: 80px;">
                                                                    <i class="icon-remove"></i>
                                                                </a>
                                                              </div>
                                                            </div>
                                                        </td>
                                                </table>

                                              </div>

                                              <!--Start Text Editor-->
                                              <div class="control-group">
                                                <label class="control-label" for="textarea">More Information</label>
                                                <div class="controls">
                                                  <textarea class="input-xxlarge trololo" id="textarea" rows="3"></textarea>
                                                </div>
                                              </div>
                                              <!--End Text Editor-->                                              

                                              <div class="controls">
                                                <button type="submit" class="btn btn-primary">Add Item</button>
                                                <button class="btn">Cancel</button>
                                              </div>

                                            </fieldset>
                                          </form>
                                    </div> <!--End Create Item Div-->
                                </div>
                            </div>
                        </div>
          </section>
      </div>
  </div>
</div>
</div>



<footer class="main-footer"></footer>
</div>

<script src="jquerylib/jquery-1.10.1.min.js" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
<script src="bootstrap/file-upload/bootstrap-fileupload.min.js" type="text/javascript"></script>



</body>
</html>