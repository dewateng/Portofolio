<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\table;
use App\Exports\BukuExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

use DB;
use PDF;
class create_controller extends Controller
{
    
    public function inputbukutab(){
        return view('adminbsb.item.input_buku');
    }
    public function pinjam(){
        return view('adminbsb.item.pinjam_buku');
    }
    public function pengembalian($id_peminjaman){
        $tabl = DB::table('peminjaman')->where('id_peminjaman', $id_peminjaman)->first();
        return view('adminbsb.item.pengembalian', compact('tabl'));
    }

    public function cetakBuku()
    {
        $tabl = DB::table('buku')-> get();
        return view('adminbsb.item.cetakbuku', compact('tabl'));
    }

    public function bukuexport()
    {
        return Excel::download(new BukuExport, 'buku.xlsx');
    }

    public function update($id_peminjaman, Request $request){
        $query = DB::table('peminjaman')
                            ->where('id_peminjaman', $id_peminjaman)
                            ->update([
                                'keterangan' => $request['tanggal_pengembalian'],
                                'tanggal_pengembalian' => $request['keterangan']
                            ]);
        return redirect('/master/table')->with('success', 'Berhasil Update');
    }
    
    public function destroy($id_peminjaman){
        $tabl = DB::table('peminjaman')->where('id_peminjaman', $id_peminjaman)->delete();
        return redirect('/master/table')->with('success', 'Berhasil Delete');
    }

    public function member(){
        return view('adminbsb.item.member');
    }

    public function table(){
        $table = DB::table('peminjaman') -> get();
        return view('adminbsb.item.table',compact('table'));
    }

    public function tablebuku(){
        $tabl = DB::table('buku')-> get();
        return view('adminbsb.item.tablebuku', compact('tabl'));
    }
    
    public function tablemember(){
        $tabl = DB::table('peminjam_buku')-> get();
        return view('adminbsb.item.tablemember', compact('tabl'));
    }

    public function buku(Request $request){
        table::insert([
            "judul" => $request["judul"],
            "tahun_pembuatan" => $request["tahun_pembuatan"],
            "sinopsis" => $request["genre"],
            "genre" => $request["sinopsis"]
        ]);
        return redirect('/master/inputbuku')->with('success', 'Data Berhasil Tersimpan!');
    }

    public function peminjaman(Request $request){
        $query = DB::table('peminjaman')->insert([
            "id_peminjam_buku" => $request["id_peminjam_buku"],
            "id_buku" => $request["id_buku"],
            "tanggal_peminjaman" => date('Y-m-d H:i:s'),
            "lama_meminjam" => $request["lama_meminjam"],
            "jaminan" => $request["jaminan"],
            "keterangan" => $request[""],
            "tanggal_pengembalian" => $request[""]
        ]);
        return redirect('/master/pinjam')->with('success', 'Data Berhasil Tersimpan!');
    }

    public function peminjambuku(Request $request){
        $query = DB::table('peminjam_buku')->insert([
            "nama" => $request["nama"],
            "email" => $request["email"],
            "no_tlp" => $request["nomer_telepon"],
            "gender" => $request["gender"],
            "umur" => $request["umur"]
        ]);
        return redirect('/master/member')->with('success', 'Data Berhasil Tersimpan!');
    }



}
