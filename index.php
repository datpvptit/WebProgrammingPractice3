<!DOCTYPE html>
<html lang="en">
<?php session_start() ?>
<?php 
  if(!isset($_SESSION['login_id']))
  header('location:login.php');
	include 'header.php' 
?>
<body>
    <nav>
        <div class="nav-left">
            <img src="./images/logo.png" alt="Logo">
            <input type="text" placeholder="Tìm kiếm trên Facebook">
        </div>

        <div class="nav-middle">
            <a href="#" class="active">
                <i class="fa fa-home"></i>
            </a>

            <a href="#">
                <i class="fa fa-user-friends"></i>
            </a>

            <a href="#">
                <i class="fa fa-play-circle"></i>
            </a>

            <a href="#">
                <i class="fa fa-users"></i>
            </a>
        </div>

        <div class="nav-right">
            <span class="profile"></span>

            <a href="#">
                <i class="fa fa-bell"></i>
            </a>
            <a href="#">
                <i class="fab fa-facebook-messenger"></i>
            </a>
            <a href="#">
                <i class="fas fa-ellipsis-h"></i>
            </a>
        </div>
    </nav>


    <div class="container">
        <div class="left-panel">
            <ul>
                <li>
                    <span class="profile"></span>
                    <p>Phạm Văn Đạt</p>
                </li>
                <li>
                    <i class="fa fa-user-friends"></i>
                    <p>Bạn bè</p>
                </li>
                <li>
                    <i class="fa fa-history" ></i>
                    <p>Kỉ niệm</p>
                </li>
                <li>
                    <i class="fa fa-bookmark"></i>
                    <p>Lưu trữ</p>
                </li>
                <li>
                    <i class="fa fa-users"></i>
                    <p>Nhóm</p>
                </li>
                <li>
                    <i class="fa fa-shopping-cart"></i>
                    <p>Marketplace</p>
                </li>
                <li>
                    <i class="fa fa-newspaper"></i>
                    <p>Bảng feed</p>
                </li>
                <li>
                    <i class="fas fa-calendar-week"></i>
                    <p>Sự kiện</p>
                </li>
                <li>
                    <i class="fas fa-ad"></i>
                    <p>Trình quản lý quảng cáo</p>
                </li>
                <li>
                    <i class="fa fa-caret-down"></i>
                    <p>Xem thêm</p>
                </li>
            </ul>

            <div class="footer-links">
                <a href="#">Privacy</a>
                <a href="#">Terms</a>
                <a href="#">Advance</a>
                <a href="#">More</a>
            </div>
        </div>


        <div class="middle-panel">

            <div class="story-section">

                <div class="story create">
                    <div class="dp-image">
                        <img src="./images/dp.jpg" alt="Profile pic">
                    </div>
                    <span class="dp-container">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="name">Tạo tin</span>
                </div>


                <div class="story">
                    <img src="./images/model.jpg" alt="Anuska's story">
                    <div class="dp-container">
                        <img src="./images/girl.jpg" alt="">
                    </div>
                    <p class="name">Chipu</p>
                </div>

                <div class="story">
                    <img src="./images/boy.jpg" alt="Story image">
                    <span class="dp-container">
                        <img src="./images/dp.jpg" alt="Profile pic">
                    </span>
                    <span class="name">Mắc Xoăn</span>
                </div>

                <div class="story">
                    <img src="./images/mountains.jpg" alt="Story image">
                    <span class="dp-container">
                        <img src="./images/boy.jpg" alt="Profile pic">
                    </span>
                    <span class="name">Pa Chia</span>
                </div>

                <div class="story">
                    <img src="./images/tnk.jpg" alt="Story image">
                    <span class="dp-container">
                        <img src="./images/model.jpg" alt="Profile pic">
                    </span>
                    <span class="name">Tôn Ngộ Không</span>
                </div>
            </div>

            <div class="post create">
                <div class="post-top">
                    <div class="dp">
                        <img src="./images/dp.jpg" alt="">
                    </div>
                    <input type="text" placeholder="Bạn đang nghĩ gì, Phạm ?" />
                </div>
                
                <div class="post-bottom">
                    <div class="action">
                        <i class="fa fa-video"></i>
                        <span>Live video</span>
                    </div>
                    <div class="action">
                        <i class="fa fa-image"></i>
                        <span>Photo/Video</span>
                    </div>
                    <div class="action">
                        <i class="fa fa-smile"></i>
                        <span>Feeling/Activity</span>
                    </div>
                    <div class="d-flex w-100 justify-content-center">
								<a href="javascript:void(0)" id="upload_post" class="text-dark post-link px-3 py-1" style="border-radius: 50px !important;"><span class="fa fa-photo-video text-success"></span> Photo/Video</a>
							</div>
                </div>
            </div>

            <div class="post">
                <div class="post-top">
                    <div class="dp">
                        <img src="./images/dp.jpg" alt="">
                    </div>
                    <div class="post-info">
                        <p class="name">Phạm Văn Đạt</p>
                        <span class="time">2 days ago</span>
                    </div>
                    <i class="fas fa-ellipsis-h"></i>
                </div>

                <div class="post-content">
                    Pa Chia so cute !
                    <img src="images/mountains.jpg" />
                </div>
                
                <div class="post-bottom">
                    <div class="action">
                        <i class="far fa-thumbs-up"></i>
                        <span>Like</span>
                    </div>
                    <div class="action">
                        <i class="far fa-comment"></i>
                        <span>Comment</span>
                    </div>
                    <div class="action">
                        <i class="fa fa-share"></i>
                        <span>Share</span>
                    </div>
                </div>
            </div>

            <div class="post">
                <div class="post-top">
                    <div class="dp">
                        <img src="./images/girl.jpg" alt="">
                    </div>
                    <div class="post-info">
                        <p class="name">Anuska Sharma</p>
                        <span class="time">12 hrs ago</span>
                    </div>
                    <i class="fas fa-ellipsis-h"></i>
                </div>

                <div class="post-content">
                    Roses are red <br>
                    Violets are blue <br>
                    I'm ugly & you are too😏
                </div>
                
                <div class="post-bottom">
                    <div class="action">
                        <i class="far fa-thumbs-up"></i>
                        <span>Like</span>
                    </div>
                    <div class="action">
                        <i class="far fa-comment"></i>
                        <span>Comment</span>
                    </div>
                    <div class="action">
                        <i class="fa fa-share"></i>
                        <span>Share</span>
                    </div>
                </div>
            </div>

            <div class="post">
                <div class="post-top">
                    <div class="dp">
                        <img src="./images/boy.jpg" alt="">
                    </div>
                    <div class="post-info">
                        <p class="name">Priyank Saksena</p>
                        <span class="time">1 week ago</span>
                    </div>
                    <i class="fas fa-ellipsis-h"></i>
                </div>
                <div class="post-content">
                    Happy birthday dear
                    <img src="./images/girl_with_light.jpg" alt="Mountains">
                </div>
                <div class="post-bottom">
                    <div class="action">
                        <i class="far fa-thumbs-up"></i>
                        <span>Like</span>
                    </div>
                    <div class="action">
                        <i class="far fa-comment"></i>
                        <span>Comment</span>
                    </div>
                    <div class="action">
                        <i class="fa fa-share"></i>
                        <span>Share</span>
                    </div>
                </div>
            </div>

            <div class="post">
                <div class="post-top">
                    <div class="dp">
                        <img src="./images/model.jpg" alt="">
                    </div>
                    <div class="post-info">
                        <p class="name">Pragati Adhikari</p>
                        <span class="time">5 mins ago</span>
                    </div>
                    <i class="fas fa-ellipsis-h"></i>
                </div>
                <div class="post-content">
                    Hey, everybody! My new tnk are here
                    <img src="./images/tnk.jpg" alt="tnk">
                </div>
                <div class="post-bottom">
                    <div class="action">
                        <i class="far fa-thumbs-up"></i>
                        <span>Like</span>
                    </div>
                    <div class="action">
                        <i class="far fa-comment"></i>
                        <span>Comment</span>
                    </div>
                    <div class="action">
                        <i class="fa fa-share"></i>
                        <span>Share</span>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="right-panel">
            <div class="pages-section">
                <h4>Lời mời kết bạn</h4>
                <a class='page' href="#">
                    <div class="dp">
                        <img src="./images/boy.jpg" alt="">
                    </div>
                    <span>Mắc Xoăn </span> 
                    <button class="accept">Chấp nhận</button>  
                    <button class="remove">Xóa</button></p>    
                </a>

                <a class='page' href="#">
                    <div class="dp">
                        <img src="./images/mountains.jpg" alt="">
                    </div>
                    <span>Phạm Văn Duy</span>
                    <button class="accept">Chấp nhận</button>  
                    <button class="remove">Xóa</button>
                        
                        
                </a>
            </div>

            <div class="friends-section">
                <h4>Bạn bè</h4>
                <a class='friend' href="#">
                    <div class="dp">
                        <img src="./images/tnk.jpg" alt="">
                    </div>
                    <p class="name">Tôn Ngộ Không</p>
                </a>
            </div>
        </div>
    </div>
</body>
<?php include 'footer.php' ?>
<script>
	$('.comment-textfield').on('keypress', function (e) {
		if(e.which == 13 && e.shiftKey == false){
			if($('#preload2').length <= 0){
				start_load();
			}else{
				return false;
			}
			var post_id = $(this).attr('data-id')
			var comment = $(this).val()
			$(this).val('')
			$.ajax({
				url:'ajax.php?action=save_comment',
				method:'POST',
				data:{post_id:post_id,comment:comment},
				success:function(resp){
					if(resp){
						resp = JSON.parse(resp)
						if(resp.status == 1){
							var cfield = $('#comment-clone .card-comment').clone()
							cfield.find('.img-circle').attr('src','assets/uploads/'+resp.data.profile_pic)
							cfield.find('.uname').text(resp.data.name)
							cfield.find('.comment').html(resp.data.comment)
							cfield.find('.timestamp').text(resp.data.timestamp)
						$('.post-card[data-id="'+post_id+'"]').find('.card-comments').append(cfield)
						var cc = $('.post-card[data-id="'+post_id+'"]').find('.comment-count').text();
							cc = cc.replace(/,/g,'');
							cc = parseInt(cc) + 1
						$('.post-card[data-id="'+post_id+'"]').find('.comment-count').text(cc)
						}else{
							alert_toast("An error occured","danger")
						}
						end_load()
					}
				}
			})
			return false;
		}
    })
	$('.comment-textfield').on('change keyup keydown paste cut', function (e) {
		if(this.scrollHeight <= 117)
        $(this).height(0).height(this.scrollHeight);
    })
	$('#write_post').click(function(){
		uni_modal("<center><b>Create Post</b></center></center>","create_post.php")
	})
	$('.edit_post').click(function(){
		uni_modal("<center><b>Edit Post</b></center></center>","create_post.php?id="+$(this).attr('data-id'))
	})
	$('.delete_post').click(function(){
	_conf("Are you sure to delete this post?","delete_post",[$(this).attr('data-id')])
	})
	function delete_post($id){
			start_load()
			$.ajax({
				url:'ajax.php?action=delete_post',
				method:'POST',
				data:{id:$id},
				success:function(resp){
					if(resp==1){
						alert_toast("Data successfully deleted",'success')
						setTimeout(function(){
							location.reload()
						},1500)

					}
				}
			})
		}
	$('#upload_post').click(function(){
		uni_modal("<center><b>Create Post</b></center></center>","create_post.php?upload=1")
	})
	$('.content-field').each(function(){
		var dom = $(this)[0]
		var divHeight = dom.offsetHeight
		if(divHeight > 117){
			$(this).addClass('truncate-5')
			$(this).parent().children('.show-content').removeClass('d-none')
		}
	})
	$('.show-content').click(function(){
		var txt = $(this).text()
		if(txt == "Show More"){
			$(this).parent().children('.content-field').removeClass('truncate-5')
			$(this).text("Show Less")
		}else{
			$(this).parent().children('.content-field').addClass('truncate-5')
			$(this).text("Show More")
		}
	})
	$('.lightbox-items').click(function(e){
		e.preventDefault()
		uni_modal("","view_attach.php?id="+$(this).attr('data-id'),"large")
	})
	$('.view_more').click(function(e){
		e.preventDefault()
		uni_modal("","view_attach.php?id="+$(this).attr('data-id'),"large")
	})
	$('.like').click(function(){
		var _this = $(this)
		$.ajax({
			url:'ajax.php?action=like',
			method:'POST',
			data:{post_id:$(this).attr('data-id')},
			success:function(resp){
				if(resp == 1){
					_this.addClass('text-primary')
					var lc = _this.siblings('.counts').find('.like-count').text();
							lc = lc.replace(/,/g,'');
							lc = parseInt(lc) + 1
					_this.siblings('.counts').find('.like-count').text(lc)
				}else if(resp==0){
					_this.removeClass('text-primary')
					var lc = _this.siblings('.counts').find('.like-count').text();
							lc = lc.replace(/,/g,'');
							lc = parseInt(lc) - 1
					_this.siblings('.counts').find('.like-count').text(lc)
				}
			}
		})
	})

</script>

</html>