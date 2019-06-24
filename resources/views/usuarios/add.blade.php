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
        <li class="active" ><a href="{{Request::root()}}/usuarios/add">Add Usuarios</a></li>
      </ul>
  </div>
</nav>

<div class="container">

  <h2>Add Usuarios</h2>
<form role="form" method="post" action="{{Request::root()}}/usuarios/add-post" >
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">
    <label for="user">User:</label>
    <input type="text" class="form-control" id="user" name="user">
  </div>
    <div class="form-group">
    <label for="senha">Senha:</label>
    <input type="password" class="form-control" id="senha" name="senha">
  </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</body>
</html>
