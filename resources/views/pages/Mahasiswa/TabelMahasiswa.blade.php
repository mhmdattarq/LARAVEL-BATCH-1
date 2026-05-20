@extends('app')
@section('content')
    <!-- Basic Bootstrap Table -->
    <div class="card">
        <h5 class="card-header">Tabel Mahasiswa</h5>
        <div class="table-responsive text-nowrap">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nim</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($mahasiswas as $mahasiswa)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $mahasiswa->nim }}</td>
                            <td>{{ $mahasiswa->nama }}</td>
                            <td>{{ $mahasiswa->alamat }}</td>
                            <td>
                                <a href="{{ route('edit.mahasiswa', $mahasiswa->id) }}" class="btn btn-warning">Edit</a> | <a
                                    href="" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!--/ Basic Bootstrap Table -->
@endsection
