<?php function create_shortcode_twyoutube() {  ob_start();?>
   
    <?php 
	//  $API_Key= get_field("yt_api_key","option") ? : 'AIzaSyAIugRt6iPOcfWuJXvvcdKTs5BL1Eh-93s';
	 $API_Key= get_field("twyt_apikey","option") ? : 'AIzaSyDsgRMN2vbUtqnV6yZlDL2tnHStvS3AAtk';
	 // echo $API_Key;
	 $Channel_ID =get_field("twyt_channel_id","option") ? : 'UCNWkuzs4gO_1FBwfjTYatxg';
	 // echo $Channel_ID;
	 $Max_Results = get_field("twyt_max_result","option") ? : 4; 
	 $twyt_layout_desktop = get_field_object("twyt_layout","option");
	 $twyt_layout_mobile = get_field_object("twyt_layout_mb","option");
	 $twyt_statics = get_field("twyt_statics_status","option");
	//  var_dump( $twyt_statics);
?>
<style>
	
</style>
<div class="twyt-header twyt-header-shortcode flex d-flex-center">
	
</div>
<div class="container">  
	
	<div class="twyt-wrapper flex d-flex-wrap d-gap">
		
	</div>
	
</div>
<input type="hidden" name="twyt_api_key" value="<?php echo $API_Key;?>">
<input type="hidden" name="twyt_channel_id" value="<?php echo $Channel_ID;?>">
<input type="hidden" name="twyt_max_result" value="<?php echo $Max_Results;?>">
<input type="hidden" name="twyt_layout_desktop" value="<?php echo $twyt_layout_desktop['value'];?>">
<input type="hidden" name="twyt_layout_mobile" value="<?php echo $twyt_layout_mobile['value'];?>">
<input type="hidden" name="twyt_statics" value="<?php echo $twyt_statics;?>">
<?php $content = ob_get_clean();return $content; ?>

<?php }

add_shortcode('twYoutubeApi', 'create_shortcode_twyoutube');?>