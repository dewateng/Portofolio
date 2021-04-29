@extends('adminbsb.master')

@section('content')
    

    
    <label for="exampleFormControlInput1" class="form-label"><h3>Peminjaman Buku</h3></label>
    <form method="POST" action="">
        @csrf
        <div class="mb-3" style="margin-top: 25px">
            <label for="exampleFormControlInput1" class="form-label">id peminjam buku</label>
            <input type="text" class="form-control" name="id_peminjam_buku" id="exampleFormControlInput1" placeholder="id peminjam buku">
        </div>
        <div class="mb-3" style="margin-top: 25px">
            <label for="exampleFormControlInput1"  class="form-label">id buku</label>
            <input type="text" class="form-control" name="id_buku" id="exampleFormControlInput1" placeholder="id buku">
        </div>
        <div class="mb-3" style="margin-top: 25px">
            <label for="exampleFormControlInput1"  class="form-label">lama meminjam</label>
            <input type="text" class="form-control" name="lama_meminjam" id="exampleFormControlInput1" placeholder="lama meminjam">
        </div>
        <div class="mb-3" style="margin-top: 25px">
            <label for="exampleFormControlInput1" class="form-label">jaminan</label>
            <input type="text" class="form-control" name="jaminan"  id="exampleFormControlInput1" placeholder="jaminan">
        </div>
        <div class="mb-3" style="margin-top: 25px">
            <label for="exampleFormControlInput1"  class="form-label">keterangan</label>
            <input type="text" class="form-control" name="keterangan" id="exampleFormControlInput1" placeholder="keterangan">
        </div>
        <div class="mb-3" style="margin-top: 25px">
            <label for="exampleFormControlInput1"  class="form-label">tanggal pengembalian</label>
            <input type="date" class="form-control" name="tanggal_pengembalian" id="exampleFormControlInput1" >
        </div>
        <label for="exampleFormControlInput1" class="form-label"><h3>Data Peminjam</h3></label>
        <div class="mb-3" style="margin-top: 25px">
            <label for="exampleFormControlInput1"   class="form-label">nama</label>
            <input type="text" class="form-control" name="nama" id="exampleFormControlInput1" placeholder="nama">
        </div>
        <div class="mb-3" style="margin-top: 25px">
            <label for="exampleFormControlInput1"  class="form-label">email</label>
            <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="email">
        </div>
        <div class="mb-3" style="margin-top: 25px">
            <label for="exampleFormControlInput1" class="form-label">nomer telepon</label>
            <input type="text" class="form-control" name="lama_meminjam" id="exampleFormControlInput1" placeholder="lama meminjam">
        </div>
        <div class="mb-3" style="margin-top: 25px">
            <label for="exampleFormControlInput1" name="gender" class="form-label">gender</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  Laki-Laki
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2">
                  perempuan
                </label>
              </div>
        </div>
        <div class="mb-3" style="margin-top: 25px">
            <label for="exampleFormControlInput1" class="form-label">umur</label>
            <input type="text" class="form-control" name="keterangan" id="exampleFormControlInput1" placeholder="umur">
        </div>
        <div class="mb-3" style="margin-top: 25px">
            <label for="exampleFormControlInput1"  class="form-label">umur</label>
            <input type="date" class="form-control" name="umur" id="exampleFormControlInput1" placeholder="umur">
        </div>
    </form>
@endsection




    