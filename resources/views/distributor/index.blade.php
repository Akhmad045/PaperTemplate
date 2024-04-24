@extends('layout')

@section('isi')
    <div class="content">
        <div class="row">
            <div class="col">
                <div class="mt-4 d-flex justify-content-end">
                    <a href="{{ url('dashboard/distributor/tambah') }}" class="btn btn-primary">Tambah Distributor</a>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Data Distributor</h4>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">

                            <table class="table">
                                <thead>
                                    <th>No</th>
                                    <th>Nama Distributor</th>
                                    <th>Telepon</th>
                                    <th>Alamat</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>

                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->nama_distributor }}</td>
                                            <td>{{ $item->telepon }}</td>
                                            <td>{{ $item->alamat }}</td>
                                            <td>
                                                <a href="{{ url('dashboard/distributor/edit/' . $item->id) }}"
                                                    class="btn btn-success">Edit</a>
                                                <a href="{{ url('dashboard/distributor/hapus/' . $item->id) }}" id="delete"
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
