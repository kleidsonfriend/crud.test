<!DOCTYPE html>
<html lang="en">
<head>
  <title>Laravel Crud By Crud Generator</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="http://crudegenerator.in">Laravel Crud By Crud Generator</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="{{Request::root()}}/usuarios">Manage Usuarios</a></li>
        <li><a href="{{Request::root()}}/usuarios/add-usuarios">Add Usuarios</a></li>
      </ul>
  </div>
</nav>

<div class="container">

  <h2>Update Usuarios</h2>
<form role="form" method="post" action="{{Request::root()}}/usuarios/edit-usuarios-post" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
 <input type="hidden" value="<?php echo $usuarios->id ?>"   name="usuarios_id">


      <div class="form-group">
    <label for="user">User:</label>
    <input type="text" value="<?php echo $usuarios->user ?>" class="form-control" id="user" name="user">
  </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</body>
</html>
