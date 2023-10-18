@extends('layouts.main')
@section('content')
<form action="{{route('insertRecourd')}}" method="post" enctype="multipart/form-data">
  <div class="container">
    <h1>Insert Student Record</h1>
    @csrf
    <div class="form-row">

      <div class="form-group col-md-6">
        <label for="inputEmail4">Student Name</label>
        <input type="text" class="form-control" id="inputEmail4" name="student_name" placeholder="name">
        <span class="danger">
          @error('student_name')
          {{$message}}
          @enderror
        </span>
      </div>
      <div class="form-group col-md-6">
        <label for="inputEmail4">Email</label>
        <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Phone</label>
        <input type="text" class="form-control" id="inputPassword4" name="phone" placeholder="phone">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Image</label>
        <input type="file" class="form-control" id="inputPassword4" name="image" placeholder="image">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="inputState">Select Course</label>
        <select id="inputState" name="course" class="form-control">
          <option selected>Choose...</option>
          @foreach($course as $list)
          <option value="{{$list->id}}">{{$list->course_name}}</option>
          @endforeach
        </select>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Add Student</button>
</form>
@endsection