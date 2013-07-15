<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>      
        <base href="<?= base_url() . "assets/"; ?>">
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

                                        <form accept-charset="UTF-8" action="#" class="edit_user" enctype="multipart/form-data"  method="post">
                                            <hr/>
                                            <br/>
                                            <div class="controls controls-row">
                                                <div class="span4"><h6>Profile Picture</h6></div>
                                                <div class="span4"></div>
                                            </div>
                                            <div class="row">
                                                <div class="span4"><h6></h6></div>
                                                <div class="span2">
                                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                                        <div class="fileupload-new thumbnail" style="width: 100px; height: 100px;">
                                                            <img src="http://www.placehold.it/100x100/EFEFEF/AAAAAA" />
                                                        </div>
                                                        <div class="fileupload-preview fileupload-exists thumbnail" style="width: 100px; height: 100px;">
                                                        </div>
                                                        <br/>
                                                        <span class="btn btn-file"><span class="fileupload-new">Select image</span>
                                                            <span class="fileupload-exists"><i class="icon-user"></i></span>
                                                            <input type="file" name="profileimage"/></span>
                                                        <a href="#" class="btn fileupload-exists" data-dismiss="fileupload"><i class="icon-remove"></i></a>
                                                    </div>
                                                </div>
                                                <div class="span4 muted">This photo is your identity on our site and appears on your profile. Please Try to Resize your profile image 100X100 before uploading</div>
                                            </div>
                                            <div class="controls controls-row">
                                                <div class="span4"><h6>Something about you</h6></div>
                                                <div class="span4"></div>
                                            </div>
                                            <div class="controls controls-row">
                                                <div class="span4"><h6></h6></div>
                                                <div class="span4" style="margin-left:0px"><textarea name="aboutu" style="width:400px; height:100px; "></textarea></div>
                                            </div>

                                            <hr/>
                                            <h5 class="text-info">Tell us more about you</h5>
                                            <h6 class="muted">The below details will not be published anywhere and will be usefull for us to reach you and help you :)</h6>
                                            <div class="controls controls-row">
                                                <div class="span4"><h6>Your Mobile</h6></div>
                                                <div class="span4"></div>
                                            </div>
                                            <div class="controls controls-row">
                                                <div class="span4"><h6></h6></div>
                                                <div class="span4" style="margin-left:0px"><input type="text" name="usermobile" /></div>
                                            </div>
                                            <div class="controls controls-row">
                                                <div class="span4"><h6>Your Address</h6></div>
                                                <div class="span4"></div>
                                            </div>
                                            <div class="controls controls-row">
                                                <div class="span4"><h6></h6></div>
                                                <div class="span4" style="margin-left:0px"><textarea name="aboutu" style="width:300px; height:100px; "></textarea></div>
                                            </div>
                                            <div class="form-actions">
                                                <button type="submit" class="btn btn-success" style="float:right">Save changes</button>
                                            </div>
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
<script src="bootstrap/file-upload/bootstrap-fileupload.js" type="text/javascript"></script>
<script type="text/javascript" src="js/Common.js"></script>
</html>