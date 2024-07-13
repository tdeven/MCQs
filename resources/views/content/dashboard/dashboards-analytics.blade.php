@extends('layouts/contentNavbarLayout')

@section('title', 'Dashboard')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}">
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/dashboards-analytics.js')}}"></script>
@endsection

@section('content')
<div class="row">
  <div class="col-sm-8 mb-4  order-0">
    <div class="card">
      <div class="d-flex align-items-end row">
        <div class="col-sm-7">
          <div class="card-body">
            <h5 class="card-title text-primary">Congratulations Devendra! 🎉</h5>
            <p class="mb-4">You have done <span class="fw-medium">72%</span> more class today. Check your new result in your profile.</p>

            <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Classes</a>
          </div>
        </div>
        <div class="col-sm-5 text-center text-sm-left">
          <div class="card-body pb-0 px-0 px-md-4">
            <img src="{{asset('assets/img/illustrations/man-with-laptop-light.png')}}" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-sm-4 mb-4 order-0">
    <div class="card">
      <div class="d-flex align-items-end row">
        <div class="col">
          <div class="card-body">
            <h5 class="card-title text-warning">Book a Upcoming Bootcamp</h5>
            <!-- <p class="mb-4">You have done <span class="fw-medium">72%</span> more class today. Check your new result in your profile.</p> -->
             <p class="mb-4">Upgrade your knowledge in Bootcamp.</p>

            <a href="javascript:;" class="btn btn-sm btn-outline-primary">Bootcamp Classes</a>
          </div>
        </div>
      </div>
    </div>
  </div>

 

  <!-- Total Class -->
  <!-- col-12 col-lg-8 -->
  <div class=" col-12 order-2 order-md-3 order-lg-2 mb-4">
    <div class="card">
      <div class="row row-bordered g-0">
      <div class="col-md-8">
          <h5 class="card-header m-0 me-2 pb-3">Your Progress</h5>
          <div id="progress" class="px-2"></div>
        </div>
        <div class="col-md-4">
          <div class="card-body">
            <div class="text-center">
              <div class="dropdown">
                <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" id="growthReportId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  2024
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="growthReportId">
                  <a class="dropdown-item" href="javascript:void(0);">First_Week</a>
                  <a class="dropdown-item" href="javascript:void(0);">Second_Week</a>
                  <a class="dropdown-item" href="javascript:void(0);">Third_Week</a>
                </div>
              </div>
            </div>
          </div>
          <div id="growthChart"></div>
          <div class="text-center fw-medium pt-3 mb-2">78% Classes Growth</div>

          <div class="d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between">
            <div class="d-flex">
              <div class="me-2">
                <span class="badge bg-label-primary p-2"><i class="bx bx-book text-primary"></i></span>
              </div>
              <div class="d-flex flex-column">
                <small>First_Week</small>
                <h6 class="mb-0">Quiz</h6>
              </div>
            </div>
            <div class="d-flex">
              <div class="me-2">
                <span class="badge bg-label-info p-2"><i class="bx bx-check text-info"></i></span>
              </div>
              <div class="d-flex flex-column">
                <small>Second_Week</small>
                <h6 class="mb-0">Submission</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</div>

<div class="row">
  <!-- Order Statistics -->
  <div class="col-md-6 col-lg-4 col-xl-6 order-0 mb-4">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between pb-0">
        <div class="card-title mb-0">
          <h5 class="m-0 me-2">Classes Statistics</h5>
          <small class="text-muted"></small>
        </div>
        
      </div>
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <div class="d-flex flex-column align-items-center gap-1">
            <h2 class="mb-2">27</h2>
            <span>Total Practitioners</span>
          </div>
          <div id="orderStatisticsChart"></div>
        </div>
        <ul class="p-0 m-0">
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded bg-label-primary"><i class='bx bx-layer'></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Licence Preparation</h6>
                <small class="text-muted"></small>
              </div>
              <div class="user-progress">
                <small class="fw-medium">8</small>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded bg-label-success"><i class='bx bx-badge-check'></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Entrance Preparation</h6>
                <small class="text-muted"></small>
              </div>
              <div class="user-progress">
                <small class="fw-medium">2</small>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded bg-label-info"><i class='bx bx-check'></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Quiz</h6>
                <small class="text-muted"></small>
              </div>
              <div class="user-progress">
                <small class="fw-medium">8</small>
              </div>
            </div>
          </li>
          <li class="d-flex">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded bg-label-secondary"><i class="bx bx-user-check text-primary"></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Public Services</h6>
                <small class="text-muted"></small></small>
              </div>
              <div class="user-progress">
                <small class="fw-medium">9</small>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--/ Order Statistics -->

  <!-- Expense Overview -->
  <div class="col-md-6 col-lg-4 col-xl-6 order-1 mb-4">
    <div class="card h-100">
      <div class="card-header">
        <ul class="nav nav-pills" role="tablist">
          <li class="nav-item">
            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-tabs-line-card-income" aria-controls="navs-tabs-line-card-income" aria-selected="true">Incoming</button>
          </li>
          <li class="nav-item">
            <button type="button" class="nav-link" role="tab">Outgoing</button>
          </li>
          <li class="nav-item">
            <button type="button" class="nav-link" role="tab">total</button>
          </li>
        </ul>
      </div>
      <div class="card-body px-0">
        <div class="tab-content p-0">
          <div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel">
            <div class="d-flex p-4 pt-3">
              
              <div>
                <small class="text-muted d-block">Practitioners</small>
                <div class="d-flex align-items-center">
                  
                  <small class="text-success fw-medium">
                   
                  </small>
                </div>
              </div>
            </div>
            <div id="incomeChart"></div>
            <div class="d-flex justify-content-center pt-5 gap-2">
              <div class="flex-shrink-0">
                <div id="expensesOfWeek"></div>
              </div>
              <div>
                <p class="mb-n1 mt-1">Your Progress This Week</p>
                <small class="text-muted"> less than last week</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Expense Overview -->

 
</div>
@endsection
