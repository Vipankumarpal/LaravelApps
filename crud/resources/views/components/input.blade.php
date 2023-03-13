<div class="mb-3">
    <label for="" class="form-label">{{$label}}</label>
    {{-- <input type="text"
    class="form-control" name="name" id="" aria-describedby="helpId" placeholder="Enter Your Full Name" value="{{old('name')}}"> --}}


    <input type="{{$type}}" class="form-control border border-success" name="{{$name}}" />
    <span class="text-danger">
        {{-- {{$demo}} --}}
        {{-- @error('name')
            {{$message}}
        @enderror --}}
    </span>
    {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
</div>