<!-- index.blade.php -->

<!DOCTYPE html>
<html>
  @extends('layouts.app')
  @section('title', 'Page Title')
  <body>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
      </tr>
    </thead>
    <tbody>

      @foreach($libros as $libro)
      <tr>
        <td>{{$libro['id']}}</td>
        <td>{{$libro['nombre']}}</td>

        <td align="right"><a href="{{action('LibroController@edit', $libro['id'])}}" class="btn btn-warning">Edit</a></td>
        <td align="left">
          <form action="{{action('LibroController@destroy', $libro['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>