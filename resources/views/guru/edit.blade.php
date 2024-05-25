@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-dark">Update Data Guru</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <form action="{{ route('guru.update', $guru->id_guru) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="row mx-2 my-2">
                            <div class="table">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" class="form-control" placeholder=""
                                    aria-label="First" value="{{ old('nama', $guru->nama) }}">
                            </div>
                            <br>
                            <div class="table">
                                <label for="NIP">NIP</label>
                                <input type="text" name="NIP" class="form-control" placeholder=""
                                    aria-label="First" value="{{ old('NIP', $guru->NIP) }}">
                            </div>
                            <br>
                            <div class="table">
                                <label for="Alamat">Alamat</label>
                                <input type="text" name="Alamat" class="form-control" placeholder=""
                                    aria-label="First" value="{{ old('Alamat', $guru->Alamat) }}">
                            </div>
                            <br>
                            <div class="table">
                                <label for="mapel_yg_diajarkan">mapel_yg_diajarkan</label>
                                <input type="text" name="mapel_yg_diajarkan" class="form-control" placeholder=""
                                    aria-label="First" value="{{ old('mapel_yg_diajarkan', $guru->mapel_yg_diajarkan) }}">
                            </div>
                            <br>
                            <!-- <div class="table">
                                <label for="agama">Agama</label>
                                <select name="agama" id="agama" class="form-control">
                                    <option value="Pilih">Pilih</option>
                                    <option value="Islam" @if($guru->agama == "Islam") selected @endif>Islam</option>
                                    <option value="Kristen" @if($guru->agama == "Kristen") selected @endif>Kristen</option>
                                    <option value="Katholik" @if($guru->agama == "katholik") selected @endif>katholik</option>
                                    <option value="Hindu" @if($guru->agama == "Hindu") selected @endif>Hindu</option>
                                    <option value="Budha" @if($guru->agama == "Budha") selected @endif>Budha</option>
                                </select>
                            </div>
                            <br>
                            <div class="table">
                                <label for="pengajar">Pengajar</label>
                                <input type="text" name="pengajar" class="form-control" placeholder=""
                                    aria-label="First" value="{{ old('pengajar', $guru->pengajar) }}">
                            </div>
                            <br> -->
                        </div>
                            <button type="submit" class="btn btn-dark">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
