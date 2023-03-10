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
        <div class="mb-3">
            <label for="" class="form-label">Name</label>
            <input type="text"
            class="form-control" name="name" id="" aria-describedby="helpId" placeholder="Enter Your Full Name" value="{{old('name')}}">
            <span class="text-danger">
                @error('name')
                    {{$message}}
                @enderror
            </span>
            {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Email</label>
            <input type="email"
            class="form-control" name="email" id="" aria-describedby="helpId" placeholder="Enter Your Email Here"  value="{{old('email')}}">
            <span class="text-danger">
                @error('email')
                    {{$message}}
                @enderror
            </span>
            {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Password</label>
            <input type="password"
            class="form-control" name="password" id="" aria-describedby="helpId" placeholder="Enter Your Password Here">
            <span class="text-danger">
                @error('password')
                    {{$message}}
                @enderror
            </span>
            {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Confirm Password</label>
            <input type="password"
            class="form-control" name="password_confirmation" id="" aria-describedby="helpId" placeholder="Confirm Your Password Here">
            <span class="text-danger">
                @error('password_confirmation')
                    {{$message}}
                @enderror
            </span>
            {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
        </div>
        <button class="btn btn-primary">Submit</button>
    </form>

  </div>
</body>
@endsection

