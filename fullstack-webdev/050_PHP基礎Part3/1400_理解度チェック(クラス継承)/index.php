<?php

class MyFileWriter
{
    private $filename;
    private $content = '';
    public const APPEND = FILE_APPEND;

    function __construct($filename)
    {
        $this->filename = $filename;
    }

    function append($content)
    {
        $this->content .= $this->format($content);
        return $this;
    }

    function newline()
    {
        $this->content .= PHP_EOL;
        return $this;
    }
    // 外部から呼べなくする
    protected function format($content)
    {
        return $content;
    }

    function commit($flag = null)
    {
        file_put_contents($this->filename, $this->content, $flag);
        $this->content = '';
        return $this;
    }
}

class LogWriter extends MyFileWriter
{
    // 外部から呼べなくする
    protected function format($content)
    {
        $time_str = date('Y/m/d H:i:s');
        return sprintf('%s %s', $time_str, $content);
    }
}


$info = new LogWriter('info.log');
$error = new LogWriter('error.log');

$info->append('これは通常ログです。')
    ->newline()
    ->commit(LogWriter::APPEND);

$error->append('これはエラーログです。')
    ->newline()
    ->commit(LogWriter::APPEND);
