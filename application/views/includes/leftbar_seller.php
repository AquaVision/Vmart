

<div id="sidebar" class="span3" style="margin-top: 20px;">          

    <!--End Seller Rating-->

    <!--Start USSD Activation-->
    <div class="alert alert-info vmartalert">
        <button type="button" class="close" data-dismiss="alert">x</button>
        You can get to know about the latest products of <?= $useridasseller ?> by Subsribing to her USSD channel
        from your Dialog Mobile 
        <br/>
        <br/>
        USSD id : <?= $sellerunique ?>
    </div>
    <!--End USSD Activation-->

    <!--Start Accordion-->
    
  <ul id="sidenav01" class="accordion nav nav-department nav-tabs nav-stacked ulstyle">
     <?php
        $catname = "";
        $counter = 0;
        foreach ($totalcate as $category1){   
            
            ?>
    <li>
        <a  data-toggle='collapse' data-target='#subnav<?=$counter ?><?=$counter ?>' data-parent='#sidenav01' class="accordion-toggle collapsed">
             <i class="icon-chevron-right pull-right"></i><?=$category1 ?>
        
        </a>
        
          <ul id="subnav<?=$counter ?><?=$counter ?>" class="nav nav-list collapse">
             <?php foreach($category as $catego){
                            if($category1 == $catego->cat_name){
                    ?>
                    <li><a style="cursor: pointer" ><?=$catego->title ?></a></li>
                   
                 <?php }} ?>
          </ul>
    </li>
       
     <?php  ++$counter; } ?>
</ul>


    <!--End Accordion-->

    <!--Start Featured Products-->

    <!--End Featured Product Two-->
    <!--End Featured Products-->

    <!--Start Customer Feed-->
    <div class="thumbnail whatpepol">

        <div class="caption">
            <h5 style="width: 100%; text-align: center; margin-bottom: 20px" >What people think </h5>
            <marquee behavior="scroll" direction="up" scrollamount="2">
                <?php  foreach($comments as $coment){ ?> 
                <div class="well roolingitem">
                    <img src="<?php echo get_assets_path().$coment->profile_pic  ?>" height="32" width="32">Says: &nbsp; 
                    <p><?php echo $coment->buyer_response ?></p>
                </div>
                <?php } ?>
            </marquee>
        </div>
    </div>  
    <br/>
    <div class="thumbnail">
      
       
        
        <?php echo htmlspecialchars_decode($facboook); ?>
    </div>
    <!--End Customer Feed-->


</div>