
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
                    <li><a href="index2.php"><i class="icon-home icon-white"></i> Home</a></li>
                    <li><a href="setup-notes.html">inbox<span class="badge">9</span></a></li>
                    <li ><a href="navbar-examples.html">Sales<span class="badge">9</span></a></li>
                    <li id="usrSignInLi"><a id="btnSignIn pull-right" href="#modalSignIn" data-toggle="modal">Sign In</a></li>
                    <li id="usrLgdInLi" style="display:none;">
                        <div id="usrLgdInDiv" style="margin-top:10px;margin-right:20px;" class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                <img class="img-rounded" src="./images/uploaded/users/avatar1.jpg" style="width:24px;height:24px;">
                                UserName
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
                                    <a href=""><i class="icon-wrench"></i>&nbsp;&emsp;Settings</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href=""><i class="icon-tag"></i>&nbsp;&emsp;Logout</a>
                                </li> 
                            </ul>
                        </div>
                    </li>            
                    <li><a href="">Join Us</a></li>
                </ul>
            </div><!-- /.nav-collapse -->
        </div><!-- /.container -->
    </div><!-- /navbar-inner -->
</div>

<script type="text/javascript">

    $('#btnModalSignIn').on('click',function(){
        $('#usrSignInLi').css({display:'none'});
        $('#usrLgdInLi').css({display:'block'});
    });


</script>


<div id="modalSignIn" class="modal hide fade" aria-labelledby="modalLable" aria-hidden="true" style="width: 292px;top: 5%;left: 96%;">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></button>
        <h3 id="modalLabel" style="text-align:center;">Sign In</h3>
    </div>
     <?php 
	echo form_open('login/validate_credentials');
        ?>
    <div class="modal-body">

        <div class="span2">
            <a href=""><img src="./images/uploaded/facebook-login-button.png" style="width: 100%;margin-bottom: 10px;margin-left: 20px;"></a>
        </div>


        <div class="controls">
            <!--<div class="span2" style="text-align:center;padding-top:6px;">Username :</div>-->
            <input type="text" class="span3" placeholder="username" id="inputinfo"><br>

            <!--<div class="span2" style="text-align:center;padding-top:6px;">Password :</div>-->
            <input type="text" class="span3" placeholder="password" id="inputinfo">
        </div>

    </div>

    <div class="modal-footer">
        <button id="btnModalSignIn" class="btn btn-primary" data-dismiss="modal" aria-hidden="ture">Sign In</button>
        <button class="btn btn-danger" data-dismiss="modal" aria-hidden="ture">Cancel</button>
    </div>
   <?php
   echo form_close();
	?>
</div>