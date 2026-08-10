@extends('layouts_app')

@section('content')

<div class="card">

    <div class="card-header d-flex justify-content-between align-items-center">
        <h2>Data Supplier</h2>

        <a href="{{ route('supplier.create') }}" class="btn btn-success">
            <i class="bi bi-plus-circle"></i>
            Tambah Supplier
        </a>
    </div>

    <div class="card-body">

        <div class="row mb-3">
            <div class="col-md-4">
                <input type="text"
                       class="form-control"
                       placeholder="Cari supplier...">
            </div>

            <div class="col-md-2">
                <button class="btn btn-primary">
                    Cari
                </button>
            </div>
        </div>

        <table class="table table-bordered table-hover">

            <thead class="table-light">
                <tr>
                    <th>No</th>
                    <th>Kode Supplier</th>
                    <th>Nama Supplier</th>
                    <th>PIC</th>
                    <th>No. HP</th>
                    <th>Kota</th>
                    <th>Status</th>
                    <th width="150">Action</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <td>1</td>
                    <td>SUP-001</td>
                    <td>CV Pangan Sejahtera</td>
                    <td>Andi Saputra</td>
                    <td>081234567890</td>
                    <td>Medan</td>
                    <td>
                        <span class="badge bg-success">
                            Aktif
                        </span>
                    </td>
                    <td>
                        <button class="btn btn-info btn-sm">
                            👁
                        </button>

                        <button class="btn btn-warning btn-sm">
                            ✏
                        </button>

                        <button class="btn btn-danger btn-sm">
                            🗑
                        </button>
                    </td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>SUP-002</td>
                    <td>PT Berkah Tani Nusantara</td>
                    <td>Budi Santoso</td>
                    <td>082345678901</td>
                    <td>Deli Serdang</td>
                    <td>
                        <span class="badge bg-success">
                            Aktif
                        </span>
                    </td>
                    <td>
                        <button class="btn btn-info btn-sm">👁</button>
                        <button class="btn btn-warning btn-sm">✏</button>
                        <button class="btn btn-danger btn-sm">🗑</button>
                    </td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>SUP-003</td>
                    <td>UD Sumber Protein</td>
                    <td>Siti Rahma</td>
                    <td>083456789012</td>
                    <td>Binjai</td>
                    <td>
                        <span class="badge bg-success">
                            Aktif
                        </span>
                    </td>
                    <td>
                        <button class="btn btn-info btn-sm">👁</button>
                        <button class="btn btn-warning btn-sm">✏</button>
                        <button class="btn btn-danger btn-sm">🗑</button>
                    </td>
                </tr>

                <tr>
                    <td>4</td>
                    <td>SUP-004</td>
                    <td>CV Buah Segar Indonesia</td>
                    <td>Dewi Lestari</td>
                    <td>084567890123</td>
                    <td>Medan</td>
                    <td>
                        <span class="badge bg-success">
                            Aktif
                        </span>
                    </td>
                    <td>
                        <button class="btn btn-info btn-sm">👁</button>
                        <button class="btn btn-warning btn-sm">✏</button>
                        <button class="btn btn-danger btn-sm">🗑</button>
                    </td>
                </tr>

                <tr>
                    <td>5</td>
                    <td>SUP-005</td>
                    <td>PT Sayur Makmur Abadi</td>
                    <td>Rizky Pratama</td>
                    <td>085678901234</td>
                    <td>Langkat</td>
                    <td>
                        <span class="badge bg-secondary">
                            Nonaktif
                        </span>
                    </td>
                    <td>
                        <button class="btn btn-info btn-sm">👁</button>
                        <button class="btn btn-warning btn-sm">✏</button>
                        <button class="btn btn-danger btn-sm">🗑</button>
                    </td>
                </tr>

            </tbody>

        </table>

    </div>

</div>

@endsection