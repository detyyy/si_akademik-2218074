@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-dark">Update Data Mapel</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <form action="{{ route('mapel.update', $pelajaran->id_mapel) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="row mx-2 my-2">
                            <div class="table">
                                <label for="pelajaran">Mata Pelajaran</label>
                                <input type="text" name="pelajaran" id="pelajaran" class="form-control" placeholder=""
                                    aria-label="First" value="{{ old('pelajaran', $pelajaran->pelajaran) }}">
                            </div>
                            <br>
                            <div class="table">
                                <label for="Mapel">Jenis Mapel</label>
                                <select name="Mapel" id="Mapel" class="form-control">
                                    <option value="--Pilih--">--Pilih--</option>
                                    <option value="Kimia" @if($pelajaran->Mapel == "Kimia") selected @endif>Kimia</option>
                                    <option value="Fisika"@if($pelajaran->Mapel == "Fisika") selected @endif>Fisika</option>
                                </select>
                            </div>
                            <div class="table">
                                <label for="id_mapel">Mapel</label>
                                <select class="form-control" name="id_mapel" id="id_mapel">
                                    <option hidden>Pilih Mapel</option>
                                    <option disabled="disabled" default="true">Pilih Mapel</option>
                                    @foreach ($Mapel as $id => $item)
                                    <option value="{{ $item->id_mapel }}"
                                        @if (old('id_mapel') == $item->id_mapel) selected @endif>{{ $item->mapel }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <br>
                            <div class="table">
                                <label for="id_guru">Guru</label>
                                <select class="form-control" name="id_guru" id="id_guru">
                                    <option hidden>Pilih Guru</option>
                                    <option disabled="disabled" default="true">Pilih Guru</option>
                                    @foreach ($guru as $id => $item)
                                        <option value="{{ $item->id_guru }}"
                                            {{ $item->name == $id ? 'selected' : '' }}>{{ $item->nama }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
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
