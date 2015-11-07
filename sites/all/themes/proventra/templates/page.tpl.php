
<header class="iner-header">
    <div class="container">
        <div class="row">
            <div class="container-cus">
                <div class="bot-header">
                    <div class="col-md-4 col-sm-4"> 
                        <?php if ($logo): ?>
                            <a href="<?php print $front_page; ?>" rel="home" class="logo">
                                <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                            </a>
                        <?php endif; ?>
                    </div>
					<div class="clearfix"></div>
                    <div class="col-md-12 col-sm-12">
<div class="top-menu text-right">
                            <?php if ($page['top']): ?>
                                <?php print render($page['top']); ?>
                            <?php endif; ?>
                        </div>

<!--header E-->
<div class="menuu text-right">

                            <nav class="navbar navbar-default" role="navigation">
                                <div class="container-fluid">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                            <span class="sr-only"><?php print t('Toggle navigation'); ?></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>

                                    </div>

                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <div id="main-menu" class="navigation">
                  
				                            <?php
                                            print theme('links__system_main_menu', array(
                                                'links' => $main_menu,
                                                'attributes' => array(
                                                    'id' => 'main-menu-links',
                                                    'class' => array('nav', 'navbar-nav'),
                                                ),
                                            ));
                                            ?>
                                        </div>
					  <?php //echo 'richa';?>
                 <ul class="nav navbar-nav"><li class="after-login"><?php print render($page['user_detail']);?></li></ul>
                                    </div><!-- /.navbar-collapse -->
								</div><!-- /.container-fluid -->
                            </nav>
					
                        </div>

                    </div>
                        


                  <div class="clearfix"></div>
                        
                </div><!--bot-header-->
						
            </div> <!--container-->


        </div> 
    </div>
</header>


                    <div class="clearfix"></div>

<div class="container wrapper">
    <div class="row">
        <div class="col-sm-12 search-area">
<?php print render($page['search']); ?>

        </div>
        <div class="clearfix"></div>
    </div>

            <?php if ($messages): ?>
        <div id="messages">
        <?php print $messages; ?>
            </div><!-- /.section, /#messages -->
<?php endif; ?>
    <div class="row row1">
        <div class="profile-wrp clearfix">
            <div class="col-sm-8">
                <?php if (!$node): ?>			
                        <?php if ($title): ?>
                        <h2>
                        <?php print $title; ?>
                        </h2>
                    <?php endif; ?>
                <?php endif; ?>
                    <?php if ($tabs): ?>
                    <div class="tabs">
                    <?php print render($tabs); ?>
                    </div>
                    <?php endif; ?>
                <div class="detail">


 <?php print render($page['content']); ?>
</div>
 </div>        

<div class="col-sm-4 right-categories">
                <?php if ($page['inner_right_sidebar_first']): ?>
                    <?php print render($page['inner_right_sidebar_first']); ?>
                <?php endif; ?>
                    <?php if ($page['inner_right_sidebar_last']): ?>
                    <div class="discussion">
    <?php print render($page['inner_right_sidebar_last']); ?>
                    </div><?php endif; ?>

            </div>
 </div>   
    </div>
</div>

<?php if(arg(1)=='18'):?>

<div class="container ">
    <?php if ($page['middle']): ?>
        <?php print render($page['middle']); ?>
<?php endif; ?>
</div>
<!--what-we E-->


<!--who-we S-->
<div class="gray-bg">
    <div class="container">
        <?php if ($page['featured']): ?>
            <?php print render($page['featured']); ?>
<?php endif; ?>
    </div>
</div>
</div>
<!--who-we E-->
<div class="container section">
    <div class="row">
        <div class="col-sm-8 latest-news">
            <?php if ($page['left_sidebar']): ?>
                <?php print render($page['left_sidebar']); ?>
<?php endif; ?>
        </div>



        <div class="col-sm-4 ">
            <div class="news-right">     
                <?php if ($page['right_sidebar']): ?>
                    <?php print render($page['right_sidebar']); ?>
<?php endif; ?>
            </div>
        </div>

    </div>
</div>

        <div class="newsletter-wrp">
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <?php if ($page['triptych_first']): ?>
                    <?php print render($page['triptych_first']); ?>
<?php endif; ?>
            </div>

            <div class="col-sm-7">
                <div class="news-signup clearfix">
                    <?php if ($page['triptych_last']): ?>
                        <?php print render($page['triptych_last']); ?>
<?php endif; ?>	
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>


<!--footer S-->

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-md-4  wow fadeIn delay-f1 blank-footer-div">
                <?php if($page['footer_firstcolumn']):?>
	       <?php print render($page['footer_firstcolumn']);?>
	       <?php endif;?>
            </div>

            <div class="col-sm-3 col-md-3  wow fadeIn delay-f2 ">
               <?php if($page['footer_secondcolumn']):?>
	       <?php print render($page['footer_secondcolumn']);?>
	       <?php endif;?>
            </div>

            <div class="col-sm-3 col-md-3 wow fadeIn delay-f3 ">
               <?php if($page['footer_thirdcolumn']):?>
	       <?php print render($page['footer_thirdcolumn']);?>
	       <?php endif;?>
            </div>

            <div class="col-sm-2 col-md-2 wow fadeIn delay-f4">
               <?php if($page['footer_fourthcolumn']):?>
	       <?php print render($page['footer_fourthcolumn']);?>
	       <?php endif;?>
            </div>

        </div>
    </div>
    <div class="footer-bottom">

        <div class="container"> 
            <div class="row">
                <div class="col-sm-6 copyright">
<?php print render($page['footer_left']); ?>
                </div>
                <div class="col-sm-6 social">
<?php print render($page['footer_right']); ?>

                </div>
            </div>   	
        </div>

    </div>
</div>


<!--footer E-->




