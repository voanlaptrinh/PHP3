@extends('layout.master')
@section('title', 'Sửa người dùng')
@section('content-title', 'Sửa người dùng')

@section('content')
    <form action="{{route('users.update', $user->id)}}" method="POST" enctype="multipart/form-data">
      @csrf
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="{{$user->name}}"  aria-describedby="name">
        </div>
        <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" value="{{$user->email}}"  aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" value="{{$user->password}}" name="password">
      </div>
        <div class="mb-3">
            <label class="form-label">username</label>
            <input type="username" class="form-control" value="{{$user->username}}"  name="username"  aria-describedby="username">
        </div>
        <div class="mb-3">
            <label class="form-label">birthday</label>
            <input type="datetime-local" class="form-control" value="{{$user->birthday}}" name="birthday"  aria-describedby="birthday">
        </div>
        <div class="mb-3">
            <label class="form-label">Phone</label>
            <input type="number" class="form-control" name="phone" value="{{$user->phone}}" min="0" aria-describedby="Phone">
        </div>
        <div class="mb-3">
            <label class="form-label">Ảnh đại diện</label>
            <input type="file" class="form-control" name="avatar"  aria-describedby="avatar">
        </div>
        <div class="mb-3">
            <label class="form-label">role</label><br>
            <input type="radio" {{$user->role ==0 ? 'checked':''}}  name="role" value="0">GD
            <input type="radio"{{$user->role == 1? 'checked':''}}  name="role" value="1">NV
        </div>
        <div class="mb-3">
            <label class="form-label">status</label><br>
            <input type="radio" {{$user->status ==0 ? 'checked':''}}  name="status" value="0">Khoa
            <input type="radio" {{$user->status ==1 ? 'checked':''}}  name="status" value="1">Mo
        </div>
        <div class="mb-3">
            <label class="form-label">room_id</label>
            <select name="room_id" id="">
                @foreach ($room as $item)
                <option {{$user->room_id == $item->id ? 'selected':''}} value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>
        

        <button type="submit" class="btn btn-primary">Sửa</button>
        <button type="reset" class="btn btn-warning">Nhập lại</button>
    </form>
    
@endsection