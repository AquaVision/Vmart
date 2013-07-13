<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <base href="<?=base_url()."assets/";?>">
        <title></title>      
        <link href="css/settings_page.css" media="all" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" media="screen">

        <link href="css/sellerfrontstyle.css" rel="stylesheet">


            
        <link href="bootstrap/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link href="bootstrap/MetronicExtracted/css/style.css" rel="stylesheet" />

        <style type="text/css">
        .status-viwer
        {
            background-color: green;
            margin-bottom: 10px;
        }

        #mycircle
        {
            background-color: yellow;
            width: 50px;
            height: 50px;
            -webkit-border-radius: 25px;
            -moz-border-radius: 25px;
            border-radius: 25px;  
        }
        </style>

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
                                <div style="margin-left: 25px;">

                                    <img class="avatar" alt="" src="images/uploaded/users/avatar1.jpg" style="margin-top:20px;">
                                    <h4>Conversation with <a href="#" class="link" >Imal94</a></h4>
                                    <p >Buyer :&nbsp;<a href="">Lakmal55</a>&nbsp;|&nbsp;Date : 05<sup>th</sup>June 2013</p>
                                    <hr style="margin-bottom:20px;"/>
                                    
                                </div>

                                <!--End Order Status Viewer-->

                                <!--Start Conversation-->
                                <div style="margin-left: 25px; margin-right: 25px;">
                                    &nbsp;
                                    <div class="portlet-body" id="chats">
                                    <div class="scroller" data-height="343px" data-always-visible="1" data-rail-visible1="1">
                                        <ul class="chats" id="chatparent">
                                            <li class="in">
                                                <img class="avatar" alt="" src="images/uploaded/users/avatar1.jpg" />
                                                <div class="message">
                                                    <span class="arrow"></span>
                                                    <a href="#" class="name">Bob Nilson</a>
                                                    <span class="datetime">at Jul 25, 2012 11:09</span>
                                                    <span class="body">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="out">
                                                <img class="avatar" alt="" src="images/uploaded/users/avatar2.jpg" />
                                                <div class="message">
                                                    <span class="arrow"></span>
                                                    <a href="#" class="name">Lisa Wong</a>
                                                    <span class="datetime">at Jul 25, 2012 11:09</span>
                                                    <span class="body">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="in">
                                                <img class="avatar" alt="" src="images/uploaded/users/avatar1.jpg" />
                                                <div class="message">
                                                    <span class="arrow"></span>
                                                    <a href="#" class="name">Bob Nilson</a>
                                                    <span class="datetime">at Jul 25, 2012 11:09</span>
                                                    <span class="body">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="out">
                                                <img class="avatar" alt="" src="images/uploaded/users/avatar1.jpg" />
                                                <div class="message">
                                                    <span class="arrow"></span>
                                                    <a href="#" class="name">Richard Doe</a>
                                                    <span class="datetime">at Jul 25, 2012 11:09</span>
                                                    <span class="body">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="in">
                                                <img class="avatar" alt="" src="images/uploaded/users/avatar1.jpg" />
                                                <div class="message">
                                                    <span class="arrow"></span>
                                                    <a href="#" class="name">Richard Doe</a>
                                                    <span class="datetime">at Jul 25, 2012 11:09</span>
                                                    <span class="body">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="out">
                                                <img class="avatar" alt="" src="images/uploaded/users/avatar1.jpg" />
                                                <div class="message">
                                                    <span class="arrow"></span>
                                                    <a href="#" class="name">Bob Nilson</a>
                                                    <span class="datetime">at Jul 25, 2012 11:09</span>
                                                    <span class="body">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="in">
                                                <img class="avatar" alt="" src="images/uploaded/users/avatar2.jpg" />
                                                <div class="message">
                                                    <span class="arrow"></span>
                                                    <a href="#" class="name">Richard Doe</a>
                                                    <span class="datetime">at Jul 25, 2012 11:09</span>
                                                    <span class="body">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
                                                    sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                                    </span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="chat-form">
                                        <div class="input-cont">   
                                            <input class="m-wrap" id="discuss" type="text" placeholder="Type a message here..." />
                                        </div>
                                        <div class="btn-cont"> 
                                            <a href="#"     id="postdiscuss" class="btn blue " style="margin-top:12px; margin-left:5px;"><i class="icon-ok icon-white"></i></a>
                                        </div>
                                    </div>
                                    &nbsp;
                                </div>
                                </div>
                                <!--End of Conversation-->

                                <div style="margin-left: 25px; margin-right: 25px;margin-bottom: 25px; ">
                                    <div class="row"> 
                                    <div class="span4 pull-right">
                                        <p style="display:block;">Other</p>
                                        <a href="" style="display:block;"><i class="icon-circle-arrow-right"></i>&nbsp;Delete Thread</a><br>
                                        <a href="" style="display:block;"><i class="icon-circle-arrow-right"></i>&nbsp;Archive Thread</a>
                                    </div>
                                    </div>
                                </div>


                            </section>
                        </div>
                    </div>
                </div>
            </div>

  

 
        </div>
                   <footer class="footer "> 
   <?php include_once "includes/footer.php" ?>
</footer>
    </body>
    <script src="jquerylib/jquery-1.10.1.min.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
    <script src="js/Common.js"></script>
</html>