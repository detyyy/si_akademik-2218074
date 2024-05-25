@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-dark">Update Data Rapot</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <form action="{{ route('rapot.update', $rapot->id_rapot) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="row mx-2 my-2">
                        <div class="table">
                                <label for="Nilai">Nilai</label>
                                <input type="text" name="Nilai" id="Nilai" class="form-control" placeholder=""
                                    aria-label="First" value="{{ old('Nilai', $rapot->Nilai) }}">
                            </div>
                            <div class="table">
                                <label for="Mapel">Mapel</label>
                                <input type="text" name="Mapel" id="Mapel" class="form-control" placeholder=""
                                    aria-label="First" value="{{ old('Mapel', $rapot->Mapel) }}">
                            </div>
                            <br>
                            <div class="table">
                                <label for="Guru">Guru</label>
                                <input type="text" name="Guru" id="Guru" class="form-control" placeholder=""
                                    aria-label="First" value="{{ old('Guru', $rapot->Guru) }}">
                            </div>
                            <!-- <br>
                            <div class="table">
                                <label for="jenis_kelamin_pegawai">jenis_kelamin_pegawai</label>
                                <input type="date" name="jenis_kelamin_pegawai" id="jenis_kelamin_pegawai" class="form-control" placeholder=""
                                    aria-label="First" value="{{ old('jenis_kelamin_pegawai', $pegawai->jenis_kelamin_pegawai) }}">
                            </div>
                            <br>

                            <div class="table">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" id="alamat" class="form-control" placeholder=""
                                    aria-label="First" value="{{ old('alamat', $pegawai->alamat) }}">
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
