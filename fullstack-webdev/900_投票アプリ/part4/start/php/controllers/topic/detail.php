<?php 
namespace controller\topic\detail;

use db\CommentQuery;
use lib\Msg;
use db\TopicQuery;
use model\TopicModel;

function get() {

    $topic = new TopicModel;
    $topic->id = get_param('topic_id', null, false);

    $fetchedTopic = TopicQuery::fetchById($topic);
    $comments = CommentQuery::fetchByTopicId($topic);

    if(!$fetchedTopic) {
        Msg::push(Msg::ERROR, 'トピックが見つかりません。');
        redirect('404');
    }

    \view\topic\detail\index($fetchedTopic, $comments);
   
}