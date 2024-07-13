@extends('layouts/blankLayout')

@section('title', 'exam')

@section('exam-style')
<!-- exam -->
<link rel="stylesheet" href="{{asset('assets/vendor/css/Examination/exam.css')}}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@endsection
@section('exam-script')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/examination/exam.js')}}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@endsection
@section('content')
<div class="container">
    <div class="row mt-5 mx-5 my-5">
        <div class="col">
            <h2>Step-1: Choose Category, Levels, Faculty, Programs</h2>
            <div>
               <label for="formGroupExampleInput" class="form-label   mt-4">Category</label>
               <select class="form-select" aria-label="Default select example">
                  <option selected>Open this select menu</option>
                  <option value="1">One</option>
                  <option value="2">Two</option> 
                  <option value="3">Three</option>
                </select>
            </div>
            <div>
               <label for="formGroupExampleInput" class="form-label mt-4">Levels</label>
               <select class="form-select" aria-label="Default select example">
                  <option selected>Open this select menu</option>
                  <option value="1">One</option>
                  <option value="2">Two</option> 
                  <option value="3">Three</option>
                </select>
            </div>
            <div>
               <label for="formGroupExampleInput" class="form-label mt-4">Faculty</label>
               <select class="form-select" aria-label="Default select example">
                  <option selected>Open this select menu</option>
                  <option value="1">One</option>
                  <option value="2">Two</option> 
                  <option value="3">Three</option>
                </select>
            </div>
            <div>
               <label for="formGroupExampleInput" class="form-label mt-4">Program</label>
               <select class="form-select" aria-label="Default select example">
                  <option selected>Open this select menu</option>
                  <option value="1">One</option>
                  <option value="2">Two</option> 
                  <option value="3">Three</option>
                </select>
            </div>
            <div>
                <a href="http://127.0.0.1:8000/examination/hall">
                <button type="button" class="btn btn-primary mt-4">Next</button>
                </a>
            </div>
        </div>
    </div>
</div>



<!-- <div>
                    <label>Category:</label>
                    <select id="category" name="category" required>
                        <option value="">Select Category</option>
                       
                    </select>
                </div>
</div> -->
@endsection