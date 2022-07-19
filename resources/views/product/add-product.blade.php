@extends('layout.master')


{{-- 2. nơi thay đổi hiển thị gì --}}

{{-- @section('content', 'Đăng kí thông tin') --}}

{{-- 2.2 Nếu nooij dunng thay đổi là cụm thẻ --}}
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
    <form action="/register-success" method="GET">
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name" id="name" aria-describedby="emailName"
                placeholder="Name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">giá</label>
            <input type="number" class="form-control" name="gia" id="gia" aria-describedby="emailGia"
                placeholder="giá">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Thông tin</label>
            <input type="text" class="form-control" name="thong_tin" id="thong_tin" placeholder="thong_tin">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</body>
</html>



@endsection