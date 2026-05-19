@extends('app')
@section('content')
    <div class="col-xl">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Form Tambah Jurusan</h5>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    @csrf
                    <div class="mb-6">
                        <label class="form-label">Nim</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class="icon-base ti tabler-user"></i></span>
                            <input type="text" class="form-control" name="nim" placeholder="Masukkan Nim Anda.." />
                        </div>
                    </div>
                    <div class="mb-6">
                        <label class="form-label">Nama</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class="icon-base ti tabler-user"></i></span>
                            <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Anda.." />
                        </div>
                    </div>
                    <div class="mb-6">
                        <label class="form-label">Alamat</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class="icon-base ti tabler-user"></i></span>
                            <input type="text" class="form-control" name="alamat"
                                placeholder="Masukkan Alamat Anda.." />
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Kirim</button>
                </form>
            </div>
        </div>
    </div>
@endsection
