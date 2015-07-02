<?php
   /**
   * 读者墙
   *
   * @package custom
   */
   ?>
   <?php $this->need('header.php'); ?>
   <div class="col-mb-12" id="main" role="main">
   	<article class="post">
   		<h1 class="post-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
   		<div class="post-content">
   			<div class="readers" style="padding: 15px;">		
   				<?php getFriendWall(); ?>
   			</div>
			<div style="clear:both"></div>
   			<?php $this->content(); ?>
   		</div>
   		<?php $this->need('comments.php'); ?>
   	</div><!-- end #main-->

   	<?php $this->need('sidebar.php'); ?>
   	<?php $this->need('footer.php'); ?>