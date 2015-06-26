<?php $this->need('header.php'); ?>

<div class="col-mb-12" id="main" role="main">
	<article class="post">
		<h1 class="post-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
		<div class="post-content">
			<?php $this->content(); ?>
		</div>
		<p class="tags"><span class="glyphicon glyphicon-tags"></span>&nbsp;&nbsp;<?php $this->tags('，', true, '没有贴标签=、='); ?></p>
		<p class="hidden-xs post-meta">  <span class="glyphicon glyphicon-calendar"></span> <?php $this->date('Y年n月j日'); ?>&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-eye-open"></span> <?php Views_Plugin::theViews(''); ?>&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-edit"></span> <a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('快抢沙发！', '沙发被抢', '%d 条吐槽'); ?></a>&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-user"></span> <a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a></p>
	</article>

	<?php $this->need('comments.php'); ?>
</div><!-- end #main-->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>