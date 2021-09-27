<input type="text" name="list" id="list"  class="form-control @error('list') is-invalid @enderror" value="{{ old('list') ?? $Task->list }}"> 
<button type="submit" class="btn btn-sm bg-secondary mt-1">{{ $submit }}</button>
@error('list')
<div class="small text-danger"> {{ $message }} </div>                  
@enderror