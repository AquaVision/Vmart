<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title></title>      
        <base href="<?= base_url() . "assets/"; ?>">
        <link href="css/settings_page.css" media="all" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" media="screen">
        <link href="css/sellerfrontstyle.css" rel="stylesheet">
        <link href="bootstrap/css/bootstrap-combined.no-icons.min.css" rel="stylesheet"> 
        <link rel="stylesheet" type="text/css" href="bootstrap/file-upload/bootstrap-fileupload.css">
        <link href="bootstrap/font-awesome/css/font-awesome.css" rel="stylesheet">
        <link href="css/MainStyleForAllpages.css" rel="stylesheet">
        <link href="js/richTexteditor/wysiwyng.css" rel="stylesheet">
        <link rel="stylesheet" href="bootstrap/jqfileuploadRealtime/css/style.css">
        <link rel="stylesheet" href="bootstrap/jqfileuploadRealtime/css/jquery.fileupload-ui.css">
        <link href="bootstrap/MetronicExtracted/css/style.css" rel="stylesheet">
    </head>

    <body class="body-db" data-twttr-rendered="true">
        <div id="header">
            <?php $this->load->view('includes/navbar'); ?>
        </div>

        <div id="main-wrapper" >
            <div class="main-content">
                <div class="db-container container-fluid">
                    <div class="row-fluid">
                        <div class="span12">

                            <section class="db-content" style="margin-right:0px !important">
                                <div class="db-content-inner" >
                                    <header class="db-header cf">
                                        <h3>
                                            Set up your Store
                                        </h3>
                                    </header>
                                    <div class="portlet box" id="form_wizard_1">

                                        <div class="portlet-body form" style="padding: 0">
                                            <fom action="#" class="form-horizontal" >
                                                <div class="form-wizard">
                                                    <div class="navbar steps" style="border-bottom: 0 !important; margin-bottom: 2px !important;">
                                                        <div class="navbar-inner">
                                                            <ul class="row-fluid">
                                                                <li class="span4">
                                                                    <a href="#tab1" data-toggle="tab"  class="step active">
                                                                        <span class="number">1</span>
                                                                        <span class="desc"  ><i class="icon-ok"></i> Verify you self</span>   
                                                                    </a>
                                                                </li>
                                                                <li class="span4">
                                                                    <a href="#tab2" data-toggle="tab"  class="step">
                                                                        <span class="number">2</span>
                                                                        <span class="desc" ><i class="icon-ok"></i> SetUp Store</span>   
                                                                    </a>
                                                                </li>

                                                                <li class="span4">
                                                                    <a href="#tab4" data-toggle="tab" class="step">
                                                                        <span class="number">3</span>
                                                                        <span class="desc" ><i class="icon-ok"></i>Start Selling</span>   
                                                                    </a> 
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div id="bar" class="progress progress-success progress-striped">
                                                        <div class="bar"></div>
                                                    </div>


                                                    <div class="tab-content">




                                                        <div class="tab-pane" id="tab1">
                                                            <form action ="<?php echo site_url("Wizardseller/VerifySellerInWizard") ?>" method="post" id="sellerverificationdata">
                                                                <div class="tab-pane" id="seller">
                                                                    <h5 class="text-info">Seller Basic</h5>
                                                                    <hr/> 

                                                                    <div class="control-group">
                                                                        <label class="control-label" for="sellerphonenuber">Mobile</label>
                                                                        <div class="controls">
                                                                            <div class="input-append">
                                                                                <input class="span7 myhoverpopoever" id="sellerphonenuber"  type="text" name="mobileseller"  value =""  rel="popover"  data-content="your nuber should start with +94 ex:- +94XXX XXX XXX"  data-original-title="" />
                                                                                <button class="btn" id="sendverification" type="button">Send Code</button>
                                                                            </div>  
                                                                        </div>
                                                                    </div>
                                                                    <div class="control-group">
                                                                        <label class="control-label" for="mobivery">Mobile Verification code</label>
                                                                        <div class="controls">
                                                                            <input type="text" id="mobivery" name="verificationcode"  class="span2"/>
                                                                        </div>
                                                                    </div>

                                                                    <div class="control-group">
                                                                        <label class="control-label" for="yourid">Your identity (seller id)</label>
                                                                        <div class="controls" > 
                                                                            <input type="text" name="identity" value="" class="myhoverpopoever" id="yourid" rel="popover"  data-content="This word along with url will be your shop url" data-original-title="Your Identity" />
                                                                        </div>
                                                                    </div>


                                                                    <div class="control-group">
                                                                        <label class="control-label" for="baseurl"></label>
                                                                        <div class="controls">
                                                                            <input type="hidden" id="baseurl" value ="<?php echo base_url() ?>" />
                                                                            <div class="span6" style="margin-left:0px"><input type="text" name="fullurl" id="fullurlll" value="" class="span12" disabled/></div>
                                                                        </div>
                                                                    </div>
                                                                    <br/>
                                                                    <h5 class="text-info">Seller Bank Account</h5>
                                                                    <hr/>

                                                                    <div class="control-group">
                                                                        <label class="control-label" for="accontholdnam">Account holder name</label>
                                                                        <div class="controls" >
                                                                            <input type="text" style="margin-right:10px;" name="accountholdername" class="span6" id="accontholdnam" value=""  />
                                                                        </div>
                                                                    </div>



                                                                    <div class="control-group">
                                                                        <label class="control-label" for="bankselector">Bank name</label>
                                                                        <div class="controls" >
                                                                            <select name="banknamex" id="bankselector">
                                                                                <option value="7010"  >Bank of Ceylon</option>
                                                                                <option value="7038" >Standard Chartered Bank</option>
                                                                                <option value="7047" >Citi Bank</option>
                                                                                <option value="7056" >Commercial Bank PLC</option>
                                                                                <option value="7074" >Habib Bank Ltd</option>
                                                                                <option value="7083" >Hatton National Bank PLC</option>
                                                                                <option value="7092" >Hongkong Shanghai Bank</option>
                                                                                <option value="7108" >Indian Bank</option>
                                                                                <option value="7117" >Indian Overseas Bank</option>
                                                                                <option value="7135" >Peoples Bank</option>
                                                                                <option value="7144" >State Bank of India</option>
                                                                                <option value="7162" >Nations Trust Bank PLC</option>
                                                                                <option value="7205" >Deutsche Bank</option>
                                                                                <option value="7214" >National Development Bank PLC</option>
                                                                                <option value="7269" >MCB Bank Ltd</option>
                                                                                <option value="7278" >Sampath Bank PLC</option>
                                                                                <option value="7287" >Seylan Bank PLC</option>
                                                                                <option value="7296" >Public Bank</option>
                                                                                <option value="7302" >Union Bank of Colombo PLC</option>
                                                                                <option value="7311" >Pan Asia Banking Corporation PLC</option>
                                                                                <option value="7384" >ICICI Bank Ltd</option>
                                                                                <option value="7454" >DFCC Vardhana Bank Ltd</option>
                                                                                <option value="7463" >Amana Bank Limited</option>
                                                                                <option value="7719" >National Savings Bank</option>
                                                                                <option value="7728" >Sanasa Development Bank</option>
                                                                                <option value="7737" >HDFC Bank</option>
                                                                            </select>
                                                                            <input type ="hidden"  name="bankname123" id ="bankname" />
                                                                        </div>
                                                                    </div>


                                                                    <div class="control-group">
                                                                        <label class="control-label" for="banknamecode">Bank code</label>
                                                                        <div class="controls" >
                                                                            <input type="text" name="bankcode" style="margin-right:10px" id="banknamecode" class="span4" value =""/>
                                                                        </div>
                                                                    </div>
                                                                    <!--
                                                                    <div class="controls controls-row">
                                                                                <div class="span4"><h6>SWIFT code</h6></div>
                                                                                <div class="span5" style="margin-left:0px"><input type="text" name="fullname" class="span6" /></div>
                                                                    </div>
                                                                    -->
                                                                    <div class="control-group">
                                                                        <label class="control-label" for="banknamesxcode">Branch code</label>
                                                                        <div class="controls" >
                                                                            <input type="text" name="branchcode" style="margin-right:10px" id="banknamesxcode" class="span3" value="" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="control-group">
                                                                        <label class="control-label" for="acounternumber">Account number</label>
                                                                        <div class="controls" >
                                                                            <input type="text" id="acounternumber" name="accountnuber" style="margin-right:10px" value ="" class="span6" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>    



                                                        <div class="tab-pane active" id="tab2">
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
                                                        </div>


                                                        <div class="tab-pane" id="tab4">
                                                            <div class="row" style="margin: 0px;">
                                                                <h3>You are just a one Click Away to finish!! </h3>
                                                                <p>Below you find the steps you passed, check them and do changes if you want before proceeding. </p>
                                                            </div>
                                                            <div class="row span12" >
                                                                <div class="span2"></div>
                                                                <div class="span12" style="margin-left:-25px;">
                                                                    <table width="42%"  id="fixstusut" style="margin-top:50px; margin-bottom:50px; margin-left:auto; margin-right:auto">
                                                                        <tr style="padding-bottom:10px;">
                                                                            <td width="31%" height="49">Verify Your Self</td>
                                                                            <td width="7%" style="text-align: center">&nbsp;</td>
                                                                            <td width="49%" id="verifyyourslef" bgcolor="#f2ae43" style="text-align: center;  color: #fff;">Commited</td>
                                                                            <td width="13%" style="text-align: center"><img src="images/assets/load.gif" alt="loading" name="verifyyourslef1" width="28" height="28" id="verifyyourslef1" style="display:none"/>
                                                                            </td>
                                                                            <td width="15%" style="text-align: center">&nbsp;</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="31%" height="47">SetUp Store</td>
                                                                            <td width="7%" style="text-align: center">&nbsp;</td>
                                                                            <td width="49%" id="setupyourstore" bgcolor="#f2ae43" style="text-align: center;  color: #fff;">Commited</td>
                                                                            <td width="13%" style="text-align: center">
                                                                                <img src="images/assets/load.gif" alt="loading" name="setupyourstore" width="28" height="28" id="setupyourstore1"  style="display:none"/>
                                                                            </td>
                                                                            <td width="15%" style="text-align: center">&nbsp;</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="31%" height="51">Complete..</td>
                                                                            <td width="7%" style="text-align: center">&nbsp;</td>
                                                                            <td width="49%" id="completeprofile" bgcolor="#f2ae43" style="text-align: center;  color: #fff;">&nbsp;</td>
                                                                            <td width="13%" style="text-align: center">
                                                                                <img src="images/assets/load.gif"  alt="loading" name="completeprofile" width="28" height="28" id="completeprofile1" style="display:none"/>
                                                                            </td>
                                                                            <td width="15%" style="text-align: center">&nbsp;</td>
                                                                        </tr>
                                                                    </table>
                                                                </div>

                                                            </div>
                                                            <div class="row span12" id="finishwizard" style="marin-bottom:30px; opacity : 0" >
                                                                <div class="span1"><img src="images/fixed_images/success.jpg" style="margin-top:-18px; height:50px; " /></div>
                                                                <div class="span8" style="margin-left:0px;">
                                                                    <p style="font-size:20px; "  >Way to go <?php echo getUsername() ?>!!!, You just created your own store now lets  <a class="link" href="<?php echo site_url("my_items") ?> ">fill it up</a></p>
                                                                </div>
                                                            </div>
                                                        </div>                                            
                                                    </div>
                                                    <div class="form-actions clearfix" style="margin-top:40px !important; height: 20px;">
                                                        <a href="javascript:;"  class="btn button-previous btn-success"><i class="m-icon-swapleft"></i> Back </a>
                                                        <a href="javascript:;" data-active="page1" id="continuexnextpage" class="btn blue button-next btn-success">Continue <i class="m-icon-swapright m-icon-white"></i></a> 
                                                        <a  id="submitaiyox" class="btn green button-submit btn-success">Complete <i class="m-icon-swapright m-icon-white"></i></a>       
                                                    </div>
                                                </div>
                                                </form>
                                        </div>
                                    </div>

                                    <div class="tab-content">
                                        <div class="tab-pane active" id="storecreate">



                                        </div>

                                    </div>


                                </div>
                            </section>
                        </div>
                    </div>
                </div>
                <input type="hidden" id="userfold" value="<?php echo getUserFolderName() ?>" />
            </div>
            <footer class="footer ">
                <?php $this->load->view('includes/footer.php'); ?>
            </footer>
        </div>









        <div id="helptext" class="modal hide fade" aria-labelledby="modalLable" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></button>
                <h5 id="modalLabel">What is my location</h5>
            </div>

            <div class="modal-body" style="max-height: 500px !important;">
                <div class="row" style="margin-left:0px;">
                    <ul style="font-size:10px;">
                        <li>1. Go to <a href="https://maps.google.com/">https://maps.google.com/</a></li>
                        <li>2. Search your location</li>
                        <li>3. Click on the Link icon</li>
                        <li>4. Copy Second Text box content</li>
                    </ul>
                </div>
                <div class="row" style="margin-left:0px; padding-left: 10px;">
                    <img src="images/fixed_images/howto.jpg" style="width: 500px;"/>
                </div>


            </div>




        </div>









    </body>




    <script src="jquerylib/jquery-1.10.1.min.js"></script>
    <script src="js/richTexteditor/jquery.hotkeys.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="js/richTexteditor/bootstrap-wysiwyg.js"></script>
    <script src="js/richTexteditor/wy.js"></script>
    <script src="js/accordianMenu.js"></script>
    <script src="bootstrap/file-upload/bootstrap-fileupload.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.file-input.js"></script>
    <script src="js/imal/public_profile.js" ></script>
    <script src="js/bootvalidate/assets/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/Common.js"></script>

    <script src="bootstrap/jqfileuploadRealtime/js/vendor/jquery.ui.widget.js"></script>
    <script src="bootstrap/jqfileuploadRealtime/js/jquery.iframe-transport.js"></script>
    <script src="bootstrap/jqfileuploadRealtime/js/jquery.fileupload.js"></script>

    <script src="bootstrap/MetronicExtracted/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
    <script src="bootstrap/MetronicExtracted/app.js"></script>


    <script type="text/javascript">
        jQuery(document).ready(function() {       
            // initiate layout and plugins
            App.init();
        });

        $(function(){

            $('.modernfile').bootstrapFileInput();
            $('.file-inputs').bootstrapFileInput();

        });

    </script>

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



            $(".myhoverpopoever").popover({ trigger: "hover" });


            /*
                var hash = window.location.hash;
                hash && $('ul.nav a[href="' + hash + '"]').tab('show');

                $('.nav-tabs a').click(function (e) {
                    $(this).tab('show');
                    var scrollmem = $('body').scrollTop();
                    window.location.hash = this.hash;
                    $('html,body').scrollTop(scrollmem);
                });
                

             */
        });

           
            

    </script>    

    <script>
        /*jslint unparam: true */
        /*global window, $ */
        $(function () {
            'use strict';
            // Change this to the location of your server-side upload handler:
            var url = "../Wizardseller/upload";
            $('#fileupload').fileupload({
                url: url,
                dataType: 'json',
                done: function (e, data) {
                    $.each(data.result.files, function (index, file) {
                        
                            $("#removeimages").show();
                        
                        $('<p/>').text(file.name).appendTo('#files');
                        $("#files").append("<input type='hidden' name='imagenamescover[]' value='"+(file.name)+"' /> ");
                        showCarasol($("#userfold").val()+"/"+file.name);
                    });
                },
                progressall: function (e, data) {
                    var progress = parseInt(data.loaded / data.total * 100, 10);
                    $('#progress .bar').css(
                    'width',
                    progress + '%'
                );
                }
            }).prop('disabled', !$.support.fileInput)
            .parent().addClass($.support.fileInput ? undefined : 'disabled');
            
            
            
            $("#removeimages").on("click",function(e){
                carosalid = 0;
                $("#displaycarasol").hide();
                $("#diasplaythubnail").show();
                $("#files").empty();
                $("#displaycarasol .carousel-indicators").empty();
                $("#displaycarasol .carousel-inner").empty();
            });
            
            
        });
        
        
        var carosalid = 0;
        function showCarasol(imageurl){
            $("#diasplaythubnail").hide();
            $("#displaycarasol").show();
            var clas = ""
            var cala = "";
            if(carosalid == 0){
                clas = "class=\"active\""; 
                cala = "active ";
            }
            $("#displaycarasol .carousel-indicators").append("<li data-target=\"#displaycarasol\" data-slide-to=\""+carosalid+"\"  "+clas+"></li>");
            $("#displaycarasol .carousel-inner").append("<div class=\""+cala+"item\"><img src=\"images/userdata/"+imageurl+"\" style=\"width:100%; height:300px;\"></div>");
        
            $('.carousel').carousel();
            ++carosalid;
        }
    </script>

</html>