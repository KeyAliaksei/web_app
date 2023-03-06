<?php

class AccountModel extends Model {

    public function getOrders(){
        $sql = "SELECT * FROM orders";
        $result = array();
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $result[$row['id']] = $row;
        }

        return $result;
    }

    public function getProducts(){
        $sql = "SELECT * FROM products";
        $result = array();
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $result[$row['id']] = $row;
        }

        return $result;
    }

    public function getCompanyInfo(){
        $sql = "SELECT * FROM company";
        $result = array();
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $result[$row['id']] = $row;
        }

        return $result;
    }

}