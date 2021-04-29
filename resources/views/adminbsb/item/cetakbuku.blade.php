<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <style>
        table.static{
            positon: relative;
            border: 1px solid #543535;
        }
    </style>
    <title>Cetak Data Buku</title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Data Buku</b></p>
        <table class="static" align="center" rules="all" border="1px" style="widht: 95%">
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
    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>