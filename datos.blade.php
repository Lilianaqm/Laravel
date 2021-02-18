<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/shards-ui@latest/dist/css/shards.min.css">
    <link rel="stylesheet" href="css/parvati.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    
<title>Página de contacto</title>
</head>
<body>
<section class="vh-100 bg-img d-flex justify-content-center align-items-center text-dark">
      <div class="col-3 bg-glass-06 blur p-0 rounded shadow d-flex animated fadeIn">
        <div class="bg-glass-06 rounded-left p-2">
    <div clas="container">
        <div class="row">
            <div class="col">
               <h2>Enviar mensaje</h2>
               <form  method="POST" action="{{route ('datos.store')}}">
               @if (count($errors) > 0)
         <div class="alert alert-danger">
             <ul>
              @foreach ($errors->all() as $error)
            <li>{{ $error }} </li>
              @endforeach 
            </ul>
         </div>
               @endif
                    <div class="form-group" >
                  <input type="text" name="nombre" class="form-control" placeholder="Escribe tu nombre" value="{{old('nombre')}}">
                  </div> 
                  <div class="form-group">   
                  <input type="email" name="email" class="form-control"placeholder="Escribe tu email" value="{{ old('email') }}">
                  </div>
                  <div class="form-group">
                  <textarea name="mensaje" class="form-control"placeholder="Escribe tus comentarios" value="{{ old('mensaje') }}"></textarea>
                   </div>
                    <div class="form-group">
                       <input type="submit" value="Enviar"  class="btn btn-primary">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                       {{ csrf_field() }}
                    </div>
              </form>
            </div>
        </div>
    </div>
</body>
</html>