@extends('layouts.layouts_app')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Data Kategori Bahan</h2>

        <a href="{{ route('kategori.create') }}" class="btn btn-success">
            <i class="bi bi-plus-circle"></i> Tambah Kategori
        </a>
    </div>

    <div class="card">
        <div class="card-header">
            <form>
                <div class="row">
                    <div class="col-md-4">
                        <input
                            type="text"
                            class="form-control"
                            placeholder="Cari kategori bahan...">
                    </div>

                    <div class="col-md-2">
                        <button class="btn btn-primary w-100">
                            <i class="bi bi-search"></i> Cari
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered table-hover align-middle">

                    <thead class="table-light">
                        <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Nama Kategori</th>
                            <th>Kelompok</th>
                            <th>Keterangan</th>
                            <th width="150">Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>1</td>
                            <td>KTG-001</td>
                            <td>Sumber Karbohidrat</td>
                            <td>
                                <span class="badge bg-success">
                                    Pokok
                                </span>
                            </td>
                            <td>Beras, Jagung, Kentang</td>
                            <td>
                                <button class="btn btn-info btn-sm">
                                    <i class="bi bi-eye"></i>
                                </button>

                                <button class="btn btn-warning btn-sm text-white">
                                    <i class="bi bi-pencil"></i>
                                </button>

                                <button class="btn btn-danger btn-sm">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>KTG-002</td>
                            <td>Sumber Protein</td>
                            <td>
                                <span class="badge bg-warning text-dark">
                                    Lauk Pauk
                                </span>
                            </td>
                            <td>Ayam, Ikan, Telur</td>
                            <td>
                                <button class="btn btn-info btn-sm">
                                    <i class="bi bi-eye"></i>
                                </button>

                                <button class="btn btn-warning btn-sm text-white">
                                    <i class="bi bi-pencil"></i>
                                </button>

                                <button class="btn btn-danger btn-sm">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>KTG-003</td>
                            <td>Sayur</td>
                            <td>
                                <span class="badge bg-primary">
                                    Pendukung
                                </span>
                            </td>
                            <td>Bayam, Kangkung, Wortel</td>
                            <td>
                                <button class="btn btn-info btn-sm">
                                    <i class="bi bi-eye"></i>
                                </button>

                                <button class="btn btn-warning btn-sm text-white">
                                    <i class="bi bi-pencil"></i>
                                </button>

                                <button class="btn btn-danger btn-sm">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>KTG-004</td>
                            <td>Buah</td>
                            <td>
                                <span class="badge bg-primary">
                                    Pendukung
                                </span>
                            </td>
                            <td>Pisang, Pepaya, Jeruk</td>
                            <td>
                                <button class="btn btn-info btn-sm">
                                    <i class="bi bi-eye"></i>
                                </button>

                                <button class="btn btn-warning btn-sm text-white">
                                    <i class="bi bi-pencil"></i>
                                </button>

                                <button class="btn btn-danger btn-sm">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>5</td>
                            <td>KTG-005</td>
                            <td>Bumbu</td>
                            <td>
                                <span class="badge bg-secondary">
                                    Pendukung
                                </span>
                            </td>
                            <td>Garam, Gula, Bawang</td>
                            <td>
                                <button class="btn btn-info btn-sm">
                                    <i class="bi bi-eye"></i>
                                </button>

                                <button class="btn btn-warning btn-sm text-white">
                                    <i class="bi bi-pencil"></i>
                                </button>

                                <button class="btn btn-danger btn-sm">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>
                        </tr>

                    </tbody>

                </table>

            </div>

        </div>
    </div>

</div>

@endsection