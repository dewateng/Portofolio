@extends('adminbsb.master')

@section('content')

        <label for="exampleFormControlInput1" class="form-label"><h3>Pengembalian Buku</h3></label>
        <form method="POST" action="/master/pengembalian/{{$tabl->id_peminjaman}}">
            @csrf
            @method('PUT')
            <div class="mb-3" style="margin-top: 25px">
                <label for="exampleFormControlInput1" class="form-label">id peminjam buku</label>
                <input type="text" class="form-control" name="id_peminjam_buku" id="exampleFormControlInput1" value="{{$tabl->id_peminjaman}}" placeholder="id peminjam buku">
            </div>
            
            <div class="mb-3" style="margin-top: 25px">
                <label for="exampleFormControlInput1"  class="form-label">tanggal pengembalian</label>
                <input type="date" class="form-control" name="tanggal_pengembalian" id="exampleFormControlInput1" >
            </div>
            <div class="mb-3" style="margin-top: 25px">
                <label for="exampleFormControlInput1"  class="form-label">keterangan</label>
                <input type="text" class="form-control" name="keterangan" id="exampleFormControlInput1" placeholder="keterangan">
            </div>
            <button type="submit" style="margin-top: 25px" class="btn btn-primary">Submit</button>

        </form>
    
@endsection