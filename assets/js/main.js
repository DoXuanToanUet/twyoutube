
function convertYouTubeDuration(duration) {

    const time_extractor = /^P([0-9]*D)?T([0-9]*H)?([0-9]*M)?([0-9]*S)?$/i;
    const extracted = time_extractor.exec(duration);
    if (extracted) {
        const days = parseInt(extracted[1], 10) || 0;
        // console.log(days);
        const hours = parseInt(extracted[2], 10) || 0;
        const minutes = parseInt(extracted[3], 10) || 0;
        const seconds = parseInt(extracted[4], 10) || 0;
        return days+':'+hours+':'+minutes+':'+seconds;
    }
    // return 0;
}
function nFormatter(num) {
    if (num >= 1000000000) {
        return (num / 1000000000).toFixed(1).replace(/\.0$/, '') + 'G';
    }
    if (num >= 1000000) {
        return (num / 1000000).toFixed(1).replace(/\.0$/, '') + 'M';
    }
    if (num >= 1000) {
        return (num / 1000).toFixed(1).replace(/\.0$/, '') + 'K';
    }
    return num;
}
	(function($) {
		$(document).ready(function() {
			yt_api_key = $("input[name='twyt_api_key']").val();
			yt_channel_id = $("input[name='twyt_channel_id']").val();
			yt_max_reusult = $("input[name='twyt_max_result']").val();
			twyt_layout_desktop = $("input[name='twyt_layout_desktop']").val();
			twyt_layout_mobile = $("input[name='twyt_layout_mobile']").val();
			twyt_statics = $("input[name='twyt_statics']").val();
			twyt_header_style = $("input[name='twyt_header_style']").val();
            if( yt_channel_id){
                fetch(`https://youtube.googleapis.com/youtube/v3/channels?part=snippet%2CcontentDetails%2Cstatistics&id=${yt_channel_id}&key=${yt_api_key}`)
                .then(response => response.json())
                .then((datachannel)=>{
                    console.log(datachannel);    
                    if (typeof bannerChannel !== 'undefined') {
                        subscriberCount = parseFloat(datachannel.items[0].statistics.subscriberCount)
                        // console.log(subscriberCount);
                        viewCount = parseFloat(datachannel.items[0].statistics.viewCount)
                        videoCount = parseFloat(datachannel.items[0].statistics.videoCount)
                        if (twyt_header_style == 'twmb_header_default'){
                            $('.twyt-header').append(`
                                <style>
                                    .twyt-header::before {
                                        background-image:url(${datachannel.items[0].snippet.thumbnails.default.url});	
                                    }
                                </style>	
                                <div class="twyt-header-wrapper ">
                                        <div class="twyt-avatar flex d-flex-center d-flex-col">
                                            <img src="${datachannel.items[0].snippet.thumbnails.high.url}" alt="">
                                            <div class="text-center twyt-name">${datachannel.items[0].snippet.title}</div>
                                        </div>
                                        <div class="twyt-detail flex d-flex-center d-gap">
                                            <div class="twyt-info">
                                                <span class="twyt-subtitle"> Lượt đăng ký: </span>
                                                ${nFormatter(subscriberCount)}
                                            </div>
                                            <div class="twyt-info">
                                                <span class="twyt-subtitle"> Lượt xem: </span>
                                                ${nFormatter(viewCount)}
                                            </div>
                                            <div class="twyt-info">
                                                <span class="twyt-subtitle">Số video: </span>
                                                ${nFormatter(videoCount)}
                                            </div>
                                        </div>
                                        <div style="padding:5px 0px;"></div>
                                        <a href="https://www.youtube.com/channel/${datachannel.items[0].id}?sub_confirmation=1" class="twyt-sub flex d-flex-center" target="_blank">
                                                Đăng kí kênh
                                        </a>
                                </div>
                            `
                            );
                        } else if(twyt_header_style == 'twmb_header_1'){
                            fetch(`https://youtube.googleapis.com/youtube/v3/channels?part=brandingSettings&id=${yt_channel_id}&key=${yt_api_key}`)
                                .then(response => response.json())
                                .then((bannerChannel)=>{
                                    // console.log(bannerChannel);
                                    $('.twyt-header').addClass('twmb_header_1');
                                    if (typeof bannerChannel !== 'undefined') {
                                    // myVar is (not defined) OR (defined AND unitialized)
                                    $('.twyt-header').append(`
                                        
                                    <img src="${bannerChannel.items[0].brandingSettings.image.bannerExternalUrl}=w2120-fcrop64=1,00005a57ffffa5a8-k-c0xffffffff-no-nd-rj"/>	
                                    <div class="twyt-header-wrapper ">
                                        <div class="container">
                                            <div class="twyt-avatar flex ">
                                                <img src="${datachannel.items[0].snippet.thumbnails.high.url}" alt="">
                                            </div>
                                            <div class="twyt-header-desc flex d-align-spacebt">
                                                <div class="twyt-header-desc-left ">
                                                    <div class="twyt-name">${datachannel.items[0].snippet.title}</div>
                                                    <div class="twyt-detail flex d-gap">
                                                        <div class="twyt-info">
                                                            <span class="twyt-subtitle"> Lượt đăng ký: </span>
                                                            ${nFormatter(subscriberCount)}
                                                        </div>
                                                        <div class="twyt-info">
                                                            <span class="twyt-subtitle"> Lượt xem: </span>
                                                            ${nFormatter(viewCount)}
                                                        </div>
                                                        <div class="twyt-info">
                                                            <span class="twyt-subtitle">Số video: </span>
                                                            ${nFormatter(videoCount)}
                                                        </div>
                                                    </div>
                                                    <div class="twyt-content">${datachannel.items[0].snippet.description}</div>
                                                    <div style="padding:5px 0px;"></div>
                                                </div>
                                                <div class="twyt-header-desc-right ">
                                                    <a href="https://www.youtube.com/channel/${datachannel.items[0].id}?sub_confirmation=1" class="twyt-sub flex d-flex-center" target="_blank">
                                                        Đăng kí kênh
                                                    </a>
                                                </div>
                                            </div>
                                            
                                           
                                        </div>
                                           
                                    </div>
                                `
                                );
                                    } else {
                                    // myVar is defined AND initialized
                                    }
                                
                                })
                                .catch((error) => {
                                    console.error('Error:', error);
                                });
                            
                        }
                    }
                   
                    
                })
                .catch((err) => {
                    console.log(err);
                });
                
                fetch(`https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId=${yt_channel_id}&maxResults=${yt_max_reusult}&key=${yt_api_key}`)
                .then(response => response.json())
                .then(
                    data => {
                        // console.log(data.items);
                        let dataYt = data.items;
                        for ( itemyt of dataYt) {
                            // console.log(itemyt);
                            ytId = itemyt.id.videoId;
                            // console.log(ytId);
                            fetch(`https://youtube.googleapis.com/youtube/v3/videos?part=statistics&part=snippet&part=contentDetails&id=${ytId}&key=${yt_api_key}`)                               
                            .then(response => response.json())
                            .then((data) => {
                                // console.log(data);
                                durationYt = data.items[0].contentDetails.duration;
                                // console.log(durationYt);
                                // let thumbYt;
                                // if ('maxres' in thumbCheck){
                                //     thumbYt = data[1].items[0].snippet.thumbnails.maxres.url
                                // }else{
                                //     thumbYt = data[1].items[0].snippet.thumbnails.high.url
                                // }
                                let twyt_statics_layout;
                                if( twyt_statics == 1){
                                    twyt_statics_layout=`<div class="twyt-bar flex d-gap">
                                    <div class="twyt-viewcount flex d-gap-small d-align-middle">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512" xml:space="preserve" enable-background="new 0 0 512 512"><path d="M510.1 250c-4-6-101-143.3-254.1-143.3C124.6 106.7 7.4 243.3 2.5 249c-3.3 4-3.3 9.8 0 13.8 5 5.8 122 142.4 253.5 142.4S504.5 268.7 509.5 263c3-3.7 3.3-9 .6-13zM256 384C150.6 384 50.4 283.5 25 256c25.4-27.5 125.5-128 231-128 123.3 0 210.3 100.3 231.5 127.4C463 282.1 362.3 384 256 384z" data-original="#000000" xmlns="http://www.w3.org/2000/svg"/><path d="M256 170.7a85.4 85.4 0 1 0 .2 170.8 85.4 85.4 0 0 0-.2-170.8zm0 149.3a64 64 0 1 1 .2-128.2A64 64 0 0 1 256 320z" data-original="#000000" xmlns="http://www.w3.org/2000/svg"/></svg>
                                        ${nFormatter(parseFloat(data.items[0].statistics.viewCount))}
                                    </div>
                                    <div class="twyt-viewlike flex d-gap-small d-align-middle">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 478.2 478.2" xml:space="preserve" enable-background="new 0 0 512 512"><path d="M457.6 325.1a59.4 59.4 0 0 0 13.9-39.7 61 61 0 0 0-13-34.4c6.5-16.2 9-41.7-12.7-61.5-16-14.5-43-21-80.3-19.2-26.3 1.2-48.3 6.1-49.2 6.3h-.1c-5 .9-10.3 2-15.7 3.2-.4-6.4.7-22.3 12.5-58.1 14-42.6 13.2-75.2-2.6-97a63.6 63.6 0 0 0-51-24.7c-7.4 0-14.3 3.1-19.2 8.8-11.1 12.9-9.8 36.7-8.4 47.7-13.2 35.4-50.2 122.2-81.5 146.3l-1.6 1.4a107.4 107.4 0 0 0-19.6 29.4c-6-3.2-12.6-5-19.8-5h-61c-23 0-41.6 18.7-41.6 41.6v162.5c0 23 18.7 41.6 41.6 41.6h61c8.9 0 17.2-2.8 24-7.6l23.5 2.8c3.6.5 67.6 8.6 133.3 7.3 11.9.9 23 1.4 33.5 1.4 17.9 0 33.5-1.4 46.5-4.2 30.6-6.5 51.5-19.5 62-38.6a61.2 61.2 0 0 0 6.9-38.3 63.8 63.8 0 0 0 18.6-72zM48.3 447.3c-8.1 0-14.6-6.6-14.6-14.6V270.1c0-8.1 6.6-14.6 14.6-14.6h61c8 0 14.6 6.6 14.6 14.6v162.5c0 8.1-6.6 14.6-14.6 14.6h-61v.1zM432 313.4c-4.2 4.4-5 11.1-1.8 16.3 0 .1 4 7.1 4.6 16.7.7 13.1-5.6 24.7-18.8 34.6a13.6 13.6 0 0 0-4.6 15.4c0 .1 4.3 13.3-2.7 25.8-6.7 12-21.6 20.6-44.2 25.4a263.4 263.4 0 0 1-73 2.2h-1.3a987 987 0 0 1-130-7.1h-.1l-10.1-1.2c.6-2.8.9-5.8.9-8.8V270.1c0-4.3-.7-8.5-2-12.4a83.6 83.6 0 0 1 18.7-34.3c44.9-35.6 88.8-155.7 90.7-160.9.8-2.1 1-4.4.6-6.7-1.7-11.2-1.1-24.9 1.3-29 5.3.1 19.6 1.6 28.2 13.5 10.2 14.1 9.8 39.3-1.2 72.7-16.8 50.9-18.2 77.7-5 89.5a21.8 21.8 0 0 0 21.9 3.9c6-1.4 11.9-2.6 17.4-3.5l1.3-.3c30.7-6.7 85.7-10.8 104.8 6.6 16.2 14.8 4.7 34.4 3.4 36.5a13.4 13.4 0 0 0 2.4 17.4c0 .1 10.6 10 11 23.3.5 8.9-3.7 18-12.4 27z" data-original="#000000" xmlns="http://www.w3.org/2000/svg"/></svg>
                                        ${nFormatter(parseFloat(data.items[0].statistics.likeCount))}
                                    </div>
                                    <div class="twyt-viewcomment flex d-gap-small d-align-middle">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 511" xml:space="preserve" enable-background="new 0 0 512 512"><path xmlns="http://www.w3.org/2000/svg" d="M407 .5H105C47.1.5 0 47.6 0 105.5v162.2C0 313.9 30.3 354 74.3 367l50.7 50.7a15 15 0 0 0 21.2 0l46.5-46.5H407c57.9 0 105-47.1 105-105V105.5c0-57.9-47.1-105-105-105zm75 265.7a75 75 0 0 1-75 75H186.5a15 15 0 0 0-10.6 4.4l-40.3 40.3-43-43a15 15 0 0 0-7-3.9A73.4 73.4 0 0 1 30 267.7V105.5a75 75 0 0 1 75-75h302a75 75 0 0 1 75 75zm0 0" data-original="#000000"/><path xmlns="http://www.w3.org/2000/svg" d="M351.2 144.3H160.8a15 15 0 0 0 0 30h190.4a15 15 0 1 0 0-30zM351.2 197.4H160.8a15 15 0 1 0 0 30h190.4a15 15 0 1 0 0-30zm0 0" data-original="#000000"/></svg>
                                        ${nFormatter(parseFloat(data.items[0].statistics.commentCount))}
                                    </div>
                                </div>`
                                }else{
                                    twyt_statics_layout = ``;
                                }
                                $('.twyt-wrapper').addClass(`${twyt_layout_desktop} ${twyt_layout_mobile}`)
                                $('.twyt-wrapper').append(`
            
                                    <div class="youtube-item" id="${data.items[0].id}">
                                        <a href="https://www.youtube.com/watch?v=${data.items[0].id}" target="_blank" class="youtube-item-thumb">
                                            <img src="https://i.ytimg.com/vi/${data.items[0].id}/hq720.jpg" alt="">
                                            
                                            <div class="twyt-duration">
                                                ${convertYouTubeDuration(durationYt)}
                                            </div>
                                        </a>
                                        <div class="youtube-item-content">
                                            <a href="https://www.youtube.com/watch?v=${data.items[0].id}" target="_blank">
                                                <div class="item">
                                                    <h3 class="twyt-title">${data.items[0].snippet.title}</h3>
                                                </div>
                                            </a>
                                            ${twyt_statics_layout}
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
	

