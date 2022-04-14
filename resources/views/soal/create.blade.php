@extends('template.master')
@section('judul', 'Tambah Informasi Soal')
@section('isi')
<div class="row mt-4">
    <div class="col-6">
        <div class="card">
            <div class="card-header">Tambah Informasi Soal
                <a class="btn btn-sm btn-info float-right" href="{{ url('info-soal') }}">
                    <i class="fa-solid fa-backward"></i> Kembali
                </a>
            </div>
            <div class="card-body">
                <form action="{{ route('soal.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Nama Mata Kuliah</label>
                        <input type="text" name="nama_mk" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Dosen</label>
                        <input type="text" name="dosen" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Jumlah Soal</label>
                        <input type="integer" name="jumlah_soal" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <input type="text" name="keterangan" class="form-control">
                    </div>
                    <br>
                    <input type="submit" class="btn btn-primary" name="submit" value="Simpan Informasi Soal">
                    <a class="btn btn-warning float-right" href="{{ url('info-soal') }}">
                        <i class="fas fa-backward"></i> Cancel
                    </a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection