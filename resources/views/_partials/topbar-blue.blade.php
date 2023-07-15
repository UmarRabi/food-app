   <div class="container row">
       <div class="dropdown">
           <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
               <svg viewBox="0 0 100 80" width="40" height="40">
                   <rect width="100" height="20" style="fill: white"></rect>
                   <rect y="30" width="100" height="20" style="fill: white"></rect>
                   <rect y="60" width="100" height="20" style="fill: white"></rect>
               </svg>
           </button>
           <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
               <a class="dropdown-item" href="{{ route('foods') }}">Foods</a>
               <a class="dropdown-item" href="{{ route('transactions') }}">Order</a>
           </div>
       </div>
   </div>
   <div class="container row mt-3">
       <div class="col-6">
           <a href="{{ route('dashboard') }}">
               <svg xmlns="http://www.w3.org/2000/svg" width="40%" height="40%" fill="blue"
                   class="bi bi-house-door-fill" viewBox="0 0 16 16">
                   <path
                       d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z" />
               </svg>
           </a>
       </div>
       <div class="d-flex justify-content-end col-6">
           <a href="{{ URL::previous() }}">
               <svg xmlns="http://www.w3.org/2000/svg" width="40%" height="60%" viewBox="0 0 256 256">
                   <rect width="16" height="16" fill="blue" />
                   <path
                       d="M61.7,204.1,16,128,61.7,51.9A7.9,7.9,0,0,1,68.5,48H216a8,8,0,0,1,8,8V200a8,8,0,0,1-8,8H68.5A7.9,7.9,0,0,1,61.7,204.1Z"
                       opacity="0.2" />
                   <path
                       d="M61.7,204.1,16,128,61.7,51.9A7.9,7.9,0,0,1,68.5,48H216a8,8,0,0,1,8,8V200a8,8,0,0,1-8,8H68.5A7.9,7.9,0,0,1,61.7,204.1Z"
                       fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                   <line x1="160" y1="104" x2="112" y2="152" fill="none" stroke="#000"
                       stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                   <line x1="160" y1="152" x2="112" y2="104" fill="none" stroke="#000"
                       stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
               </svg>
           </a>
       </div>
   </div>
