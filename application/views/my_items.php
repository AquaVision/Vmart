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
      <link href="css/MainStyleForAllpages.css" rel="stylesheet">
    
    <link href="css/sellerfrontstyle.css" rel="stylesheet">
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

                         <?php 
                            $datax["rightbar"] = $rightbar;
                            $this->load->view('includes/settings_rightbar.php',$datax); ?>



                    <section class="db-content">
                        <div class="db-content-inner">
                            <header class="db-header cf">
                                <h3>
                                    My Items
                                </h3>
                            </header>
                            <div class="profile-form">

                                            <div class="db-summary db-order-stats">
                                                <a><?php echo $item_summary[0] ; ?><small>All Items</small></a>
                                                <a href="#/active"><?php echo $item_summary[1] ; ?><small>Suspended</small></a>
                                                <a href="#/completed"><?php echo $item_summary[2] ; ?><small>Deleted</small></a>
                                                <a href="#/delivered"><?php echo $item_summary[3] ; ?><small>Popular</small></a>
                                            </div>
                                

                                <ul id="tabsxz" class="nav nav-tabs" class="nav nav-tabs" data-tabs="tabs">

                                    <li class="active"><a href="#items" data-toggle="tab">Current Items</a></li>
                                    <li><a href="#create-item" data-toggle="tab">Create Item</a></li>
                                    
                                </ul>


                                <div class="tab-content" style="">
                                    
                                    <!-- This is the items tab -->
                                    <div class="tab-pane active" id="items">
                                        
                                        <div id="container" style="min-width: 400px; margin: 0 auto">

                                            <!--Current Items Div-->
                                            <div id="items-div">

                                                <table class="table">
                                                    
                                                    <?php foreach ($view_items_data as $item):?>
                                                    <tr>
                                                        <td style="width:30%">
                                                            <a href="" class="thumbnail">
                                                                <img src="<?php echo  get_assets_path().$item->MainImageUrl; ?>" style="width:212px;height:135px;">
                                                            </a>
                                                        </td>
                                                        <td class="span6">
                                                            <h5><?php echo $item->title; ?></h5>
                                                            <div style="margin: 1px 1px 1px 1px; font-size:11px">
                                                                <?php echo $item->breif_description; ?>
                                                            </div>                                                            
                                                        </td>
                                                        <td class="span3">
                                                            <div style="margin: 15px 1px 1px 1px;">
                                                                <p><?php echo $item->price."  ".$item->price_currancy; ?></p>
                                                                <p><a href=""> <i class="icon-trash"></i> Remove</a></p>
                                                                <p><a href=""> <i class="icon-pause"></i> Suspend</a></p>
                                                                <p><a href=""> <i class="icon-edit"></i> Edit</a></p>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; ?>

                                                </table>
                                                
                                            </div>
                                            <!--End Current Items Div-->

                                        </div>

                                        <!--Start Pager-->
                                        <p><?php echo $pag_links; ?></p>
<!--                                        <div style="margin: 1px 12px 1px 12px;">
                                            <ul class="pager">
                                              <li class="previous">
                                                <a href="#">&larr; Previous</a>
                                              </li>
                                              <li class="next">
                                                <a href="#">&nbsp;Next &nbsp;&rarr; &nbsp;</a>
                                              </li>
                                            </ul>
                                        </div>-->
                                        <!--End Pager-->
                                    </div><!--End First Tab Pane--> 

                                    <!--Create Item Div-->
                                    <div class="tab-pane" id="create-item" style="min-width: 400px; margin: 0 auto">

                                        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?php echo site_url('My_items/add_item') ?>">
                                            <fieldset>

                                              <div class="control-group">
                                                <label class="control-label" for="title">Title</label>
                                                <div class="controls">
                                                  <input type="text" class="input-xxlarge trololo" id="title" name="title">
                                                </div>
                                              </div>

                                              <div class="control-group">
                                                <label class="control-label" for="similar">Similar</label>
                                                <div class="controls">
                                                  <input type="text" class="input-xxlarge trololo" id="similar" name="similar">
                                                </div>
                                              </div>   


                                              <div class="control-group">
                                                <label class="control-label" for="price_no">Price</label>
                                                <div class="controls">
                                                  <input type="number" class="input-xxlarge trololo span5" id="price_no" name="price_no">
                                                  <select id="price_currency" class="trololo span6" name="price_currency">
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
                                                <label class="control-label" for="quantity">Quantity</label>
                                                <div class="controls">
                                                  <input type="number" class="input-large trololo" id="quantity" name="quantity">
                                                </div>
                                              </div> 

                                              <div class="control-group">
                                                <label class="control-label" for="sel_category">Seller Category</label>
                                                <div class="controls">
                                                  
                                                  <select id="sel_category" class="trololo" name="category">
                                                    <?php foreach($seller_categories as $option): ?>
                                                      <option><?php echo $option->cat_name; ?></option>
                                                    <?php endforeach; ?>                                                       
                                                  </select>
                                                  
                                                </div>
                                              </div>

                                              <div class="control-group">
                                                <label class="control-label" for="vmart_category">Vmart Category</label>
                                                <div class="controls">
                                                    
                                                  <select id="vmart_category" class="trololo" name="vcategory">
                                                    <?php foreach($vmart_categories as $option): ?>
                                                      <option><?php echo $option->catname; ?></option>
                                                    <?php endforeach; ?>                                                     
                                                  </select>
                                                    
                                                </div>
                                              </div>

                                              <div class="control-group">
                                                <label class="control-label" for="description">Description</label>
                                                <div class="controls">
                                                  <textarea class="input-xxlarge trololo" id="description" rows="3" name="description" ></textarea>
                                                </div>
                                              </div>

                                              <!--Image Upload Div-->  
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
                                                                    <input type="file" id="image_up_1" name="image_up_1"/>
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
                                                                    <input type="file" id="image_up_2" name="image_up_2"/>
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
                                                                    <input type="file" id="image_up_3" name="image_up_3"/>
                                                                </span>
                                                                <a href="#" class="btn fileupload-exists" data-dismiss="fileupload" style="margin-left: 80px;">
                                                                    <i class="icon-remove"></i>
                                                                </a>
                                                              </div>
                                                            </div>
                                                        </td>
                                                </table>
                                              </div>
                                              <!--End Image Upload Div-->  
                                              

                                              <!--Start Text Editor-->
                                              <div class="control-group">
                                                <label class="control-label" for="more_info">More Information</label>
                                                <div class="controls">
                                                    <textarea class="input-xxlarge trololo" id="more_info" rows="3" name="more_info" ></textarea>
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



<footer class="footer ">
            <?php $this->load->view('includes/footer.php'); ?>
</footer>

<script src="jquerylib/jquery-1.10.1.min.js" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
<script src="bootstrap/file-upload/bootstrap-fileupload.min.js" type="text/javascript"></script>



</body>
</html>