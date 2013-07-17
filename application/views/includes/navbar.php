<?php  if(!islogedUser()){  ?>
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
                    <li><a href="setup-notes.html">inbox<span class="badge">9</span></a></li>
                    <li ><a href="navbar-examples.html">Sales<span class="badge">9</span></a></li>
                    <li id="usrSignInLi"><a id="btnSignIn pull-right" href="#modalSignIn" data-toggle="modal">Sign In</a></li>
                    <li id="usrLgdInLi" style="display:none; position: absolute">
                        
                        
                        
                        <div id="usrLgdInDiv" style="margin-top:10px;margin-right:20px;" class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                <img class="img-rounded" src="./images/uploaded/users/avatar1.jpg" style="width:24px;height:24px;">
                                username
                            </a>
                            <span class="caret"></span>
                            <ul class="dropdown-menu" role="menu" style="margin-top: 6px;">
                                <li>
                                    <a href=""><i class="icon-user"></i>&nbsp;&emsp;User</a>
                                </li>
                                <li>
                                    <a href=""><i class="icon-envelope"></i>&nbsp;&emsp;Inbox</a>
                                </li>
                                <li>
                                    <a href=""><i class="icon-briefcase"></i>&nbsp;&emsp;Sales</a>
                                </li>
                                <li>
                                    <a href="<?= site_url('settings/generalSettings'); ?>"><i class="icon-wrench"></i>&nbsp;&emsp;Settings</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href=""><i class="icon-tag"></i>&nbsp;&emsp;Logout</a>
                                </li> 
                            </ul>
                        </div>
                        
                        
                        
                    </li>            
                    <li id="join_with_us"><a href="#signup_tag" data-toggle="modal">Join Us</a></li>
                    <li id="logout"><a href="" style="display:none;">logout</a></li>
                </ul>
            </div><!-- /.nav-collapse -->
        </div><!-- /.container -->
    </div><!-- /navbar-inner -->
</div>

<?php   }else {?>

<div class="navbar navbar-fixed-top navbar-inverse">
    <div class="navbar-inner">
        <div class="container" style="width: 1260px;">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="brand"></div>
            <div class="nav-collapse">
                <ul class="nav pull-right">
                    <li><a href="<?= site_url(); ?>"><i class="icon-home icon-white"></i> Home</a></li>
                    <li><a href="setup-notes.html">inbox<span class="badge">9</span></a></li>
                    <li ><a href="navbar-examples.html">Sales<span class="badge">9</span></a></li>
                    
                    <li id="usrLgdInLi" >
                        <div id="usrLgdInDiv" style="margin-top:10px;margin-right:20px;" class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                <img class="img-rounded" src="./images/uploaded/users/avatar1.jpg" style="width:24px;height:24px;">
                                <?php echo getUsername(); ?>
                            </a>
                            <span class="caret"></span>
                            <ul class="dropdown-menu" role="menu" style="margin-top: 6px;">
                                <li>
                                    <a href=""><i class="icon-user"></i>&nbsp;&emsp;User</a>
                                </li>
                                <li>
                                    <a href=""><i class="icon-envelope"></i>&nbsp;&emsp;Inbox</a>
                                </li>
                                <li>
                                    <a href=""><i class="icon-briefcase"></i>&nbsp;&emsp;Sales</a>
                                </li>
                                <li>
                                    <a href="<?= site_url('settings/generalSettings'); ?>"><i class="icon-wrench"></i>&nbsp;&emsp;Settings</a>
                                </li>
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





<?php  if(!islogedUser($this->session)){  ?>
<div id="modalSignIn" class="modal hide fade" aria-labelledby="modalLable" aria-hidden="true" style="width: 292px;">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></button>
        <h3 id="modalLabel" style="text-align:center;">Sign In</h3>
    </div>
    <?php
    echo form_open('Auth/SignIn');
    ?>
    <div class="modal-body" style="text-align: center">

        <div class="span2">
            <a href=""><img src="./images/uploaded/facebook-login-button.png" style="width: 100%;margin-bottom: 10px;"></a>
        </div>


        <div class="controls"  >
            <?php
            echo form_open('login/validate_credentials');
            
            
            
            //echo anchor('login/signup', 'Create Account');
            
            ?>
            <input type ="text" name ="username" placeholder="User name" />
            <input type ="password" name ="password" placeholder="Password" />
        </div>

    </div>

    <div class="modal-footer">
        <button  type="submit" class="btn btn-primary" >Sign In</button>
        <button class="btn btn-danger" data-dismiss="modal" aria-hidden="ture">Cancel</button>
    </div>
    <?php
    echo form_close();
    ?>
</div>


<div id="signup_tag" class="modal hide fade" aria-labelledby="modalLable" aria-hidden="true" style="width: 400px;top: 25%;left: 60%;">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></button>
        <h3 id="modalLabel" style="text-align:center;">Set up your profile </h3>
    </div>
    <?php
    echo form_open('Auth/SignUp');
    ?>
    <div class="modal-body">



        <div class="controls">
            <!--<div class="span2" style="text-align:center;padding-top:6px;">Username :</div>-->

            
            <input type="text" value="" name ="full_name" placeholder="Ful Name" id="fulnamex" />
            <input type="text" value="" name ="username" placeholder="User Name" id="usernamex" />
            <input type="text" value="" name ="email" placeholder="Email" id="emailx" />
            <input type="password" value="" name ="password" placeholder="Password" id="passwordx" />
            <input type="password" value="" name ="password2" placeholder="Confirm Password" id="passwordx" />
            
            
            
        </div>

    </div>

    <div class="modal-footer">
<?php
echo form_submit('submit', 'Create Acccount');
?>
      
        <button class="btn btn-danger" data-dismiss="modal" aria-hidden="ture">Cancel</button>
    </div>
        
        <?php
        echo form_close();
        ?>
</div>


<?php    } ?>
