
<!DOCTYPE html>
<html lang="en">
<head>
    @section('title')

    archive
    @endsection  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Post List</h2>
  <p> You can find any post Hear</p>
  <a href="{{ route('post.create') }}">Add Post</a>            
  <table class="table">
    <thead>
      <tr>
        <th>Title</th>
        <th>Body</th>
        <th>Deleted Date</th>

        <th>action</th>
      </tr>
    </thead>
    <tbody>
@foreach ( $post as $post )
    

      <tr>
        <td>{{ $post->title }}</td>
        <td>{{ $post->body }}</td>
        <td>{{ $post->deleted_at }}</td>

        <td>
            <a href="{{ route('post.restore', $post->id)}}">Restore</a>
            |

<form method = "get"  action="{{ route('post.forcedelete', $post->id) }}">
  @method('DELETE')
  @csrf
<input type="submit" value="delete">

</form>
          </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
