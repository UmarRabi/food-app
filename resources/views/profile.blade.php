@extends('layouts.blue-color')
@section('content')
 <div class="untitled-page untitled-page-block layout">
    <div class="untitled-page-block1 layout">
        <div class="untitled-page-block1-item">
            <div class=""  style="position: relative">
                <img src="{{asset('assets/ce7c9ef6b6da0d67ddbe4d2a2edd5d4b.png')}}" style="height: 150px;">
                <img
                src="{{asset('assets/19b6d708f170e82480c92f5c8d7186b4.png')}}" style="position :absolute; left:0px; top:-10px; height: 150px;"
                />
            </div>
        </div>
    </div>
        <div class="container">
          <div class="">
              <div class="rows min-text">Welcome, {{Auth::user()->firstname}} {{Auth::user()->lastname}}</div>
              <div class="rows">
                <img
                  src="{{asset('assets/3d688b9b454e0e476eb856fa106b7f1e.png')}}"
                  class="icon-images"
                 />
              </div>
              <div class="rows">
                <div class="col-md-4">
                    <img
                        src="{{asset('assets/e86be78a55242f412450f9203b933840.png')}}"
                         class="icon-images"
                    />
                </div>
                <div class="untitled-page-block9-spacer"></div>
                <h3 class="min-text">Messages</h3>
              </div>
              <div class="rows mt-3">
                <div class="col-md-4">
                  <img
                    src="{{asset('assets/aadc32378005b844ddbd571d815ec47d.png')}}"
                     class="icon-images"
                   />
                </div>
                <div class="untitled-page-block9-spacer"></div>
                <h3 class="min-text">Request</h3>
              </div>
              <div class="rows mt-3">
                <div class="col-md-4">
                  <img
                    src="{{asset('assets/1496911b4541c20dfb3b5fb5ee03434a.png')}}"
                     class="icon-images"
                   />
                </div>
                <div class="untitled-page-block8-spacer"></div>
                <h3 class="min-text">Profile</h3>
              </div>
              <div class="rows mt-3">
                <h1 class="col-md-4">@</h1>
                <div class="untitled-page-block9-spacer"></div>
                <h3 class="min-text">Contact us</h3>
              </div>
            </div>
        </div>
    </div>
@endsection()
