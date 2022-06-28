@extends('mobile.master-sign')

@section('content')
<div class="d-flex align-items-center p-3 gurdeep-osahan-inner-header position-absolute w-100">
    <div class="left mr-auto">
       <a href="{{url('/')}}/mobile/get-started" class="back_button box_rounded bg-white text-danger btn btn-sm shadow-sm">Skip</a>
    </div>
    <div class="center mx-auto"></div>
    <div class="right ml-auto d-flex align-items-center">
       <a class="toggle btn_detail bg-danger shadow-sm text-white" href="#">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
             <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
          </svg>
       </a>
    </div>
 </div>
 <div>
    <section class="position-relative">
       <span class="position-absolute title_sign text-white text-center">
       <a href="{{url('/')}}/mobile">
       <img src="{{asset('uploads/VENSHAQ001-41.png')}}" class="height-70" alt="logos" />
       </a>
       </span>
       <img src="{{asset('mobileTheme/img/covertop.jpg')}}" class="img-fluid">
    </section>
    <section class="bg-white body_rounded mt-n5 position-relative p-4">
       <h1>Welcome!</h1>
       <p class="text-muted">Sign in continue</p>
       <form class="">
          <div class="d-flex align-items-center mb-3">
             <span class="mdi mdi-email-outline box_rounded p-2 btn btn-light mr-3 text-primary"></span>
             <div class="form-floating border-bottom w-100">
                <input type="email" class="form-control border-0 pl-0" id="floatingInputValue" placeholder="name@example.com" value="name@example.com">
                <label for="floatingInputValue" class="pl-0">EMAIL</label>
             </div>
          </div>
          <div class="d-flex align-items-center mb-3">
             <span class="mdi mdi-key-variant box_rounded p-2 btn btn-light mr-3 text-primary"></span>
             <div class="form-floating border-bottom w-100">
                <input type="password" class="form-control border-0 pl-0" id="floatingInputValue" placeholder="name@example.com" value="name@example.com">
                <label for="floatingInputValue" class="pl-0">PASSWORD</label>
             </div>
          </div>
          <a href="{{url('/')}}/mobile/veryfy-number" class="mt-4 btn btn-outline-primary py-3 box_rounded w-100">Sign in</a>
          <p class="text-center mt-4"><a href="forgot_password.html" class="text-muted">Forgot password?</a></p>
          <a href="signup.html" class="mt-5 btn btn-primary py-3 box_rounded w-100">Create an account</a>
       </form>
    </section>
 </div>
 @include('mobile.main-nav')
@endsection
