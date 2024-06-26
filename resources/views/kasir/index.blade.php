@extends('layout')

@section('isi')
    <div class="content">
        <div class="row">
            <div class="col">
                <div class="mt-4 d-flex justify-content-end">
                    <a href="{{ url('dashboard/kasir/tambah') }}" class="btn btn-primary">Tambah Kasir</a>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Data Kasir</h4>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">

                            <table class="table">
                                <thead>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Telepon</th>
                                    <th>Alamat</th>
                                    <th>Akses</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>

                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->nama }}</td>
                                            <td>{{ $item->username }}</td>
                                            <td>{{ $item->telepon }}</td>
                                            <td>{{ $item->alamat }}</td>
                                            <td>{{ $item->akses }}</td>
                                            <td>
                                                <a href="{{ url('dashboard/kasir/edit/' . $item->id) }}"
                                                    class="btn btn-success">Edit</a>
                                                <a href="{{ url('dashboard/kasir/hapus/' . $item->id) }}" id="delete"
                                                    class="btn btn-danger"
                                                    >Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
