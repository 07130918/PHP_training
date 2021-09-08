<?php
/**
 * 理解度チェック（クラス継承）
 * 
 * MyFileWriterを継承してログをファイルに書き込む
 * LogWriterクラスを作成してみてください。
 * 
 * LogWriterクラスではformatメソッドにより
 * 出力したい文字列に時間を設定できるものとします。
 * 
 * 例）
 * 2021/04/04 23:02:59 これはログです。
 * 
 * ヒント）
 * MyFileWriterのメソッドも一部変更する
 * 必要があります。
 */
class MyFileWriter {
    private $filename;
    private $content = '';
    public const APPEND = FILE_APPEND;

    function __construct($filename)
    {
        $this->filename = $filename;
    }

    function append($content) {
        $this->content .= $this->format($content);
        return $this;
    }
 
    protected function format($content) {
        return $content;
    }

    function newline() {
        $this->content .= PHP_EOL;
        return $this;
    }

    function commit($flag = null) {
        file_put_contents($this->filename, $this->content, $flag);
        $this->content = '';
        return $this;
    }
}

class LogWriter extends MyFileWriter {
    protected function format($content) { 
      
        $time_str = date('Y/m/d H:i:s');
        return sprintf('%s %s', $time_str, $content);
        
    }
}

/*
ヒント）
文字列のフォーマット
*/
$time_str = date('Y/m/d H:i:s');
sprintf('%s %s', $time_str, '文字列');


$info = new LogWriter('info.log');
$error = new LogWriter('error.log');

$info->append('これは通常ログです。')
    ->newline()
    ->commit(LogWriter::APPEND);

$error->append('これはエラーログです。')
    ->newline()
    ->commit(LogWriter::APPEND);
