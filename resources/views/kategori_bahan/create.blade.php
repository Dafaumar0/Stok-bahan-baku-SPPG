@extends('layouts_app')

@section('title', 'Tambah Kategori')

@section('breadcrumb')
    <a href="{{ route('kategori.index') }}" class="text-decoration-none">
        Kategori
    </a>

    <span class="mx-2">/</span>

    <span class="bc-current">Tambah Kategori</span>
@endsection

@section('content')

<div class="card border-0 shadow-sm">

    <div class="card-header bg-white py-3">
        <h5 class="mb-0 fw-semibold">
            Tambah Kategori
        </h5>
    </div>

    <div class="card-body">

        <form action="{{ route('kategori.store') }}" method="POST">

            @csrf

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="form-label">
                        Kode Kategori
                    </label>

                    <input
                        type="text"
                        name="kode_kategori"
                        class="form-control @error('kode_kategori') is-invalid @enderror"
                        value="{{ old('kode_kategori') }}"
                        placeholder="Masukkan kode kategori">

                    @error('kode_kategori')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">
                        Nama Kategori
                    </label>

                    <input
                        type="text"
                        name="nama_kategori"
                        class="form-control @error('nama_kategori') is-invalid @enderror"
                        value="{{ old('nama_kategori') }}"
                        placeholder="Masukkan nama kategori">

                    @error('nama_kategori')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">
                        Kelompok
                    </label>

                    <select
                        name="kelompok"
                        class="form-select @error('kelompok') is-invalid @enderror">

                        <option value="">-- Pilih Kelompok --</option>

                        <option value="Pokok"
                            {{ old('kelompok') == 'Pokok' ? 'selected' : '' }}>
                            Pokok
                        </option>

                        <option value="Lauk Pauk"
                            {{ old('kelompok') == 'Lauk Pauk' ? 'selected' : '' }}>
                            Lauk Pauk
                        </option>

                        <option value="Pendukung"
                            {{ old('kelompok') == 'Pendukung' ? 'selected' : '' }}>
                            Pendukung
                        </option>

                    </select>

                    @error('kelompok')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">
                        Keterangan
                    </label>

                    <textarea
                        name="keterangan"
                        rows="3"
                        class="form-control @error('keterangan') is-invalid @enderror"
                        placeholder="Contoh: Beras, Jagung, Kentang">{{ old('keterangan') }}</textarea>

                    @error('keterangan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

            </div>

            <div class="d-flex justify-content-end gap-2 mt-3">

                <a href="{{ route('kategori.index') }}"
                    class="btn btn-light border">
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