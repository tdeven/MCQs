@extends('layouts/contentNavbarLayout')

@section('title', 'Input groups - Forms')

@section('content')
<h4 class="py-3 mb-4"><span class="text-muted fw-light">Forms /</span> Input groups</h4>

<div class="row">
  <!-- Basic -->
  <div class="col-md-6">
    <div class="card mb-4">
      <h5 class="card-header">Basic</h5>
      <div class="card-body demo-vertical-spacing demo-only-element">

        <div class="input-group">
          <span class="input-group-text" id="basic-addon11">@</span>
          <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon11" />
        </div>

        <div class="form-password-toggle">
          <label class="form-label" for="basic-default-password12">Password</label>
          <div class="input-group">
            <input type="password" class="form-control" id="basic-default-password12" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="basic-default-password2" />
            <span id="basic-default-password2" class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
          </div>
        </div>

        <div class="input-group">
          <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon13" />
          <span class="input-group-text" id="basic-addon13">abc@gmail.com</span>
        </div>

        <div class="input-group">
          <span class="input-group-text" id="basic-addon14">https://example.com/users/</span>
          <input type="text" class="form-control" placeholder="URL" id="basic-url1" aria-describedby="basic-addon14" />
        </div>

        <div class="input-group">
          <span class="input-group-text">$</span>
          <input type="number" class="form-control" placeholder="Amount" aria-label="Amount (to the nearest dollar)" />
          <span class="input-group-text">.00</span>
        </div>

        <div class="input-group">
          <span class="input-group-text">With textarea</span>
          <textarea class="form-control" aria-label="With textarea" placeholder="Comment"></textarea>
        </div>

      </div>
    </div>
  </div>

  <!-- Sizing -->
  <div class="col-md-6">
    <div class="card mb-6">
      <h5 class="card-header">Sizing</h5>
      <div class="card-body demo-vertical-spacing demo-only-element">

        <div class="input-group input-group-lg">
          <span class="input-group-text">@</span>
          <input type="text" class="form-control" placeholder="Username" />
        </div>

        <div class="input-group">
          <span class="input-group-text">@</span>
          <input type="text" class="form-control" placeholder="Username" />
        </div>

        <div class="input-group input-group-sm">
          <span class="input-group-text">@</span>
          <input type="text" class="form-control" placeholder="Username" />
        </div>
      </div>
    </div>
  </div>
 
</div>


<div class="row">

  <!-- Speech To Text -->
  <div class="col-lg">
    <div class="card mb-6">
      <h5 class="card-header">Speech To Text</h5>
      <div class="card-body demo-vertical-spacing demo-only-element">

        <small class="text-light fw-medium d-block">Input Group</small>

        <div class="input-group input-group-merge speech-to-text">
          <input type="text" class="form-control" placeholder="Say it" aria-describedby="text-to-speech-addon">
          <span class="input-group-text" id="text-to-speech-addon">
            <i class='bx bx-microphone cursor-pointer text-to-speech-toggle'></i>
          </span>
        </div>

        <small class="text-light fw-medium d-block pt-3">Textarea</small>

        <div class="input-group input-group-merge form-send-message">
          <textarea class="form-control message-input" placeholder="Say it" rows="4"></textarea>
          <span class="message-actions input-group-text">
            <i class='bx bx-microphone cursor-pointer speech-to-text'></i>
          </span>
        </div>

      </div>
    </div>
  </div>
</div>

@endsection
