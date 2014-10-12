<div id="comments">

    <?php $this->comments()->to($comments); ?>

    <?php if ($comments->have()): ?>

	<h3><?php $this->commentsNum(_t('暂无评论'), _t('仅有 1 条评论'), _t('已有 %d 条评论')); ?></h3>

    

    <?php $comments->listComments(); ?>



    <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>

    

    <?php endif; ?>



    <?php if($this->allow('comment')): ?>

    <div id="<?php $this->respondId(); ?>" class="respond">

        <div class="cancel-comment-reply">

        <?php $comments->cancelReply(); ?>

        </div>

    

    	<h3 id="response"><?php _e('添加新评论'); ?></h3>

    	<form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">

            <?php if($this->user->hasLogin()): ?>

    		<p><?php _e('登录身份：'); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>

            <?php else: ?>

    		<p>

                <label for="author" class="required"><?php _e('称呼'); ?></label>

    			<input type="text" name="author" class="form-control" id="author" class="text" value="<?php $this->remember('author'); ?>" required />

    		</p>

    		<p>

                <label for="mail"<?php if ($this->options->commentsRequireMail): ?> class="required"<?php endif; ?>><?php _e('Email'); ?></label>

    			<input type="email" name="mail" id="mail" class="form-control text" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> />

    		</p>

    		<p>

                <label for="url"<?php if ($this->options->commentsRequireURL): ?> class="required"<?php endif; ?>><?php _e('网站'); ?></label>

    			<input type="url" name="url" id="url" class="form-control text" placeholder="<?php _e('http://'); ?>" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />

    		</p>

            <?php endif; ?>

    		<p>

                <label for="textarea" class="required"><?php _e('内容'); ?></label>

			<div style="margin: 0 0 10px 0;">

				<a href="javascript:Smilies.grin(':?:')"      ><img src="http://microcdn.qiniudn.com/smiles/icon_question.gif"  alt="question" class="smiley" /></a>

				<a href="javascript:Smilies.grin(':razz:')"   ><img src="http://microcdn.qiniudn.com/smiles/icon_razz.gif"      alt="razz" class="smiley" /></a>

				<a href="javascript:Smilies.grin(':sad:')"    ><img src="http://microcdn.qiniudn.com/smiles/icon_sad.gif"       alt="sad" class="smiley" /></a>

				<a href="javascript:Smilies.grin(':evil:')"   ><img src="http://microcdn.qiniudn.com/smiles/icon_evil.gif"      alt="evil" class="smiley" /></a>

				<a href="javascript:Smilies.grin(':!:')"      ><img src="http://microcdn.qiniudn.com/smiles/icon_exclaim.gif"   alt="exclaim" class="smiley" /></a>

				<a href="javascript:Smilies.grin(':smile:')"  ><img src="http://microcdn.qiniudn.com/smiles/icon_smile.gif"     alt="smile" class="smiley" /></a>

				<a href="javascript:Smilies.grin(':oops:')"   ><img src="http://microcdn.qiniudn.com/smiles/icon_redface.gif"   alt="redface" class="smiley" /></a>

				<a href="javascript:Smilies.grin(':grin:')"   ><img src="http://microcdn.qiniudn.com/smiles/icon_biggrin.gif"   alt="biggrin" class="smiley" /></a>

				<a href="javascript:Smilies.grin(':eek:')"    ><img src="http://microcdn.qiniudn.com/smiles/icon_surprised.gif" alt="surprised" class="smiley" /></a>

				<a href="javascript:Smilies.grin(':shock:')"  ><img src="http://microcdn.qiniudn.com/smiles/icon_eek.gif"       alt="eek" class="smiley" /></a>

				<a href="javascript:Smilies.grin(':???:')"    ><img src="http://microcdn.qiniudn.com/smiles/icon_confused.gif"  alt="confused" class="smiley" /></a>

				<a href="javascript:Smilies.grin(':cool:')"   ><img src="http://microcdn.qiniudn.com/smiles/icon_cool.gif"      alt="cool" class="smiley" /></a>

				<a href="javascript:Smilies.grin(':lol:')"    ><img src="http://microcdn.qiniudn.com/smiles/icon_lol.gif"       alt="lol" class="smiley" /></a>

				<a href="javascript:Smilies.grin(':mad:')"    ><img src="http://microcdn.qiniudn.com/smiles/icon_mad.gif"       alt="mad" class="smiley" /></a>

				<a href="javascript:Smilies.grin(':twisted:')"><img src="http://microcdn.qiniudn.com/smiles/icon_twisted.gif"   alt="twisted" class="smiley" /></a>

				<a href="javascript:Smilies.grin(':roll:')"   ><img src="http://microcdn.qiniudn.com/smiles/icon_rolleyes.gif"  alt="rolleyes" class="smiley" /></a>

				<a href="javascript:Smilies.grin(':wink:')"   ><img src="http://microcdn.qiniudn.com/smiles/icon_wink.gif"      alt="wink" class="smiley" /></a>

				<a href="javascript:Smilies.grin(':idea:')"   ><img src="http://microcdn.qiniudn.com/smiles/icon_idea.gif"      alt="idea" class="smiley" /></a>

				<a href="javascript:Smilies.grin(':arrow:')"  ><img src="http://microcdn.qiniudn.com/smiles/icon_arrow.gif"     alt="arrow" class="smiley" /></a>

				<a href="javascript:Smilies.grin(':neutral:')"><img src="http://microcdn.qiniudn.com/smiles/icon_neutral.gif"   alt="neutral" class="smiley" /></a>

				<a href="javascript:Smilies.grin(':cry:')"    ><img src="http://microcdn.qiniudn.com/smiles/icon_cry.gif"       alt="cry" class="smiley" /></a>

				<a href="javascript:Smilies.grin(':mrgreen:')"><img src="http://microcdn.qiniudn.com/smiles/icon_mrgreen.gif"   alt="mrgreen" class="smiley" /></a></div>

                <textarea rows="8" cols="50" id="comment" class="form-control comment-textarea" name="text" required=""></textarea>

            </p>

    		<p>

                <button type="submit" class="btn btn-primary submit"><?php _e('提交评论'); ?></button>

            </p>

    	</form>

    </div>

    <?php else: ?>

    <h3><?php _e('评论已关闭'); ?></h3>

    <?php endif; ?>

</div>