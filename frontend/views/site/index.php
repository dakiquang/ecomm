<?php
/**
 * @var yii\web\View $this
 */
use yii\bootstrap\Carousel;

$this->title = 'Beginning Yii 2.0 - ecomm';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">
        <!-- start page HTML -->
        <div class="row-fluid">
			<!-- Start Carousel -->
			<section id="carousel">
			<?php 
			 echo Carousel::widget([
			      'items' => [
			          // the item contains both the image and the caption
			          [
			              'content' => '<img src="img/main-prod-1.png"/>',
			              'caption' => '<h2>Designed for eCommerce</h2>
			 							<h3>HTML5 shop pages!</h3>
	                                    <p class="description">
	                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br/>
	                                        Pellentesque pulvinar fringilla eros quis.<br/>
	                                        Donec et urna libero, sed malesuada est.
	                                    </p>
	                                    <a href="store/product" class="btn">read more</a>',
			              'options' => '',
			          ],
			 		  [
			              'content' => '<img src="img/main-prod-2.png"/>',
			              'caption' => '<h2>Responsive Layout</h2>
                                    <h3>Works great on any device!</h3>
                                    <p class="description">
                                        Lorem ipsum dolor sit amet, consectetur.<br/>
                                        Pellentesque pulvinar fringilla eros quis.<br/>
                                        Donec et urna libero, sed malesuada est.
                                    </p>
	                                    <a href="store/product" class="btn">read more</a>',
			              'options' => '',
			          ],
			      ]
			  ]);
			?>
			</section>
			<!-- End Carousel -->
        </div>
			
        <div class="row">
            <div class="col-lg-4">
                <h2>Step 1</h2>

                <p>This is a 15 part tutorial on Beginning Yii 2.0. The object of the tutorial is to flesh out an ecommerce website. 
                Be sure that you follow the Tutorial on YouTube.</p>

                <p><a class="btn btn-default" href="https://www.youtube.com/playlist?list=PLMyGpiUTm10799F8FfSai3wvlL4DB4qqX" target="_blank">PlayList &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Setp 2</h2>

                <p>If you've gotten this far, you have already seen the first video and are ready for more.<br/>We will be coding ouy site pretty heavily and you will be able
                to find the code on github as soon as I can get "a round tuit".</p>

                <p><a class="btn btn-default" href="https://github.com/tskmatrix/ecomm" target="_blank">GitHub &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Step 3</h2>

                <p>Now you may add additional extensions to your site. Be sure that they are for Yii 2.0.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/" target="_blank">Yii Extensions &raquo;</a></p>
                
                 <p><a class="btn btn-default" href="https://packagist.org/search/?q=yii2" target="_blank">packagist &raquo;</a></p>
            </div>
        </div>
    </div>
    
</div>
