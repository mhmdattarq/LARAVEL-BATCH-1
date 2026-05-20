@extends('app')
@section('content')
    <!-- Basic Bootstrap Table -->
    <div class="card">
        <h5 class="card-header">Tabel Dosen</h5>
        <div class="table-responsive text-nowrap">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th>Actions</th>
                        <th>No</th>
                        <th>Nik</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($dosen as $item)
                        <tr>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="icon-base ti tabler-dots-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                class="icon-base ti tabler-pencil me-2"></i> Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                class="icon-base ti tabler-trash me-2"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nik }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->alamat }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!--/ Basic Bootstrap Table -->
@endsection
