<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('M_menu');
		$this->load->model('M_transaksi');
		$this->load->model('M_login');
	}
	
	public function index()
	{
		$this->load->view('login');
	}

	public function fungsiLogin()
	{
		$username = $this->input->post('username');
		$pass = $this->input->post('pass');

		//$this->M_login->getDataLogin($username);
		redirect(base_url('home/main'));
	}

	public function main()
	{
		$this->load->view('main');
	}

	public function daftar_menu()
	{
		$queryAllMenu = $this->M_menu->getDataMenu();
		$DATA = ['queryAllMn' => $queryAllMenu];
		$this->load->view('menu', $DATA);
	}

	public function halaman_tambah_menu() 
	{
		$this->load->view('tambah_menu');
	}
	
	public function halaman_edit_menu($id) {
		$queryMenuDetail = $this->M_menu->getDataMenuDetail($id);
		$DATA = ['queryMnDetail' => $queryMenuDetail];
		$this->load->view('edit_menu', $DATA);
	}

	public function fungsiTambahMenu() {
		$nama = $this->input->post('nama');
		$harga = $this->input->post('harga');

		$ArrInsert = [
			'nama' => $nama,
			'harga' => $harga
		];

		$this->M_menu->insertDataMenu($ArrInsert);
		redirect(base_url('home/main'));
	}

	public function fungsiEditMenu() {
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$harga = $this->input->post('harga');

		$ArrUpdate = [
			'nama' => $nama,
			'harga' => $harga
		];
		
		$this->M_menu->updateDataMenu($id, $ArrUpdate);
		redirect(base_url('home/main'));
	}

	public function fungsiDeleteMenu($id) {
		$this->M_menu->deleteDataMenu($id);
		redirect(base_url('home/main'));
	}

	public function daftar_transaksi() 
	{
		$queryAllTransaksi = $this->M_transaksi->getDataTransaksi();
		$DATA = ['queryAllTr' => $queryAllTransaksi];
		$this->load->view('transaksi', $DATA);
	}

	public function halaman_tambah_transaksi() 
	{
		$queryAllMenu = $this->M_menu->getDataMenu();
		$DATA = ['queryAllMn' => $queryAllMenu];
		$this->load->view('tambah_transaksi', $DATA);
	}

	public function fungsiTambahTransaksi() {
		$queryAllMenu = $this->M_menu->getDataMenu();

		$menu = $this->input->post('menu');
		foreach ($queryAllMenu as $row) {
			if ($row->nama === $menu) {
				$harga = $row->harga;
			}
		}
		$jumlah = $this->input->post('jumlah');
		$total = $jumlah * $harga;
		date_default_timezone_set('Asia/Jakarta');
		$tanggal = date("Y-m-d H:i:s");
			$ArrInsert = [
					'nama' => $menu,
					'harga' => $harga,
					'jumlah' => $jumlah,
					'total' => $total,
					'tanggal' => $tanggal
			];

		$this->M_transaksi->insertDataTransaksi($ArrInsert);
		redirect(base_url('home/main'));
	}

	public function halaman_edit_transaksi($id) {
		$queryTransaksiDetail = $this->M_transaksi->getDataTransaksiDetail($id);
		$queryAllMenu = $this->M_menu->getDataMenu();
		$DATA = [
			'queryTrDetail' => $queryTransaksiDetail,
			'queryAllMn' => $queryAllMenu
		];
		$this->load->view('edit_transaksi', $DATA);
	}

	public function fungsiEditTransaksi() {
		$queryAllMenu = $this->M_menu->getDataMenu();
		
		$id = $this->input->post('id');
		$menu = $this->input->post('menu');
		foreach ($queryAllMenu as $row) {
			if ($row->nama === $menu) {
				$harga = $row->harga;
			}
		}
		$jumlah = $this->input->post('jumlah');
		$total = $jumlah * $harga;
		date_default_timezone_set('Asia/Jakarta');
		$tanggal = date("Y-m-d H:i:s");

		$ArrUpdate = [
			'id' => $id,
			'nama' => $menu,
			'harga' => $harga,
			'jumlah' => $jumlah,
			'total' => $total,
			'tanggal' => $tanggal
	];
		
		$this->M_transaksi->updateDataTransaksi($id, $ArrUpdate);
		redirect(base_url('home/main'));
	}

	public function fungsiDeleteTransaksi($id) {
		$this->M_transaksi->deleteDataTransaksi($id);
		redirect(base_url('home/main'));
	}

	public function halaman_cetak($id) {
		$queryTransaksiDetail = $this->M_transaksi->getDataTransaksiDetail($id);
		$DATA = [
			'queryTrDetail' => $queryTransaksiDetail
		];
		$this->load->view('invoice', $DATA);
	}

}