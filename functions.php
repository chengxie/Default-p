<?php

//获得读者墙

function getFriendWall()

{

	$db = Typecho_Db::get();

	$sql = $db->select('COUNT(author) AS cnt', 'author', 'url', 'mail')

	->from('table.comments')

	->where('status = ?', 'approved')

	->where('type = ?', 'comment')

	->where('authorId = ?', '0')

->where('mail != ?', '48353088@qq.com')   //排除自己上墙

->group('author')

->order('cnt', Typecho_Db::SORT_DESC)

->limit('16');    //读取几位用户的信息

$result = $db->fetchAll($sql);



if (count($result) > 0) {

	$maxNum = $result[0]['cnt'];

	foreach ($result as $value) {

		$mostactive .= '<li><img alt src="http://1.gravatar.com/avatar/'.md5(strtolower($value['mail'])).'?s=36&d=&r=G" height="48" width="48"></img><a target="_blank" rel="nofollow" href="' . $value['url'] . '" title="' . $value['author'] . '-' . $value['cnt'] . '条评论">' . $value['author'] . '</a><br><strong>' . $value['cnt'] . '条</strong></li>';   

	}

	echo $mostactive;

}

}



/**

 * 显示下一篇

 * 

 * @access public

 * @param string $default 如果没有下一篇,显示的默认文字

 * @return void

 */

function theNext($widget, $default = NULL)

{

	$db = Typecho_Db::get();

	$sql = $db->select()->from('table.contents')

	->where('table.contents.created > ?', $widget->created)

	->where('table.contents.status = ?', 'publish')

	->where('table.contents.type = ?', $widget->type)

	->where('table.contents.password IS NULL')

	->order('table.contents.created', Typecho_Db::SORT_ASC)

	->limit(1);

	$content = $db->fetchRow($sql);

	

	if ($content) {

		$content = $widget->filter($content);

		$link = '<a href="' . $content['permalink'] . '" title="' . $content['title'] . '">下一篇文章 &rarr;</a>';

		echo $link;

	} else {

		echo $default;

	}

}



/**

 * 显示上一篇

 * 

 * @access public

 * @param string $default 如果没有下一篇,显示的默认文字

 * @return void

 */

function thePrev($widget, $default = NULL)

{

	$db = Typecho_Db::get();

	$sql = $db->select()->from('table.contents')

	->where('table.contents.created < ?', $widget->created)

	->where('table.contents.status = ?', 'publish')

	->where('table.contents.type = ?', $widget->type)

	->where('table.contents.password IS NULL')

	->order('table.contents.created', Typecho_Db::SORT_DESC)

	->limit(1);

	$content = $db->fetchRow($sql);

	

	if ($content) {

		$content = $widget->filter($content);

		$link = '<a href="' . $content['permalink'] . '" title="' . $content['title'] . '">&larr; 上一篇文章</a>';

		echo $link;

	} else {

		echo $default;

	}

}

//3日更新

function timeZone($from){ 

	$now = new Typecho_Date(Typecho_Date::gmtTime()); 

	return $now->timeStamp - $from < 3*24*60*60 ? true : false; 

} 