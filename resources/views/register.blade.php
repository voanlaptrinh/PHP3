{{-- 1. Đang dùng layoout nào --}}
@extends('layout.master')


{{-- 2. nơi thay đổi hiển thị gì --}}

{{-- @section('content', 'Đăng kí thông tin') --}}

{{-- 2.2 Nếu nooij dunng thay đổi là cụm thẻ --}}
@section('content')



    <form action="/register-success" method="GET">
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp"
                placeholder="Name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" name="email" id="name" aria-describedby="emailHelp"
                placeholder="email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="pass" id="name" placeholder="Password">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

@endsection
