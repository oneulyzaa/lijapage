<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{env('APP_NAME')}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <section class="container pt-5">
        <div class="row">
            <div class="col-sm-12">
                <h1>Data Dasawisma Cakung Jakarta Timur</h1>
                <p>Tabel Data Nama Pengguna</p>
                <a href="{{route('users.create')}}" class="btn btn-primary mb-3">+ Tambah data</a>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width=5>#</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Alamat</th>
                            <th width=155>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
@foreach($users as $user)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$user->nama}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->username}}</td>
                            <td>{{$user->password}}</td>
                            <td>{{$user->alamat}}</td>
                            <td class="d-flex">
                                <a href="{{route('users.show',$user->id)}}" class="btn btn-sm btn-primary">Lihat</a> |
                                <a href="{{route('users.edit',$user->id)}}" class="btn btn-sm btn-primary">Ubah</a> |
                                <form action="{{route('users.destroy',$user->id)}}" method="post"> 
                                    <button type=submit class="btn btn-sm btn-danger" onclick="return confirm('Konfirmasi untuk menghapus baris ini')">Hapus</button>
                                    @method('DELETE')
                                    @csrf
                                </form>
                            </td>
                        </tr>
@endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {!!env('APP_FOOTER')!!}
    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>