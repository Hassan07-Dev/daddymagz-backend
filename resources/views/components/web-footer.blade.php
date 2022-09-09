<footer class="site-footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4 class="footer-title text-center"><span>Trending Stories</span></h4>
                </div>
                <div class="col-12">
                    <div class="trending-stories owl-loaded owl-theme owl-carousel owl-btn-center-lr owl-btn-2">
                        <?php
                            // $blog_fetch_2 = array_rand($blog_data, 3);
                            // if(count($blog_fetch_2)>0){
                            //     foreach($blog_fetch_2 as $val){
                        ?>
                            <div class="item">
                                <div class="blog-card blog-grid no-gap">
                                    <div class="blog-card-media">
                                        <img src="{{ asset('') }}" alt=""/>
                                    </div>
                                    <div class="blog-card-info blog-card-height">
                                        <h4 class="title"><a href="blog-details?slug=<?php //echo $blog_data[$val]['slug'] ?>"><?php //echo $blog_data[$val]['title'] ?></a></h4>
                                        <div class="date">
                                            <?php
                                                // $time_input = strtotime($blog_data[$val]['date_publish']); 
                                                // $date_input = getDate($time_input); 
                                            ?>
                                            <?php //echo $date_input['mday']; ?><span></span><?php //echo $date_input['mon']; ?> <span></span> <?php //echo $date_input['year']; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                            //     }
                            // }
                        ?>
                    </div>
                </div>
                <div class="col-12">
                    <div class="footer-bottom">
                        <div class="footer-logo">
                            <a href="index"><img src="{{ asset('images/dm-logo-3.jpg') }}" alt=""/></a>
                        </div>
                        <div class="footer-copy">
                            <span>©2019. All Rights Reserved.</span>
                        </div>
                        <div class="footer-social">
                            <ul>
                                <li><a href="https://www.instagram.com/daddy_magz/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="https://www.linkedin.com/company/daddy-magz/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="https://www.facebook.com/daddymagz" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/daddy_magz" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>