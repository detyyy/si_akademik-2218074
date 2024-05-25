@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-secondary">Create Data Rapot</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <form action="{{ route('rapot.store') }}" method="POST">
                            @csrf
                            <div class="row mx-2 my-2">
                                <div class="table">
                                    <label for="Nilai">Nilai</label>
                                    <input type="text" name="Nilai" id="Nilai" class="form-control" placeholder=""
                                        aria-label="First">
                                </div>
                                <br>
                                <div class="table">
                                    <label for="Mapel">Mapel</label>
                                    <input type="text" name="Mapel" id="Mapel" class="form-control" placeholder=""
                                        aria-label="First">
                                </div>
                                <br>
                                <div class="table">
                                    <label for="Guru">Guru</label>
                                    <input type="text" name="Guru" id="Guru" class="form-control" placeholder=""
                                        aria-label="First">
                                </div>
                                <!-- <br>
                                <div class="table">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" name="alamat" id="alamat" class="form-control" placeholder=""
                                        aria-label="First">
                                </div>
                                <br>
                                <div class="table">
                                    <label for="no_telp">No. Telpon</label>
                                    <input type="text" name="no_telp" id="no_telp" class="form-control" placeholder=""
                                        aria-label="First">
                                </div>
                                <br>
                                <div class="table">
                                    <label for="agama">Agama</label>
                                    <select name="agama" id="agama" class="form-control">
                                        <option value="Pilih">-- Pilih --</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Katholik">katholik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                    </select>
                                </div>
                                <br>
                                <div class="table">
                                    <label for="jabatan">Jabatan</label>
                                    <select name="jabatan" id="jabatan" class="form-control">
                                        <option value="Pilih">-- Pilih --</option>
                                        <option value="Kepala Sekolah">Kepala Sekolah</option>
                                        <option value="Wakil Kepala Sekolah">Wakil Kepala Sekolah</option>
                                        <option value="Kepala Jurusan">Kepala Jurusan</option>
                                        <option value="Guru">Guru</option>
                                        <option value="Pustakawan">Pustakawan</option>
                                        <option value="Tata Usaha">Tata Usaha</option>
                                        <option value="Admin">Admin</option>
                                        <option value="Cleaning Service">Cleaning Service</option>
                                        <option value="Layanan Teknis">Layanan Teknis</option>

                                    </select>
                                </div> -->
                                <br>
                                <div class="table">
                                    <button type="submit" class="btn btn-dark">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
