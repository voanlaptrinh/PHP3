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
        <table class="table">
            <thead>
                <tr>

                    <th scope="col">tên</th>
                    <th scope="col">gia</th>
                    <th scope="col">Trạng thái</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($product_list as $item)
                    <tr>

                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['gia'] }}</td>
                        <td>{{ $item['status'] ? 'còn hàng' : 'hét hàng' }}</td>

                    </tr>
                @endforeach



            </tbody>
        </table>
    </body>

    </html>
@endsection
