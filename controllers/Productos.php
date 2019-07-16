<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {

	public function index(){
		$data['productos'] = $this->cargar_productos();
		$this->load->view('productos', $data);
	}

	public function cargar_productos(){
		$this->load->model('productos_model');
		$productos = $this->productos_model->getProductos();
		return $productos;	
	}

	public function agregar_view(){
		$this->load->view('agregar_productos');
	}

	public function actualizar_view($id){
		$this->load->model('productos_model');
		$data['producto'] = $this->productos_model->getProductoById($id);
		$this->load->view('actualizar_producto', $data);
	}
	public function actualizar($id){
		$this->load->model('productos_model');
		$this->productos_model->putProductos($id, $this->input->post('nombre'), $this->input->post('precio'), $this->input->post('stock'), $this->input->post('descripcion'));
		echo 'Producto actualizado con exito.';
	}

	public function eliminar($id){
		$this->load->model('productos_model');
		$this->productos_model->deleteProductos($id);
		echo 'Producto eliminado con exito.';
	}
	public function agregar(){
		$this->load->model('productos_model');
		$this->productos_model->createProductos($this->input->post('nombre'), $this->input->post('precio'), $this->input->post('stock'), $this->input->post('descripcion'));
		echo 'Se ha agregado el producto.';
	}
}
