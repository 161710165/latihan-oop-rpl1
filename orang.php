<?php

class orang {
	var $nama;
	var $tempatlahir;
	var $kelas;
	var $sekolah;
	var $jurusan;

	//kontrack
	public function __construct ($nama,$tempatlahir,$kelas,$sekolah,$jurusan)
	{
		$this->nama = $nama;
		$this->tempatlahir = $tempatlahir;
		$this->kelas = $kelas;
		$this->sekolah = $sekolah;
		$this->jurusan = $jurusan;
	}
	public function tampilkan_nama(){
		return $this->nama;
	}
	public function tampilkan_tempatlahir(){
		return $this->tempatlahir;
	}
	public function tampilkan_kelas(){
		return $this->kelas;
	}
	public function tampilkan_sekolah(){
		return $this->sekolah;
	}
	public function tampilkan_jurusan(){
		return $this->jurusan;
	}
	
}

?>