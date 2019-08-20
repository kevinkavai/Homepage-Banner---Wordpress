<?php
$args = array( 'category' => '31' );
$posts = get_posts($args);
$url = get_site_url().'/';

?>

<div class="header" style="background-image: url('<?php echo EMC_IMG .'iten-b.jpg'; ?>');background-position:center center; height: auto;">		
<!-- <div class="homepage-slideshow-container hidden-print hidden-xs"> -->
<div class="homepage-slideshow-container hidden-print">
<div class="emc-container">
    <!-- <div class="frame frontpage-slider" style="overflow:hidden;"> -->
    <div class="frame frontpage-slider">
        <ul class="slidee" style="transform: translateZ(0px) translateX(1px); width: 2348px;">
        
            <li class="slide active" style="width: 1169px;">
                <div class="inner">
                    <div class="emc-container-fluid">
                        <div class="row gutter-4">
                        <div class="col-xs-12 col-sm-6 col-md-5">
                            <div class="map mb">
                                <!-- Elgeyo Marakwet Map -->
                               <img class="img-responsive" src="<?php echo EMC_IMG.'emc-map.png'; ?>" alt="Elgeyo County Map">
                                <!-- Elgeyo Marakwet Map -->
                                <div class="text">
                                    <h1>Welcome to EMC</h1> <br/> <h3>County of Champions!</h3>
                                </div>

                            </div>
                            <a href="<?php echo $url.$posts[0]->post_name; ?>" class="mb">
                                
                                <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url($posts[0]->ID, 'post-thumbnail'); ?>" alt="<?php echo $posts[0]->post_title ?>"> <!-- Image should be 1000 by 500-->
                                <span class="overlay"></span>
                                <span class="gradient  small"></span>
                                <span class="txt small"><?php echo $posts[0]->post_title ?></span>
                            </a>

                            <div class="row">
                                <div class="col-md-offset-6 col-md-6">
                                    <a href="<?php echo $url.$posts[1]->post_name; ?>">
                                    <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url($posts[1]->ID, 'post-thumbnail'); ?>" alt="<?php echo $posts[1]->post_title ?>"> 
                                    <span class="overlay"></span>
                                    <span class="gradient small"></span>
                                    <span class="txt small"> <?php echo $posts[1]->post_title ?></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-7">
                            <div class="main-story mb">
                                <div id="myvideo" style="position: relative; height: 340px;"><div style="position: absolute; z-index: -1; top: 0px; left: 0px; bottom: 0px; right: 0px; overflow: hidden; background-size: cover; background-repeat: no-repeat; background-position: 50% 50%; background-image: none;">
                                <video autoplay="" loop="" style="visibility: visible; margin: auto; position: absolute; z-index: -1; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 678px; height: auto;"> </video>
                            </div>
                            <a style="display: inline-block; width: 100%; height: 100%;" href="https://www.youtube.com/watch?v=uOpSAYALaaU" target="_blank"> </a>
                        </div>
                        <div>
                        </div>											

                        </div>

                        <div class="row">
                            <div class="col-md-8 mb">
                                <a href="<?php echo $url.$posts[2]->post_name; ?>">
                                    <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url($posts[2]->ID, 'post-thumbnail'); ?>" alt="<?php echo $posts[2]->post_title ?>">
                                    <span class="overlay"></span>
                                    <span class="gradient small"></span>
                                    <span class="txt small"><?php echo $posts[2]->post_title ?></span>
                                </a>
                            </div>

                            <div class="col-md-4">
                                <a href="<?php echo $url.$posts[3]->post_name; ?>">
                                    <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url($posts[3]->ID, 'post-thumbnail'); ?>" alt="<?php echo $posts[3]->post_title ?>">
                                    <span class="overlay"></span>
                                    <span class="gradient small"></span>
                                    <span class="txt small"><?php echo $posts[3]->post_title ?></span>
                                </a>
                            </div>

                            <div class="col-md-4 hidden-xs">
                                <a href="" class="slider-nav slider-nav-right hidden-sm clearfix">
                                    <div class="pull-left">
                                        <span>More</span>
                                        <span class="slide-count"> 1/2 </span>
                                    </div>
                                    <div class="pull-right">
                                        <span class="icon icon-slider-navbox-right"></span>
                                    </div>
                                </a>
                            </div>
                        </div>

                        </div>
                        </div>
                    </div>
                </div>
            </li>
			
            <li class="slide" style="width: 1169px;">
                    <div class="inner">
                        <div class="emc-container-fluid">
                            <div class="row gutter-4">
                                <div class="col-xs-6 col-sm-6 col-md-7">
                                    <div class="row">
											<div class="col-md-12">
                                                <div class="main-story mb">
                                                    <a href="<?php echo $url.$posts[4]->post_name; ?>">
                                                        		  <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url($posts[4]->ID, 'post-thumbnail'); ?>" alt="<?php echo $posts[4]->post_title ?>">
	                                                        <span class="overlay"></span>
                                                        <span class="gradient small"></span>
                                                    <span class="txt small"><?php echo $posts[4]->post_title ?></span>
                                                    </a>
                                                </div>
                                            </div>
										
											<div class="col-md-4">
                                                <a href="<?php echo $url.$posts[5]->post_name; ?>">
                                                    <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url($posts[5]->ID, 'post-thumbnail'); ?>" alt="<?php echo $posts[5]->post_title ?>">
	                                                <span class="overlay"></span>
                                                    <span class="gradient small"></span>
                                                    <span class="txt small"><?php echo $posts[5]->post_title ?></span>
                                                </a>
                                                
                                                <a href="" class="slider-nav slider-nav-left hidden-sm clearfix disabled">
                                                    <div class="pull-right">
                                                       <span>&nbsp;</span>
                                                        <span class="slide-count">
                                                            2/2
                                                        </span>
                                                    </div>
                                                    <div class="pull-left">
                                                        <span class="icon icon-slider-navbox-left"></span>
                                                    </div>
                                                </a>
                                            </div>
											<div class="col-md-8 mb">
                                                <a href="<?php echo $url.$posts[6]->post_name; ?>">
                                                    <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url($posts[6]->ID, 'post-thumbnail'); ?>" alt="<?php echo $posts[6]->post_title ?>">
	                                                <span class="overlay"></span>
                                                    <span class="gradient small"></span>
                                                    <span class="txt small"><?php echo $posts[6]->post_title ?></span>
                                                </a>
                                            </div>
									</div>
                                </div>
                                
                                <div class="col-xs-6 col-sm-6 col-md-5">
                                    <div class="row">
                                        <div class="col-md-6 mb hidden-xs hidden-sm">
                                            <!-- <img class="img-responsive" src="<?php //echo EMC_IMG.'graduants.jpg'; ?>" alt=""> -->
                                        </div>
                                        <div class="col-md-6 mb hidden-xs hidden-sm">
                                            <img class="img-responsive" src="<?php echo EMC_IMG. 'transparent.png'; ?>" alt="">
                                        </div>
										     <div class="col-md-12 mb">
                                                <a href="<?php echo $url.$posts[7]->post_name; ?>" class="mb">
                                                    <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url($posts[7]->ID, 'post-thumbnail'); ?>" alt="<?php echo $posts[7]->post_title ?>">
	                                                <span class="overlay"></span>
                                                    <span class="gradient  medium"></span>
                                                    <span class="txt small"><?php echo $posts[7]->post_title ?></span>
                                                </a>
                                            </div>
										 </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
		</ul>
		</div>
    	<!-- small pager -->
    <!-- <div class="text-center margin20-0">
        <div class="slide-arrows left hidden-print disabled">
            <span class="icon icon-scroller-previous gtm-frontslider-previous"></span>
        </div>
        
        <ul class="pages list-inline list-unstyled"><li class="active">1</li><li class="">2</li></ul>

        <div class="slide-arrows right hidden-print">
            <span class="icon icon-scroller-next gtm-frontslider-next"></span>
        </div>
    </div> -->
 </div>
	  
</div>
 
</div>