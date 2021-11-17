<?php
namespace model;

// DataSourceクラスにクエリを流して返ってきたモノをインスタンス化し、見やすくする
class ProductModel
{
    public int $id;
    public string $name;
    public int $delete_flg;

    public function echoProductName() {
        echo "商品名は{$this->name}です。";
    }
}
