@extends('layout')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3>Sửa họa sĩ</h3>
                    <a href="{{route('artworks.index')}}" class="btn btn-primary float-end">Danh sách</a>

                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('artworks.update',$artwork->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Tên họa sĩ</strong>
                            <input type="text" name="artist_name" id="artist_name" class="form-control" placeholder="Nhập tên họa sĩ">
                        </div>
                        <div class="form-group">
                            <strong>Miêu tả</strong>
                            <input type="text" name="description" id="description" class="form-control" placeholder="Nhập miêu tả">
                        </div>
                        <div class="form-group">
                            <strong>Loại nghệ thuật</strong>
                            <select name="art_type" id="art_type" class="form-control">
                                <option value="hội họa" {{ $artwork->art_type == 'hội họa' ? 'selected' : '' }}>Hội họa</option>
                                <option value="âm nhạc" {{ $artwork->art_type == 'âm nhạc' ? 'selected' : '' }}>Âm nhạc</option>
                                <option value="văn học" {{ $artwork->art_type == 'văn học' ? 'selected' : '' }}>Văn học</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <strong>Liên kết truyển thông</strong>
                            <input type="text" name="media_link" id="media_link" class="form-control" placeholder="Nhập liên kết truyền thông">
                        </div>
                        <div class="form-group">
                            <strong>Liên kết ảnh bìa</strong>
                            <input type="text" name="cover_image" id="cover_image" class="form-control" placeholder="Nhập liên kết ảnh bìa">
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-success mt-2">Sửa</button>
            </form>
        </div>
    </div>
</div>
@endsection