<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengajuan;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;

class PengajuanController extends Controller
{
    //

    function show(){
        $data['pengajuan'] = Pengajuan::all();
        return view('bkk.pengajuan',$data);
    }

    function add(){
        $data = [
            'action' => url('pengajuan/create'),
            'pengajuan' => (object)[
                'nama_lengkap' => '',
                'tanggal_lahir' => '',
                'alamat' => '',
                'email' => '',
                'kontak' => '',
                'foto_pengaju' => '',
                'persyaratan' => '',
            ],
        ];
        return view ('submit.submit',$data);
    }

    function create(Request $req){
        Pengajuan::create([
            'nama_lengkap' => $req->nama_lengkap,
            'tanggal_lahir' => $req->tanggal_lahir,
            'alamat' => $req->alamat,
            'kontak' => $req->kontak,
            'email' => $req->email,
            'kontak' => $req->kontak,
            'foto_pengaju' => $req->file('foto_pengaju')->store('foto_pengaju'),
            'persyaratan' => $req->file('persyaratan')->store('persyaratan'),
        ]);
        return redirect('pengajuan');
    }

    function edit($id_pengajuan){
        $data['pengajuan'] = Pengajuan::find($id_pengajuan);
        $data['action'] = url('admin/pengajuan/update').'/'.$data['pengajuan']->id_pengajuan;
        $data['status'] = ['Pending', 'Accepted', 'Rejected'];
        return view('bkk.updatepengajuan', $data);
    }

    function update(Request $req){
        if($req->file('foto_pengaju')){
            $file = $req->file('foto_pengaju')->store('foto_pengaju');
        }else{
            $pengajuan = Pengajuan::find($req->id_pengajuan);

            if($pengajuan){
                $file = $pengajuan->foto_pengaju;
            }else{
                $file = 'default.jpg';
            }
        }
        Pengajuan::where('id_pengajuan',$req->id_pengajuan)->update([
            'nama_lengkap' => $req->nama_lengkap,
            'tanggal_lahir' => $req->tanggal_lahir,
            'alamat' => $req->alamat,
            'kontak' => $req->kontak,
            'email' => $req->email,
            'kontak' => $req->kontak,
            'status' => $req->status,
            'foto_pengaju' => $file
        ]);
        return redirect('admin/pengajuan');
    }
}
