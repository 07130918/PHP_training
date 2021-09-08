<?php 
namespace db;

use db\DataSource;
use model\CommentModel;

class CommentQuery {
    
    public static function fetchByTopicId($topic) {

        if(!$topic->isValidId()) {
            return false;
        }
        
        $db = new DataSource;
        $sql = '
        select 
            c.*, u.nickname 
        from comments c
        inner join users u 
            on c.user_id = u.id 
        where c.topic_id = :id
            and c.body != ""
            and c.del_flg != 1
            and u.del_flg != 1
        order by c.id desc
        ';

        $result = $db->select($sql, [
            ':id' => $topic->id
        ], DataSource::CLS, CommentModel::class);

        return $result;

    }


    // public static function insert($user) {

    //     $db = new DataSource;
    //     $sql = 'insert into users(id, pwd, nickname) values (:id, :pwd, :nickname)';

    //     $user->pwd = password_hash($user->pwd, PASSWORD_DEFAULT);

    //     return $db->execute($sql, [
    //         ':id' => $user->id,
    //         ':pwd' => $user->pwd,
    //         ':nickname' => $user->nickname,
    //     ]);

    // }
}