<?php
/**
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 */

?>


    <section>
    	<div class="container">
    		<div class="row">
    			<ul class="listing">
    				
    				
    				<?php 
    				$i=0;
    				foreach($mydatas as $mydata){
    				$i++;
    				 ?>
    				<li class="col-md-3 col-sm-6 ">
    					<div class="box-video">
    					<div class="image-video">
    						<a href="#">
								<?php echo $this->Html->image($mydata['Video']['thumbnail'], array('alt' => 'webportal','class' => 'img-responsive')); ?>
							</a>
    						<div class="player-icon">
    							<a href="#">
									<?php echo $this->Html->image('player-icon.png'); ?>
								</a>
    						</div>
    					</div>
    					<div class="detail">
    						<span><?php echo $i;?>.</span>
    						<a href="#"><?php echo $mydata['Video']['title']; ?></a>
    					</div>
    					<div class="points"><p>Points:</p> <span><?php echo $mydata['Video']['points']; ?></span> <a href="#" class="btn btn-primary pull-right">Buy Now</a></div>
    					
    					</div>
    				</li>
    				<?php } ?>


    			</ul>
    			<div class="progress-custome">
    			<div class="progress-inner">
    			<div class="progress">
  <div style="width: 100%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" role="progressbar" class="progress-bar progress-bar-info progress-bar-striped">
    Loading More Video
  </div>
  </div>
</div>
</div>
    			
    			
    		</div>
    	</div>
    </section>
