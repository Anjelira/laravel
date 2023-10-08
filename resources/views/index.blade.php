<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center">Book App</h1>
    <div class="container">
    <table class="table">
  <thead>
    <!-- Alert -->
    @if(Session::get('Ok'))
    <div class="alert alert-success" role="alert">
      {{Session::get('Ok')}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if(Session::get('Update'))
    <div class="alert alert-success" role="alert">
      {{Session::get('Update')}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if(Session::get('Delete'))
    <div class="alert alert-success" role="alert">
      {{Session::get('Delete')}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <!-- End Alert -->
    <a href="/books/create" class="btn btn-primary">Add Data</a>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Tittle</th>
      <th scope="col">Author</th>
      <th scope="col">Page</th>
      <th scope="col">Year</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($buku as $row)
    <tr>
      <th scope="row">{{$row->id}}</th>
      <td>{{$row->title}}</td>
      <td>{{$row->author}}</td>
      <td>{{$row->page}}</td>
      <td>{{$row->year}}</td>
      <td>
        <a href="{{route('show.book',$row->id)}}" class="btn btn-success">Show</a>
        <a href="{{route('form.edit.book',$row->id)}}" class="btn btn-warning">Edit</a>
        <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$row->id}}">Delete</a>
        @include('book.hapusdata')
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>