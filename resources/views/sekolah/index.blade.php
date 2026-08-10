@extends('layouts.layouts_app')

@section('content')

<div class="card">

    <div class="card-header d-flex justify-content-between align-items-center">
        <h3>Data Sekolah Penerima</h3>

        <a href="#" class="btn btn-success">
            <i class="bi bi-plus-circle"></i>
            Tambah Sekolah
        </a>
    </div>

    <div class="card-body">

        <div class="row mb-3">
            <div class="col-md-4">
                <input type="text"
                       class="form-control"
                       placeholder="Cari NPSN atau Nama Sekolah...">
            </div>

            <div class="col-md-2">
                <button class="btn btn-primary">
                    <i class="bi bi-search"></i> Cari
                </button>
            </div>
        </div>

        <table class="table table-bordered table-hover">

            <thead>
                <tr>
                    <th>No</th>
                    <th>NPSN</th>
                    <th>Nama Sekolah</th>
                    <th>Jenjang</th>
                    <th>Alamat</th>
                    <th>Jumlah Siswa</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <td>1</td>
                    <td>102001</td>
                    <td>SD Negeri 01 Medan</td>
                    <td>SD</td>
                    <td>Medan</td>
                    <td>350</td>
                    <td>
                        <span class="badge bg-success">
                            Aktif
                        </span>
                    </td>
                    <td>
                        👁 ✏ 🗑
                    </td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>102002</td>
                    <td>SD Negeri 02 Medan</td>
                    <td>SD</td>
                    <td>Medan</td>
                    <td>275</td>
                    <td>
                        <span class="badge bg-success">
                            Aktif
                        </span>
                    </td>
                    <td>
                        👁 ✏ 🗑
                    </td>
                </tr>

            </tbody>

        </table>

    </div>

</div>

@endsection