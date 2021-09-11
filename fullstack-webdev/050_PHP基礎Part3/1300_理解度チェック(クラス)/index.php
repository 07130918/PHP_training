<?php

class MyFileWriter
{
    private $file_name;
    private $content = '';
    public const APPEND = FILE_APPEND;

    function __construct($file_name)
    {
        $this->file_name = $file_name;
    }

    function append($content)
    {
        // 引数が $this->contentに蓄積される
        $this->content .= $content;
        return $this;
    }

    function newline()
    {
        return $this->append(PHP_EOL);
    }

    function commit($flag = null)
    {
        file_put_contents($this->file_name, $this->content, $flag);
        $this->content = '';
        return $this;
    }
}

$file = new MyFileWriter('sample.txt');
$file->append('Hello, Bob.')
    ->newline()
    ->append('Bye, ')
    ->append('Bob.')
    ->newline()
    ->commit()
    ->append('Good night, Bob.')
    ->commit(MyFileWriter::APPEND);
