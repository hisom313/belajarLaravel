<?php

namespace App\Http\Controllers;
use Request;
use Session;
use Crypt;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

// use App\User;
// use App\Http\Controllers\Controller;

class mahasiswacontroller extends Controller
{
    public function index()
    {
        $mahasiswa = DB::table('mhs')->get();
         

        $result['mahasiswa'] = $mahasiswa;
        return view('mahasiswa', $result);
    }
     public function tambah()
    {

        return view('tambah');	
    }
     public function edit($id)
    {
        $mahasiswa = DB::table('mhs')
        ->where('id',$id)
        ->first();
        if (empty($mahasiswa)){
            $msg['message']= 'Data not faound';
            return redirect('/')->with($msg);
        }else{
            $result['mahasiswa'] = $mahasiswa;
            return view ('edit',$result);
        }
    }
     public function detail($id)
    {

    }
     public function save()
    {
    	$save['created_at'] = date('Y-m-d H:i:s');
    	$save['nim'] =  Request::input('nim');
    	$save['nama'] =  Request::input('nama');

    	$action = DB::table('mhs')-> insert($save);
    	if($action){
    		$msg['message']='Berhasil';
    		return redirect('/') -> with($msg);
    	}else{
    		return redirect('/') -> back() -> with(['massage'=>'Gagal']);
    	}
    }
    public function hapus($id)
    {
        $id_decrypt = Crypt::decrypt($id);
       // return $id_decrypt;
        $action = DB::table('mhs')
        ->where('id',$id_decrypt)
        ->delete();
        if($action){
            $msg['message']='Data dihapus';
            return redirect('/')->with($msg);
        }else{
            $msg['message'] = 'Failed';
            return redirect()->back()->with($msg); 
            }        
        //$mahasiswa=DB::table('mhs')->where('id',$id)->delete();
        //return $id;
    }
    public function update($id)
    {
        $id_decrypt = Crypt::decrypt($id);
        $save['updated_at'] = date('Y-m-d H:i:s');
        $save['nim']        =  Request::input('nim');
        $save['nama']       =  Request::input('nama');

        $action = DB::table('mhs')->where('id',$id_decrypt)-> update($save);
        if($action){
            $msg['message']='Berhasil';
            return redirect('/') -> with($msg);
        }else{
            return redirect('/') -> back() -> with(['massage'=>'Gagal']);
        }

    }
    public function latihan()
    {
        return view('latihan');
    }
    public function admin1()
    {
        return view('admin1');
    }
}