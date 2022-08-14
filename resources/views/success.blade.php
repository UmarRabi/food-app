@extends('layouts.white')
@section('content')
    <div class="div">
        @include('_partials.white-header', [($text = 'Book Appointment')])
    </div>
    <div class="div2">
        {{-- <div class="file-upload-section">
            <div class="download-text">Download Files</div>
            <div class="upload">
                <picture>
                    <source
                        srcset="
                                    https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F75b4da47b49f4325bb41f778991eadd6?format=webp&width=100   100w,
                                    https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F75b4da47b49f4325bb41f778991eadd6?format=webp&width=200   200w,
                                    https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F75b4da47b49f4325bb41f778991eadd6?format=webp&width=400   400w,
                                    https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F75b4da47b49f4325bb41f778991eadd6?format=webp&width=800   800w,
                                    https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F75b4da47b49f4325bb41f778991eadd6?format=webp&width=1200 1200w,
                                    https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F75b4da47b49f4325bb41f778991eadd6?format=webp&width=1600 1600w,
                                    https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F75b4da47b49f4325bb41f778991eadd6?format=webp&width=2000 2000w,
                                    https://cdn.builder.io/api/v1/image/assets%2FTEMP%2F75b4da47b49f4325bb41f778991eadd6
                                "
                        type="image/webp" />
                    <img loading="lazy"
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
                        class="image" />
                </picture>
                <div class="builder-image-sizer image-sizer"></div>
            </div>
            <!-- </div> -->

        </div>
        <div class="settings">
            <svg class="icons" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" xml:space="preserve"
                style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:2">
                <path
                    d="M55.579 31.579a2 2 0 0 1 .208 2.583l-1.284 1.781a1.996 1.996 0 0 1-3.036.245A462554.14 462554.14 0 0 1 32 16.722L12.533 36.188a1.996 1.996 0 0 1-3.036-.245l-1.284-1.781a2 2 0 0 1 .208-2.583L32 8l23.579 23.579z"
                    style="fill:white;stroke:#222a33;stroke-width:2px" />
                <path
                    d="M13.977 34.745 32 16.722l18.023 18.023v20.002a2.25 2.25 0 0 1-.66 1.593 2.25 2.25 0 0 1-1.593.66H16.23a2.25 2.25 0 0 1-1.593-.66 2.25 2.25 0 0 1-.66-1.593V34.745zM20.736 19.264l-7.885 7.885V15.322h7.885v3.942z"
                    style="fill:white;stroke:#222a33;stroke-width:2px" />
                <path d="M37 44.5a1.503 1.503 0 0 0-1.5-1.5h-7a1.503 1.503 0 0 0-1.5 1.5V57h10V44.5z"
                    style="fill:white;stroke:#222a33;stroke-width:2px" />
            </svg>
            <svg class="icons" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M13.8199 22H10.1799C9.71003 22 9.30347 21.673 9.20292 21.214L8.79592 19.33C8.25297 19.0921 7.73814 18.7946 7.26092 18.443L5.42392 19.028C4.97592 19.1709 4.48891 18.9823 4.25392 18.575L2.42992 15.424C2.19751 15.0165 2.27758 14.5025 2.62292 14.185L4.04792 12.885C3.98312 12.2961 3.98312 11.7019 4.04792 11.113L2.62292 9.816C2.27707 9.49837 2.19697 8.98372 2.42992 8.576L4.24992 5.423C4.48491 5.0157 4.97192 4.82714 5.41992 4.97L7.25692 5.555C7.50098 5.37416 7.75505 5.20722 8.01792 5.055C8.27026 4.91269 8.52995 4.78385 8.79592 4.669L9.20392 2.787C9.30399 2.32797 9.71011 2.00049 10.1799 2H13.8199C14.2897 2.00049 14.6958 2.32797 14.7959 2.787L15.2079 4.67C15.4887 4.79352 15.7622 4.93308 16.0269 5.088C16.2742 5.23078 16.5132 5.38736 16.7429 5.557L18.5809 4.972C19.0286 4.82967 19.515 5.01816 19.7499 5.425L21.5699 8.578C21.8023 8.98548 21.7223 9.49951 21.3769 9.817L19.9519 11.117C20.0167 11.7059 20.0167 12.3001 19.9519 12.889L21.3769 14.189C21.7223 14.5065 21.8023 15.0205 21.5699 15.428L19.7499 18.581C19.515 18.9878 19.0286 19.1763 18.5809 19.034L16.7429 18.449C16.5103 18.6203 16.2687 18.7789 16.0189 18.924C15.7567 19.0759 15.4863 19.2131 15.2089 19.335L14.7959 21.214C14.6954 21.6726 14.2894 21.9996 13.8199 22ZM11.9959 8C9.78678 8 7.99592 9.79086 7.99592 12C7.99592 14.2091 9.78678 16 11.9959 16C14.2051 16 15.9959 14.2091 15.9959 12C15.9959 9.79086 14.2051 8 11.9959 8Z"
                    fill="white" />
            </svg>
            <svg class="icons" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M5 7.50003C5 8.32845 4.32843 9.00003 3.5 9.00003C2.67157 9.00003 2 8.32845 2 7.50003C2 6.6716 2.67157 6.00003 3.5 6.00003C4.32843 6.00003 5 6.6716 5 7.50003ZM5.71313 8.66388C5.29445 9.45838 4.46048 10 3.5 10C2.11929 10 1 8.88074 1 7.50003C1 6.11931 2.11929 5.00003 3.5 5.00003C4.46048 5.00003 5.29445 5.54167 5.71313 6.33616L9.10424 4.21671C9.03643 3.98968 9 3.74911 9 3.50003C9 2.11932 10.1193 1.00003 11.5 1.00003C12.8807 1.00003 14 2.11932 14 3.50003C14 4.88074 12.8807 6.00003 11.5 6.00003C10.6915 6.00003 9.97264 5.61624 9.51566 5.0209L5.9853 7.22738C5.99502 7.31692 6 7.40789 6 7.50003C6 7.59216 5.99502 7.68312 5.9853 7.77267L9.51567 9.97915C9.97265 9.38382 10.6915 9.00003 11.5 9.00003C12.8807 9.00003 14 10.1193 14 11.5C14 12.8807 12.8807 14 11.5 14C10.1193 14 9 12.8807 9 11.5C9 11.2509 9.03643 11.0104 9.10425 10.7833L5.71313 8.66388ZM11.5 5.00003C12.3284 5.00003 13 4.32846 13 3.50003C13 2.6716 12.3284 2.00003 11.5 2.00003C10.6716 2.00003 10 2.6716 10 3.50003C10 4.32846 10.6716 5.00003 11.5 5.00003ZM13 11.5C13 12.3285 12.3284 13 11.5 13C10.6716 13 10 12.3285 10 11.5C10 10.6716 10.6716 10 11.5 10C12.3284 10 13 10.6716 13 11.5Z"
                    fill="white" />
            </svg>
        </div> --}}
    </div>
@endsection()
