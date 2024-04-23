{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/bootstrap-min.css">
    <script src="/assets/css/bootstrap-min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login | Toko Buku</title>
</head>
<body>
    <div id="main" class="d-flex align-items-center vh-100">
        <div class="container">
            <div class="card shadow m-auto" style="width: 70%; height: 50%;">
                <div class="card-body">
                    <h4 class="h4">Selamat Datang</h4>
                    @if (session('status'))
                        <div class="alert alert-primary" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
                    
                    <form class="row g-3 needs-validation" novalidate action="{{url('registrasi')}}" method="POST">
                        @csrf
                        <div class="col-md-4">
                          <label for="nama" class="form-label">Nama</label>
                          <input type="text" class="form-control" id="nama" placeholder="Masukan nama anda" name="nama" required autofocus>
                          
                        </div>
                        <div class="col-md-4">
                          <label for="username" class="form-label">Username</label>
                          <input type="text" class="form-control" id="username" name="username" placeholder="Masukan username anda" required>
                
                        </div>
                        <div class="col-md-4">
                          <label for="password" class="form-label">Password</label>
                          <input type="password" class="form-control" id="password" name="password" placeholder="Masukan password anda" required>
                
                        </div>
                        <div class="col-md-4">
                          <label for="telepon" class="form-label">Telepon</label>
                          <input type="number" class="form-control" id="telepon" name="telepon" placeholder="Masukan telepon anda" required>
                
                        </div>
                        <div class="col-md-6">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat" placeholder="Masukan alamat anda" rows="4"></textarea>
                        </div>
                        
                        <div class="col-12">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">
                              Agree to terms and conditions
                            </label>
                            <div class="invalid-feedback">
                              You must agree before submitting.
                            </div>
                          </div>
                        </div>
                        <div class="col-12">
                          <button class="btn btn-primary" type="submit">Daftar</button>
                        </div>
                        <div>
                            <p>Sudah punya akun?<a href="{{url('login')}}"> Login Sekarang</a></p>
                        </div>
                      </form>
                </div>
            </div>
        </div>
      </div>
</body>
</html> --}}