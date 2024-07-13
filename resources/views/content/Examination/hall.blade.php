@extends('layouts/blankLayout')

@section('title', 'hall')

@section('hall-style')
<!-- Hall -->
<link rel="stylesheet" href="{{asset('assets/vendor/css/Examination/hall.css')}}">
@endsection
@section('hall-script')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/examination/hall.js')}}">
@endsection
@section('content')
<div class="container">
    <div class="row">
    <div class="col">
            <h2>Step-2: Choose Subjects and Details</h2>
            <div>
               <label for="formGroupExampleInput" class="form-label mt-4">Subjects</label>
               <select class="form-select" aria-label="Default select example">
                  <option selected> select subjects</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
            </div>
            <div>
               <label for="formGroupExampleInput" class="form-label mt-4">Questions Type:</label>
               <select class="form-select" aria-label="Default select example">
                  <option selected>Select the questions type</option>
                  <option value="1">One</option>
                  <option value="2">Two</option> 
                  <option value="3">Three</option>
                </select>
            </div>
            <div>
               <label for="formGroupExampleInput" class="form-label mt-4">Questions Quantity:</label><br>
               <button type="button" class="btn btn-primary btn-sm mt-4">Add Subject</button>
            </div>
            <div>
            <nav aria-label="Page navigation example">
               <ul class="pagination mt-4">
                  <li class="page-item "><a class="page-link btn btn-primary p-3" href="http://127.0.0.1:8000/examination/exam">Previous</a></li>
                    <li class="page-item"><a class="page-link p-3 btn-success" href="http://127.0.0.1:8000/examination/library">Next</a></li>
                  </ul>
            </nav>
            </div>
        </div>
    </div>
</div>
@endsection