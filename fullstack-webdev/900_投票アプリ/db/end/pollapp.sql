--
-- Database: pollapp
--
DROP DATABASE pollapp;
CREATE DATABASE IF NOT EXISTS pollapp DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE pollapp;

/* ユーザーに権限の付与 */
CREATE USER IF NOT EXISTS 'test_user'@'localhost' IDENTIFIED BY 'pwd';
GRANT ALL ON pollapp.* TO 'test_user'@'localhost';

--
-- Database: `pollapp`
--

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY COMMENT 'コメントID',
  `topic_id` int(10) NOT NULL COMMENT 'トピックID',
  `agree` int(1) NOT NULL COMMENT '賛否（賛成: 1, 反対: 0）',
  `body` varchar(100) DEFAULT NULL COMMENT '本文',
  `user_id` varchar(10) NOT NULL COMMENT '作成したユーザーID',
  `del_flg` int(1) NOT NULL DEFAULT '0' COMMENT '削除フラグ(1: 削除、0: 有効)',
  `updated_by` varchar(20) NOT NULL DEFAULT 'pollapp' COMMENT '最終更新者',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '最終更新日時'
);

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY COMMENT 'トピックID',
  `title` varchar(30) NOT NULL COMMENT 'トピック本文',
  `published` int(1) NOT NULL COMMENT '公開状態(1: 公開、0: 非公開)',
  `views` int(10) NOT NULL DEFAULT '0' COMMENT 'PV数',
  `likes` int(10) NOT NULL DEFAULT '0' COMMENT '賛成数',
  `dislikes` int(10) NOT NULL DEFAULT '0' COMMENT '反対数',
  `user_id` varchar(10) NOT NULL COMMENT '作成したユーザーID',
  `del_flg` int(1) NOT NULL DEFAULT '0' COMMENT '削除フラグ(1: 削除、0: 有効)',
  `updated_by` varchar(20) NOT NULL DEFAULT 'pollapp' COMMENT '最終更新者',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '最終更新日時'
);

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(10) PRIMARY KEY COMMENT 'ユーザーID',
  `pwd` varchar(60) NOT NULL COMMENT 'パスワード',
  `nickname` varchar(10) NOT NULL COMMENT '画面表示用名',
  `del_flg` int(1) NOT NULL DEFAULT '0' COMMENT '削除フラグ(1: 削除、0: 有効)',
  `updated_by` varchar(20) NOT NULL DEFAULT 'pollapp' COMMENT '最終更新者',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '最終更新日時'
);

START TRANSACTION;

SET time_zone = "+09:00";

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `topic_id`, `agree`, `body`, `user_id`, `del_flg`) VALUES
(1, 1, 0, 'いいえ遅いです。', 'test', 0),
(2, 1, 1, '亀はウサギよりも早いと思います。', 'test', 0),
(3, 1, 1, '早いですね。', 'test', 0),
(4, 1, 1, 'いや遅いですね。', 'test', 0),
(5, 2, 0, 'いいえ。そんなことないと思います。', 'test', 0),
(6, 2, 1, 'はい。そうでしょうね。', 'test', 0),
(7, 3, 1, 'はい。そうですね。', 'test', 0),
(8, 3, 1, 'うん、そう思います。', 'test', 0),
(9, 3, 0, 'そうですかね？', 'test', 0),
(10, 4, 1, 'たまには当たるのでは？？', 'test', 0),
(11, 4, 0, '多分、当たらないですよ。', 'test', 0),
(12, 4, 0, 'あなたの思い込みでは。。', 'test', 0),
(13, 4, 1, 'はい。当たります。', 'test', 0),
(14, 4, 1, '一生に一回くらいは当たると思います。', 'test', 0);

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `title`, `published`, `views`, `likes`, `dislikes`, `user_id`, `del_flg`) VALUES
(1, '亀はウサギよりも早いですか？', 1, 8, 3, 1, 'test', 0),
(2, 'スーパーサイヤ人は最強ですか？', 1, 9, 1, 1, 'test', 0),
(3, 'たこ焼きっておいしいですよね。', 1, 21, 2, 1, 'test', 0),
(4, '犬も歩けば棒に当たりますか？', 1, 25, 3, 2, 'test', 0);

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `pwd`, `nickname`, `del_flg`) VALUES
('test', '$2y$10$n.PPvod4ai0r0qpqn5DurenOoxTyRhvef3S7DxoMu5BLRspG5oiBK', 'テストユーザー', 0);


COMMIT;

