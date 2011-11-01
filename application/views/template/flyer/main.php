<!doctype html>  

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ --> 
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
 
<?=$this->load->view('template/flyer/header')?>

</head>

<body>

    <div id="header">

    	<div id="logo" class="container_24">
                        <div class="grid_18">
                              <img src="/images/template/flyerdirect/logo.png" width="188" height="66"/>
                        </div>

                        <div class="grid_6">
                                <img src="/images/template/flyerdirect/contact.png" />
                        </div>
    		
    	</div>
        <div style="clear:both"></div>
         <div id="menutop">
             <!-- Logo here -->
    	
  <?=$this->load->view('global/flyer/menu')?>

         </div>
        
        <?=$this->load->view('slideshow/flyer/slideshow')?>
        
   </div>
  <div id="container">
  	

      <div id="bodycontainer" class="container_24">
         
            <div class="clear"></div>

            <div id="textcontainer">
         <?php
         if(!isset($sidebar))   {
             $mainsize ="grid_18";
         }
         else
         {
             $mainsize ="grid_12";
             ?>

           <div class="grid_6">

            <?=$this->load->view($sidebox)?>
          </div >

         <?php } ?>
        


          <div class="<?=$mainsize?>">
              <?=$this->load->view($main_content)?>
              

          </div>
                <div class="grid_6">
              <?=$this->load->view('sidebox/flyer/london2012')?>
              

          </div>

         <div class="clear"></div>
</div>

      </div>
      
      <div class="container_24" id="footer">
          
        
<?=$this->load->view('global/flyer/social_icons')?>

      </div>
      
      
      
  </div> 
    
     <div  id="backfooter" >
         <div class="container_24" >
          <div class="grid_10">
                            
                        </div>

                        <div class="grid_14">
  <?=$this->load->view('global/flyer/footer_menu')?>
                        </div>
             
         </div>
      </div>

<!--! end of #container -->
<?=$this->load->view('template/flyer/footer')?>
  
</body>
</html>