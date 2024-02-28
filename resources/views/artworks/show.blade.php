
@extends('layout')
@section('content')
<table class="table table-bordered">
    <thead>
        <th>ID Artist</th>
        <th>Artist Name</th>
        <th>Description</th>
        <th>Art Type</th>
        <th>Media Link</th>
        <th>Cover Image</th>
        
    </thead>
    <tbody>
        
            <tr>
                <td>{{$artwork->id}}</td>
                <td>{{$artwork->artist_name}}</td>
                <td>{{ $artwork->description }}</td>
                <td>{{ $artwork->art_type }}</td>
                <td>{{ $artwork->media_link }}</td>
                <td>{{ $artwork->cover_image }}</td>
                    </form>
                </td>
            </tr>
        
    </tbody>
</table>