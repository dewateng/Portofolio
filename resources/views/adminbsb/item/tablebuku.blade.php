@extends('adminbsb.master')

@section('content')

        <div style="background-color:white;border-radius: 8px;">
            <label for="exampleFormControlInput1" style="padding: 20px;" class="form-label"><h3>Table Peminjaman Buku</h3></label>
            <table class="table table-hover"style="padding: 20px;">
                <thead>
                    <tr>
                    <th scope="col">Nomer</th>
                    <th scope="col">judul</th>
                    <th scope="col">tahun pembuatan</th>
                    <th scope="col">genre</th>
                    <th scope="col">sinopsis</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tabl as $key => $tab)
                    <tr>
                        <th scope="row">{{$key + 1}}</th>
                        <td>{{$tab->judul}}</td>
                        <td>{{$tab->tahun_pembuatan}}</td>
                        <td>{{$tab->genre}}</td>
                        <td>{{$tab->sinopsis}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    
@endsection