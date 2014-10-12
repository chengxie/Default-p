<?php $this->need('header.php'); ?>

<div class="col-mb-12 col-tb-8 col-tb-offset-2">

	<div class="error-page">
		<h2 class="post-title">404 - <?php _e('页面没找到'); ?></h2>
		<p><?php _e('你想查看的页面已被转移或删除了，要不要搜索看看：'); ?></p>
		<form method="post" class="form-inline">
			<div class="form-group">
				<input type="text" class="form-control" name="s" id="s" required="true" title="什么都没填你搜什么啊~~" placeholder="搜搜更健康！">
			</div>
			<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
		</form>
	</div>

</div><!-- end #content-->
<?php $this->need('footer.php'); ?>