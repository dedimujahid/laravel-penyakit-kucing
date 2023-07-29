<!-- resources/views/deteksi/form.blade.php -->
@extends('layouts.app')

@section('content')

<div class = "container">
    <h2>Form Deteksi Penyakit Kucing</h2>
    <form action = "{{ route('deteksi.deteksi') }}" method = "post">
        @csrf
        <div   class = "form-group">
        <label for   = "cat_name">Nama Kucing</label>
        <input type  = "text" id = "cat_name" name = "cat_name" class = "form-control" required>
        </div>
        <div   class = "form-group">
        <label for   = "age">Usia Kucing (bulan)</label>
        <input type  = "number" id = "age" name = "age" class = "form-control" required>
        </div>
        <div class = "form-group">
            <label>Gejala yang Dialami</label><br>
            @foreach ($gejala as $g)
                <label>
                    <input type = "checkbox" name = "gejala_ids[]" value = "{{ $g->gejala }}" >
                    {{ $g->gejala }}
                </label><br>
            @endforeach
        </div>
        <button type = "submit" class = "btn btn-primary">Deteksi</button>
    </form>
</div>
@endsection