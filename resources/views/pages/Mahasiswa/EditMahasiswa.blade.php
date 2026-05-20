@extends('app')
@section('content')
    <div class="col-xl">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Form Edit Mahasiswa</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('update.mahasiswa', $mahasiswa->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-6">
                        <label class="form-label">Nim</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class="icon-base ti tabler-user"></i></span>
                            <input type="text" class="form-control" name="nim" placeholder="Masukkan Nim Anda.."
                                value="{{ $mahasiswa->nim }}" />
                        </div>
                    </div>
                    <div class="mb-6">
                        <label class="form-label">Nama</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class="icon-base ti tabler-user"></i></span>
                            <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Anda.."
                                value="{{ $mahasiswa->nama }}" />
                        </div>
                    </div>
                    <div class="mb-6">
                        <label class="form-label">Alamat</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class="icon-base ti tabler-user"></i></span>
                            <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat Anda.."
                                value="{{ $mahasiswa->alamat }}" />
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Kirim</button>
                </form>
            </div>
        </div>
    </div>
@endsection
