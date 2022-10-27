<?php 
if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array(
		'key' => 'group_62aad92ef0684',
		'title' => 'TW YoutubeApi',
		'fields' => array(
			array(
				'key' => 'field_62aad9446ad80',
				'label' => 'Cài đặt',
				'name' => '',
				'type' => 'tab',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'placement' => 'top',
				'endpoint' => 0,
			),
			array(
				'key' => 'field_62aad989805b1',
				'label' => 'API key',
				'name' => 'twyt_apikey',
				'type' => 'text',
				'instructions' => 'Để lấy Api key bạn có thể tham khảo ở đây <a href="https://blog.hubspot.com/website/how-to-get-youtube-api-key">Get my API key.</a>',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_62aada0cbe4a9',
				'label' => 'Channel ID',
				'name' => 'twyt_channel_id',
				'type' => 'text',
				'instructions' => 'Ví dụ kênh của bạn là: https://www.youtube.com/channel/UCNWkuzs4gO_1FBwfjTYatxg thì Channel ID là UCNWkuzs4gO_1FBwfjTYatxg',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_62aadbc96118c',
				'label' => 'Lấy bao nhiêu video',
				'name' => 'twyt_max_result',
				'type' => 'number',
				'instructions' => 'Tối đa 50 video',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => 9,
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => 1,
				'max' => 51,
				'step' => '',
			),
			array(
				'key' => 'field_62ac499ff6dd5',
				'label' => 'Hiển thị view, like, coment',
				'name' => 'twyt_statics_status',
				'type' => 'true_false',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'message' => '',
				'default_value' => 0,
				'ui' => 1,
				'ui_on_text' => 'Yes',
				'ui_off_text' => 'No',
			),
			array(
				'key' => 'field_62aada27be4aa',
				'label' => 'Giao diện',
				'name' => '',
				'type' => 'tab',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'placement' => 'top',
				'endpoint' => 0,
			),
			array(
				'key' => 'field_62aadcf309e5c',
				'label' => 'Layout Type Desktop',
				'name' => 'twyt_layout',
				'type' => 'radio',
				'instructions' => 'Chọn kiểu giao diện cho màn hình desktop',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'choices' => array(
					'tw_col_2' => '2 Columns',
					'tw_col_3' => '3 Columns',
					'tw_col_4' => '4 Columns',
				),
				'allow_null' => 0,
				'other_choice' => 0,
				'default_value' => 'tw_col_3',
				'layout' => 'horizontal',
				'return_format' => 'value',
				'save_other_choice' => 0,
			),
			array(
				'key' => 'field_62aadf0e2c770',
				'label' => 'Layout Type Mobile',
				'name' => 'twyt_layout_mb',
				'type' => 'radio',
				'instructions' => 'Chọn kiểu giao diện cho màn hình điện thoại(Mobile)',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'choices' => array(
					'twmb_col_1' => '1 Columns',
					'twmb_col_2' => '2 Columns',
				),
				'allow_null' => 0,
				'other_choice' => 0,
				'default_value' => 'twmb_col_2',
				'layout' => 'horizontal',
				'return_format' => 'value',
				'save_other_choice' => 0,
			),
			array(
				'key' => 'field_6357a7a18fcc1',
				'label' => 'Header Youtube Style',
				'name' => 'twyt_header_style',
				'type' => 'radio',
				'instructions' => 'Chọn giao diện cho Header Youtube',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'choices' => array(
					'twmb_header_default' => 'Mặc định',
					'twmb_header_1' => 'Kiểu 1',
					'twmb_header_2' => 'Kiểu 2',
				),
				'allow_null' => 0,
				'other_choice' => 0,
				'default_value' => 'twmb_header_default',
				'layout' => 'horizontal',
				'return_format' => 'value',
				'save_other_choice' => 0,
			),
			array(
				'key' => 'field_62abdff03f595',
				'label' => 'Hiển thị',
				'name' => '',
				'type' => 'tab',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'placement' => 'top',
				'endpoint' => 0,
			),
			array(
				'key' => 'field_62abe1bb3f596',
				'label' => '',
				'name' => '',
				'type' => 'message',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'message' => '<div class="twyt-show">
	 <div class="twyt-show-title">Shortcode hiển thị giao diện</div>
					<div class="twyt-show-wrapper">
							<div class="twyt-show-item twyt-shortcode-full">
									<img src="https://drive.google.com/uc?export=view&id=1FKvt3jCXQElQvW-1FRpyYy2ccLD3saK0">
									<p class="twyt-show-item__title">Shortcode hiển thị kênh đăng ký và video mới nhất </p>
									<p><strong>Copy</strong></p>
									<div style="width:100%">
											<input type="text" value="[twYoutubeApi]" size="20" readonly="readonly" style="text-align: center;width:100%;" onclick="this.focus();this.select()" title="To copy, click the field then press Ctrl + C (PC) or Cmd + C (Mac).">
									</div>
							</div>
							<div class="twyt-show-item twyt-shortcode-full">
									<img src="https://drive.google.com/uc?export=view&id=11vB-odti-HcS8ALt3o-RatbSAC5TdwKx">
									<p class="twyt-show-item__title">Shortcode hiển thị playlist kênh </p>
									<p class="twyt-show-item__short">[twYoutubeApi-playlist playlist="abcdefgh" maxresult=10 showstatics=1]</p>
									<p><strong>twYoutubeApi-playlist</strong>: Tên shortcode</p>
									<p><strong>playlist</strong>: Tên id của playlist </p>
									<p><strong>maxresult</strong>: Số lượng hiển thị video </p>
									<p><strong>showstatics</strong>: Hiển thị lượt view, like, bình luận ( 1: hiển thị | 0: là không hiển thị) </p>
									<p><strong>Copy</strong></p>
									<div style="width:100%">
											<input type="text" value=\'[twYoutubeApi-playlist playlist="abcdefgh" maxresult=10 showstatics=1]\' size="20" readonly="readonly" style="text-align: center;width:100%;" onclick="this.focus();this.select()" title="To copy, click the field then press Ctrl + C (PC) or Cmd + C (Mac).">
									</div>
							</div>
							<div class="twyt-show-item twyt-shortcode-full">
									<img src="https://drive.google.com/uc?export=view&id=11vB-odti-HcS8ALt3o-RatbSAC5TdwKx">
									<p class="twyt-show-item__title">Shortcode hiển thị video theo tìm kiếm search </p>
									<p class="twyt-show-item__short">[twYoutubeApi-search maxresult=50 order="date" q="cover" channelid="abcdefg" showstatics=1]</p>
									<p><strong>twYoutubeApi-search</strong>: Tên shortcode</p>
									<p><strong>maxresult</strong>: Số lượng hiển thị video </p>
									<p><strong>order</strong>: Hiển thị theo	</p>
									<p><strong>q</strong>: Từ khóa tìm kiếm </p>
									<p><strong>channelid</strong>: Có hoặc không. Nếu không có sẽ lấy mặc định trong phần cài đặt </p>
									<p><strong>showstatics</strong>: Hiển thị lượt view, like, bình luận ( 1: hiển thị | 0: là không hiển thị) </p>
									<p><strong>Copy</strong></p>
									<div style="width:100%">
											<input type="text" value=\'[twYoutubeApi-search maxresult=50 order="date" q="cover" channelid="abcdefg" showstatics=1]\' size="20" readonly="readonly" style="text-align: center;width:100%;" onclick="this.focus();this.select()" title="To copy, click the field then press Ctrl + C (PC) or Cmd + C (Mac).">
									</div>
							</div>
							<div class="twyt-show-item twyt-shortcode-full">
									<img src="https://drive.google.com/uc?export=view&id=1xjOaRGfG4vjZb7yLRs_6XFSGQowFMWO4">
									<p class="twyt-show-item__title">Shortcode hiển thị video theo kênh(channelid) theo Story </p>
									<p class="twyt-show-item__short">[twYoutubeApi-story channelid="PLNpmHn_rn7WZUUWoJAY8VnDJVMqXvQq3F" maxresult=10 autoplay=1 speed=2000]</p>
									<p><strong>twYoutubeApi-story</strong>: Tên shortcode</p>
									<p><strong>channelid</strong>: Id kênh youtube </p>
									<p><strong>maxresult</strong>: Số lượng hiển thị video </p>
									<p><strong>autoplay</strong>: Tự động lặp video theo slider	</p>
									<p><strong>speed</strong>: Tốc độ lặp slider | 2000 là 2s	</p>
									<p><strong>Copy</strong></p>
									<div style="width:100%">
											<input type="text" value=\'[twYoutubeApi-story channelid="PLNpmHn_rn7WZUUWoJAY8VnDJVMqXvQq3F" maxresult=10 autoplay=1 speed=2000]\' size="20" readonly="readonly" style="text-align: center;width:100%;" onclick="this.focus();this.select()" title="To copy, click the field then press Ctrl + C (PC) or Cmd + C (Mac).">
									</div>
							</div>
							<div class="twyt-show-item twyt-shortcode-full">
									<img src="https://drive.google.com/uc?export=view&id=1xjOaRGfG4vjZb7yLRs_6XFSGQowFMWO4">
									<p class="twyt-show-item__title">Shortcode hiển thị video theo playlist() theo Story </p>
									<p class="twyt-show-item__short">[twYoutubeApi-story playlist="PLNpmHn_rn7WZUUWoJAY8VnDJVMqXvQq3F" maxresult=10 autoplay=1 speed=2000]</p>
									<p><strong>twYoutubeApi-story</strong>: Tên shortcode</p>
									<p><strong>playlist</strong>: Id playlist của kênh youtube </p>
									<p><strong>maxresult</strong>: Số lượng hiển thị video </p>
									<p><strong>autoplay</strong>: Tự động lặp video theo slider	</p>
									<p><strong>speed</strong>: Tốc độ lặp slider | 2000 là 2s	</p>
									<p><strong>Copy</strong></p>
									<div style="width:100%">
											<input type="text" value=\'[twYoutubeApi-story playlist="PLNpmHn_rn7WZUUWoJAY8VnDJVMqXvQq3F" maxresult=10 autoplay=1 speed=2000]\' size="20" readonly="readonly" style="text-align: center;width:100%;" onclick="this.focus();this.select()" title="To copy, click the field then press Ctrl + C (PC) or Cmd + C (Mac).">
									</div>
							</div>
					</div>
				 
			</div>',
				'new_lines' => '',
				'esc_html' => 0,
			),
			array(
				'key' => 'field_62abf99ae67b5',
				'label' => 'Hỏi đáp',
				'name' => '',
				'type' => 'tab',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'placement' => 'top',
				'endpoint' => 0,
			),
			array(
				'key' => 'field_62abf9aee67b6',
				'label' => 'Các câu hỏi thường gặp',
				'name' => '',
				'type' => 'message',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'message' => '<main class="twfaq">
		<div class="twfaq__holder">
		<details class="twfaq__detail">
				<summary	class="twfaq__summary"><span class="twfaq__question">How many team members can I invite?</span></summary>
				<p class="twfaq__text">You can invite up to 2 additional users on the Free plan. There is no limit on team members for the Premium plan.</p>
		</details>
	
		<details class="twfaq__detail">
			<summary	class="twfaq__summary"><span class="twfaq__question">What is the maximum file upload size?</span></summary>
			<p class="twfaq__text">No more than 2GB. All files in your account must fit your allotted storage space.</p>
		</details>	
	
		<details class="twfaq__detail">
			<summary	class="twfaq__summary"><span class="twfaq__question">How do I reset my password?</span></summary>
			<p class="twfaq__text">Click “Forgot password” from the login page or “Change password” from your profile page.</p>
			<p class="twfaq__text">A reset link will be emailed to you.</p>
		</details>	
		
		<details class="twfaq__detail">
			<summary	class="twfaq__summary"><span class="twfaq__question">Can I cancel my subscription?</span></summary>
			<p class="twfaq__text">Yes! Send us a message and we’ll process your request no questions asked.</p>
		</details> 
		
		<details class="twfaq__detail">
			<summary	class="twfaq__summary"><span class="twfaq__question">Do you provide additional support?</span></summary>
			<p class="twfaq__text">Chat and email support is available 24/7. Phone lines are open during normal business hours.</p>
		</details>	 
	
	</div>
	</main>',
				'new_lines' => 'wpautop',
				'esc_html' => 0,
			),
			array(
				'key' => 'field_63575524fd844',
				'label' => 'Liên hệ',
				'name' => '',
				'type' => 'tab',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'placement' => 'top',
				'endpoint' => 0,
			),
			array(
				'key' => 'field_6357553afd845',
				'label' => '',
				'name' => '',
				'type' => 'message',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'message' => '<div class="tw-about">
					<div class="tw-about-wrapper">
							<div class="tw-about-section">
									<div class="main-title">About me</div>
									<div class="tw-about-contact">
											<div class="about-block">
													<div class="about-block-wrapper">
															 <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="25" height="25" x="0" y="0" viewBox="0 0 512.099 512.099" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><g><g><path d="m360.002 512.099c-177.967-2.067-400.849-230.646-352.965-410.616 9.7-52.761 103.24-143.784 164.061-79.163 24.182 25.619 55.325 45.57 54.524 85.186.175 24.992-11.762 44.315-29.838 60.5-20.468 20.469-22.362 53.026-4.405 75.73 22.11 27.981 48.558 54.426 76.542 76.544 22.705 17.955 55.261 16.062 75.73-4.407l8.285-8.283c13.898-13.898 32.442-21.554 52.217-21.554 39.568-.827 59.641 30.402 85.188 54.524 64.523 61.368-26.177 154.006-79.164 164.061-15.457 4.993-32.282 7.478-50.175 7.478zm-239.333-490.11c-36.888-1.448-86.085 52.089-92.036 83.75-38.76 147.539 115.537 317.303 248.279 367.534 64.623 23.109 123.889 26.382 172.685-14.656 32.528-27.847 57.634-69.133 24.188-102.5-.001 0-32.971-32.969-32.971-32.969-19.186-20.017-54.14-20.011-73.322.001 0-.001-8.285 8.283-8.285 8.283-28.361 28.362-73.474 30.986-104.934 6.105-14.654-11.591-28.914-24.298-42.383-37.768-13.476-13.476-26.183-27.736-37.768-42.385-24.881-31.458-22.256-76.569 6.105-104.933l8.284-8.284c20.017-19.169 20.011-54.15 0-73.321.001 0-32.971-32.971-32.971-32.971-10.616-10.617-22.131-15.886-34.871-15.886z" fill="#000000" data-original="#000000"></path></g><g><path d="m412.142 203.81c-5.075 0-9.637-3.532-10.745-8.695-4.475-20.863-14.815-39.865-29.902-54.951-15.314-15.315-34.622-25.72-55.835-30.09-5.95-1.226-9.78-7.043-8.555-12.993 1.227-5.95 7.044-9.78 12.993-8.554 25.438 5.239 48.59 17.716 66.953 36.08 18.091 18.091 30.491 40.876 35.857 65.895 1.274 5.939-2.508 11.788-8.448 13.062-.777.166-1.554.246-2.318.246z" fill="#33cccc" data-original="#33cccc"></path></g><g><path d="m474.285 265.613c-.718 0-1.446-.07-2.177-.217-5.956-1.196-9.815-6.994-8.619-12.95 11.458-57.062-6.272-115.697-47.425-156.852-41.229-41.229-99.962-58.94-157.11-47.373-5.956 1.211-11.758-2.645-12.963-8.6-1.205-5.954 2.645-11.758 8.599-12.963 64.397-13.034 130.574 6.922 177.031 53.379 46.371 46.373 66.348 112.443 53.438 176.738-1.05 5.227-5.642 8.838-10.774 8.838z" fill="#33cccc" data-original="#33cccc"></path></g></g></g></svg>
															<div class="title">CALL</div>
															<p>Liên hệ qua số điện thoại</p>
															<div> <a href="#" class="btn-tw-about">CALL</a></div>
													</div>
											</div>
											<div class="about-block">
													<div class="about-block-wrapper">
															<img width="25px" height="25px" src="https://cdn.haitrieu.com/wp-content/uploads/2022/01/Logo-Zalo-Arc.png" alt="">
															<div class="title">ZALO</div>
															<p>Liên hệ qua ZALO</p>
															<div> <a href="#" target="_blank" class="btn-tw-about">CHAT</a></div>
													</div>
											</div>
											<div class="about-block">
													<div class="about-block-wrapper">
															<img width="25px" height="25px" src="https://scontent.fhan2-1.fna.fbcdn.net/v/t39.8562-6/120009688_325579128711709_1736249742330805861_n.png?_nc_cat=1&ccb=1-7&_nc_sid=6825c5&_nc_ohc=wU8TC8ieex8AX-TaD_A&_nc_ht=scontent.fhan2-1.fna&oh=00_AT8RjTVkbltrc3XRxzU_NqsdYzfdL6Z5FIgGg8DbSCxa6Q&oe=635CFBFD" alt="">
															<div class="title">MESSAGER</div>
															<p>Liên hệ qua Facebook</p>
															<div> <a href="#" target="_blank" class="btn-tw-about">CHAT</a></div>
													</div>
											</div>
									</div>
							</div>
							<div class="tw-about-section">
									<div class="main-title">Relate Product</div>
									<div class="tw-relate-product">
											<div class="product-block">
													<a href="">
															<img src="https://doxuantoan.com/wp-content/uploads/2022/06/twyt.jpg" alt="">
													</a>
												 <a href="">
															<div class="content">
																	<div class="title">TW Youtube Plugin </div>
																	<div class="twdes">Hiển thị youtube list vào website</div>
															</div>
												 </a>
											</div>
											<div class="product-block">
													<a href="">
															<img src="https://doxuantoan.com/wp-content/uploads/2022/06/twyt.jpg" alt="">
													</a>
												 <a href="">
															<div class="content">
																	<div class="title">TW Youtube Plugin </div>
																	<div class="twdes">Hiển thị youtube list vào website</div>
															</div>
												 </a>
											</div>
											<div class="product-block">
													<a href="">
															<img src="https://doxuantoan.com/wp-content/uploads/2022/06/twyt.jpg" alt="">
													</a>
												 <a href="">
															<div class="content">
																	<div class="title">TW Youtube Plugin </div>
																	<div class="twdes">Hiển thị youtube list vào website</div>
															</div>
												 </a>
											</div>
											<div class="product-block">
													<a href="">
															<img src="https://doxuantoan.com/wp-content/uploads/2022/06/twyt.jpg" alt="">
													</a>
												 <a href="">
															<div class="content">
																	<div class="title">TW Youtube Plugin </div>
																	<div class="twdes">Hiển thị youtube list vào website</div>
															</div>
												 </a>
											</div>
											<div class="product-block">
													<a href="">
															<img src="https://doxuantoan.com/wp-content/uploads/2022/06/twyt.jpg" alt="">
													</a>
												 <a href="">
															<div class="content">
																	<div class="title">TW Youtube Plugin </div>
																	<div class="twdes">Hiển thị youtube list vào website</div>
															</div>
												 </a>
											</div>
											<div class="product-block">
													<a href="">
															<img src="https://doxuantoan.com/wp-content/uploads/2022/06/twyt.jpg" alt="">
													</a>
												 <a href="">
															<div class="content">
																	<div class="title">TW Youtube Plugin </div>
																	<div class="twdes">Hiển thị youtube list vào website</div>
															</div>
												 </a>
											</div>
									</div>
							</div>
							<div class="tw-about-section"	style="text-align: center; font-weight: 600; color: #242124;">
									Sản phẩm được phát triển bởi Toàn Web - <a href="doxuantoan.com" target="_blank">doxuantoan.com</a>
							</div>
					</div>
				 
			</div>',
				'new_lines' => '',
				'esc_html' => 0,
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'acf-options-tw-youtube',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));
	
	endif;