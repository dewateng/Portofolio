@extends('adminbsb.master')

@section('content')

        <div style="background-color:white;border-radius: 8px;">
            <label for="exampleFormControlInput1" style="padding: 20px;" class="form-label"><h3>Table Peminjaman Buku</h3></label>
            <table class="table table-hover"style="padding: 20px;">
                <thead>
                    <tr>
                    <th scope="col">Nomer</th>
                    <th scope="col">ID Member</th>
                    <th scope="col">ID Buku</th>
                    <th scope="col">Tanggal Peminjaman</th>
                    <th scope="col">Lama Meminjam</th>
                    <th scope="col">Jaminan</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Tanggal Pengembalian</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($table as $key => $tab)
                    <tr>
                        <th scope="row">{{$key + 1}}</th>
                        <td>{{$tab->id_peminjam_buku}}</td>
                        <td>{{$tab->id_buku}}</td>
                        <td>{{$tab->tanggal_peminjaman}}</td>
                        <td>{{$tab->lama_meminjam}}</td>
                        <td>{{$tab->jaminan}}</td>
                        <td>{{$tab->keterangan}}</td>
                        <td>{{$tab->tanggal_pengembalian}}</td>
                        <td style="display: flex"><a href="/master/{{$tab->id_peminjaman}}/pengembalian" style="margin-right:10px" class="btn btn-primary mb-2">Pengembalian</a>
                            <form method="POST" action="/master/{{$tab->id_peminjaman}}">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger mb-2" value="Delete">
                            </form>
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    
@endsection