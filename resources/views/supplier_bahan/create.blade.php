@extends('layouts_app')

@section('title', 'Tambah Supplier')

@section('breadcrumb')
    <a href="{{ route('supplier.index') }}" class="text-decoration-none">
        Supplier
    </a>

    <span class="mx-2">/</span>

    <span class="bc-current">Tambah Supplier</span>
@endsection

@section('content')

<div class="card border-0 shadow-sm">

    <div class="card-header bg-white py-3">
        <h5 class="mb-0 fw-semibold">
            Tambah Supplier
        </h5>
    </div>

    <div class="card-body">

        <form action="{{ route('supplier.store') }}" method="POST">

            @csrf

            <div class="row">

                <!-- Kode Supplier -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">Kode Supplier</label>

                    <input
                        type="text"
                        name="kode_supplier"
                        class="form-control @error('kode_supplier') is-invalid @enderror"
                        value="{{ old('kode_supplier') }}"
                        placeholder="Contoh : SUP-001">

                    @error('kode_supplier')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Nama Supplier -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">Nama Supplier</label>

                    <input
                        type="text"
                        name="nama_supplier"
                        class="form-control @error('nama_supplier') is-invalid @enderror"
                        value="{{ old('nama_supplier') }}"
                        placeholder="Masukkan nama supplier">

                    @error('nama_supplier')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- PIC -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">Nama PIC</label>

                    <input
                        type="text"
                        name="pic"
                        class="form-control @error('pic') is-invalid @enderror"
                        value="{{ old('pic') }}"
                        placeholder="Masukkan nama penanggung jawab">

                    @error('pic')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Nomor HP -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">Nomor Telepon</label>

                    <input
                        type="text"
                        name="telepon"
                        class="form-control @error('telepon') is-invalid @enderror"
                        value="{{ old('telepon') }}"
                        placeholder="08xxxxxxxxxx">

                    @error('telepon')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Jenis Supplier -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">Jenis Supplier</label>

                    <select
                        name="jenis_supplier"
                        class="form-select @error('jenis_supplier') is-invalid @enderror">

                        <option value="">-- Pilih Jenis Supplier --</option>
                        <option value="Beras">Beras</option>
                        <option value="Protein Hewani">Protein Hewani</option>
                        <option value="Protein Nabati">Protein Nabati</option>
                        <option value="Sayur">Sayur</option>
                        <option value="Buah">Buah</option>
                        <option value="Bumbu">Bumbu</option>
                    </select>

                    @error('jenis_supplier')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Status -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">Status</label>

                    <select
                        name="status"
                        class="form-select @error('status') is-invalid @enderror">

                        <option value="Aktif">Aktif</option>
                        <option value="Nonaktif">Nonaktif</option>

                    </select>

                    @error('status')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Alamat -->
                <div class="col-md-12 mb-3">
                    <label class="form-label">Alamat</label>

                    <textarea
                        name="alamat"
                        rows="4"
                        class="form-control @error('alamat') is-invalid @enderror"
                        placeholder="Masukkan alamat supplier">{{ old('alamat') }}</textarea>

                    @error('alamat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

            </div>

            <div class="d-flex justify-content-end gap-2 mt-3">

                <a href="{{ route('supplier.index') }}"
                    class="btn btn-secondary">
                    Kembali
                </a>

                <button type="submit" class="btn btn-success">
                    <i class="bi bi-save me-1"></i>
                    Simpan Data
                </button>

            </div>

        </form>

    </div>

</div>

@endsection