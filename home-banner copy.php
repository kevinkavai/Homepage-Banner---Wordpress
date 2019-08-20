<?php 
require_once("../../../wp-load.php");
$upload_dir = wp_upload_dir();
?>
<!-- Header goes here -->
<div class="header" style="background-image: url('<?php $nectar_get_template_directory_uri .'/img/elgeyo-cover.jpeg'; ?>');background-position:bottom left; display: none;">
		<div class="showreel-bottom-info visible-xs">
			<div class="meta">
				<div class="container">

				</div>
			</div>
		</div>
				<div class="container  ev-full">
	  
	    		
        <div class="top solid smx">
			<div class="top-btns clearfix">

			<div class="high-contrast toggle-high-contrast pull-right hidden-xs hidden-sm">
				<span class="gtm-contrast-change"> CONTRAST</span>
			</div>
			<div class="font-size pull-right hidden-xs hidden-sm">
				<span>FONT SIZE:
					<a href="" class="font-change normal active gtm-textsize-change">A</a>
					<a href="" class="font-change large gtm-textsize-change">A</a>
					<a href="" class="font-change extra-large gtm-textsize-change">A</a>
				</span>
			</div>
		</div>

<div class="clearfix">

<a href="#" class="logo pull-left">
  <img src="<?php $nectar_get_template_directory_uri .'/img/emc-logo.png'; ?> " alt="Elgeyo Marakwet" title="Elgeyo Marakwet" />
</a>
	

                <div class="pull-right clearfix">
                 	
                        
  <div class="lang-bar pull-right hidden-xs hidden-sm">
    <span> In English	<span class="icon icon-down-arrow"></span>
	</span>
    <ul class="list-unstyled languages" style="display: none;">
              <li> <a lang="en" href="http://elgeyomarakwet.go.ke/">In English</a></li>
          </ul>
  </div>

                    	
	<a class="pull-right map-of-estonia hidden-xs hidden-sm" href="#"> 	Visit Elgeyo Marakwet   </a>
  <div class="clearfix">
                    </div>
                    	<div class="header-blocks clearfix">
	    <div class="pull-right social hidden-xs hidden-sm clearfix">
	
	    	<ul class="list-unstyled list-inline social clearfix">
	    	    <li>
	    	    <span class="top-hashtag pull-left">#CountyOfChampions</span>
	    	    </li>		  		
           			<?php smedia(); ?>	
	    	</ul>
	    </div>
	</div>


                </div>
            </div>

        </div>
                
<div class="navbar-header">
  <button type="button" class="navbar-toggle toggle-menu menu-right jPushMenuBtn" data-toggle="collapse" data-target="#visit-menu-collapse">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
</div>

<div class="navbar navbar-visit" role="navigation">
  <div class="container-fluid">
    
    <div class="collapse navbar-collapse cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="visit-menu-collapse">
      <div class="visible-sm visible-xs">
		<ul class="list-unstyled social">
		  <?php smedia(); ?>  
    </ul>
        <a href="#" class="close-push-menu close-button"><span class="icon icon-close"></span></a>

        <div class="navbar-toggle-mobile navbar-back" data-toggle="collapse">
                <button type="button" class="toggle-menu menu-right jPushMenuBtn" data-target="#visit-menu-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a href="javascript:void(0)" class="feedback" data-uv-lightbox="classic_widget" data-uv-mode="feedback" data-uv-primary-color="#00aeab" data-uv-link-color="#0a8cc6" data-uv-forum-id="116267" data-uv-scanned="true" id="uv-3"></a>
                <div class="addthis_toolbox addthis_default_style addthis_32x32_style" addthis:url="http://elgeyomarakwet.go.ke">
                <a class="oval40 addthis_button_facebook"></a>
                <a class="oval40 addthis_button_twitter"></a>
                <a class="oval40 addthis_button_messenger"></a>
                </div>
        </div>      
       	      </div>
	  <div class="mobile-scroll">
		  <div class="col-xs-12 top-bar visible-xs visible-sm clearfix">
			<div class="pull-left">
			   <div class="shade relative">
			      <span class="toggle-high-contrast gtm-contrast-change">
			      CONTRAST			      </span>
			   </div>
			   <div class="vi-letters clearfix">
			      <span>FONT SIZE:</span>
			      <a href="" class="font-change normal gtm-textsize-change active">A</a>
			      <a href="" class="font-change large gtm-textsize-change">A</a>
			      <a href="" class="font-change extra-large gtm-textsize-change">A</a>
			   </div>
			</div>
            <div class="pull-right">
                <div class="language relative" data-toggle="drop-box">
                    <span>
                        <span class="icon icon-globe"></span>
                        <span class="icon drop icon-down-arrow-bold"></span>
                    </span>

                    <ul class="list-unstyled drop-box language-drop" style="display: none;">
                            <li><a lang="en" href="#"> English </a> </li>
                    </ul>

                </div>
            </div>

          </div>
          <div class="clearfix"></div>
				
		    <div>

    
    <form id="search" class="navbar-form navbar-right search-box" role="search" action="">
        <input id="search-box" type="text" autocomplete="off" name="q" class="objectAutocomplete ui-autocomplete-input" placeholder="Search Elgeyo Marakwet" role="textbox" aria-autocomplete="list" aria-haspopup="true">
        <input type="hidden" name="results_count" value="20">
        <input type="hidden" name="newsearch" value="newsearch">
        <input type="hidden" name="map_open" value="false">
        <button type="submit" class="icon icon-magnifier" value="Search Elgeyo Marakwet"></button>

        <div id="search-result" class="search-layer" style="display: none;">
          <ul id="result_list" class="list-unstyled" style="width:100%;">
          </ul>
        </div>

        <div class="search-layer" style="display: none;">
            <h5>Type search word or choose category</h5>
            <a href="#" class="close-btn visible-xs visible-sm"><span class="icon icon-close"></span></a>
            <?php include 'search-categories.php'; ?>
        </div>
    </form>
	</div>


<ul class="nav navbar-nav">
                  
    
<li>
    <a href="#">Home <div class="arrow hidden-xs hidden-sm"></div> </a>
    <div class="megamenu why-estonia" style="visibility: hidden; opacity: 0;">
    <div class="container-fluid">
    <div class="row">
    <div class="col-md-3 col-lg-2">
        <ul class="list-unstyled">
          <li><a href="#">Elgeyo Marakwet Data Portal</a></li>
          <li><a href="#">Elgeyo Marakwet County Assembly</a></li>
          <li><a href="#">EMC Home of Champions</a></li>                                                                                                                                                                                          </ul>
    </div>

        </div>
    </div>
    </div>
</li>

 

<li>
    <a href="/governance"> Governance <div class="arrow hidden-xs hidden-sm"></div></a>
    <div class="megamenu where-to-go" style="visibility: hidden; opacity: 0;">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 thumbs clearfix">
                  <a href="" class="thumb hidden-md ">
                    <img class="lazy" alt="" src="<?php $nectar_get_template_directory_uri .'/img/governance/tolgos.jpg'; ?>" style="display: none;">
                    <span>Governor</span>
                  </a>

                  <a href="#" class="thumb ">
                    <img class="lazy" src="<?php $nectar_get_template_directory_uri .'/img/governance/wisely.jpg'; ?>" style="display: none;">
                    <span>Deputy Governor</span>
                  </a>

                  <a href="#" class="thumb ">
                  <img class="lazy" src="<?php $nectar_get_template_directory_uri .'/img/governance/speaker.jpg'; ?>" style="display: none;">
                  <span>County Assembly Speaker</span>
                  </a>
                  <a href="#" class="thumb ">
                    <img class="lazy" src="<?php $nectar_get_template_directory_uri .'/img/governance/murkomen.jpg'; ?>" style="display: none;">
                    <span>Senator</span>
                  </a>
                  <a href="#" class="thumb ">
                    <img class="lazy" src="<?php $nectar_get_template_directory_uri .'/img/governance/chebaibai.jpg'; ?>" style="display: none;">
                    <span>County Woman Rep</span>
                  </a>
                  <a href="#" class="read-more hvr-icon-push">
                    <span class="icon icon-detailed-search-arrow"></span>
                    <span class="txt">View All Leaders</span>
                  </a>
            </div>

        </div>
      </div>
    </div>                        
    </li>
                                                        
    <li>
    <a href="/departments">County Departments <div class="arrow hidden-xs hidden-sm"></div></a>
    <div class="megamenu where-to-stay" style="visibility: hidden; opacity: 0;">
    <div class="container-fluid">
    <div class="row">

    <div class="col-md-4 map-menu">
    <span> Latest News in Departments: </span>
    <ul class="list-unstyled">
    <li><a href="#" data-c="1">Education & Technical Training </a></li>
    <li><a href="#" data-c="2"> Sports, Youth Affairs, ICT & Social Services </a></li>
    <li><a href="#" data-c="3"> Tourism, Culture, Wildlife, Trade & Industry</a></li>
    <li><a href="#" data-c="4"> Agriculture and Irrigation </a></li>
    </ul>
    </div>

    <div class="col-md-8 thumbs clearfix">
        <a href="#" class="thumb  hidden-md ">
          <img class="img-responsive lazy" src="<?php $nectar_get_template_directory_uri .'img/departments/office-gov.jpg'; ?>" style="display: none;">
          <span>Office of the Governor</span>
        </a>
        <a href="#" class="thumb ">
          <img class="img-responsive lazy" src="<?php $nectar_get_template_directory_uri .'img/departments/emc-tourism.jpg'; ?> " style="display: none;">
          <span>Tourism</span>
        </a>
        <a href="#" class="thumb ">
          <img class="img-responsive lazy" src="<?php $nectar_get_template_directory_uri .'img/departments/finance.jpg'; ?> " style="display: none;">
          <span>Finance Department</span>
        </a>
        <a href="#" class="read-more hvr-icon-push">
          <span class="icon icon-magnifier"></span>
          <span class="txt">More Departments </span>
        </a>
    </div>
    </div>
    </div>
    </div>
</li>
  	                             
<li>
<a href="/news">News &amp; Events</a>
</li>

<li>
<a href="#">Contacts</a>
</li>

</ul>
	  
	  </div>
      
    </div>
  <!-- /.navbar-collapse -->
  </div>
<!-- /.container-fluid -->
</div>
</div>		













<div class="header" style="background-image: url('<?php echo get_template_directory() .'/emc/img/elgeyo-cover.jpeg'; ?>');background-position:bottom left; display: none;">
		<div class="showreel-bottom-info visible-xs">
			<div class="meta">
				<div class="container">

				</div>
			</div>
		</div>
				<div class="container  ev-full">
	  
	    		
        <div class="top solid smx">
			<div class="top-btns clearfix">

			<div class="high-contrast toggle-high-contrast pull-right hidden-xs hidden-sm">
				<span class="gtm-contrast-change"> CONTRAST</span>
			</div>
			<div class="font-size pull-right hidden-xs hidden-sm">
				<span>FONT SIZE:
					<a href="" class="font-change normal active gtm-textsize-change">A</a>
					<a href="" class="font-change large gtm-textsize-change">A</a>
					<a href="" class="font-change extra-large gtm-textsize-change">A</a>
				</span>
			</div>
		</div>

<div class="clearfix">

<a href="#" class="logo pull-left">
  <img src="<?php $nectar_get_template_directory_uri .'/emc/img/emc-logo.png'; ?> " alt="Elgeyo Marakwet" title="Elgeyo Marakwet" />
</a>
	

                <div class="pull-right clearfix">
                 	
                        
  <div class="lang-bar pull-right hidden-xs hidden-sm">
    <span> In English	<span class="icon icon-down-arrow"></span>
	</span>
    <ul class="list-unstyled languages" style="display: none;">
              <li> <a lang="en" href="http://elgeyomarakwet.go.ke/">In English</a></li>
          </ul>
  </div>

                    	
	<a class="pull-right map-of-estonia hidden-xs hidden-sm" href="#"> 	Visit Elgeyo Marakwet   </a>
  <div class="clearfix">
                    </div>
                    	<div class="header-blocks clearfix">
	    <div class="pull-right social hidden-xs hidden-sm clearfix">
	
	    	<ul class="list-unstyled list-inline social clearfix">
	    	    <li>
	    	    <span class="top-hashtag pull-left">#CountyOfChampions</span>
	    	    </li>		  		
           			<?php smedia(); ?>	
	    	</ul>
	    </div>
	</div>


                </div>
            </div>

        </div>
                
<div class="navbar-header">
  <button type="button" class="navbar-toggle toggle-menu menu-right jPushMenuBtn" data-toggle="collapse" data-target="#visit-menu-collapse">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
</div>

<div class="navbar navbar-visit" role="navigation">
  <div class="container-fluid">
    
    <div class="collapse navbar-collapse cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="visit-menu-collapse">
      <div class="visible-sm visible-xs">
		<ul class="list-unstyled social">
		  <?php smedia(); ?>  
    </ul>
        <a href="#" class="close-push-menu close-button"><span class="icon icon-close"></span></a>

        <div class="navbar-toggle-mobile navbar-back" data-toggle="collapse">
                <button type="button" class="toggle-menu menu-right jPushMenuBtn" data-target="#visit-menu-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a href="javascript:void(0)" class="feedback" data-uv-lightbox="classic_widget" data-uv-mode="feedback" data-uv-primary-color="#00aeab" data-uv-link-color="#0a8cc6" data-uv-forum-id="116267" data-uv-scanned="true" id="uv-3"></a>
                <div class="addthis_toolbox addthis_default_style addthis_32x32_style" addthis:url="http://elgeyomarakwet.go.ke">
                <a class="oval40 addthis_button_facebook"></a>
                <a class="oval40 addthis_button_twitter"></a>
                <a class="oval40 addthis_button_messenger"></a>
                </div>
        </div>      
       	      </div>
	  <div class="mobile-scroll">
		  <div class="col-xs-12 top-bar visible-xs visible-sm clearfix">
			<div class="pull-left">
			   <div class="shade relative">
			      <span class="toggle-high-contrast gtm-contrast-change">
			      CONTRAST			      </span>
			   </div>
			   <div class="vi-letters clearfix">
			      <span>FONT SIZE:</span>
			      <a href="" class="font-change normal gtm-textsize-change active">A</a>
			      <a href="" class="font-change large gtm-textsize-change">A</a>
			      <a href="" class="font-change extra-large gtm-textsize-change">A</a>
			   </div>
			</div>
            <div class="pull-right">
                <div class="language relative" data-toggle="drop-box">
                    <span>
                        <span class="icon icon-globe"></span>
                        <span class="icon drop icon-down-arrow-bold"></span>
                    </span>

                    <ul class="list-unstyled drop-box language-drop" style="display: none;">
                            <li><a lang="en" href="#"> English </a> </li>
                    </ul>

                </div>
            </div>

          </div>
          <div class="clearfix"></div>
				
		    <div>

    
    <form id="search" class="navbar-form navbar-right search-box" role="search" action="">
        <input id="search-box" type="text" autocomplete="off" name="q" class="objectAutocomplete ui-autocomplete-input" placeholder="Search Elgeyo Marakwet" role="textbox" aria-autocomplete="list" aria-haspopup="true">
        <input type="hidden" name="results_count" value="20">
        <input type="hidden" name="newsearch" value="newsearch">
        <input type="hidden" name="map_open" value="false">
        <button type="submit" class="icon icon-magnifier" value="Search Elgeyo Marakwet"></button>

        <div id="search-result" class="search-layer" style="display: none;">
          <ul id="result_list" class="list-unstyled" style="width:100%;">
          </ul>
        </div>

        <div class="search-layer" style="display: none;">
            <h5>Type search word or choose category</h5>
            <a href="#" class="close-btn visible-xs visible-sm"><span class="icon icon-close"></span></a>
            <?php include 'search-categories.php'; ?>
        </div>
    </form>
	</div>


<ul class="nav navbar-nav">
                  
    
<li>
    <a href="#">Home <div class="arrow hidden-xs hidden-sm"></div> </a>
    <div class="megamenu why-estonia" style="visibility: hidden; opacity: 0;">
    <div class="container-fluid">
    <div class="row">
    <div class="col-md-3 col-lg-2">
        <ul class="list-unstyled">
          <li><a href="#">Elgeyo Marakwet Data Portal</a></li>
          <li><a href="#">Elgeyo Marakwet County Assembly</a></li>
          <li><a href="#">EMC Home of Champions</a></li>                                                                                                                                                                                          </ul>
    </div>

        </div>
    </div>
    </div>
</li>

 

<li>
    <a href="/governance"> Governance <div class="arrow hidden-xs hidden-sm"></div></a>
    <div class="megamenu where-to-go" style="visibility: hidden; opacity: 0;">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 thumbs clearfix">
                  <a href="" class="thumb hidden-md ">
                    <img class="lazy" alt="" src="<?php $nectar_get_template_directory_uri .'/img/governance/tolgos.jpg'; ?>" style="display: none;">
                    <span>Governor</span>
                  </a>

                  <a href="#" class="thumb ">
                    <img class="lazy" src="<?php $nectar_get_template_directory_uri .'/img/governance/wisely.jpg'; ?>" style="display: none;">
                    <span>Deputy Governor</span>
                  </a>

                  <a href="#" class="thumb ">
                  <img class="lazy" src="<?php $nectar_get_template_directory_uri .'/img/governance/speaker.jpg'; ?>" style="display: none;">
                  <span>County Assembly Speaker</span>
                  </a>
                  <a href="#" class="thumb ">
                    <img class="lazy" src="<?php $nectar_get_template_directory_uri .'/img/governance/murkomen.jpg'; ?>" style="display: none;">
                    <span>Senator</span>
                  </a>
                  <a href="#" class="thumb ">
                    <img class="lazy" src="<?php $nectar_get_template_directory_uri .'/img/governance/chebaibai.jpg'; ?>" style="display: none;">
                    <span>County Woman Rep</span>
                  </a>
                  <a href="#" class="read-more hvr-icon-push">
                    <span class="icon icon-detailed-search-arrow"></span>
                    <span class="txt">View All Leaders</span>
                  </a>
            </div>

        </div>
      </div>
    </div>                        
    </li>
                                                        
    <li>
    <a href="/departments">County Departments <div class="arrow hidden-xs hidden-sm"></div></a>
    <div class="megamenu where-to-stay" style="visibility: hidden; opacity: 0;">
    <div class="container-fluid">
    <div class="row">

    <div class="col-md-4 map-menu">
    <span> Latest News in Departments: </span>
    <ul class="list-unstyled">
    <li><a href="#" data-c="1">Education & Technical Training </a></li>
    <li><a href="#" data-c="2"> Sports, Youth Affairs, ICT & Social Services </a></li>
    <li><a href="#" data-c="3"> Tourism, Culture, Wildlife, Trade & Industry</a></li>
    <li><a href="#" data-c="4"> Agriculture and Irrigation </a></li>
    </ul>
    </div>

    <div class="col-md-8 thumbs clearfix">
        <a href="#" class="thumb  hidden-md ">
          <img class="img-responsive lazy" src="<?php $nectar_get_template_directory_uri .'img/departments/office-gov.jpg'; ?>" style="display: none;">
          <span>Office of the Governor</span>
        </a>
        <a href="#" class="thumb ">
          <img class="img-responsive lazy" src="<?php $nectar_get_template_directory_uri .'img/departments/emc-tourism.jpg'; ?> " style="display: none;">
          <span>Tourism</span>
        </a>
        <a href="#" class="thumb ">
          <img class="img-responsive lazy" src="<?php $nectar_get_template_directory_uri .'img/departments/finance.jpg'; ?> " style="display: none;">
          <span>Finance Department</span>
        </a>
        <a href="#" class="read-more hvr-icon-push">
          <span class="icon icon-magnifier"></span>
          <span class="txt">More Departments </span>
        </a>
    </div>
    </div>
    </div>
    </div>
</li>
  	                             
<li>
<a href="/news">News &amp; Events</a>
</li>

<li>
<a href="#">Contacts</a>
</li>

</ul>
	  
	  </div>
      
    </div>
  <!-- /.navbar-collapse -->
  </div>
<!-- /.container-fluid -->
</div>
</div>	
<!-- Header ends here -->

<div class="homepage-slideshow-container hidden-print hidden-xs">
        <div class="container">
			<div class="frame frontpage-slider" style="overflow:hidden;">
				<ul class="slidee" style="transform: translateZ(0px) translateX(1px); width: 2348px;">
    			

<li class="slide active" style="width: 1169px;">
    <div class="inner">
        <div class="container-fluid">
            <div class="row gutter-4">
            <div class="col-xs-6 col-sm-6 col-md-5">
                <div class="map mb">
                    <!-- Elgeyo Marakwet Map -->
                    <img class="img-responsive" src="<?php echo $upload_dir['baseurl'] . '/2019/03/elgeyo-landscape.jpg'; ?>" alt="Elgeyo County Map">
                    <!-- Elgeyo Marakwet Map -->
                    <div class="text">
                        <h1>Welcome </h1> <br/> <h3>to the Home of Champions!</h3>
                    </div>

                </div>
                <a href="2019/03/18/relief-for-patients-as-county-acquires-ct-scan-machine/" class="mb">
					
                    <img class="img-responsive" src="<?php echo $upload_dir['baseurl'] . '/2019/03/Cabinet-Secretary-Health-Sicily-Kariuki-at-Iten-Referral-Hospital.jpg'; ?>" alt="EMC Leadership"> <!-- Image should be 1000 by 500-->
                    <span class="overlay"></span>
                    <span class="gradient  small"></span>
                    <span class="txt medium">County acquires CT scan machine</span>
                </a>

                <div class="row">
                    <div class="col-md-offset-6 col-md-6">
                        <a href="2019/03/18/governor-tolgos-hailed-for-fighting-alcoholism/">
                          <img class="img-responsive" src="<?php echo $upload_dir['baseurl'] . '/2019/03/Brewers-rehabilitaed-by-Elgeyo-Marakwet-County.jpg'; ?>" alt="#"> 
                          <span class="overlay"></span>
                          <span class="gradient small"></span>
                          <span class="txt small"> Governor Hailed for fighting alcoholism</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-7">
                <div class="main-story mb">
                    <div id="myvideo" style="position: relative; height: 340px;"><div style="position: absolute; z-index: -1; top: 0px; left: 0px; bottom: 0px; right: 0px; overflow: hidden; background-size: cover; background-repeat: no-repeat; background-position: 50% 50%; background-image: none;">
                    <video autoplay="" loop="" style="visibility: visible; margin: auto; position: absolute; z-index: -1; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 678px; height: auto;"> </video>
                </div>
                <a style="display: inline-block; width: 100%; height: 100%;" href="#">&nbsp;</a>
            </div>
            <div>
            </div>											

            </div>

            <div class="row">
                <div class="col-md-8 mb">
                    <a href="2019/03/18/acquire-technical-skills-to-beat-unemployment/">
                        <img class="img-responsive" src="<?php echo $upload_dir['baseurl'] . '/2019/03/Graduants-web.jpg'; ?>" alt="Acquire technical skills to beat alcoholism">
                        <span class="overlay"></span>
                        <span class="gradient small"></span>
                        <span class="txt small">Acquire technical skills to beat alcoholism</span>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="#">
                        <img class="img-responsive" src="/img/frontier.jpg" alt="">
                        <span class="overlay"></span>
                        <span class="gradient small"></span>
                        <span class="txt small">Elgeyo Marakwet joins ...</span>
                    </a>
                </div>

                <div class="col-md-4">
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
                        <div class="container-fluid">
                            <div class="row gutter-4">
                                <div class="col-xs-6 col-sm-6 col-md-7">
                                    <div class="row">
																				                                            											<div class="col-md-12">
                                                <div class="main-story mb">
                                                    <a href="/en/how-estonian-are-you">
                                                        		  <img class="img-responsive" src="https://static2.visitestonia.com/images/3301810/1000_500_false_false_fb47b85a6ca73ee600bc3b25dd508632.jpg" alt="How much do you know about the #EstonianWay of life?">
	                                                        <span class="overlay"></span>
                                                        <span class="gradient small"></span>
                                                    <span class="txt">Another Story</span>
                                                    </a>
                                                </div>
                                            </div>
										
																				     <div class="col-md-4">
                                                <a href="/en/why-estonia/haapsalu-horror-and-fantasy-film-festival-the-best-in-the-baltics">
                                                    		  <img class="img-responsive" src="https://static1.visitestonia.com/images/3043815/1000_500_false_false_c2cc2be467bb2476c79f7fbf05c0011b.jpg" alt="Haapsalu Horror and Fantasy Film Festival – the best in the Baltics">
	                                                    <span class="overlay"></span>
                                                    <span class="gradient small"></span>
                                                    <span class="txt small">Haapsalu Horror and Fantasy Film Festival – the best in the Baltics</span>
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
                                                <a href="/en/why-estonia/new-museums-and-attractions">
                                                    		  <img class="img-responsive" src="https://static2.visitestonia.com/images/3259078/1000_500_false_false_f431e81b69a65ea1a77eaed3abdf7e47.jpg" alt="New museums and attractions">
	                                                    <span class="overlay"></span>
                                                    <span class="gradient small"></span>
                                                    <span class="txt medium">New museums and attractions</span>
                                                </a>
                                            </div>
										                </div>
                                </div>
                                
                                <div class="col-xs-6 col-sm-6 col-md-5">
                                    <div class="row">
                                        <div class="col-md-6 mb hidden-xs hidden-sm">
                                            <img class="img-responsive" src="img/graduants.jpg" alt="">
                                        </div>
                                        <div class="col-md-6 mb hidden-xs hidden-sm">
                                            <img class="img-responsive" src="https://cache.visitestonia.com/static/ver-6.3.0.5/facelift_gfx/img/dummy/slider/transparent.png" alt="">
    
                                        </div>
																																								                                            <div class="col-md-12 mb">
                                                <a href="/en/why-estonia/5-winter-survival-tips-by-like-a-local" class="mb">
                                                    		  <img class="img-responsive" src="https://static2.visitestonia.com/images/3191620/1000_500_false_false_c01276fae625e2e005bbedebda050c1b.jpg" alt="5 winter survival tips from Like A Local">
	                                                    <span class="overlay"></span>
                                                    <span class="gradient  medium"></span>
                                                    <span class="txt medium">5 winter survival tips from Like A Local</span>
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
    <div class="text-center margin20-0">
        <div class="slide-arrows left hidden-print disabled">
            <span class="icon icon-scroller-previous gtm-frontslider-previous"></span>
        </div>
        
        <ul class="pages list-inline list-unstyled"><li class="active">1</li><li class="">2</li></ul>

        <div class="slide-arrows right hidden-print">
            <span class="icon icon-scroller-next gtm-frontslider-next"></span>
        </div>
    </div>
 </div>
	  
</div>
 
</div>