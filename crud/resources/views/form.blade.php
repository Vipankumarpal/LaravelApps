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
        <span class="text-danger">
          {{-- {{$demo}} --}}
          @error('name')
              {{$message}}
          @enderror
      </span>
        <x-input type="email" name="email" label="Please Enter Your Email Here" />
        <span class="text-danger">
          {{-- {{$demo}} --}}
          @error('email')
              {{$message}}
          @enderror
      </span>
        <x-input type="password" name="password" label="Password" />
        <span class="text-danger">
          {{-- {{$demo}} --}}
          @error('password')
              {{$message}}
          @enderror
      </span>
        <x-input type="password" name="password_confirmation" label="Confirm Password" />
        <span class="text-danger">
          {{-- {{$demo}} --}}
          @error('password_confirmation')
              {{$message}}
          @enderror
      </span>
        
        <button class="btn btn-primary">Submit</button>
    </form>

  </div>
</body>
@endsection

