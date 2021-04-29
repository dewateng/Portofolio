@extends('adminbsb.master')

@section('content')
    

    
    <label for="exampleFormControlInput1" class="form-label"><h2>Input Buku</h2></label>
    <form method="POST" action="">
        @csrf
        <div class="mb-3" style="margin-top: 25px">
            <label for="exampleFormControlInput1"  class="form-label">Judul</label>
            <input type="text" class="form-control" name="judul" id="exampleFormControlInput1" placeholder="Judul">
        </div>
        <div class="mb-3" style="margin-top: 25px">
            <label for="exampleFormControlInput1"  class="form-label">tahun pembuatan</label>
            <input type="text" class="form-control" name="tahun_pembuatan" id="exampleFormControlInput1" placeholder="tahun pembuatan">
        </div>
        <div class="mb-3" style="margin-top: 25px">
            <label for="exampleFormControlInput1"  class="form-label">genre</label>
            <input type="text" class="form-control" name="genre" id="exampleFormControlInput1" placeholder="genre">
        </div>
        <div class="mb-3" style="margin-top: 25px">
            <label for="exampleFormControlTextarea1"  class="form-label">sinopsis</label>
            <textarea class="form-control" name="sinopsis" id="exampleFormControlTextarea1" rows="3" placeholder="sinopsis"></textarea>
        </div>
        <div class="mb-3" style="margin-top: 25px">
            <label for="formFile" class="form-label">Cover</label>
            <input class="form-control" name="cover" type="file" id="formFile">
          </div>
    </form>

@endsection

