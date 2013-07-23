<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>      
        <base href="<?= base_url() . "assets/"; ?>">
        <link href="css/sellerfrontstyle.css" rel="stylesheet">
        <link href="css/settings_page.css" media="all" rel="stylesheet" type="text/css">
        <link id="callCss" rel="stylesheet" href="bootstrap/css/bootstrap.min.css" media="screen">
        <link rel="stylesheet" type="text/css" href="bootstrap/file-upload/bootstrap-fileupload.css">
        <link href="bootstrap/css/bootstrap-combined.no-icons.min.css" rel="stylesheet"> 
        <link href="bootstrap/font-awesome/css/font-awesome.css" rel="stylesheet">
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
                            <aside class="db-sidebar">
                                <div class="db-sidebar-inner">
                                    <?php $this->load->view('includes/settings_rightbar.php'); ?>
                                </div>
                            </aside>



                            <section class="db-content">
                                <div class="db-content-inner">
                                    <header class="db-header cf">
                                        <h3>
                                            Public Profile Settings > Buyer
                                        </h3>
                                    </header>
                                    <div class="profile-form">

                                       <form accept-charset="UTF-8"  onSubmit ="return addaboutus()" action="<?php echo site_url("Wizardseller/stepTwoInWizard") ?>" class="edit_user" enctype="multipart/form-data" id="createstore" method="post">
                                                                    <br/>
                                                                    <h4 class="text-info">Your "Store"</h4>
                                                                    <hr/>
                                                                    <a href="#" class="thumbnail" id="diasplaythubnail">
                                                                        <img src="images/fixed_images/backgrounds/thumbnailFront.png" style="width:100%; height:300px;">
                                                                    </a>

                                                                    <div>
                                                                        <div id="displaycarasol" class="carousel slide" style="display:none">
                                                                            <ol class="carousel-indicators">   
                                                                            </ol>
                                                                            <!-- Carousel items -->
                                                                            <div class="carousel-inner">

                                                                            </div>
                                                                            <!-- Carousel nav -->
                                                                            <a class="carousel-control left" href="#displaycarasol" data-slide="prev">&lsaquo;</a>
                                                                            <a class="carousel-control right" href="#displaycarasol" data-slide="next">&rsaquo;</a>
                                                                        </div>
                                                                    </div>  

                                                                    <div class="row" style="margin-top:5px; margin-left:5px; margin-bottom:20px;">
                                                                        <div class="span4"><h6>Upload your cover images : </h6>
                                                                            <span class="muted">Select your cover Photos (Maximum 10)</span>
                                                                        </div> 
                                                                    </div>
                                                                    <div class="row" >
                                                                        <div class="span12" style="padding-left:30px;">
                                                                            <!-- The fileinput-button span is used to style the file input field as button -->
                                                                            <span class="btn btn-success fileinput-button">
                                                                                <i class="icon-plus icon-white"></i>
                                                                                <span>Select files...</span>
                                                                                <!-- The file input field used as target for the file upload widget -->
                                                                                <input id="fileupload" type="file" name="files[]" multiple>
                                                                            </span>
                                                                            <br>
                                                                            <br>
                                                                            <!-- The global progress bar -->
                                                                            <div id="progress" class="progress progress-success progress-striped">
                                                                                <div class="bar"></div>
                                                                            </div>
                                                                            <!-- The container for the uploaded files -->
                                                                            <div id="files" class="files"></div>
                                                                            <div class="row" style="margin-left:0px;">
                                                                                <a  id="removeimages" style="display:none" class="btn btn-link">Remove All</a>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <hr/>
                                                                    <br/>

                                                                    <div class="row">
                                                                        <div class="span6" style="padding-left:30px;">
                                                                            <h6>Add or Remove your Item Categories</h6>
                                                                            <div class="input-append">
                                                                                <input class="span2" id="appendedInputButtoncategory" type="text" style="width:200px;" placeholder="Item Category">
                                                                                <button class="btn" type="button" id="addNavhead"><i class="icon-plus"></i></button> 
                                                                                <button class="btn" type="button" id="removeNavhead"><i class="icon-minus"></i></button> 
                                                                            </div>
                                                                            <br/>
                                                                            <div class="row" style="margin-left:0px; margin-top:20px;">
                                                                                <div style="width:274px;" id="naveditparent">
                                                                                    <ul  id="sidenav01set" class="accordion nav nav-department  nav-tabs nav-stacked ulstyle">
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="span4" style="padding-left:20px;">
                                                                            <!--     <h6>Company Logo</h6> -->
                                                                           <!--      <input style="display:table-cell" type="file" title="Your Logo" name="companylogo" class="modernfile" > -->
                                                                        </div>
                                                                    </div>
                                                                    <h4 class="text-info" style="margin-top:60px">Your "Contact Us" Page</h4>
                                                                    <hr/>
                                                                    <div class="row" style="margin-left:0px; margin-bottom: 30px; margin-top: 50px ">
                                                                        <div class="span6" > 
                                                                            <div class="control-group">
                                                                                <label class="control-label" type="text" for="inputIcon1">Recive messages to</label>
                                                                                <div class="controls">
                                                                                    <input  id="inputIcon1" placeholder="randika@gmail.com" type="text" name="recivetoemail"  />
                                                                                </div>
                                                                            </div>
                                                                            <div class="control-group" >
                                                                                <label class="control-label" type="text" placeholder=".span4" for="inputIcon2">Showing email</label>
                                                                                <div class="controls">
                                                                                    <input  id="inputIcon2" placeholder="randika@gmail.com" type="text"  />
                                                                                </div>
                                                                            </div>
                                                                            <div class="control-group" >
                                                                                <label class="control-label" for="appendedInputButtophone">Your Company Phones</label>
                                                                                <div class="controls" >

                                                                                    <div class="input-append"  type="text" >
                                                                                        <input class="span10" id="appendedInputButtophone" type="text"  placeholder="phone number">
                                                                                        <button class="btn" id="addphonenuber" type="button">Add</button>

                                                                                    </div>
                                                                                    <ul class="nav nav-list" id="phonenubersul" style="width: 222px; margin-left: 0px;  margin-top: 10px; padding: 0px; padding-left:3px;">

                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="span6">
                                                                            <div class="control-group">
                                                                                <label class="control-label" for="soialsellerP" >Select your Social Media</label>
                                                                                <div class="controls">
                                                                                    <select name="socialmeda" id="soialsellerP">
                                                                                        <option value="blogger.png">Blogger</option>
                                                                                        <option value="facebook.png">Facebook</option>
                                                                                        <option value="flickr.png">Flickr</option>
                                                                                        <option value="googleplus.png">Google Plus</option>
                                                                                        <option value="linkedin.png">Linkedin</option>
                                                                                        <option value="picasa.png">Picasa</option>
                                                                                        <option value="rss.png">RSS</option>
                                                                                        <option value="skype.png">Skype</option>
                                                                                        <option value="twitter.png">Twitter</option>
                                                                                        <option value="youtube.png">Youtube</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="span4"></div>
                                                                                <div class="span7">
                                                                                    <ul class="nav nav-list" id="socialmedai" style="width: 297px;" >

                                                                                    </ul>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                    Add your location  <a href="#helptext" class="btn btn-link"  role="button" data-toggle="modal">(help me)</a>
                                                                    <div class="control-group" style="margin-top:5px;">
                                                                        <label class="control-label" for="location"></label>
                                                                        <div class="controls">
                                                                            <textarea rows="3"  id="location" name="locationyour" class="span8"></textarea>
                                                                        </div>
                                                                    </div>
                                                                    More on "Contact Us"  
                                                                    <div class="control-group" style="margin-top:5px;">
                                                                        <label class="control-label" for="morecontact"></label>
                                                                        <div class="controls">
                                                                            <textarea rows="3"  id="morecontact" name="contactus" class="span8"></textarea>
                                                                        </div>
                                                                    </div>

                                                                    <h4 class="text-info" style="margin-top:60px;">Your "About Us" Page</h4>
                                                                    <hr/>


                                                                    <div id="alerts"></div>
                                                                    <div class="btn-toolbar" data-role="editor-toolbar" data-target="#editor">
                                                                        <div class="btn-group">
                                                                            <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="icon-font"></i><b class="caret"></b></a>
                                                                            <ul class="dropdown-menu">
                                                                            </ul>
                                                                        </div>
                                                                        <div class="btn-group" style="margin-left: 10px !important;">
                                                                            <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="icon-text-height"></i>&nbsp;<b class="caret"></b></a>
                                                                            <ul class="dropdown-menu">
                                                                                <li><a data-edit="fontSize 5"><font size="5">Huge</font></a></li>
                                                                                <li><a data-edit="fontSize 3"><font size="3">Normal</font></a></li>
                                                                                <li><a data-edit="fontSize 1"><font size="1">Small</font></a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="btn-group" style="margin-left: 10px !important;">
                                                                            <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="icon-bold"></i></a>
                                                                            <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="icon-italic"></i></a>
                                                                            <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="icon-strikethrough"></i></a>
                                                                            <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="icon-underline"></i></a>
                                                                        </div>
                                                                        <div class="btn-group" style="margin-left: 10px !important;">
                                                                            <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="icon-list-ul"></i></a>
                                                                            <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="icon-list-ol"></i></a>
                                                                            <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="icon-indent-left"></i></a>
                                                                            <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="icon-indent-right"></i></a>
                                                                        </div>
                                                                        <div class="btn-group" style="margin-left: 10px !important;">
                                                                            <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="icon-align-left"></i></a>
                                                                            <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="icon-align-center"></i></a>
                                                                            <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="icon-align-right"></i></a>
                                                                            <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="icon-align-justify"></i></a>
                                                                        </div>
                                                                        <div class="btn-group" style="margin-left: 10px !important;">
                                                                            <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="icon-link"></i></a>
                                                                            <div class="dropdown-menu input-append" style="display: none;">
                                                                                <input class="span2" style="width: 170px;" placeholder="URL" type="text" data-edit="createLink"/>
                                                                                <button class="btn" type="button">Add</button>
                                                                            </div>
                                                                            <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="icon-cut"></i></a>

                                                                        </div>

                                                                        <div class="btn-group" style="margin-left: 10px !important;">
                                                                            <a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="icon-picture"></i></a>
                                                                            <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
                                                                        </div>
                                                                        <div class="btn-group" style="margin-left: 10px !important;">
                                                                            <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="icon-undo"></i></a>
                                                                            <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="icon-repeat"></i></a>
                                                                        </div>
                                                                        <input type="text" style="margin-left: 10px !important; margin-top: -10px !important"  data-edit="inserttext" id="voiceBtn" x-webkit-speech="">
                                                                    </div>

                                                                    <div id="editor" class="editorcc"  >
                                                                        You can use our rich text editor to create beautiful About Us page!!
                                                                        <br/>
                                                                        We recommend you to create your about us page in Word and then paste the content here :)
                                                                    </div>
                                                                    <input type="hidden" value="" name="editordataxy" id="editordataxy" /> 
                                                                    <!--  <input type="submit" class="btn" /> -->
                                                                </form>
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
<script src="bootstrap/file-upload/bootstrap-fileupload.js" type="text/javascript"></script>
<script src="js/bootvalidate/assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/Common.js"></script>
</html>