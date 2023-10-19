@extends('layouts.main')
@section('content')
<form action="{{route('insertRecourd')}}" method="post" enctype="multipart/form-data">
  <div class="container">
    <h1>Insert Student Record</h1>
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
    @csrf
    <div class="form-row">

      <div class="form-group col-md-6">
        <label for="inputEmail4">Student Name</label>
        <input type="text" class="form-control @error('student_name') is-invalid @enderror" id="inputEmail4" name="student_name" value="{{old('student_name')}}">
        @error('student_name')
        <span class="error">{{ $message }}</span>
        @enderror
      </div>
      <div class="form-group col-md-6">
        <label for="inputEmail4">Email</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="inputEmail4" name="email" value="{{old('email')}}">
      @error('email')
      <span class="error">{{$message}}</span>
      @enderror
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Phone</label>
        <input type="text" class="form-control @error('phone') is-invalid @enderror" id="inputPassword4" name="phone" value="{{old('phone')}}">
    @error('phone')
        <span class="error">{{$message}}</span>
        @enderror
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Image</label>
        <input type="file" class="form-control @error('image') is-invalid @enderror" id="inputPassword4" name="image" value="{{old('image')}}">
    @error('image')
        <span class="error">{{$message}}</span>
        @enderror
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="inputState">Select Course</label>
        <select id="inputState" name="course_id" class="form-control @error('course_id') is-invalid @enderror">
       
          @foreach($course as $list)
          <option value="{{$list->id}}">{{$list->course_name}}</option>
          @endforeach
        </select>
        @error('course_id')
        <span class="error">{{$message}}</span>
        @enderror
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Add Student</button>
</form>
@endsection