<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<h1>Create Post</h1>

@if ($errors->any())
@foreach ($errors->all() as $error)
<h4 style="color:red">{{ $error }}</h4>
  
@endforeach

  
@endif
<form action="{{ route('post.store') }}" method="post">
    @csrf
    <div class="mb-3 mt-3">
      <label for="email" class="form-label">Title:</label>
      <input type="teat" value='{{ old('title') }}' class="form-control" id="email" placeholder="Enter Title" name="title" >
    </div>
    <div class="mb-3">
      <label for="pwd" class="form-label">body</label>
      <input type="text" value='{{ old('body') }}' class="form-control" id="pwd" placeholder="Enter body" name="body" >
    </div>
    <div class="form-check mb-3">
      {{-- <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label> --}}
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>