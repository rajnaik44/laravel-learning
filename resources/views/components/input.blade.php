<div class="mb-3">
    <label for="name" class="form-label">{{$label}}</label>
    <input type="{{$type}}" name="{{$name}}" class="form-control" id="name" aria-describedby="emailHelp" 
    >
    <span class="text-danger">
      {{-- @error('name')
      {{$message}} 
      @enderror --}}
    </span>
</div>