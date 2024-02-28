@extends('layout')
@section('content')
<div class="contrainer">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3>Danh Sách</h3>
                </div>
                <div class="col-md-6">
                    <a href="{{route('artworks.create')}}" class="btn btn-success float-end">Thêm mới</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            @if(Session::has('thongbao'))
            <div class="alert alert-success">
                {{Session::get('thongbao')}}
            </div>

            @endif
            <table class="table table-bordered">
                <thead>
                    <th>Mã họa sĩ</th>
                    <th>Tên họa sĩ</th>
                    <th>Miêu tả</th>
                    <th>Loại nghệ thuật</th>
                    <th>Liên kết truyền thông</th>
                    <th>Ảnh bìa</th>
                    <th>Xem</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </thead>
                <tbody>
                    @foreach($artworks as $artwork)
                        <tr>
                            <td>{{$artwork->id}}</td>
                            <td>{{$artwork->artist_name}}</td>
                            <td>{{ $artwork->description }}</td>
                            <td>{{ $artwork->art_type }}</td>
                            <td>{{ $artwork->media_link }}</td>
                            <td>{{ $artwork->cover_image }}</td>
                            <td>
                                <a href="{{ route('artworks.show', $artwork->id) }}" class="btn btn-info"><i class="bi bi-eye-fill"></i></a>
                                    </td>
                            <td>
                            <a href="{{ route('artworks.edit', $artwork->id) }}" class="btn btn-info"><i class="bi bi-pencil-fill"></i></a>
                                </td>
                                <td>
                                <form action="{{ route('artworks.destroy', $artwork->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa không ?');"><i class="bi bi-trash3-fill"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
       {{$artworks->links()}}
    </div>
</div>
@endsection