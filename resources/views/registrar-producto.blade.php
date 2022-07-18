<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Registrar producto</title>
</head>

<body>
    <div class="container vh-100 d-flex flex-column justify-content-center align-items-center w-100">
        <form action="{{route('register-prod')}}" method="POST" class="form-group w-100">
            <label for="" class="form-label ">Nombre producto</label>
            <input name="name_product" type="text" placeholder="Nombre del producto" class="form-control">
            <label for="" class="form-label">Fecha producto</label>
            <input onfocusout="(this.type='text')" onfocus="(this.type='date')" name="fecha_registro" type="text" placeholder="Fecha del producto" class="form-control">
            <label for="" class="form-label">Numero de productos</label>
            <input name="stock" type="number" min="0" max="10" placeholder="Numero de stock" class="form-control">
            <input type="submit" value="Registrar producto" class="btn btn-primary" class="form-control">
        </form>

        <div class="container-fluid w-100" style="overflow: auto;">
            <table class="table w-100">
                <thead>
                    <tr>
                        <th scope="col">Id producto</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Cantidad Stock</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($consulta as $prod)
                    <tr>
                        <th scope="row">{{$prod['idProducto']}}</th>
                        <td>{{$prod['nombre_producto']}}</td>
                        <td>{{date('d/m/Y',strtotime($prod['fecha_registro']))}}</td>
                        <td>{{$prod['cantidad_stock']}}</td>
                        <td><a class="btn btn-danger" href="/borrar-prod/{{$prod['idProducto']}}">
                            Borrar
                        </a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>