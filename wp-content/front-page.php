<?php get_header(); ?>
	
<div id="mainContainer">
    <h1>front page</h1>
	
		<?php 
		
		  echo buildPage();
		  
						  
				
		
		 ?>
		 <h1>ciao</h1>
	</div>
	
	
	
		
		

</div>

<?php get_footer(); ?>

<?php

function buildPage() {
  $demolph_output="";
  $demolph_output.= '<button style="display: block;" id="arrow"><span>↓</span></button>';
  $demolph_output.= '<div style="overflow: hidden;" id="pagepiling">';
  
  //run function that actually does the work of the plugin
  $demolph_output.= postsIntroduction();
  //send back text to replace shortcode in post
  $demolph_output.= '</div>';
  
  return $demolph_output;
}


function postsIntroduction() {

  $args = array(
  // to set the limit
  "posts_per_page" => 5,
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
				 $demolp_output .= '<div id="section'.$count.'" class="section" style="z-index: '.$reverseCount.'; top: 0px;">';
				 $demolp_output .= '<div class="intro">';
				 $demolp_output .= '<h1 style="display: block;">'.get_the_title( $post->post_parent ).'</h1>
				<h2 style="display: block;">'.get_the_content( $post->post_parent ).'</h2>';
				$demolp_output .= '</div>';
			}
			else if($count==$totalPosts){
				$demolp_output .= '<div id="section'.$count.'" class="section pp-scrollable" style="z-index: '.$reverseCount.'; top: 0px;">';
				
				$demolp_output .= '<div style="top: 0%;" class="content "><div class="page"><div id="pageContainer" class="container-fluid">';
				$demolp_output .= postsJoin();
				$demolp_output .= postsWhatWeDo();
				$demolp_output .= postsWhatIsOn();
				$demolp_output .= postsBlog();
				$demolp_output .= postsEnd();
				
				$demolp_output .= '</div></div></div>';
			}
			else{
				$demolp_output .= '<div id="section'.$count.'" class="section" style="z-index: '.$reverseCount.'; top: 0px;">';
				$demolp_output .= '<div class="intro">';
				 $demolp_output .= '<h1 style="display: none;">'.get_the_title( $post->post_parent ).'</h1>
				<h2 style="display: none;">'.get_the_content( $post->post_parent ).'</h2>';
				$demolp_output .= '</div>';
			}
		 $demolp_output .= '</div>';
		endwhile;  	
  }

  //send back text to calling function
  return $demolp_output;
}


function postsJoin() {
	
	$args = array(
  // to set the limit
  "posts_per_page" => 3,
  "post_type" =>"post",
  'category_name' => 'JOIN',
  );
  
  $awepop_list = new WP_Query($args);
  
	
  $demolp_output .= '				
<!-- join -->
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
			    		<h4 class="text-left title">'.get_the_title( $post->post_parent ).'</h4>
			    		<h2 class="text-overflow">'.get_the_content( $post->post_parent ).'</h2>
			    	    <div id="" class="defaultButton">CONNECT</div>
			    	    
			    	  </div>
		    		</div>
		    	</div> ';
				
			    endwhile;		    	
		   }  
		   $demolp_output .= '</div></div><br/> ';

  //send back text to calling function
  return $demolp_output;
}

function postsWhatWeDo() {
	
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
			    		<h4 class="text-left title">'.get_the_title( $post->post_parent ).'</h4>
			    		<h2 class="text-overflow">'.get_the_content( $post->post_parent ).'</h2>
			    	    <div id="" class="defaultButton">WHAT WE DO</div>
			    	    
			    	  </div>
		    		</div>
		    	</div> ';
				
			    endwhile;		    	
		   }  
		   $demolp_output .= '</div></div><br/> ';

  //send back text to calling function
  return $demolp_output;
}

function postsWhatIsOn() {
	
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
			    		<h4 class="text-left title">'.get_the_title( $post->post_parent ).'</h4>
			    		<h2 class="text-overflow">'.get_the_content( $post->post_parent ).'</h2>
			    	    <div id="" class="defaultButton">WHAT\'S ON</div>
			    	    
			    	  </div>
		    		</div>
		    	</div> ';
				
			    endwhile;		    	
		   }  
		   $demolp_output .= '</div></div><br/> ';

  //send back text to calling function
  return $demolp_output;
}

function postsBlog() {
	
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
			    		<h4 class="text-left title">'.get_the_title( $post->post_parent ).'</h4>
			    		<h2 class="text-overflow">'.get_the_content( $post->post_parent ).'</h2>
			    	    <div id="" class="defaultButton">BLOG</div>
			    	    
			    	  </div>
		    		</div>
		    	</div> ';
				
			    endwhile;		    	
		   }  
		   $demolp_output .= '</div></div><br/> ';

  //send back text to calling function
  return $demolp_output;
}

function postsEnd(){
	
	$args = array(
  // to set the limit
  "posts_per_page" => 1,
  "post_type" =>"post",
  'category_name' => 'NEWSLETTER',
  );
  
  $awepop_list = new WP_Query($args);
  
		 $demolp_output .= '<!-- Newsletter -->
	      <div id="newsletter" class="row">
		    <div class="row-same-height">
		    	
		    	<div class="col-md-8 col-md-height col-top">
		    		<div class="row boxes staurups">
		    		  <div class="content">';
					  
					  $queried_post = get_post(79);
					  
						       $demolp_output .='<h2>Our Newwsletter</h2>';
							  $demolp_output .= $queried_post->post_content;
							   $demolp_output .=do_shortcode('[simpleSubscribeForm]');
							
			    $demolp_output .='</div>
		    		</div>
		    	</div>
		    	
		        <div class="col-md-4 col-md-height col-top">
		    		<div class="row boxes business">
		    		  <div class="content">
			    	    
			    	  </div>
		    		</div>
		    	</div>

		    
		    </div>
		</div>';
		
  //send back text to calling function
  return $demolp_output;
}


?>