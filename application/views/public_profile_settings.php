<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <base href="<?= base_url() . "assets/"; ?>">
        <link href="css/settings_page.css" media="all" rel="stylesheet" type="text/css">
        <link id="callCss" rel="stylesheet" href="bootstrap/css/bootstrap.min.css" media="screen">
        <link href="css/sellerfrontstyle.css" rel="stylesheet">
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



                            <?php $this->load->view('includes/settings_rightbar.php'); ?>



                            <section class="db-content">
                                <div class="db-content-inner">
                                    <header class="db-header cf">
                                        <h3>
                                            Account Settings
                                        </h3>
                                    </header>
                                    <div class="profile-form">
                                        <hr/>
                                        <ul id="tabsxz"  class="nav nav-tabs" data-tabs="tabs">
                                            <li class='<?php echo $active1 ?>'><a href="#general" data-toggle="tab">General</a></li>
                                            <li class='<?php echo $active2 ?>' ><a href="#seller" data-toggle="tab">Seller</a></li>

                                        </ul>


                                        <div class="tab-content">

                                            <div class="tab-pane <?php echo $active1 ?>" id="general">
                                                <?php echo form_open('settings/saveGeneralSettings'); ?>
                                                <div class="controls controls-row">
                                                    <div class="span4"><h6>Full Name</h6></div>
                                                    <div class="span5" style="margin-left:0px"><input type="text" name="fullname" class="span12" value="<?php echo $user->full_name ?>" /></div>
                                                </div>
                                                <div class="controls controls-row">
                                                    <div class="span4"><h6>Email</h6></div>
                                                    <div class="span4" style="margin-left:0px"><input type="text" name="myemail" value="<?php echo $user->email ?>" disabled /></div>
                                                </div>
                                                <div class="controls controls-row">
                                                    <div class="span4"><h6>User Name</h6></div>
                                                    <div class="span4" style="margin-left:0px"><input type="text" name="username" disabled value="<?php echo $user->username ?>" /></div>
                                                </div>

                                                <div class="controls controls-row">
                                                    <div class="span4"><h6>Password</h6></div>
                                                    <div class="span4" style="margin-left:0px"><a href="" class="btn btn-link" data-toggle="modal" data-target="#changepassword">Change</a></div>
                                                </div>
                                                <div class="controls controls-row">
                                                    <div class="span4"><h6>Your Address</h6></div>
                                                    <div class="span4"></div>
                                                </div>
                                                <div class="controls controls-row">
                                                    <div class="span4"><h6></h6></div>
                                                    <div class="span4" style="margin-left:0px"><textarea name="addresssxz" style="width:300px; height:100px; "><?php echo $user->address ?></textarea></div>
                                                </div>
                                                <?php if($active1 != ""){ echo validation_errors('<p class="alert alert-error vmarterror">'); } ?>

                                                <div class="form-actions">
                                                    <button type="submit" class="btn btn-success" id="mysubmitsett" style="float:right" onclick="showx()">Save changes</button>
                                                </div>


                                                <div class="modal hide fade passwordchange" id="changepassword">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        <h4>Change Password</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <label for="currentpas">Current Password</label>
                                                        <input type="password" name ="currentpass" id="currentpas" />
                                                        <label for="newpass">New Password</label>
                                                        <input type="password" name ="newpassx" id="newpass" />
                                                        <label for="confirmpass">Confirm New Password</label>
                                                        <input type="password" name ="confirmnewpass" id="confirmpass" />
                                                    </div>

                                                    <div class="modal-footer">
                                                        <a href="#" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Done</a>
                                                    </div>
                                                </div>


                                                <?php
                                                echo form_close();
                                                ?>
                                            </div>

                                            <div class="tab-pane <?php echo $active2 ?>" id="seller">





                                                <?php
                                                $attributes = array('id' => 'sellerdata');
                                                echo form_open("settings/$savurlform2", $attributes);

                                                $tx = false;
                                                if($savurlform2 == "SaveSellerSetings"){
                                                    $tx = true;
                                                }

                                                ?>

                                                <?php if(!$tx){ ?>
                                                <div class="alert alert-error">
                                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                    <h4>Take Note!</h4>
                                                    Please note that untill you add and verify your mobile nuber you will not be able to get started as a seller 

                                                </div>
                                                <?php }else{ ?>

                                                <div class="alert alert-success">
                                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                    <h4>Well done You just become a vmart seller!</h4>
                                                    <p>Lets finish your   <a href="<?php echo site_url('settings/sellerSettings') ?>">store page</a>.</p>
                                                    "One machine can do the work of fifty ordinary men. No machine can do the work of one extraordinary man." <small>--Elbert Hubbard</small>
                                                </div>

                                                <?php } ?>

                                                <h5 class="text-info">Seller Basic</h5>
                                                <hr/>
                                                <?php if(!$tx){  ?>
                                                <div class="controls controls-row">
                                                    <div class="span4"><h6>Mobile</h6></div>
                                                    <div class="span7" style="margin-left:0px">
                                                        <div class="input-append">
                                                            <input class="span7 myhoverpopoever"  type="text" name="mobileseller" id="sellerphonenuber" value ="<?php echo $seller->seller_mobile ?>"  rel="popover"  data-content="your nuber should start with +94 ex:- +94XXX XXX XXX"  data-original-title="                 " />
                                                            <button class="btn" id="sendverification" type="button">Send Code</button>
                                                        </div>  
                                                    </div>
                                                </div>
                                                <div class="controls controls-row">
                                                    <div class="span4"><h6>Mobile Verification code</h6></div>
                                                    <div class="span4" style="margin-left:0px"><input type="text" name="verificationcode"  class="span3"/></div>
                                                </div>
                                                <?php }else{ ?>

                                                <div class="controls controls-row">
                                                    <div class="span4"><h6>Your Seller mobile Number</h6></div>
                                                    <div class="span4" style="margin-left:0px"><input type="text" value="<?php echo $seller->seller_mobile ?>"  class="span3" disabled/></div>
                                                </div>

                                                <?php } ?>
                                                <div class="controls controls-row">
                                                    <div class="span4"><h6>Your identity (seller id)</h6></div>
                                                    <div class="span7" style="margin-left:0px"> 
                                                        <input type="text" name="identity" value="<?php echo $seller->seller_id ?>" class="myhoverpopoever" id="yourid" rel="popover"  data-content="This word along with url will be your shop url" data-original-title="Your Identity" />
                                                    </div>
                                                </div>
                                                <div class="controls controls-row">
                                                    <div class="span4"><h6></h6></div>
                                                    <input type="hidden" id="baseurl" value ="<?php echo base_url() ?>" />
                                                    <div class="span6" style="margin-left:0px"><input type="text" name="fullurl" id="fullurlll" value="<?php echo base_url().($seller->seller_id) ?>" class="span12" disabled/></div>
                                                </div>

                                                <br/>
                                                <h5 class="text-info">Seller Bank Account</h5>
                                                <hr/>

                                                <div class="controls controls-row">
                                                    <div class="span4"><h6>Account holder name</h6></div>
                                                    <div class="span8" style="margin-left:0px">
                                                        <input type="text" style="margin-right:10px;" name="accountholdername" class="span6" id="accontholdnam" value="<?php echo $seller->account_hold_name ?>"  />
                                                    </div>
                                                </div>
                                                <div class="controls controls-row">
                                                    <div class="span4"><h6>Bank name</h6></div>
                                                    <div class="span5" style="margin-left:0px">
                                                        <?php
                                                        $sellbank = $seller->bank_name;
                                                        $selected = "";
                                                        if (trim($sellbank) != "") {
                                                            $selected = "selected";
                                                        }                                            
                                                        ?>
                                                        <select name="banknamex" id="bankselector">
                                                            <option value="">Select</option>
                                                            <option value="7010" <?php echo($sellbank == "Bank of Ceylon" ? $selected : "") ?> >Bank of Ceylon</option>
                                                            <option value="7038" <?php echo($sellbank == "Standard Chartered Bank" ? $selected : "") ?>>Standard Chartered Bank</option>
                                                            <option value="7047" <?php echo($sellbank == "Citi Bank" ? $selected : "") ?>>Citi Bank</option>
                                                            <option value="7056" <?php echo($sellbank == "Commercial Bank PLC" ? $selected : "") ?>>Commercial Bank PLC</option>
                                                            <option value="7074" <?php echo($sellbank == "Habib Bank Ltd" ? $selected : "") ?>>Habib Bank Ltd</option>
                                                            <option value="7083" <?php echo($sellbank == "Hatton National Bank PLC" ? $selected : "") ?>>Hatton National Bank PLC</option>
                                                            <option value="7092" <?php echo($sellbank == "Hongkong Shanghai Bank" ? $selected : "") ?>>Hongkong Shanghai Bank</option>
                                                            <option value="7108" <?php echo($sellbank == "Indian Bank" ? $selected : "") ?>>Indian Bank</option>
                                                            <option value="7117" <?php echo($sellbank == "Indian Overseas Bank" ? $selected : "") ?>>Indian Overseas Bank</option>
                                                            <option value="7135" <?php echo($sellbank == "Peoples Bank" ? $selected : "") ?>>Peoples Bank</option>
                                                            <option value="7144" <?php echo($sellbank == "State Bank of India" ? $selected : "") ?>>State Bank of India</option>
                                                            <option value="7162" <?php echo($sellbank == "Nations Trust Bank PLC" ? $selected : "") ?>>Nations Trust Bank PLC</option>
                                                            <option value="7205" <?php echo($sellbank == "Deutsche Bank" ? $selected : "") ?>>Deutsche Bank</option>
                                                            <option value="7214" <?php echo($sellbank == "National Development Bank PLC" ? $selected : "") ?>>National Development Bank PLC</option>
                                                            <option value="7269" <?php echo($sellbank == "MCB Bank Ltd" ? $selected : "") ?>>MCB Bank Ltd</option>
                                                            <option value="7278" <?php echo($sellbank == "Sampath Bank PLC" ? $selected : "") ?>>Sampath Bank PLC</option>
                                                            <option value="7287" <?php echo($sellbank == "Seylan Bank PLC" ? $selected : "") ?>>Seylan Bank PLC</option>
                                                            <option value="7296" <?php echo($sellbank == "Public Bank" ? $selected : "") ?>>Public Bank</option>
                                                            <option value="7302" <?php echo($sellbank == "Union Bank of Colombo PLC" ? $selected : "") ?>>Union Bank of Colombo PLC</option>
                                                            <option value="7311" <?php echo($sellbank == "Pan Asia Banking Corporation PLC" ? $selected : "") ?>>Pan Asia Banking Corporation PLC</option>
                                                            <option value="7384" <?php echo($sellbank == "ICICI Bank Ltd" ? $selected : "") ?>>ICICI Bank Ltd</option>
                                                            <option value="7454" <?php echo($sellbank == "DFCC Vardhana Bank Ltd" ? $selected : "") ?>>DFCC Vardhana Bank Ltd</option>
                                                            <option value="7463" <?php echo($sellbank == "Amana Bank Limited" ? $selected : "") ?>>Amana Bank Limited</option>
                                                            <option value="7719" <?php echo($sellbank == "National Savings Bank" ? $selected : "") ?>>National Savings Bank</option>
                                                            <option value="7728" <?php echo($sellbank == "Sanasa Development Bank" ? $selected : "") ?>>Sanasa Development Bank</option>
                                                            <option value="7737" <?php echo($sellbank == "HDFC Bank" ? $selected : "") ?>>HDFC Bank</option>
                                                        </select>
                                                        <input type ="hidden"  name="bankname123" id ="bankname" />
                                                    </div>
                                                </div>
                                                <div class="controls controls-row">
                                                    <div class="span4"><h6>Bank code</h6></div>
                                                    <div class="span5" style="margin-left:0px">
                                                        <input type="text" name="bankcode" style="margin-right:10px" id="banknamecode" class="span4" value ="<?php echo $seller->bank_code; ?>"/>
                                                    </div>
                                                </div>
                                                <!--
                                                <div class="controls controls-row">
                                                            <div class="span4"><h6>SWIFT code</h6></div>
                                                            <div class="span5" style="margin-left:0px"><input type="text" name="fullname" class="span6" /></div>
                                                </div>
                                                -->
                                                <div class="controls controls-row">
                                                    <div class="span4"><h6>Branch code</h6></div>
                                                    <div class="span5" style="margin-left:0px">
                                                        <input type="text" name="branchcode" style="margin-right:10px" class="span3" value="<?php echo $seller->branch_code; ?>" />
                                                    </div>
                                                </div>
                                                <div class="controls controls-row">
                                                    <div class="span4"><h6>Account number</h6></div>
                                                    <div class="span8" style="margin-left:0px">
                                                        <input type="text" name="accountnuber" style="margin-right:10px" value ="<?php echo $seller->account_number; ?>" class="span6" />
                                                    </div>
                                                </div>
                                                   <?php if($active2 != ""){ echo validation_errors('<p class="alert alert-error vmarterror">'); } ?>
                                                <div class="form-actions">
                                                    <button type="submit" class="btn btn-success" style="float:right">Save changes</button>
                                                </div>
                                                <?php
                                                echo form_close();
                                                ?>
                                            </div>
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
        </div>



        <script src="jquerylib/jquery-1.10.1.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
        <script src="bootstrap/file-upload/bootstrap-fileupload.js" type="text/javascript"></script>
        <script src="js/bootvalidate/assets/js/jquery.validate.min.js"></script>
        <script type="text/javascript" src="js/Common.js"></script>
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
    </body>


</html>