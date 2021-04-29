@extends('adminbsb.master')

@section('content')

        <label for="exampleFormControlInput1" class="form-label"><h3>Peminjaman Buku</h3></label>
        <form method="POST" action="/pinjam">
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
            <button type="submit" style="margin-top: 25px" class="btn btn-primary">Submit</button>

        </form>
        @include('sweetalert::alert')
@endsection