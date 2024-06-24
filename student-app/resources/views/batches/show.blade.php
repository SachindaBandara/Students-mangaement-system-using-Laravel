@extends('layout')
@section('content')


<div class="card">
  <div class="card-header">Batch</div>
  <div class="card-body">


    <div class="card-body">
      <h5 class="card-title">Batch Name : {{ $batches->name }}</h5>
      <p class="card-text">Course Name : {{ $batches->course_id }}</p>
      <p class="card-text">Start Date : {{ $batches->start_date }}</p>
    </div>

    </hr>

  </div>
</div>
@endsection