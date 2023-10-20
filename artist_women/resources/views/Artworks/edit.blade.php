@extends('layout.app')

@section('content')
    <div class="content">
        <form action="{{ route('ArtWorks.update', $Artworks->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="artist_name">Tên lớp:</label>
                <input type="text" class="form-control" id="name_class" name="name_class" value="{{ $myClass->name_class }}">
            </div>

            <!-- Thêm các trường thông tin khác của lớp -->

            <button type="submit" class="btn btn-primary">Lưu</button>
        </form>
    </div>
@endsection