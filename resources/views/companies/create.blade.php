<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="resources/css/app.css">
 <meta charset="UTF-8">
 <title>Add Company Form - Laravel 9 CRUD</title>
 <link rel="stylesheet"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
 <div class="container mt-2">
 <div class="row">
 <div class="col-lg-12 margin-tb">
 <div class="pull-left mb-2">
 <h2>Añadir compañia</h2>
 <img src="resources/images/dramon.jpg" class="rounded float-start" alt="...">
<img src="resources/images/drasil.jpg" class="rounded float-end" alt="...">
 </div>
 <div class="pull-right">
 <a class="btn btn-primary" href="{{ route('companies.index') }}">
Volver</a>
 </div>
 </div>
 </div>
 @if(session('status'))
 <div class="alert alert-success mb-1 mt-1">
 {{ session('status') }}
 </div>
 @endif
 <form action="{{ route('companies.store') }}" method="POST" enctype="multipart/formdata">
 @csrf
 <div class="row">
 <div class="col-xs-12 col-sm-12 col-md-12">
 <div class="form-group">
 <strong>Nombre de la compañia:</strong>
 <input type="text" name="name" class="form-control"
placeholder="Nombre de la compañia">
 @error('name')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
 @enderror
 </div>
 </div>
 <div class="col-xs-12 col-sm-12 col-md-12">
 <div class="form-group">
 <strong>Email de la compañia:</strong>
 <input type="email" name="email" class="form-control"
placeholder="Email de la compañia">
 @error('email')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
 @enderror
 </div>
 </div>
<div class="col-xs-12 col-sm-12 col-md-12">
 <div class="form-group">
 <strong>Direccion de la compañia:</strong>
 <input type="text" name="address" class="form-control"
placeholder="Direccion de la compañia">
 @error('address')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
 @enderror
 </div>
 </div>

 <button type="submit" class="btn btn-dark" id="boton" style="">Añadir</button>

 </div>
 </form>
 </div>
</body>
</html>
