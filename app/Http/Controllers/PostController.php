<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    //
    function show(){
        $data['post'] = Post::all();
        $data['jumlah'] = Post::count();

        foreach ($data['post'] as $post){
            $post->created_at = Carbon::parse($post->created_at)->format('d-m-Y');
        }

        return view ('post.post',$data);
    }

    function tampil(){
        $data['post'] = Post::all();
        return view('bkk.datapost',$data);
    }

    function detail($id_post){
        $data['post'] = Post::find($id_post);
        return view('post.detailpost',$data);
    }


    function add(){
        $data = [
            'action' => url('post/create'),
            'post' => (object)[
                'judul' => '',
                'perusahaan' => '',
                'alamat' => '',
                'tipe' => '',
                'kategori' => '',
                'gaji_min' => '',
                'gaji_max' => '', 
                'pendidikan' => '',
                'pengalaman' => '',
                'email' => '',
                'kontak' => '',
                'gender' => '',
                'periode' => '',
                'deskripsi' => '',
                'foto_post' => '',
            ],
        ];
        return view ('post.createpost',$data);
    }

    function create(Request $req){
        Post::create([
            'nama_loker' => $req->judul,
            'nama_perusahaan' => $req->perusahaan,
            'alamat' => $req->alamat,
            'tipe' => $req->tipe,
            'kategori' => $req->kategori,
            'gaji_min' => $req->gaji_min,
            'gaji_max' => $req->gaji_max,
            'pendidikan' => $req->pendidikan,
            'pengalaman' => $req->pengalaman,
            'email' => $req->email,
            'kontak' => $req->kontak,
            'gender' => $req->gender,
            'periode' => $req->periode,
            'deskripsi' => $req->deskripsi,
            'foto_post' => $req->file('foto_post')->store('foto_post'),
        ]);
        return redirect('post');
    }

    function edit($id_post){
        $data['post'] = Post::find($id_post);
        $data['action'] = url('admin/post/update').'/'.$data['post']->id_post;
        $data['tipe'] = ['Full Time', 'Part Time'];
        $data['kategori'] = ['Web Developer', 'Web Designer'];
        $data['pendidikan'] = ['SMK', 'Universitas', 'Umum'];
        $data['pengalaman'] = ['Fresh Graduate', '1 Tahun', '2 Tahun', '3 Tahun'];
        $data['gender'] = ['Pria', 'Wanita', 'Pria & Wanita'];
        $data['status'] = ['Draft', 'Approved', 'Rejected'];
        return view('bkk.updatepost', $data);
    }

    function update(Request $req){
        if($req->file('foto_post')){
            $file = $req->file('foto_post')->store('foto');
        }else{
            $post = Post::find($req->id_post);

            if($post){
                $file = $post->foto_post;
            }else{
                $file = 'default.jpg';
            }
        }
        Post::where('id_post',$req->id_post)->update([
            'nama_loker' => $req->judul,
            'nama_perusahaan' => $req->perusahaan,
            'tipe' => $req->tipe,
            'kategori' => $req->kategori,
            'gaji_min' => $req->gaji_min,
            'gaji_max' => $req->gaji_max,
            'pendidikan' => $req->pendidikan,
            'pengalaman' => $req->pengalaman,
            'email' => $req->email,
            'kontak' => $req->kontak,
            'gender' => $req->gender,
            'periode' => $req->periode,
            'deskripsi' => $req->deskripsi,
            'status' => $req->status,
            'foto_post' => $file
        ]);
        return redirect('admin/post');
    }

}
