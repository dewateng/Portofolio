@extends('adminbsb.master')

@section('content')

        <label for="exampleFormControlInput1" class="form-label"><h3>Input Data Member</h3></label>
        <form method="POST" action="/member">
            @csrf
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
                <input type="text" class="form-control" name="nomer_telepon" id="exampleFormControlInput1" placeholder="nomer telepon">
            </div>
            <div class="mb-3" style="margin-top: 25px">
                <label for="exampleFormControlInput1" class="form-label">gender</label>
                <select class="form-select form-select-sm" name="gender" >
                    <option selected>-----Jenis Kelamin-----</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
            </div>
            <div class="mb-3" style="margin-top: 25px">
                <label for="exampleFormControlInput1" class="form-label">umur</label>
                <input type="text" class="form-control" name="umur" id="exampleFormControlInput1" placeholder="umur">
            </div>

            <button type="submit" style="margin-top: 25px" class="btn btn-primary">Submit</button>
            
        </form>
        @include('sweetalert::alert')
@endsection