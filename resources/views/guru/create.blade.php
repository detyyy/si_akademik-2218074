@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-secondary">Create Data Guru</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <form action="{{ route('guru.store') }}" method="POST">
                            @csrf
                            <div class="row mx-2 my-2">
                                <div class="table">
                                    <label for="nama">Nama</label>
                                    <input type="text" name="nama" class="form-control" placeholder=""
                                        aria-label="First">
                                </div>
                                <br>
                                <div class="table">
                                    <label for="NIP">NIP</label>
                                    <input type="text" name="NIP" class="form-control" placeholder=""
                                        aria-label="First">
                                </div>
                                <br>
                                <div class="table">
                                    <label for="Alamat">Alamat</label>
                                    <input type="text" name="Alamat" class="form-control" placeholder=""
                                        aria-label="First">
                                </div>
                                <br>
                                <div class="table">
                                    <label for="mapel_yg_diajarkan">Mapel Yang Diajarkan</label>
                                    <input type="text" name="mapel_yg_diajarkan" class="form-control" placeholder=""
                                        aria-label="First">
                                </div>
                                <!-- <br>
                                <div class="table">
                                    <label for="agama">Agama</label>
                                    <select name="agama" id="agama" class="form-control">
                                        <option value="Pilih">Pilih</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Katholik">katholik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                    </select>
                                </div>
                                <br>
                                <div class="table">
                                    <label for="pengajar">Pengajar</label>
                                    <input type="text" name="pengajar" class="form-control" placeholder=""
                                        aria-label="First">
                                </div> -->
                                <br>
                                <div class="table">
                                    <button type="submit" class="btn btn-dark" name="save">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
