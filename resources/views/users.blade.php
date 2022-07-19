{{-- 1. Đang dùng layout nào --}}
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <div class="container">
        <title>{{$view_title}}</title>
</head>

<body>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Số</th>
                <th scope="col">name</th>
                <th scope="col">giới tính</th>
                <th scope="col">tuổi</th>
                <th scope="col">Trạng thái</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user_list as $item)
                <tr>
                    <th scope="row">1</th>
                    <td>{{ $item['name'] }}</td>
                    <td>{{ $item['age'] }}</td>
                    <td>{{ $item['address'] }}</td>
                    @if ($item['status'] === 1)
                        <td>kích hoạt</td>
                    @else
                        <td>Không kích hoạt</td>
                    @endif
                    {{-- <td>{{$item['status'] ? 'kích hoạt' : 'khoong kích hoạt'}}</td> --}}
                </tr>
            @endforeach



        </tbody>
    </table>
    </div>
</body>

</html>
@endsection