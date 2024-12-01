<?php

namespace App\Controllers;
use App\Models\M_kita;

class Home extends BaseController
{
	public function index()
	{
		echo view('utama/login');

	}
	public function register()
	{	
		echo view('utama/register');
	}

	public function aksi_login() 
	{
		$a=$this->request->getPost('usrnm');
		$b=$this->request->getPost('pwd');
		

		$Joyce= new M_kita;
		$wendy = array (
			'username'=>$a,
			'password'=>MD5($b),
		);
		

		$cek = $Joyce->getW('user',$wendy);
		
		
		if($cek != null){
			session()->set('id', $cek->id_user);
			session()->set('u', $cek->username);
			session()->set('level', $cek->level);
			

			return redirect()->to('dashboard');
		} else {
			return redirect()->to('index');
		}
	}

	public function aksi_register() 
	{
		$usr1=$this->request->getPost('usrnm');
		$usr2=$this->request->getPost('pwd');

		$dt1=$this->request->getPost('nama');
		$dt2=$this->request->getPost('nik');
		$dt3=$this->request->getPost('nisn');
		$dt4=$this->request->getPost('tmpt_lahir');
		$dt5=$this->request->getPost('tgl_lahir');
		$dt6=$this->request->getPost('agama');
		$dt7=$this->request->getPost('jk');
		$dt8=$this->request->getPost('nohp');
		$dt9=$this->request->getPost('mail');
		$dt10=$this->request->getPost('alamat');
		$dt11=$this->request->getPost('province');
		$dt12=$this->request->getPost('kota');
		$dt13=$this->request->getPost('kcmtn');
		$dt14=$this->request->getPost('klrhn');
		$dt15=$this->request->getPost('kodepos');
		$dt16=$this->request->getPost('rt');
		$dt17=$this->request->getPost('rw');
		
		$wl1=$this->request->getPost('nmwali');
		$wl2=$this->request->getPost('nohpwali');
		$wl3=$this->request->getPost('tgl_lahirwali');
		$wl4=$this->request->getPost('kerja');
		$wl5=$this->request->getPost('gaji');

		$skl1=$this->request->getPost('nmsklh');
		$skl2=$this->request->getPost('asalsklh');
		$skl3=$this->request->getPost('almtsklh');
		$skl4=$this->request->getPost('year');

		if(isset($_POST["hasil"])) {
			
		
			$akte = $_FILES ["akte"]["name"];
			$tmp_name = $_FILES ["akte"]["tmp_name"];
			$validImageExtension = ["jpg","png","jpeg"];
			move_uploaded_file($tmp_name, "fotodata/akte/".$akte);
			$ijazah = $_FILES ["ijazah"]["name"];
			$tmp_name = $_FILES ["ijazah"]["tmp_name"];
			$validImageExtension = ["jpg","png","jpeg"];
			move_uploaded_file($tmp_name, "fotodata/ijazah/".$ijazah);
			$kk = $_FILES ["kk"]["name"];
			$tmp_name = $_FILES ["kk"]["tmp_name"];
			$validImageExtension = ["jpg","png","jpeg"];
			move_uploaded_file($tmp_name, "fotodata/kk/".$kk);
			$ktp = $_FILES ["ktp"]["name"];
			$tmp_name = $_FILES ["ktp"]["tmp_name"];
			$validImageExtension = ["jpg","png","jpeg"];
			move_uploaded_file($tmp_name, "fotodata/ktp/".$ktp);
			$foto = $_FILES ["foto"]["name"];
			$tmp_name = $_FILES ["foto"]["tmp_name"];
			$validImageExtension = ["jpg","png","jpeg"];
			move_uploaded_file($tmp_name, "fotodata/fotomuka/".$foto);
			}
			$ft0=$this->request->getFile('akte');
		$ft1=$this->request->getFile('ijazah');
		$ft2=$this->request->getFile('ktp');
		$ft3=$this->request->getFile('foto');
		$ft4=$this->request->getFile('kk');

		$Joyce= new M_kita;
		$user= array (
			'username'=>$usr1,
			'password'=>$usr2,
			'level'=>'2',
		);
		$murid= array (
			'nama'=> $dt1,
			'nik'=> $dt2,
			'nisn'=> $dt3,
			'tanggal_lahir'=> $dt5,
			'tempat_lahir'=> $dt4,
			'agama'=> $dt6,
			'jenis_kelamin'=> $dt7,
			'no_hp'=> $dt8,
			'email'=> $dt9,
			'alamat'=> $dt10,
			'provinsi'=> $dt11,
			'kota'=> $dt12,
			'kacamatan'=> $dt13,
			'kelurahan'=> $dt14,
			'kodepos'=> $dt15,
			'rt'=> $dt16,
			'rw'=> $dt17,
		);

		$wali =array (
			'nama_wali'=>$wl1,
			'tanggal_lahirwali'=>$wl3,
			'no_hpwali'=> $wl2,
			'pekerjaan'=>$wl4,
			'pendapatan'=>$wl5,
		);

		$sklh = array (
			'nama'=> $skl1,
			'asal'=> $skl2,
			'alamat_sklh'=>$skl3,
			'tahun'=>$skl4,
		);

		$identitas = array(
			'akte' => $uploadedFiles['akte'] ?? null,
        'kk' => $uploadedFiles['kk'] ?? null,
        'ijazah' => $uploadedFiles['ijazah'] ?? null,
        'ktp' => $uploadedFiles['ktp'] ?? null,
        'foto' => $uploadedFiles['foto'] ?? null,
		);
		function setBiayaSekolah($skl2) {
			if ($skl2 == 'Swasta') {
				return 300000; // 300 ribu untuk swasta
			} else if ($skl2 == 'Negeri' || $skl2 == 'Homeschooling') {
				return 200000;
			
			} else {
				return 150000; // Default jika jenis sekolah tidak valid
			}
		}
		$tgl_hari = date('Y-m-d');
		$pembayaran = array(
			'harga'=>setBiayaSekolah($skl2),
			'metode'=>'None',
			'status'=>1,
			'tgl_bayar'=>$tgl_hari,
			
		);
		$where =array(
			'username'=>$usr1,
		);

		// print_r($user);
		// print_r($murid);
		// print_r($wali);
		// print_r($sklh);
		// print_r($identitas);
		// print_r($pembayaran);

		$wendy=$Joyce->getW('user',$where);
		$Joyce->input('user', $user);
		$Joyce->input('siswa',$murid);
		$Joyce->input('wali',$wali);
		$Joyce->input('sekolah',$sklh);
		$Joyce->input('identitas',$identitas);
		$Joyce->input('pembayaran',$pembayaran);

		return redirect()->to('index');
		
	}
	public function logout(){
		session()->destroy();
		return redirect()->to('index');
	}
	

	public function dashboard()
	{
		if(session()->get('id')>0){
		echo view('utama/header');
		echo view('utama/menu');
		echo view('utama/dashboard');
		echo view('utama/footer');
	} else {
		return redirect()->to('index');
	}	
	}
	public function siswa(){
		if (session()->get('level')==1){
		
			$Joyce= new M_kita;
			$where= ('id_siswa');
			$wendy['hoh'] = $Joyce->tplurut('siswa', $where);
			echo view('utama/header');
			echo view('utama/menu');
			echo view('data/murid/murid', $wendy);
			echo view('utama/footer');
		}else if (session()->get('id')>0){
			return redirect()->to('error');
		} else {
			return redirect()->to('index');
		}
	}

	public function full_siswa($id){
		if(session()->get('level')==1){
		$Joyce= new M_kita;
		
		$wendy['hoh'] = $Joyce->joinBesar('siswa',
            'wali',         // First joined table
            'siswa.id_siswa=wali.id_siswa', 
            'sekolah',    // Second joined table
            'wali.id_siswa = sekolah.id_siswa',  
            
			['siswa.id_siswa' => $id]);
			$wendy['hoh'] = $wendy['hoh'][0]; 

			
			echo view('utama/header');
			echo view('utama/menu');
			echo view('data/murid/fullm', $wendy);
			echo view('utama/footer');
		}else if (session()->get('id')>0){
			return redirect()->to('error');
		} else {
			return redirect()->to('index');
		}
	}

	public function tambah_siswa(){
		if(session()->get('level')==1){
		$Joyce= new M_kita;
		$wendy['hoh']= $Joyce->join('siswa','wali','siswa.id_siswa=wali.id_wali');
		


		echo view('utama/header');
			echo view('utama/menu');
			echo view('data/murid/tambahmurid', $wendy);
			echo view('utama/footer');
		}else if (session()->get('id')>0){
			return redirect()->to('error');
		} else {
			return redirect()->to('index');
		}
	}

	public function user(){
		if (session()->get('level')==1){
		
			$Joyce= new M_kita;
			$where= ('id_user');
			$wendy['hoh'] = $Joyce->tplurut('user', $where);
			echo view('utama/header');
			echo view('utama/menu');
			echo view('data/user/user', $wendy);
			echo view('utama/footer');
		}else if (session()->get('id')>0){
			return redirect()->to('error');
		} else {
			return redirect()->to('index');
		}
	}

	public function simpan_user(){
		if(session()->get('level')==1){
	    $a=$this->request->getpost('usrnm');
	    $b=$this->request->getpost('pw');
	    $c=$this->request->getpost('level');
		$data = array(
			"username"=>$a,
			"password"=>$b,
			"level"=>$c
		);
		
		$Joyce= new M_kita;
		$Joyce->input('user', $data);
		return redirect()->to('user');
	}else if (session()->get('id')>0){
		return redirect()->to('error');
	} else {
		return redirect()->to('index');
	}
	}
	public function hapus_user($id){
		if(session()->get('level')==1){
		$Joyce= new M_kita;
		$wece= array('id_user' => $id);
		$wendy['hoh'] = $Joyce->hapus('user', $wece);
		return redirect()->to('user');
	}else if (session()->get('id')>0){
		return redirect()->to('error');
	} else {
		return redirect()->to('index');
	}
	}

	public function edit_user($id){
		if(session()->get('level')==1){
		$Joyce= new M_kita;
		$wece= array('id_user' => $id);
		$wendy['hoh'] = $Joyce->getW('user', $wece);
		echo view('utama/header');
		echo view('utama/menu');
		echo view('data/user/edituser', $wendy);
		echo view('utama/footer');
	}else if (session()->get('id')>0){
		return redirect()->to('error');
	} else {
		return redirect()->to('index');
	}
	}
	public function update_user(){
		if(session()->get('level')==1){
		$a=$this->request->getpost('usrnm');
		$b=$this->request->getpost('pwd');
		$c=$this->request->getpost('level');
		$id=$this->request->getpost('idusr');
		$Joyce= new M_kita;
		$wece= array('id_user' => $id);
		$data = array(
			"username"=>$a,
			"password"=>$b,
			"level"=>$c
		);
	
		$Joyce->updat('user', $data,$wece);
		return redirect()->to('user');
	}else if (session()->get('id')>0){
		return redirect()->to('error');
	} else {
		return redirect()->to('index');
	}
	 }

	 public function tabelpembayaran(){
		if(session()->get('level')==1){
		$Joyce= new M_kita;
		$wendy['hoh']= $Joyce->join('siswa','pembayaran','siswa.id_siswa=pembayaran.id_siswa');
		


		echo view('utama/header');
			echo view('utama/menu');
			echo view('data/bayar/pembayaran', $wendy);
			echo view('utama/footer');
		}else if (session()->get('id')>0){
			return redirect()->to('error');
		} else {
			return redirect()->to('index');
		}
	}


}