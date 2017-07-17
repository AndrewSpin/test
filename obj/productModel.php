<?php

class ProductModel{

    public function getProductById($id){

        return ['%product_name%' => 'product name', '%product_id%' => $id];
    }
}