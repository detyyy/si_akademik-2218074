@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-dark">Tambah Data Mapel</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <form action="{{ route('mapel.store') }}" method="POST">
                            @csrf
                            <div class="row mx-2 my-2">
                                <div class="table">
                                    <label for="mapel">Mata Pelajaran</label>
                                    <input type="text" name="pelajaran" id="mapel" class="form-control" placeholder=""
                                        aria-label="First">
                                </div>
                                <br>
                                <div class="table">
                                    <label for="mapel">Nama Mapel</label>
                                    <select name="mapel" id="mapel" class="form-control">
                                        <option value="--Pilih--">--Pilih--</option>
                                        <option value="Kimia">Kimia</option>
                                        <option value="Fisika">Fisika</option>
                                    </select>
                                </div>
                                <div class="table">
                                    <label for="id_jadwal">Jadwal</label>
                                    <select class="form-control" name="id_jadwal" id="id_jadwal">
                                        <option hidden>Pilih Jurusan</option>
                                        <option disabled="disabled" default="true">Pilih Jurusan</option>
                                        @foreach ($jurusan as $item)
                                            <option value="{{ $item->id_jadwal }}"
                                                @if (old('id_jadwal') == $item->id_jadwal) selected @endif>{{ $item->jurusan }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <br>
                                <!-- <div class="table">
                                    <label for="id_guru">Guru Pengajar</label>
                                    <select class="form-control" name="id_guru" id="id_guru">
                                        <option hidden>Pilih Guru Pengajar</option>
                                        <option disabled="disabled" default="true">Pilih Guru</option>
                                        @foreach ($guru as $item)
                                            <option value="{{ $item->id_guru }}"
                                                @if (old('id_guru') == $item->id_guru) selected @endif>{{ $item->nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <br> -->
                                {{-- <div class="table">
                                    <label for="id_tahun">Tahun Ajaran</label>
                                    <input type="year" name="id_tahun" class="form-control" placeholder=""
                                        aria-label="First">
                                </div> --}}
                                <div class="table">
                                    <label for="tahun">Tahun Ajaran</label>
                                    <select name="tahun" id="tahun" class="form-control" placeholder="" aria-label="First">
                                      <?php
                                      $currentYear = date('Y');
                                      for ($year = $currentYear - 10; $year <= $currentYear + 10; $year++) {
                                          echo "<option value='$year'>$year</option>";
                                      }
                                      ?>
                                    </select>
                                  </div>
                            </div>
                            <button type="submit" class="btn btn-dark">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
