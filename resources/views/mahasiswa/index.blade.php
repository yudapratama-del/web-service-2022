@extends ('template.master')
@section('judul', 'Data Mahasiswa')
@section('isi') 
    <H1>Data Mahasiswa</H1>

    <table class="table table-hover table-boordered table-success">
        <thead>
            <tr>
                <th>NO</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Semester</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $row)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $row->nim }}</td>
                <td>{{ $row->nama_mahasiswa }}</td>
                <td>{{ $row->semester }}</td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection 