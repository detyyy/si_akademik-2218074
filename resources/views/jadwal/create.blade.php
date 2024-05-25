@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-dark">Tambah Data Jadwal Pelajaran</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <form action="{{ route('jadwal.store') }}" method="POST">
                            @csrf
                            <div class="row mx-2 my-2">
                                <div class="table">
                                    <label for="hari">Hari</label>
                                    <select name="hari" id="hari" class="form-control">
                                        <option hidden>Pilih Hari</option>
                                        <option value="Senin">Senin</option>
                                        <option value="Selasa">Selasa</option>
                                        <option value="Rabu">Rabu</option>
                                        <option value="Kamis">Kamis</option>
                                        <option value="Jumat">Jumat</option>
                                    </select>
                                </div>
                                <br>
                                <div class="table">
                                    <label for="Nama_Mapel">Nama_Mapel</label>
                                    <input type="text" name="Nama_Mapel" id='Nama_Mapel' class="form-control" placeholder=""
                                        aria-label="First">
                                </div>
                                <div class="table">
                                    <label for="Thn_Ajaran">Thn_Ajaran</label>
                                    <input type="text" name="Thn_Ajaran" id='Thn_Ajaran' class="form-control" placeholder=""
                                        aria-label="First">
                                </div>
                                <div class="table">
                                    <label for="id_jadwal">Jadwal</label>
                                    <select class="form-control" name="id_jadwal" id="id_jadwal">
                                        <option hidden>Pilih Jadwal</option>
                                        <option disabled="disabled" default="true">Pilih Jadwal</option>
                                        @foreach ($jurusan as $item)
                                            <option value="{{ $item->id_jadwal }}"
                                                @if (old('id_jadwal') == $item->id_jadwal) selected @endif>{{ $item->jurusan }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="table">
                                    <label for="id_mapel">Mapel</label>
                                    <select class="form-control" name="id_mapel" id="id_mapel">
                                        <option hidden>Pilih Kelas</option>
                                        <option disabled="disabled" default="true">Pilih Mapel</option>
                                        @foreach ($kelas as $item)
                                            <option value="{{ $item->id_mapel }}"
                                                @if (old('id_mapel') == $item->id_mapel) selected @endif>{{ $item->kelas }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <br>
                                <!-- <div class="table">
                                    <label for="id_matapelajaran">Mata Pelajaran</label>
                                    <select class="form-control" name="id_matapelajaran" id="id_matapelajaran">
                                        <option hidden>Pilih Mata Pelajaran</option>
                                        <option disabled="disabled" default="true">Pilih Mata Pelajaran</option>
                                        @foreach ($matapelajaran as $item)
                                            <option value="{{ $item->id_matapelajaran }}"
                                                @if (old('id_matapelajaran') == $item->id_matapelajaran) selected @endif>{{ $item->pelajaran }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div> -->
                                <br>
                            </div>
                            <button type="submit" class="btn btn-dark">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
