<?php
 /*
   Plugin Name: UCL Introduction Page
   Plugin URI: http://filippoaiello.it
   Description: a plugin to create awesomeness and spread joy
   Version: 1.2
   Author: Filippo Aiello
   Author URI: http://filippoaiello.it
   License: GPL2
   */


$reverseCount;
$count=0;


function demolistposts_handler() {
  echo"";
  echo '<button style="display: block;" id="arrow"><span>↓</span></button>';
  echo '<div style="overflow: hidden;" id="pagepiling">';
  
  //run function that actually does the work of the plugin
  postsIntroduction_function();
  //send back text to replace shortcode in post
  //postsFooter_function();
  echo '</div>';
  		
}



function postsIntroduction_function() {

  $args = array(
  // to set the limit
  "posts_per_page" => 4,
  "post_type" =>"post",
  'category_name' => 'INTRODUCTION',
  );
  
  $awepop_list = new WP_Query($args);

  if($awepop_list ->have_posts()){
  	
	//Total number of posts
	$totalPosts=$awepop_list->found_posts;
	$reverseCount=$totalPosts;
	  
    $count=0;
  	
	while ($awepop_list->have_posts() ): $awepop_list->the_post();$count++;$reverseCount--;
			
			if($count==1){
				 echo '<div id="section'.$count.'" class="section" style="z-index: '.$reverseCount.'; top: 0px;">';
				 echo '<div class="intro">';
				 echo ''.get_the_content( $post->post_parent ).'';
				echo '</div>';
			}
			else if($count==$totalPosts){
				echo '<div id="section'.$count.'" class="section pp-scrollable" style="z-index: '.$reverseCount.'; top: 0px;">';
				
				echo '<div style="top: 0%;" class="content "><div class="page"><div id="pageContainer" class="container">';
				echo postsJoin_function();
				echo postsWhatWeDo_function();
				//echo postsWhatIsOn_function();
				//echo postsBlog_function();
				postsEnd_function();
				
				
				
				echo '</div></div></div>';
				
			}
			else{
				echo '<div id="section'.$count.'" class="section" style="z-index: '.$reverseCount.'; top: 0px;">';
				echo '<div class="intro">';
				echo ''.get_the_content( $post->post_parent ).'';
				echo '</div>';
			}
		 echo '</div>';
		endwhile;  	
  }

  //send back text to calling function
  return $demolp_output;
}


function postsJoin_function() {
	
	$args = array(
  // to set the limit
  "posts_per_page" => 3,
  "post_type" =>"post",
  'category_name' => 'JOIN',
  );
  
  $awepop_list = new WP_Query($args);
  
	
  $demolp_output .= '<!-- Apply -->
					      <div id="apply" class="row">
						    <div class="row-same-height">
						    	
						    	<div class="col-md-8 col-md-height col-top">
						    		<div class="row boxes careers">
						    		
						    		  <h3 class="nameSection">Startups</h3>
						    		  <div class="content">
							    		<h4 class="text-center title">JOIN DIGITAL BUSINESS LABS</h4>
							    		<h2 class="text-overflow">Would you like help to test and validate your digital product? Apply to DB our Autumn 2015 Cohort and gain access to expert user experience consultations, cross-device testing, and large-scale beta testing. </h2>
							    	    
							    	  </div>
						    		</div>
						    	</div>
						    	
						            <div class="col-md-4 col-md-height col-top">
						    		  <div class="row boxes business">
						    		  
									      <h3 class="nameSection">New Businesses</h3>
							    		  <div class="content">
							    		    <h4 class="text-center title">BIGGER THAN
A STARTUP?</h4>
							    		    <h2 class="text-overflow">We don’t only work with startups, but we also work with FTSE 100 companies including CISCO, ATOS, Goldman Sachs, BUPA, Inmarsat, etc.</h2>
								    	    
								    	  </div>
						    		  </div>
						    	    </div>
						    </div>
						</div>';		    	
		  

  //send back text to calling function
  return $demolp_output;
}

function postsWhatWeDo_function() {
	
	$args = array(
  // to set the limit
  "posts_per_page" => 3,
  "post_type" =>"post",
  'category_name' => 'WHAT WE DO',
  );
  
  $awepop_list = new WP_Query($args);
  
	
  $demolp_output .= '				
<!-- what we do -->
	      <div id="apply" class="row">
		    <div class="row-same-height">';
		    
		    if($awepop_list ->have_posts()){
  	
				//Total number of posts
				$totalPosts=$awepop_list->found_posts;
				$reverseCount=$totalPosts;
				  
			    $count=0;
				$category;
			  	
				while ($awepop_list->have_posts() ): $awepop_list->the_post();$count++;
				  $category=get_the_category($post->post_parent);
				  $demolp_output .= '
				     <div class="col-md-4 col-md-height col-top">
		    		<div class="row boxes careers">
		    		  <h3 class="nameSection">'.$category[0]->name.'</h3>
		    		  <div class="content">
			    		<h4 class="text-center title">'.get_the_title( $post->post_parent ).'</h4>
			    		<h2 class="text-overflow">'.get_the_content( $post->post_parent ).'</h2>
			    	    
			    	  </div>
		    		</div>
		    	</div> ';
				
			    endwhile;		    	
		   }  
		   $demolp_output .= '</div></div><br/> ';

  //send back text to calling function
  return $demolp_output;
}

function postsWhatIsOn_function() {
	
	$args = array(
  // to set the limit
  "posts_per_page" => 3,
  "post_type" =>"post",
  'category_name' => 'EVENTS',
  );
  
  $awepop_list = new WP_Query($args);
  
	
  $demolp_output .= '				
<!-- what\'s on -->
	      <div id="apply" class="row">
		    <div class="row-same-height">';
		    
		    if($awepop_list ->have_posts()){
  	
				//Total number of posts
				$totalPosts=$awepop_list->found_posts;
				$reverseCount=$totalPosts;
				  
			    $count=0;
				$category;
			  	
				while ($awepop_list->have_posts() ): $awepop_list->the_post();$count++;
				  $category=get_the_category($post->post_parent);
				  $demolp_output .= '
				     <div class="col-md-4 col-md-height col-top">
		    		<div class="row boxes careers">
		    		  <h3 class="nameSection">'.$category[0]->name.'</h3>
		    		  <div class="content">
			    		<h4 class="text-center title">'.get_the_title( $post->post_parent ).'</h4>
			    		<h2 class="text-overflow">'.get_the_content( $post->post_parent ).'</h2>
			    	    
			    	  </div>
		    		</div>
		    	</div> ';
				
			    endwhile;		    	
		   }  
		   $demolp_output .= '</div></div><br/> ';

  //send back text to calling function
  return $demolp_output;
}

function postsBlog_function() {
	
	$args = array(
  // to set the limit
  "posts_per_page" => 3,
  "post_type" =>"post",
  'category_name' => 'BLOG',
  );
  
  $awepop_list = new WP_Query($args);
  
	
  $demolp_output .= '				
<!-- blog -->
	      <div id="apply" class="row">
		    <div class="row-same-height">';
		    
		    if($awepop_list ->have_posts()){
  	
				//Total number of posts
				$totalPosts=$awepop_list->found_posts;
				$reverseCount=$totalPosts;
				  
			    $count=0;
				$category;
			  	
				while ($awepop_list->have_posts() ): $awepop_list->the_post();$count++;
				  $category=get_the_category($post->post_parent);
				  $demolp_output .= '
				     <div class="col-md-4 col-md-height col-top">
		    		<div class="row boxes careers">
		    		  <h3 class="nameSection">'.$category[0]->name.'</h3>
		    		  <div class="content">
			    		<h4 class="text-center title">'.get_the_title( $post->post_parent ).'</h4>
			    		<h2 class="text-overflow">'.get_the_content( $post->post_parent ).'</h2>

			    	    
			    	  </div>
		    		</div>
		    	</div> ';
				
			    endwhile;		    	
		   }  
		   $demolp_output .= '</div></div><br/> ';

  //send back text to calling function
  return $demolp_output;
}

function postsEnd_function(){
	
	$args = array(
  // to set the limit
  "posts_per_page" => 1,
  "post_type" =>"post",
  'category_name' => 'NEWSLETTER',
  );
  
  $awepop_list = new WP_Query($args);
  
		 echo '<!-- Newsletter -->
	      <div id="newsletter" class="row">
		    <div class="row-same-height">
		    	
		    	<div class="col-md-8 col-md-height col-top">
		    		<div class="row boxes staurups">
		    		  <h3 class="nameSection">Newsletter</h3>
		    		  <div class="content">';
					  
					  $queried_post = get_post(79);
					  echo '<h4 class="text-center title">SIGN UP FOR MORE!</h4>';
					  echo $queried_post->post_content;
					  do_shortcode('[simpleSubscribeForm]');
							
			    echo'</div>
		    		</div>
		    	</div>
		    	
		        <div class="col-md-4 col-md-height col-top">
		    		<div class="row boxes business">
		    		  <h3 class="nameSection">UCL</h3>
		    		  <div class="content">
			    	    <h4 class="text-center title">UCL ADVANCES</h4>
						<h2 class="text-overflow">We look for people who are excited about working in a fantastically diverse group, and for a wide range of clients.</h2>
							    	    
			    	  </div>
		    		</div>
		    	</div>

		    
		    </div>
		</div>';
		
  //send back text to calling function
}

function postsFooter_function(){
	echo '<footer>
	</footer>';
}

function wptuts_styles_with_the_lot()
{
	wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'http://code.jquery.com/jquery-1.11.3.min.js');
	wp_enqueue_script( 'jquery' );
	
    // Register the script like this for a theme:
   if (!is_page('Home') ) {
	   wp_deregister_script( 'custom-script2' );
	   wp_deregister_script( 'custom-script3' );
	   
	    wp_deregister_style( 'custom-style1' );
	    wp_deregister_style( 'custom-style3' );
		wp_deregister_style( 'custom-style4' );
		wp_deregister_style( 'custom-style5' );
   }
   else{
   	  wp_register_script( 'custom-script2', plugins_url( '/js/pagepiling.js', __FILE__ ) );
      wp_register_script( 'custom-script3', plugins_url( '/js/ucl_introduction.js', __FILE__ ) );
	  
	wp_register_style( 'custom-style1', plugins_url( '/css/fonts.css', __FILE__ ), array(), '20120208', 'all' );
    wp_register_style( 'custom-style3', plugins_url( '/css/pagepiling.css', __FILE__ ), array(), '20120208', 'all' );
	wp_register_style( 'custom-style4', plugins_url( '/css/ucl_introduction.css', __FILE__ ), array(), '20120208', 'all' );
	wp_register_style( 'custom-style5', plugins_url( '/css/ucl_fixedPage.css', __FILE__ ), array(), '20120208', 'all' );
   	}
   
    
    // Register the style like this for a theme:
   

	// For either a plugin or a theme, you can then enqueue the style:
    wp_enqueue_style( 'custom-style1' );
	wp_enqueue_style( 'custom-style3' );
	wp_enqueue_style( 'custom-style4' );
	wp_enqueue_style( 'custom-style5' );
 
	wp_enqueue_script( 'custom-script2' , array(), null, true  ); 
	wp_enqueue_script( 'custom-script3' , array(), null, true  ); 
}

    add_shortcode("demo-list-posts", "demolistposts_handler");
    add_action( 'wp_enqueue_scripts', 'wptuts_styles_with_the_lot' );



?>