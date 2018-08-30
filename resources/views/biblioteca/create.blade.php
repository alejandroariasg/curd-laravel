<!DOCTYPE html>
<html>
   @extends('layouts.app')
   @section('title', 'Page Title')
  <body>
    <div class="container">
      <h2>Employee List</h2><br/>
      <form method="post" action="{{url('libros')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-12"></div>
          <div class="form-group col-md-4">
            <label for="Name">Name:</label>
            <input type="text" class="form-control" name="name">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12"></div>
          <div class="form-group col-md-4" style="margin-top:10px">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>