<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<h1>Edit Post</h1>
<form action="{{ route('post.update', $post->id) }}" method="post">
  @method('put');
    @csrf
    <div class="mb-3 mt-3">
      <label for="email" class="form-label">Title:</label>
      <input type="teat" class="form-control" value = "{{ $post->title }}" name="title" required>
    </div>
    <div class="mb-3">
      <label for="pwd" class="form-label">body</label>
      <input type="text" class="form-control" value = "{{ $post->body }}" name="body" required>
    </div>
    <div class="form-check mb-3">
      {{-- <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label> --}}
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>