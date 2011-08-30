<!doctype html>  

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ --> 
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
 
<?=$this->load->view('global/header')?>

</head>

<body>





  <div id="container">
  	
  
    	<div class="container_24" id="header">
    	
    	<!-- Logo here --> 
    	<div id="logo">
    		<img width="352px" height="85px" src="<?=base_url()?>images/template/logo.png" alt="Logo" />
    	</div>
         <div id="menutop" class="grid_24">
            

         </div>
    	</div>
   
      <div id="slide_area">
         <?=$this->load->view('slideshow/slideshow')?>
      </div>
    
    <div class="container_24">

        <div id="breadcrumb" class="grid_10"></div>

        <div id="breadcrumb2" class="grid_14""></div>

    </div>
         <div class="clear"></div>
      
          <div class="container_24" id="main">

		<div id="side_box" class="grid_10">

<p>OpeningTimes:<br/>
12pm - 11pm tuesday  to Sunday</p>

<p>
Kitchen:<br/>
Midday til 3pm, then 6pm til 9:30pm Tuesday to Saturday<br/>
1pm til 8:30pm Sunday<br/>
</p>

<p>
Tel: 01245 267 580<br/>
email: info@eaglepub.co.uk</p>


		</div>
	
	
		<div id="main_container" class="grid_14"">
			
               

			<div class="maincontent">
                            <?=$this->load->view($main_content)?>
Welcome to the Eagle website. We are still building the site, but shall soon be posting our menu on here, so keep checking!
<br/>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

                    </div>
	
		</div>
	    <div class="clear"></div>
    </div>

 
 
 <?php if(isset($section2)) { ?>
 <div id="section2">   
     <div class="container_24" >

		<?=$this->load->view($section2)?>

    </div>
 </div>
 <?php } ?>


<?=$this->load->view('template/section3')?>
    
    
    <div id="bottomfooter"">
<?=$this->load->view('template/footer')?>
    </div>
  </div> 

<!--! end of #container -->
<?=$this->load->view('global/footer')?>
  
</body>
</html>