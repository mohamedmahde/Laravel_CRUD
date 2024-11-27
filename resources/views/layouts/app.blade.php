<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    @section('navbar')
    <nav class="navbar navbar-expand-sm bg-light">
    
        <div class="container-fluid">
          <!-- Links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="/"> home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/users">users </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/mahdi">mahdi </a>
              <a class="nav-link" href="/aricales">aricales </a>
    
            </li>
          </ul>
        </div>
      
      </nav>
      @show
<div class="container">
  <h1>My First Bootstrap Page</h1>
  <p>This part is inside a .container class.</p>
  <p>The .container class provides a responsive fixed width container.</p>
</div>

@yield('contant')
<div class="container mt-3">
    <h2>APP Table</h2>
    <p>The .table class adds basic styling (light padding and horizontal dividers) to a table:</p>            
    <table class="table">
      <thead>
        <tr>
          <th>Firstname</th>
          <th>Lastname</th>
          <th>Email</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>John</td>
          <td>Doe</td>
          <td>john@example.com</td>
        </tr>
        <tr>
          <td>Mary</td>
          <td>Moe</td>
          <td>mary@example.com</td>
        </tr>
        <tr>
          <td>July</td>
          <td>Dooley</td>
          <td>july@example.com</td>
        </tr>
      </tbody>
    </table>
  </div>
</body>
</html>