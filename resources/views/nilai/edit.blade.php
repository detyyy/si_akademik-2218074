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
                        <form action="{{ route('nilai.update',$nilai ->id_nilai)}}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="row mx-2 my-2">
                                <div class="table">
                                    <label for="nilai">Update Data Nilai</label>
                                    <input type="text" name="nilai" id='nilai 'class="form-control" placeholder=""
                                        aria-label="First" value="{{ old('nilai', $nilai->nilai) }}">
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
