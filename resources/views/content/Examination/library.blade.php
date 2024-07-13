@extends('layouts/blankLayout')

@section('title', 'library')

@section('library-style')
<!-- Library -->
<link rel="stylesheet" href="{{asset('assets/vendor/css/Examination/library.css')}}">
@endsection
@section('library-script')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/examination/library.js')}}">
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
        <h2>Step-3: Confirmation and Redirects</h2>
        <p>Please review your selection</p>
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
                <nav aria-label="Page navigation example">
                   <ul class="pagination mt-4">
                     <li class="page-item "><a class="page-link btn btn-primary p-3" href="http://127.0.0.1:8000/examination/hall">Previous</a></li>
                     <li class="page-item"><button class="page-link btn btn-info text-white p-3 mx-2" onclick="myFucntion()">Confirm and Submit</button>
                       <script>
                         function myFucntion(){
                             alert("Successful!!!!!")
                            }
                        </script>
                    </li>
                  </ul>
                </nav>
            </div>
            <div class="col mb-4  order-0">
    <div class="card mt-4">
      <div class="d-flex align-items-end row">
        <div class="col-sm-7">
          <div class="card-body">
            <h5 class="card-title text-primary">Congratulations Devendra! 🎉</h5>
            <p class="mb-4">You have done <span class="fw-medium">72%</span> more class today. Check your new result in your profile.</p>

            <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Classes</a>
          </div>
        </div>
       
      </div>
    </div>
    <div class="mb-3 mt-4">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>

          </div>
        </div>
    </div>
</div>

@endsection