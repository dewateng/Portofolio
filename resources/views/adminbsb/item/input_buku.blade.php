@extends('adminbsb.master')

@section('content')
<label for="exampleFormControlInput1" class="form-label"><h2>Input Buku</h2></label>
        <form role="form" method="POST" action="/insertsemua">
            @csrf
            <div class="mb-3" style="margin-top: 25px">
                <label for="exampleFormControlInput1"  class="form-label">Judul</label>
                <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul">
            </div>
            <div class="mb-3" style="margin-top: 25px">
                <label for="exampleFormControlInput1"  class="form-label">tahun pembuatan</label>
                <input type="text" class="form-control" name="tahun_pembuatan" id="tahun_pembuatan" placeholder="tahun pembuatan">
            </div>
            <div class="mb-3" style="margin-top: 25px">
                <label for="exampleFormControlInput1"  class="form-label">genre</label>
                <input type="text" class="form-control" name="genre" id="genre" placeholder="genre">
            </div>
            <div class="mb-3" style="margin-top: 25px">
                <label for="exampleFormControlTextarea1"  class="form-label">sinopsis</label>
                <textarea class="form-control" name="sinopsis" id="sinopsis" rows="3" placeholder="sinopsis"></textarea>
            </div>
            @push('scripts')
                <script>
                    Swal.fire({
                        title: "Berhasil!",
                        text: "Memasangkan script sweet alert",
                        icon: "success",
                        confirmButtonText: "Cool",
                    });
                </script>
                

@endpush
<button type="submit" style="margin-top: 25px" class="btn btn-primary">Submit</button>
            
        </form>
@endsection

