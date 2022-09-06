@extends('layout.web-app', ['title'=>"Home"])


@section('content')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- Slider Banner -->
		<div class="main-slide p-t30">
			<div class="row">
				<div class="col-lg-12">
					<div class="post-standart no-radius m-b0">
						<div class="post-slide2 owl-carousel owl-none">
							 <?php
								//foreach($json_data as $key => $category){
							?>
								{{-- <div class="item">
									<div class="blog-card overlay">
										<div class="blog-card-media blog-card-media-hieght">
											<img src="<?php //echo PATH; ?>images/category/<?php //echo $category['image'] ?>" alt="">
										</div>
										<div class="blog-card-info">
											<h2 class="title"><a href="#" data-id=""><?php //echo $category['category_name'] ?></a></h2>
											<!-- <div class="date">
												29 <span></span> 2022
											</div> -->
											<a href="#" class="btn-link readmore" data-id=""><i class="la la-arrow-right"></i></a>
										</div>
									</div>
								</div> --}}
							<?php
								//}
							?> 
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Slider Banner -->
		<div class="content-block">
            <!-- About Us -->
            <!-- <div class="section-full bg-white content-inner-1">
                <div class="container">
                    <div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6 col-6">
							<div class="category-box overlay m-b30">
								<div class="category-media">
									<img src="images/category/pic1.jpg" alt=""/>
								</div>
								<div class="category-info">
									<a href="javascript:void(0);" class="category-title">Lifestyle</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-6">
							<div class="category-box overlay m-b30">
								<div class="category-media">
									<img src="images/category/pic2.jpg" alt=""/>
								</div>
								<div class="category-info">
									<a href="javascript:void(0);" class="category-title">Beauty</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-6">
							<div class="category-box overlay m-b30">
								<div class="category-media">
									<img src="images/category/pic3.jpg" alt=""/>
								</div>
								<div class="category-info">
									<a href="javascript:void(0);" class="category-title">Fashion</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-6">
							<div class="category-box overlay m-b30">
								<div class="category-media">
									<img src="images/category/pic4.jpg" alt=""/>
								</div>
								<div class="category-info">
									<a href="javascript:void(0);" class="category-title">Travel</a>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div> -->
			<div class="section-full bg-white content-inner-2">
                <div class="container">
                    <div class="row">
						<div class="col-lg-8 col-md-7 col-sm-12 col-12">
							<div class="row loadmore-content">
								<?php
									//foreach($blog_data as $key => $blog_parse){
								?>
									{{-- <div class="col-lg-12">
										<div class="blog-card blog-md">
											<div class="blog-card-media blog-border-radius">
												<img src="<?php //echo PATH; ?><?php// echo $blog_parse['featured_image'] ?>" alt=""/>
											</div>
											<div class="blog-card-info">
												<h4 class="title"><a href="blog-details?slug=<?php// echo $blog_parse['slug'] ?>"><?php //echo $blog_parse['title'] ?></a></h4>
												<div class="date">
													<?php
														// $time_input = strtotime($blog_parse['date_publish']); 
														// $date_input = getDate($time_input); 
													?>
													<?php //echo $date_input['mday']; ?><span></span><?php //echo $date_input['mon']; ?> <span></span> <?php //echo $date_input['year']; ?>
												</div>
												<p><?php //echo substr($blog_parse['excerpt'],0,140) ?>...</p>
												<ul class="list-inline m-b0">
													<li><a href="javascript:void(0);" class="btn-link"><i class="fa fa-facebook"></i></a></li>
													<li><a href="javascript:void(0);" class="btn-link"><i class="fa fa-google-plus"></i></a></li>
													<li><a href="javascript:void(0);" class="btn-link"><i class="fa fa-twitter"></i></a></li>
												</ul>
												<a href="blog-details?slug=<?php //echo $blog_parse['slug'] ?>" class="btn-link readmore"><i class="la la-arrow-right"></i></a>
											</div>
										</div>
									</div> --}}
								<?php
									//}
								?>
							</div>
							<div class="row">
								<div class="col-lg-12 m-t10">
									<div class="text-center m-b30">
										<a href="#" rel="#" class="btn black radius-xl loadmore-btn">Load More</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-5 col-sm-12 col-12">
							<div class="side-bar p-l30 sticky-top">
								<!-- <div class="widget widget-author">
									<h6 class="widget-title">About Me</h6>
									<div class="author-blog">
										<div class="author-profile-info">
											<div class="author-profile-pic">
												<img src="images/testimonials/pic1.jpg" alt="">
											</div>
											<div class="author-profile-content">
												<p>Fusce id mauris auctor, sollicitudin amet gravida hendrerit risus. </p>
												<ul class="list-inline m-b0">
													<li><a href="javascript:void(0);" class="btn-link"><i class="fa fa-facebook"></i></a></li>
													<li><a href="javascript:void(0);" class="btn-link"><i class="fa fa-google-plus"></i></a></li>
													<li><a href="javascript:void(0);" class="btn-link"><i class="fa fa-instagram"></i></a></li>
													<li><a href="javascript:void(0);" class="btn-link"><i class="fa fa-twitter"></i></a></li>
												</ul>
											</div>
										</div>
									</div>	
								</div> -->
								<div class="widget widget-newsletter">
									<div class="news-box text-white text-center">
										<form class="dzSubscribe dezPlaceAni" action="script/mailchamp.php" method="post">
											<img src="images/newslatter-bg.png" alt=""/>
											<div class="news-back">
												<h6>Newsletter</h6>
												<input name="dzEmail" required="required" type="email" class="form-control" placeholder="Your Email Address">
											</div>
											<div class="news-top">
												<img src="images/icon/newslatter.png" class="m-b20" alt=""/>
												<p>Enter your email address below to subscribe to my newsletter</p>
												<button name="submit" value="Submit" type="submit" class="btn radius-xl">SUBSCRIBE</button>
												<div class="dzSubscribeMsg"></div>
											</div>
										</form>
									</div>
								</div>
								<!-- <div class="widget widget-stories">
									<h6 class="widget-title">Latest Stories</h6>
									<div class="blog-card blog-grid">
										<div class="blog-card-media">
											<img src="images/blog/grid/pic1.jpg" alt="">
										</div>
										<div class="blog-card-info">
											<h5 class="title"><a href="post-standart">Christmas Is on Year-Round</a></h5>
										</div>
									</div>
								</div> -->
								<div class="widget widget_categories">
									<h6 class="widget-title">Category</h6>
									<ul>
										<li><a href="javascript:void(0);">Beauty <span></span></a> 6</li>
										<li><a href="javascript:void(0);">Travel <span></span></a> 9 </li>
										<li><a href="javascript:void(0);">Fashion <span></span></a> 3 </li>
										<li><a href="javascript:void(0);">Style <span></span></a> 5 </li>
										<li><a href="javascript:void(0);">Other <span></span></a> 7 </li>
									</ul>
								</div>
								<!-- <div class="widget recent-posts-entry">
									<h5 class="widget-title">Featured Posts</h5>
									<div class="widget-post-bx">
										<div class="widget-post clearfix">
											<div class="dlab-post-media">
												<img src="images/blog/recent-blog/pic2.jpg" alt="" width="200" height="143">
											</div>
											<div class="dlab-post-info">
												<div class="dlab-post-header">
													<h6 class="post-title"><a href="post-standart-alternative">Romantic Weekend From New York City</a></h6>
												</div>
											</div>
										</div>
										<div class="widget-post clearfix">
											<div class="dlab-post-media">
												<img src="images/blog/recent-blog/pic3.jpg" alt="" width="200" height="143">
											</div>
											<div class="dlab-post-info">
												<div class="dlab-post-header">
													<h6 class="post-title"><a href="post-standart">Sincerely Jules x Revolve Beauty Box</a></h6>
												</div>
											</div>
										</div>
										<div class="widget-post clearfix">
											<div class="dlab-post-media">
												<img src="images/blog/recent-blog/pic4.jpg" alt="" width="200" height="143">
											</div>
											<div class="dlab-post-info">
												<div class="dlab-post-header">
													<h6 class="post-title"><a href="post-standart">Meet the New Generation of Red Carpet Stars</a></h6>
												</div>
											</div>
										</div>
									</div>
								</div> -->
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- About Us End -->
        </div>
		<!-- contact area END -->
    </div>
    <!-- Content END-->
@endsection
