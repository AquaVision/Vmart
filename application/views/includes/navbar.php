<?php if (!islogedUser()) { ?>
    <div class="navbar navbar-fixed-top navbar-inverse">
        <div class="navbar-inner">
            <div class="container" >   <!-- style="width: 1260px;" -->
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                </a> 
                <div class="brand"></div>
                <div class="nav-collapse">
                    <ul class="nav pull-right">
                        <li><a href="<?= site_url(); ?>"><i class="icon-home icon-white"></i> Home</a></li>
                        <li><a href="<?= site_url() . "/Web_cart/show"; ?>"><i class="icon-shopping-cart icon-white"></i> Cart <span id="itemcount" class="badge"><?php $countv =count($this->cart->contents());  if($countv !=0){ echo $countv; }   ?></span></a></li>
                        <li id="usrSignInLi"><a id="btnSignIn pull-right" href="#modalSignIn" data-toggle="modal">Sign In</a></li>                        
                        <li id="join_with_us"><a href="#signup_tag" data-toggle="modal">Join Us</a></li>
                        <li id="logout"><a href="" style="display:none;">logout</a></li>
                    </ul>
                </div><!-- /.nav-collapse -->
            </div><!-- /.container -->
        </div><!-- /navbar-inner -->
    </div>

<?php } else { ?>

    <div class="navbar navbar-fixed-top navbar-inverse">
        <div class="navbar-inner">
            <div class="container" >
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="brand"></div>
                <div class="nav-collapse">
                    <ul class="nav pull-right">
                        <li><a href="<?= site_url(); ?>"><i class="icon-home icon-white"></i> Home</a></li>
                        <li><a href="<?= site_url() . "/Web_cart/show"; ?>"><i class="icon-shopping-cart icon-white"></i> Cart <span id="itemcount" class="badge"><?php  $countv =count($this->cart->contents());  if($countv !=0){ echo $countv; }   ?></span></a></li>
                        <li ><a href="<?php echo site_url()."Orders/AllOrders/IN_PROGRESS" ?>">Orders<span class="badge" id="ordercount"><?php  $ordercount = getUserOrderCount(); if($ordercount != -1){ echo $ordercount;  }  ?></span></a></li>

                        <li id="usrLgdInLi" >
                            <div id="usrLgdInDiv" style="margin-top:10px; margin-left:10px" class="dropdown">
                                <a href=""  class="dropdown-toggle" data-toggle="dropdown" style="font-weight:600; text-decoration: none; color: #BEBCBC;">
                                    <img class="img-rounded" src="<?php echo get_assets_path() . (getprofilePic()) ?>" style="width:24px;height:24px;">
    <?php echo getUsername(); ?>
                                </a>
                                <span class="caret"></span>
                                <ul class="dropdown-menu" role="menu" style="margin-top: 6px; margin-left:-40px">

                                    <li>
                                        <a href="<?php echo site_url() ?>Orders/shopped/IN_PROGRESS">&nbsp;&emsp;Shopping</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url()."Orders/AllOrders/IN_PROGRESS" ?>"></i>&nbsp;&emsp;Orders</a>
                                    </li>

                                    <li>
                                        <a href="<?php echo site_url('settings/generalSettings'); ?>">&nbsp;&emsp;Settings</a>
                                    </li>
    <?php if (iswizardseller()) { ?>
                                        <li style="background-color:#f9bc2a ">
                                            <a href="<?php echo site_url("Wizardseller/seller"); ?>" style="text-align: center">Shop Wizard</a>
                                        </li>
    <?php } ?>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="<?= site_url('Auth/SignOut'); ?>"><i class="icon-tag"></i>&nbsp;&emsp;Logout</a>
                                    </li> 
                                </ul>
                            </div>
                        </li>            


                    </ul>
                </div><!-- /.nav-collapse -->
            </div><!-- /.container -->
        </div><!-- /navbar-inner -->
    </div>
<?php } ?>





<?php if (!islogedUser($this->session)) { ?>
    <div id="modalSignIn" class="modal hide fade" aria-labelledby="modalLable" aria-hidden="true" style="width: 500px; top: 20%;left: 53%;">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></button>
            <div class="control-group">
                <div class="controls" style="text-align: center">
                    <a ><img src="./images/uploaded/facebook-login-button.png" style="width: 50%;margin-bottom: 10px; margin-top: 10px"></a>

                </div>
            </div>
            <div style="text-align: center"><small>NOT A MEMBER YET? <a href="../#signup_tag" class="js-open-popup-join">REGISTER NOW</a> — IT'S FUN AND EASY!</small></div>

        </div>
        <div style="margin-bottom: -20px">
    <?php
    $form_attributes = array('class' => 'form-horizontal');
    echo form_open('Auth/SignIn', $form_attributes);
    ?>


            <div style="margin-top: 10px">
                <div class="control-group">
                    <label class="control-label" for="inputusername">USER NAME</label>
                    <div class="controls"  >
                        <input type ="text" name ="username" placeholder="User name" /> 
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputpassword">PASSWORD</label>
                    <div class="controls"  >
                        <input type ="password" name ="password" placeholder="Password" />
                    </div>
                    <div class="controls">
                        <label class="checkbox">
                            <input type="checkbox"> Remember me
                        </label>

                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <div class="control-group">
                    <a class="control-label" >Forgot Password?</a>
                    <div class="controls"><button  type="submit" class="btn btn-primary" style="margin-right: 40px;" >SIGN IN</button></div>

                </div>



    <?php
    echo form_close();
    ?>
            </div>
        </div>
    </div>


    <div id="signup_tag" class="modal hide fade" aria-labelledby="modalLable" aria-hidden="true" style="width: 500px;top: 20%;left: 53%;">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></button>

            <div class="control-group">
                <div class="controls" style="text-align: center">
                    <a ><img src="./images/uploaded/facebook-login-button.png" style="width: 50%;margin-bottom: 10px; margin-top: 10px"></a>

                </div>
                <div style="text-align: center"><small >ALREADY A MEMBER? <a  class="js-open-popup-login">SIGN IN</a> »</small></div>

            </div>
        </div>
        <div style="margin-bottom: -20px">
    <?php
    echo form_open('Auth/SignUp', $form_attributes);
    ?>
            <div class="modal-body" style="text-align: center; width: 400px;">




                <!--<div class="span2" style="text-align:center;padding-top:6px;">Username :</div>-->

                <div class="control-group">
                    <label class="control-label" for="inputEmail">FULL NAME</label>
                    <div class="controls">
                        <input type="text" value="" name ="full_name" placeholder="Ful Name" id="fulnamex" />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputEmail">USER NAME</label>
                    <div class="controls">
                        <input type="text" value="" name ="username" placeholder="User Name" id="usernamex" />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputEmail">EMAIL</label>
                    <div class="controls">
                        <input type="text" value="" name ="email" placeholder="Email" id="emailx" />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputEmail">PASSWORD</label>
                    <div class="controls">
                        <input type="password" value="" name ="password" placeholder="Password" id="passwordx" />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputEmail">CONFIRM PASSWORD </label>
                    <div class="controls">
                        <input type="password" value="" name ="password2" placeholder="Confirm Password" id="passwordx" />
                    </div>
                </div>




            </div>




            <div class="modal-footer">
                <div class="control-group">

                    <div class="control-label" style="margin-left: 10px"><label class="checkbox">
                            <input type="checkbox"> <p style="width: 255px;"> I AGREE TO THE <a >TERMS OF SERVICE</a></p>
                        </label></div>
                    <div class="controls"><button type="submit" class="btn btn-primary" style="margin-right: 40px;">JOIN US</button></div>   
                </div>


    <?php
    echo form_close();
    ?>
            </div>
        </div>
    </div>


<?php } ?>
