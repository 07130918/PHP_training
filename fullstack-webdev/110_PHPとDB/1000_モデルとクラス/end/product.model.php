<?php 
namespace model;

class ProductModel {
    public int $id;
    public string $name;
    public int $delete_flg;

    function echoProduct() {
        echo "商品名は[{$this->name}]です。";
    }
}