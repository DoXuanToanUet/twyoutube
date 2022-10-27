<?php
/**
 * Template Name: Get youtubelist for youtube channel
 */
get_header(); ?>

<?php 
	//  $API_Key= get_field("yt_api_key","option") ? : 'AIzaSyAIugRt6iPOcfWuJXvvcdKTs5BL1Eh-93s';
	 $API_Key= get_field("twyt_api_key","option") ? : 'AIzaSyDsgRMN2vbUtqnV6yZlDL2tnHStvS3AAtk';
	 // echo $API_Key;
	 $Channel_ID =get_field("twyt_channel_id","option") ? : 'UCNWkuzs4gO_1FBwfjTYatxg';
	 // echo $Channel_ID;
	 $Max_Results = get_field("twyt_max_result","option") ? : 4; 
	 $twyt_layout_desktop = get_field_object("twyt_layout","option");
	 $twyt_layout_mobile = get_field_object("twyt_layout_mb","option");
   $twyt_statics = get_field("twyt_statics_status","option");
   $twyt_header = get_field("twyt_header_style","option");
?>
<div class="twyt-page flex d-flex-col">
  <div class="twyt-header flex d-flex-center">
	
  </div>
  <div class="container">  
    
    <div class="twyt-wrapper flex d-flex-wrap d-gap">
      
    </div>
    
  </div>
</div>

<input type="hidden" name="twyt_api_key" value="<?php echo $API_Key;?>">
<input type="hidden" name="twyt_channel_id" value="<?php echo $Channel_ID;?>">
<input type="hidden" name="twyt_max_result" value="<?php echo $Max_Results;?>">
<input type="hidden" name="twyt_layout_desktop" value="<?php echo $twyt_layout_desktop['value'];?>">
<input type="hidden" name="twyt_layout_mobile" value="<?php echo $twyt_layout_mobile['value'];?>">
<input type="hidden" name="twyt_statics" value="<?php echo $twyt_statics;?>">
<input type="hidden" name="twyt_header_style" value="<?php echo $twyt_header;?>">
<div class="container">
  <?php 
      if ( have_posts() ) {

        while ( have_posts() ) {
          the_post();
      
          the_content();
        }
      }
  ?>

</div>

<?php get_footer(); ?>
<main class="twfaq" style="display:none">
  <div class="twfaq__holder">
  <details class="twfaq__detail">
      <summary  class="twfaq__summary"><span class="twfaq__question">How many team members can I invite?</span></summary>
      <p class="twfaq__text">You can invite up to 2 additional users on the Free plan. There is no limit on team members for the Premium plan.</p>
  </details>

  <details class="twfaq__detail">
    <summary  class="twfaq__summary"><span class="twfaq__question">What is the maximum file upload size?</span></summary>
    <p class="twfaq__text">No more than 2GB. All files in your account must fit your allotted storage space.</p>
  </details>  

  <details class="twfaq__detail">
    <summary  class="twfaq__summary"><span class="twfaq__question">How do I reset my password?</span></summary>
    <p class="twfaq__text">Click “Forgot password” from the login page or “Change password” from your profile page.</p>
    <p class="twfaq__text">A reset link will be emailed to you.</p>
  </details>  
  
  <details class="twfaq__detail">
    <summary  class="twfaq__summary"><span class="twfaq__question">Can I cancel my subscription?</span></summary>
    <p class="twfaq__text">Yes! Send us a message and we’ll process your request no questions asked.</p>
  </details> 
  
  <details class="twfaq__detail">
    <summary  class="twfaq__summary"><span class="twfaq__question">Do you provide additional support?</span></summary>
    <p class="twfaq__text">Chat and email support is available 24/7. Phone lines are open during normal business hours.</p>
  </details>   

</div>
</main>