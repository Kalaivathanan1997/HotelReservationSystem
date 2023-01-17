@include('admin.layouts.navbar')
@include('admin.layouts.sidebar')
{{-- @include('admin.layouts.notification') --}}

    <div class="content-wrapper">
        
            @yield('content_header')
           
            @yield('content')
            {{-- </main> --}}
    </div>
    @include('admin.layouts.footer')