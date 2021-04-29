@extends('adminbsb.master')

@section('content')

        <div style="background-color:white;border-radius: 8px;">
            <label for="exampleFormControlInput1" style="padding: 20px;" class="form-label"><h3>Table Buku</h3></label>
            <table class="table table-hover"style="padding: 20px;">
                <thead>
                    <tr>
                    <th scope="col">Nomer</th>
                    <th scope="col">nama</th>
                    <th scope="col">email</th>
                    <th scope="col">noomer telepon</th>
                    <th scope="col">gender</th>
                    <th scope="col">umur</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tabl as $key => $tab)
                    <tr>
                        <th scope="row">{{$key + 1}}</th>
                        <td>{{$tab->nama}}</td>
                        <td>{{$tab->email}}</td>
                        <td>{{$tab->no_tlp}}</td>
                        <td>{{$tab->gender}}</td>
                        <td>{{$tab->umur}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    
@endsection