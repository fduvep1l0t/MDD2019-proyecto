<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos_model extends CI_Model {

	public function getProductos(){
        $products = $this->db->select('*')->from('products')->get();
        return $products->result_array();
        }
        
        public function getProductoById($id){
         $product = $this->db->select('*')->from('products')->where('prod_id',$id)->get();
        return $product->row();
        }
        public function createProductos($nombre, $precio, $stock, $desc){
                $this->db->query("INSERT INTO products (prod_name,prod_price,prod_stock,prod_desc) VALUES ('".$nombre."',".$precio.",".$stock.",'".$desc."');"  );
                return;
        }

        public function putProductos($id, $nombre, $precio, $stock, $desc){
        $this->db->query("UPDATE products SET prod_name='".$nombre."', prod_price=".$precio.", prod_stock=".$stock.", prod_desc='".$desc."' WHERE prod_id=".$id.";");
        }

        public function deleteProductos($id){
        $this->db->query("DELETE FROM products WHERE prod_id=".$id.";");
        return;
        }
}
