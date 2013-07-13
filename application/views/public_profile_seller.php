<!DOCTYPE html>
<html lang="en">
<head>
    
  <meta charset="utf-8">
  <title></title>      
  <base href="<?=base_url()."assets/";?>">
  <link href="css/settings_page.css" media="all" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" media="screen">
  <link href="css/sellerfrontstyle.css" rel="stylesheet">

  <link href="bootstrap/css/bootstrap-combined.no-icons.min.css" rel="stylesheet"> 
  <link rel="stylesheet" type="text/css" href="bootstrap/file-upload/bootstrap-fileupload.css">
  <link href="bootstrap/font-awesome/css/font-awesome.css" rel="stylesheet">
  <link href="css/MainStyleForAllpages.css" rel="stylesheet">
  <link href="js/richTexteditor/wysiwyng.css" rel="stylesheet">

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
                          <?php include_once "includes/settings_rightbar.php" ?>;
            <section class="db-content">
              <div class="db-content-inner">
                <header class="db-header cf">
                  <h3 >
                    Public Profile Settings > seller
                  </h3>
                </header>
                <div class="profile-form">



                  <form accept-charset="UTF-8" action="#" class="edit_user" enctype="multipart/form-data" id="edit_user_1421605" method="post">

                    <br/>
                    <h4 class="text-info">Your "Store"</h4>
                    <hr/>
                    <a href="#" class="thumbnail">
                      <img src="images/fixed_images/backgrounds/thumbnailFront.png" style="width:100%; height:300px;">
                    </a>


                    <div class="row" style="margin-top:5px; margin-left:5px;">
                      <div class="span4"><h6>Upload your cover images : </h6></div>
                    </div>
                    <div class="row" >
                      <div class="span12" style="margin-top:20px; pagination-centered">
                        <div class="span1" style="width:55px;"></div>
                         <div class="span2"></div>
                        <div class="span2"><input style="display:table-cell" type="file" title="Cover Photo 1" class="modernfile" ></div>
                        <div class="span2"><input style="display:table-cell" type="file" title="Cover Photo 2" class="modernfile" ></div>
                        <div class="span2"><input style="display:table-cell" type="file" title="Cover Photo 3" class="modernfile" ></div>
                        <div class="span2"></div>
                      </div>
                    </div>


                    <br/>
                    <h6>Add or Remove your Item Categories</h6>
                    <div class="input-append">
                      <input class="span2" id="appendedInputButtoncategory" type="text" style="width:200px;" placeholder="Item Category">
                      <button class="btn" type="button" id="addNavhead"><i class="icon-plus"></i></button> 
                      <button class="btn" type="button" id="removeNavhead"><i class="icon-minus"></i></button> 
                    </div>
                    <br/>





                    <div class="row" style="margin-left:0px;">
                      <div style="width:274px;" id="naveditparent">


                        <ul  id="sidenav01set" class="accordion nav nav-department  nav-tabs nav-stacked ulstyle">


                          


                        </ul>



                    </div>

                  </div>

                  <div class="row" style="margin-left:0px;">
                    
                    <hr/>
                    <h4 class="text-info">Your "Contact Us" Page</h4>
                    <hr/>


                    <div class="control-group">
                      <label class="control-label" for="inputIcon"></label>

                    </div>


                    <div class="controls controls-row">
                     <label class="span4" type="text" placeholder=".span4"><h6>Email address you would like to Recive messages</h6></label>
                     <input class="span4" id="inputIcon" placeholder="randika@gmail.com" type="text" style="margin-top:9px;" />

                   </div>


                   <div class="controls controls-row" style="margin-bottom:12px;">
                     <label class="span4" type="text" placeholder=".span4"><h6>Email address you would like to Recive messages</h6></label>
                     <input class="span4" id="inputIcon" placeholder="randika@gmail.com" type="text" style="margin-top:9px;" />
                    </div>
                  </div>

                   <div class="controls controls-row" style="margin-bottom:12px;">
                     <label class="span4" type="text"><h6>Add your Phone Numbers</h6></label>
                     <div class="input-append span4" id="inputIcon" type="text" style="margin-top:9px;" >
                      <input class="span10" id="appendedInputButtophone" type="text"  placeholder="phone number">
                      <button class="btn" id="addphonenuber" type="button">Add</button>
                    </div>
                  </div>
                  <div class="controls controls-row" style="margin-top:-10px">
                   <div class="span4" ></div>
                   <div class="span4" style="margin-top:9px;" >
                    <ul class="nav nav-list" id="phonenubersul">
                      
                    </ul>

                  </div>
                </div>


                

              
              <h6>Add your location  <a href="#helptext" class="btn btn-link"  role="button" data-toggle="modal">(help me)</a></h6>
              <textarea rows="3" class="span8"></textarea>
            </div>




            <hr/>
            <h4 class="text-info">Your "About Us" Page</h4>
            <hr/>
            <div id="alerts"></div>
            <div class="btn-toolbar" data-role="editor-toolbar" data-target="#editor">
              <div class="btn-group">
                <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="icon-font"></i><b class="caret"></b></a>
                <ul class="dropdown-menu">
                </ul>
              </div>
              <div class="btn-group">
                <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="icon-text-height"></i>&nbsp;<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a data-edit="fontSize 5"><font size="5">Huge</font></a></li>
                  <li><a data-edit="fontSize 3"><font size="3">Normal</font></a></li>
                  <li><a data-edit="fontSize 1"><font size="1">Small</font></a></li>
                </ul>
              </div>
              <div class="btn-group">
                <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="icon-bold"></i></a>
                <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="icon-italic"></i></a>
                <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="icon-strikethrough"></i></a>
                <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="icon-underline"></i></a>
              </div>
              <div class="btn-group">
                <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="icon-list-ul"></i></a>
                <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="icon-list-ol"></i></a>
                <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="icon-indent-left"></i></a>
                <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="icon-indent-right"></i></a>
              </div>
              <div class="btn-group">
                <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="icon-align-left"></i></a>
                <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="icon-align-center"></i></a>
                <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="icon-align-right"></i></a>
                <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="icon-align-justify"></i></a>
              </div>
              <div class="btn-group">
                <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="icon-link"></i></a>
                <div class="dropdown-menu input-append">
                  <input class="span2" placeholder="URL" type="text" data-edit="createLink"/>
                  <button class="btn" type="button">Add</button>
                </div>
                <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="icon-cut"></i></a>

              </div>

              <div class="btn-group">
                <a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="icon-picture"></i></a>
                <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
              </div>
              <div class="btn-group">
                <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="icon-undo"></i></a>
                <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="icon-repeat"></i></a>
              </div>
              <input type="text" data-edit="inserttext" id="voiceBtn" x-webkit-speech="">
            </div>

            <div id="editor">
                You can use our rich text editor to create beautiful About Us page!!
                <br/>
                We recommend you to create your about us page in Word and then paste the content here :)
            </div>


            <div class="form-actions">
                                      <button type="submit" class="btn btn-success" style="float:right">Save changes</button>
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
<footer class="footer ">
     <?php include_once "includes/footer.php" ?>
  </footer>
</div>









<div id="helptext" class="modal hide fade" aria-labelledby="modalLable" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></button>
    <h3 id="modalLabel">What is my location</h3>
  </div>

  <div class="modal-body">


    please go to maps.google.com and search your place
    
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

<script type="text/javascript">
  

    $(function(){

       $('.modernfile').bootstrapFileInput();
       $('.file-inputs').bootstrapFileInput();

    });

</script>


</html>