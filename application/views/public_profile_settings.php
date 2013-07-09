<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>      
    <link href="css/settings_page.css" media="all" rel="stylesheet" type="text/css">
    <link id="callCss" rel="stylesheet" href="bootstrap/css/bootstrap.min.css" media="screen">
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
                                    Account Settings
                                </h3>
                            </header>
                            <div class="profile-form">


                                <hr/>


                                <ul id="tabsxz" class="nav nav-tabs" class="nav nav-tabs" data-tabs="tabs">
                                    <li class="active"><a href="#general" data-toggle="tab">General</a></li>
                                    <li><a href="#seller" data-toggle="tab">Seller</a></li>
                                    
                                </ul>


                                <div class="tab-content">

                                    <div class="tab-pane active" id="general">
                                        <div class="controls controls-row">
                                            <div class="span4"><h6>Full Name</h6></div>
                                            <div class="span5" style="margin-left:0px"><input type="text" name="fullname" class="span12" /></div>
                                        </div>
                                        <div class="controls controls-row">
                                            <div class="span4"><h6>Email</h6></div>
                                            <div class="span4" style="margin-left:0px"><input type="text" name="myemail" disabled /></div>
                                        </div>
                                        <div class="controls controls-row">
                                            <div class="span4"><h6>User Name</h6></div>
                                            <div class="span4" style="margin-left:0px"><input type="text" name="username" disabled /></div>
                                        </div>
                                        
                                        <div class="controls controls-row">
                                            <div class="span4"><h6>Password</h6></div>
                                            <div class="span4" style="margin-left:0px"><a href="" class="btn btn-link">Change</a></div>
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
                                          <button type="submit" class="btn btn-success" style="float:right" onclick="showx()">Save changes</button>
                                      </div>
                                  </div>

                                  <div class="tab-pane" id="seller">

                                    <div class="alert alert-error">
                                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                                      <h4>Take Note!</h4>
                                      Please note that untill you add and verify your mobile nuber you will not be able to get started as a seller 

                                  </div>
                                  <h5 class="text-info">Seller Basic</h5>
                                  <hr/>
                                  <div class="controls controls-row">
                                        <div class="span4"><h6>Mobile</h6></div>
                                        <div class="span4" style="margin-left:0px">
                                                <div class="input-append">
                                                  <input class="span7"  type="text">
                                                  <button class="btn" type="button">Send Code</button>
                                                </div>
                                        </div>
                                   </div>
                                   <div class="controls controls-row">
                                        <div class="span4"><h6>Mobile Verification number</h6></div>
                                        <div class="span4" style="margin-left:0px"><input type="text" name="verificationnuber"  class="span3"/></div>
                                   </div>

                                <div class="controls controls-row">
                                    <div class="span4"><h6>Your identity</h6></div>
                                    <div class="span4" style="margin-left:0px"><input type="text" name="identity"   /></div>
                                </div>
                                <div class="controls controls-row">
                                    <div class="span4"><h6></h6></div>
                                    <div class="span6" style="margin-left:0px"><input type="text"  class="span12" disabled/></div>
                                </div>
                                <div class="controls controls-row">
                                    <div class="span4"><h6>Enable Ussd Channel</h6></div>
                                    <div class="span7" style="margin-left:0px"><input type="checkbox"  id="howussd" rel="popover" 
                                        data-content="Wow you just enabled Dialog Ussd channel for your store this will allow users to get your latest product info via sms if they have subscribed to you more info on charging please contact customer support" 
                                        data-original-title="Ussd Channel" />
                                    </div>
                                </div>
                                <br/>
                                <h5 class="text-info">Seller Bank Account</h5>
                                  <hr/>

                                <div class="controls controls-row">
                                            <div class="span4"><h6>Account holder name</h6></div>
                                            <div class="span5" style="margin-left:0px"><input type="text" name="fullname" class="span9" /></div>
                                </div>
                                <div class="controls controls-row">
                                            <div class="span4"><h6>Bank name</h6></div>
                                            <div class="span5" style="margin-left:0px">
                                                <select name="bank" id="bankselector">
                                                        <option value="">Select</option>
                                                        <option value="7010">Bank of Ceylon</option>
                                                        <option value="7038">Standard Chartered Bank</option>
                                                        <option value="7047">Citi Bank</option>
                                                        <option value="7056">Commercial Bank PLC</option>
                                                        <option value="7074">Habib Bank Ltd</option>
                                                        <option value="7083">Hatton National Bank PLC</option>
                                                        <option value="7092">Hongkong Shanghai Bank</option>
                                                        <option value="7108">Indian Bank</option>
                                                        <option value="7117">Indian Overseas Bank</option>
                                                        <option value="7135">Peoples Bank</option>
                                                        <option value="7144">State Bank of India</option>
                                                        <option value="7162">Nations Trust Bank PLC</option>
                                                        <option value="7205">Deutsche Bank</option>
                                                        <option value="7214">National Development Bank PLC</option>
                                                        <option value="7269">MCB Bank Ltd</option>
                                                        <option value="7278">Sampath Bank PLC</option>
                                                        <option value="7287">Seylan Bank PLC</option>
                                                        <option value="7296">Public Bank</option>
                                                        <option value="7302">Union Bank of Colombo PLC</option>
                                                        <option value="7311">Pan Asia Banking Corporation PLC</option>
                                                        <option value="7384">ICICI Bank Ltd</option>
                                                        <option value="7454">DFCC Vardhana Bank Ltd</option>
                                                        <option value="7463">Amana Bank Limited</option>
                                                        <option value="7719">National Savings Bank</option>
                                                        <option value="7728">Sanasa Development Bank</option>
                                                        <option value="7737">HDFC Bank</option>
                                                </select>
                                                <input type ="hidden" vale="" name="bankname" />
                                            </div>
                                </div>
                                <div class="controls controls-row">
                                            <div class="span4"><h6>Bank code</h6></div>
                                            <div class="span5" style="margin-left:0px"><input type="text" name="bankcode" id="banknamecode" class="span4" /></div>
                                </div>
                                <!--
                                <div class="controls controls-row">
                                            <div class="span4"><h6>SWIFT code</h6></div>
                                            <div class="span5" style="margin-left:0px"><input type="text" name="fullname" class="span6" /></div>
                                </div>
                            -->
                                <div class="controls controls-row">
                                            <div class="span4"><h6>Branch code</h6></div>
                                            <div class="span5" style="margin-left:0px"><input type="text" name="fullname" class="span3" /></div>
                                </div>
                                <div class="controls controls-row">
                                            <div class="span4"><h6>Account number</h6></div>
                                            <div class="span5" style="margin-left:0px"><input type="text" name="accountnuber" class="span10" /></div>
                                </div>
                                <div class="form-actions">
                                  <button type="submit" class="btn btn-success" style="float:right">Save changes</button>
                              </div>
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

var i =0
function showx(){
    if(i==0){
    adjT(-40);
    showLoading('#general');
    ++i;
}else{
    hideLoading();
    i=0;
}
}

</script>    
</body>


</html>