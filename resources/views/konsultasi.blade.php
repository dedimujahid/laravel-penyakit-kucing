@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Konsultasi Penyakit Kucing') }}</div>

                <div class="card-body">
                    <form action="{{ route('konsultasi.proses') }}" method="POST">
                        @csrf
                        <div   class = "form-group">
                        <label for   = "cat_name">Nama Kucing</label>
                        <input type  = "text" id = "cat_name" name = "cat_name" class = "form-control" required>
                        </div>
                        <div   class = "form-group">
                        <label for   = "age">Usia Kucing (bulan)</label>
                        <input type  = "number" id = "age" name = "age" class = "form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="gejala_ids">Pilih Gejala yang Dialami Kucing:</label>
                            <select name="gejala_ids[]" id="gejala_ids" class="form-control" multiple>
                                @foreach ($gejala_kucing as $gejala)
                                    <option value="{{ $gejala->id }}">{{ $gejala->gejala }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Konsultasi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
