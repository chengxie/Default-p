<?php $this->need('header.php'); ?>

<div class="col-mb-12" id="main" role="main">
	<h3 class="archive-title"><?php $this->archiveTitle(array(
		'category'  =>  _t('分类 %s 下的文章'),
		'search'    =>  _t('包含关键字 %s 的文章'),
		'tag'       =>  _t('标签 %s 下的文章'),
		'author'    =>  _t('%s 发布的文章')
		), '', ''); ?></h3>
		<?php if ($this->have()): ?>
		<?php while($this->next()): ?>
		<?php if (isset($this->fields->weibo)): ?>
		<article class="post weibo">
			<h2 class="post-title"><span class="glyphicon glyphicon-calendar"></span> <?php $this->date('Y年n月j日'); ?></h2>
			<div class="post-content">
				<a href="<?php $this->permalink() ?>" title="<?php $this->title() ?>"><?php $this->excerpt(80, '...'); ?></a>
			</div>
		</article>
<?php else : ?>
	<article class="post">
		<h2 class="post-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
		<div class="post-content">
			<?php $this->excerpt(130, '...'); ?>
		</div>
	</article>
<?php endif; ?>
<?php endwhile; ?>
<?php else: ?>
	<article class="post">
		<h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
	</article>
<?php endif; ?>

<div class="pagination">
	<?php $this->pageNav(); ?>
</div>
</div><!-- end #main -->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>