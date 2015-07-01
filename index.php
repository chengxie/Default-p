<?php
/**
 * 这是 Typecho 0.9 系统的一套默认皮肤 Mike修改版
 * 
 * @package Default-p
 * @author Typecho Team & Mike
 * @version 1.1 (15.07.01)
 * @link http://www.microhu.com
 */

$this->need('header.php');
?>
<div class="col-mb-12" id="main" role="main">
	<?php while($this->next()): ?>
	<?php if (isset($this->fields->weibo)): ?>
	<article class="post weibo">
		<h2 class="post-title"><span class="glyphicon glyphicon-calendar"></span> <?php $this->date('Y年n月j日'); ?> <?php if(timeZone($this->date->timeStamp)) echo '<span class="label label-default">New</span>';?></h2>
		<div class="post-content">
			<a href="<?php $this->permalink() ?>" title="<?php $this->title() ?>"><?php $this->excerpt(80, '...'); ?></a>
		</div>
	</article>
<?php else : ?>
	<article class="post">
		<h2 class="post-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>  <?php if(timeZone($this->date->timeStamp)) echo '<span class="label label-default">New</span>';?></h2>
		<div class="post-content">
			<?php $this->excerpt(130, '...'); ?>
		</div>
	</article>
<?php endif; ?>
<?php endwhile; ?>
<div class="pagination">
	<?php $this->pageNav(); ?>
</div>
<div class="links"><li><span class="glyphicon glyphicon-link"></span> 友情链接：</li><?php Links_Plugin::output(); ?></div>
</div><!-- end #main-->
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>