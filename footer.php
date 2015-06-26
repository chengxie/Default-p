</div><!-- end .colgroup -->
</div>
</div><!-- end #body -->

<footer id="footer" role="contentinfo">
	&copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
	<a href="http://www.typecho.org" target="_blank">Typecho</a> & <a href="http://www.microhu.com" target="_blank">Default-p Theme</a>.
</footer><!-- end #footer -->

<script type="text/javascript">
// <![CDATA[
// Smilies v1.0.4 for Typecho Comments - by willin kan - URI: http://kan.willin.org/typecho/
Smilies = {
	dom : function(id) {
		return document.getElementById(id);
	},

	showBox : function () {
		this.dom('smiley').style.display = 'block';
		document.onclick = function() {
			Smilies.hideBox();
		}
	},

	hideBox : function () {
		this.dom('smiley').style.display = 'none';
	},

 grin : function (tag) { // 表情
 	tag = ' ' + tag + ' '; myField = this.dom('comment');
 	document.selection ? (myField.focus(), sel = document.selection.createRange(), sel.text = tag, myField.focus()) : this.insertTag(tag);
 },

 insertTag : function (tag) { // 插入评论中
 	myField = Smilies.dom('comment');
 	myField.selectionStart || myField.selectionStart == '0' ? (
 		startPos = myField.selectionStart,
 		endPos = myField.selectionEnd,
 		cursorPos = startPos,
 		myField.value = myField.value.substring(0, startPos)
 		+ tag
 		+ myField.value.substring(endPos, myField.value.length),
 		cursorPos += tag.length,
 		myField.focus(),
 		myField.selectionStart = cursorPos,
 		myField.selectionEnd = cursorPos
 		) : (
 		myField.value += tag,
 		myField.focus()
 		);
 		this.hideBox();
 	}
 }
// ]]>
</script>
<?php $this->footer(); ?>
</body>
</html>