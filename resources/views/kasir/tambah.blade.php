@extends('layout')

@section('isi')
    <div class="content">
        <div class="row">
            <div class="col">
                <div class="card card-user">
                    <div class="card-header">
                        <h5 class="card-title">Tambah Data</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ url('dashboard/kasir/tambah') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" class="form-control" placeholder="Masukan nama"
                                            name="nama" required autofocus>
                                    </div>
                                </div>
                                <div class="col-md-3 px-1">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" class="form-control" placeholder="Masukan username" name="username">
                                    </div>
                                </div>
                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" placeholder="Masukan password" name="password">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>Telepon</label>
                                        <input type="number" class="form-control" placeholder="Masukan telepon" name="telepon">
                                    </div>
                                </div>
                                <div class="col-md-6 pl-1">
                                    <div class="form-group">
                                        <label>Akses</label>
                                        <select class="form-control" name="akses" id="akses">
                                            <option value="admin">Admin</option>
                                            <option value="kasir">Kasir</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12"> 
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea class="form-control textarea" name="alamat" id="alamat"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="update ml-auto mr-auto">
                                    <button type="submit" class="btn btn-primary btn-round">Tambah Data</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
