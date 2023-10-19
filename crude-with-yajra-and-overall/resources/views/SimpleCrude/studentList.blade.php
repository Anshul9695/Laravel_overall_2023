@extends('layouts.main')
@section('content')
<table id="showBooksIn" class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>student_name</th>
                    <th>email</th>
                    <th>phone</th>
                    <th>image</th>
                    <th>course_id </th>
                </tr>
            </thead>
            @foreach($list as $row)
            <tr>
            <td>{{$row['student_id']}}</td>
                <td>{{$row['student_name']}}</td>
                <td>{{$row['email']}}</td>
                <td>{{$row['phone']}}</td>
                <td>
                    <img src="{{asset('storage/studentImage/'.$row['image'])}}" height="50px" width="50px" >
                </td>
                <td>{{$row['course_id']}}</td>
            </tr>
            @endforeach
        </table>
@endsection