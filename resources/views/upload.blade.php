@extends('layouts.white')
@section('content')
    <div class="div">
        @include('_partials.multiple-white-header', [($text = 'Upload Files')])
    </div>
   <div class="card" style="background: transparent !important">
       <div class="card">
            <div class="card-body">
                <div class="rows mt-2 d-flex justify-content-center">
                    <img style="margin-left:45%;height: 40px; width:40px;" loading="lazy"
                        src="https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F75b4da47b49f4325bb41f778991eadd6"
                        srcset="
                                    https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F75b4da47b49f4325bb41f778991eadd6?width=100   100w,
                                    https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F75b4da47b49f4325bb41f778991eadd6?width=200   200w,
                                    https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F75b4da47b49f4325bb41f778991eadd6?width=400   400w,
                                    https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F75b4da47b49f4325bb41f778991eadd6?width=800   800w,
                                    https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F75b4da47b49f4325bb41f778991eadd6?width=1200 1200w,
                                    https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F75b4da47b49f4325bb41f778991eadd6?width=1600 1600w,
                                    https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F75b4da47b49f4325bb41f778991eadd6?width=2000 2000w,
                                    https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F75b4da47b49f4325bb41f778991eadd6
                                "
                        class="image mt-2" />
                </div>
            </div>
            <form action="" method="POST" id="upload-form" enctype="multipart/form-data">
                @csrf
                <input type="file" name="upload" style="display: none" id="upload">
            </form>
            <div class="browse row mt-3 d-flex justify-content-center" id="div-file-browser">
                <div style="width: 180px;  height: 180px; border : solid blue 2px;">
                    <div class="rows justify-content-center">
                        Browse Files
                    </div>
                    <div class="mt-3 rows justify-content-center">
                            <div class="">
                            <svg margin-top="10px" width="60" height="60" stroke-width="1.5" viewBox="0 0 24 24" fill="blue" xmlns="http://www.w3.org/2000/svg"> <path d="M19 3L5 3C3.89543 3 3 3.89543 3 5L3 19C3 20.1046 3.89543 21 5 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/> <path d="M7 7L17 7" stroke="white" stroke-linecap="round" stroke-linejoin="round"/> <path d="M7 12L17 12" stroke="white" stroke-linecap="round" stroke-linejoin="round"/> <path d="M7 17L13 17" stroke="white" stroke-linecap="round" stroke-linejoin="round"/> </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="car">
            <div class="card-body">
                <div class="row">
                    <svg width="231" height="3" viewBox="0 0 231 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="231" height="3" fill="black"/>
                    </svg>
                </div>
            </div>
        </div> --}}
    </div>
    {{-- </div> --}}
@endsection()

<script type="text/javascript">

   // console.log(document.readyState)
   document.onreadystatechange=()=>{
        switch (document.readyState){
            case  'complete' :
                let browse = document.getElementById('div-file-browser')
                let upload= document.getElementById('upload')
                browse.addEventListener('click', function(){
                    upload.click()
                })
                upload.addEventListener('change', function(){
                    document.getElementById('upload-form').submit();
                })

        }
   }


    // browse.addEventListener('click', function(){
    //     document.getElementByTagName('input[type=file]]').click()
    // })
</script>
