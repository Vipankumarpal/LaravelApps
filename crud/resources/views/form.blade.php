@extends('layouts/main')

@push('title')
<title>Register Page</title>
    
@endpush

@section('main-section')

<body>
  <div class="container">
   <h1 class="text-center">Registration Form</h1>
    <form action="{{url('/')}}/register" method="post">
        @csrf
        {{-- <pre>
        @php
        print_r($errors->all());
        @endphp
        </pre> --}}

        {{-- @php
            $demo=1;
        @endphp --}}
        {{-- <x-input type="text" name="name" label="Please Enter Your Name Here" :demo="$demo" /> --}}
        <x-input type="text" name="name" label="Please Enter Your Name Here"  />
        <x-input type="email" name="email" label="Please Enter Your Email Here" />
        <x-input type="password" name="password" label="Password" />
        <x-input type="password" name="password_confirmation" label="Confirm Password" />
        
        
        <button class="btn btn-primary">Submit</button>
    </form>

  </div>
</body>
@endsection

