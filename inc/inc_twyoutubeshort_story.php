<?php function create_shortcode_twyoutube_story($attr) {  ob_start();?>
	
    <?php 
	//  $API_Key= get_field("yt_api_key","option") ? : 'AIzaSyAIugRt6iPOcfWuJXvvcdKTs5BL1Eh-93s';
	 $API_Key= get_field("twyt_apikey","option") ? : 'AIzaSyDsgRMN2vbUtqnV6yZlDL2tnHStvS3AAtk';
	 // echo $API_Key;
	 $Channel_mainID =get_field("twyt_channel_id","option") ? : 'UCNWkuzs4gO_1FBwfjTYatxg';
	 // echo $Channel_ID;
	 $Max_Results = get_field("twyt_max_result","option") ? : 4; 
	
	 extract( shortcode_atts(
        [
            'channelid'=>'',
			'maxresult'=>'',
            'numberslide'=>'',
            'autoplay'=>'',
            'speed'=>'',
            'playlist'=>'',
        ], $attr
    ));
?>
<style>
	
</style>
<link rel="stylesheet" href="<?php echo TW_YOUTUBE_API_PLUGIN_URL; ?>/assets/plugins/swiper/swiper.min.css">
<link rel="stylesheet" href="<?php echo TW_YOUTUBE_API_PLUGIN_URL; ?>/assets/plugins/fancybox/fancybox.css">
<div class="container">  
	
	<div class="twyt-story-wrapper flex d-flex-wrap d-gap">
        <div class="twyt-story-btn twyt-story-swiper__next">
            <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512" xml:space="preserve" enable-background="new 0 0 512 512"><path d="M388.4 242 151.6 5.8a19.9 19.9 0 0 0-28 28.1L346.3 256 123.6 478.1a19.8 19.8 0 1 0 28 28.1l236.8-236.1a19.8 19.8 0 0 0 0-28.1z" data-original="#000000" xmlns="http://www.w3.org/2000/svg"/></svg>
        </div>
        <div class="twyt-story-btn twyt-story-swiper__prev">
            <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 443.5 443.5" xml:space="preserve" enable-background="new 0 0 512 512"><path d="M143.5 221.9 336.2 29A17 17 0 0 0 312.1 5L107.3 209.8a17 17 0 0 0 0 24.1L312 438.7a17 17 0 0 0 24.1-24.1L143.5 221.9z" data-original="#000000" xmlns="http://www.w3.org/2000/svg"/></svg>
        </div>
		<div class="twyt-story-slide swiper-container">
            <div class="swiper-wrapper">
            </div>
            
        </div>
	</div>
	
</div>
<input type="hidden" name="twyt_api_key" value="<?php echo $API_Key;?>">
<input type="hidden" name="twyt_story_channel_id" value="<?php echo $channelid ? $channelid: '';?>">
<input type="hidden" name="twyt_story_max_result" value="<?php echo $maxresult;?>">
<input type="hidden" name="twyt_story_numberslide" value="<?php echo $numberslide ? $numberslide:'3';?>">
<input type="hidden" name="twyt_story_autoplay" value="<?php echo $autoplay ? $autoplay:'0';?>">
<input type="hidden" name="twyt_story_speed" value="<?php echo $speed ? $speed:'1000';?>">
<input type="hidden" name="twyt_story_playlist" value="<?php echo $playlist ? $playlist:'';?>">
<input type="hidden" name="twyt_story_playlist" value="<?php echo $playlist ? $playlist:'';?>">
<script src="<?php echo TW_YOUTUBE_API_PLUGIN_URL; ?>/assets/plugins/swiper/swiper.min.js"></script>
<script src="<?php echo TW_YOUTUBE_API_PLUGIN_URL; ?>/assets/plugins/fancybox/fancybox.min.js"></script>
<script>
	

(function($) {


$(document).ready(function() {
	yt_api_key = $("input[name='twyt_api_key']").val();
	twyt_story_channel_id = $("input[name='twyt_story_channel_id']").val();
	twyt_story_max_result = $("input[name='twyt_story_max_result']").val();	
	twyt_story_playlist = $("input[name='twyt_story_playlist']").val();	
	
	if( twyt_story_channel_id && twyt_story_playlist==''){
		
        fetch(`https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId=${twyt_story_channel_id}&maxResults=${twyt_story_max_result}&key=${yt_api_key}`)
		.then(response => response.json())
		.then(
			data => {
				// console.log(data.items);
				let datasearchYt = data.items;
				for ( itemyt of datasearchYt) {
					// console.log(itemyt);
					ytId = itemyt.id.videoId;
					// console.log(ytId);
					fetch(`https://youtube.googleapis.com/youtube/v3/videos?part=statistics&part=snippet&part=contentDetails&id=${ytId}&key=${yt_api_key}`)                               
					.then(response => response.json())
					.then((data) => {
						// console.log(data);
						$('.twyt-story-slide .swiper-wrapper').append(`
                            <div class="swiper-slide">
                                <div class="youtube-item twyt-story-fancybox" id="${data.items[0].id}" data-fancybox="gallery" href='<iframe id="myIframe" width="560" height="315" src="https://www.youtube.com/embed/${data.items[0].id}" frameborder="0" allowfullscreen></iframe>'>
                                    <a href="https://www.youtube.com/watch?v=${data.items[0].id}" target="_blank" class="youtube-item-thumb">
                                        <img src="https://i.ytimg.com/vi/${data.items[0].id}/hq720.jpg" alt="">
                                    </a>
                                    <a href="https://www.youtube.com/watch?v=${data.items[0].id}" target="_blank">
                                        <div class="item">
                                            <h3 class="twyt-title">${data.items[0].snippet.title}</h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
						`)
						//json response
					})
					.catch((err) => {
						console.log(err);
					});
				}
				
			}
		);	
	} else if(twyt_story_playlist && twyt_story_channel_id == ''){
		fetch(`https://youtube.googleapis.com/youtube/v3/playlistItems?part=snippet&playlistId=${twyt_story_playlist}&maxResults=${twyt_story_max_result}&key=${yt_api_key}`)
		.then(response => response.json())
		.then(
			data => {
				// console.log(data.items);
				let datasearchYt = data.items;
				for ( itemyt of datasearchYt) {
					console.log(itemyt);
					ytId = itemyt.snippet.resourceId.videoId;
					// console.log(ytId);
					fetch(`https://youtube.googleapis.com/youtube/v3/videos?part=statistics&part=snippet&part=contentDetails&id=${ytId}&key=${yt_api_key}`)                               
					.then(response => response.json())
					.then((data) => {
						// console.log(data);
						$('.twyt-story-slide .swiper-wrapper').append(`
                            <div class="swiper-slide">
                                <div class="youtube-item twyt-story-fancybox" id="${data.items[0].id}" data-fancybox="gallery" href='<iframe id="myIframe" width="560" height="315" src="https://www.youtube.com/embed/${data.items[0].id}" frameborder="0" allowfullscreen></iframe>'>
                                    <a href="https://www.youtube.com/watch?v=${data.items[0].id}" target="_blank" class="youtube-item-thumb">
                                        <img src="https://i.ytimg.com/vi/${data.items[0].id}/hq720.jpg" alt="">
                                    </a>
                                    <a href="https://www.youtube.com/watch?v=${data.items[0].id}" target="_blank">
                                        <div class="item">
                                            <h3 class="twyt-title">${data.items[0].snippet.title}</h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
						`)
						//json response
					})
					.catch((err) => {
						console.log(err);
					});
				}
				
			}
		);	
    }
})

})(jQuery);
twyt_story_numberslide = document.querySelector("input[name='twyt_story_numberslide']").value;
twyt_story_autoplay = document.querySelector("input[name='twyt_story_autoplay']").value;
twyt_story_speed = document.querySelector("input[name='twyt_story_speed']").value;
	
if( twyt_story_autoplay ==1 ){
    twyt_story_autoplay = true
}else{
    twyt_story_autoplay = false
}
console.log(twyt_story_autoplay);
console.log( twyt_story_speed);
var twytStory = new Swiper(".twyt-story-slide", {
    slidesPerView: parseInt(twyt_story_numberslide)+ 0.5 ,
    spaceBetween: 15,
    freeMode: true,
    loop: false,
    speed: parseInt(twyt_story_speed),
    autoplay: twyt_story_autoplay,
    observeParents: true,
    observer: true,
    navigation: {
        nextEl: '.twyt-story-swiper__next',
        prevEl: '.twyt-story-swiper__prev',
    },
    breakpoints: {
        //max-width> 575px
        575 :{
            slidesPerView:1.5,
        },
        768:{
            slidesPerView:parseInt(twyt_story_numberslide)+ 0.5,
        }
    }
});
Fancybox.bind(".twyt-story-fancybox", {
                // Your options
    Toolbar: {
        display: [
            { id: "prev", position: "center" },
            { id: "counter", position: "center" },
            { id: "next", position: "center" },
            "zoom",
            "slideshow",
            "fullscreen",
            "download",
            "thumbs",
            "close",
        ],
    },
});
</script>
<?php $content = ob_get_clean();return $content; ?>
<?php }

add_shortcode('twYoutubeApi-story', 'create_shortcode_twyoutube_story');?>