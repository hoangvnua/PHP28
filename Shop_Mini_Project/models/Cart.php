<?php
require_once 'models.php';

class Cart extends models
{

    function __construct()
    {
        parent::__construct();
        $this->table = 'cart';
    }

    function themVaoGioHang($data)
    {
        // echo $data;die();
        $sql = "INSERT into cart (id,images,name,price,soluong) values ($data,1)";
        return $this->conn->query($sql);
    }
    function sanPhamTrung($data,$id)
    {
        $sql = "UPDATE cart set soluong = $data where id = ".$id;
        // echo $sql; die();   
        return $this->conn->query($sql);
    }
    function getID()
    {
        $sql = "SELECT id,soluong from cart";
        $results = $this->conn->query($sql);

        $content = array();

        while ($row = $results->fetch_assoc()) {
            $content[] = $row;
        }
        return $content;
    }
    function tag($soluong,$id){
        $sql = "UPDATE cart set soluong = $soluong where id = ".$id;
        return $this->conn->query($sql);
    }
    function giam($soluong,$id){
        $sql = "UPDATE cart set soluong = $soluong where id = ".$id;
        return $this->conn->query($sql);
    }
}
