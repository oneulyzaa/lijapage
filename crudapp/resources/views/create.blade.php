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
      <div class="col-md-1"></div>
      <div class="col-md-10 rounded border p-5">
        <h1>Tambahkan Data</h1>
        <form action="{{route('users.store')}}" method="POST">
          <div class="row">
            <div class="col-md-6"><label for="">Nama</label><input type="text" name="nama" class="form-control mb-3"></div>
            <div class="col-md-6"><label for="">Email</label><input type="text" name="email" class="form-control mb-3"></div>
            <div class="col-md-6"><label for="">Username</label><input type="text" name="username" class="form-control mb-3"></div>
            <div class="col-md-6"><label for="">Password</label><input type="password" name="password" class="form-control mb-3"></div>
            <div class="col-md-12"><label for="">Alamat</label><input type="text" name="alamat" class="form-control mb-3"></div>
          </div>
          <button type="submit" class="btn btn-success mb-1 w-100">Save</button>
          <a href="/" class="btn btn-secondary mb-1  w-100">Kembali</a>
          @csrf
        </form>
        
          
      </div>
    </div>
    {!!env('APP_FOOTER')!!}
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>