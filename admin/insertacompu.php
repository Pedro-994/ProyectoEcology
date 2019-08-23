
<div class="container">
        <div class="">
            <h4 class="bg-dark text-white text-center">Insertar Computadora</h2>
        </div>
        <div class="card-body">
            <form method="POST" class="form-horizontal" enctype="multipart/form-data">
                <div class="form-group row  justify-content-md-center">
                    <label class="col-md-6">Nombre Producto</label>
                    <div class="col-md-6">
                        <input type="text" REQUIRED name="nombre" class="form-control"placeholder="Escribe el nombre..."/>
                    </div>
                </div>
                <div class="form-group row  justify-content-md-center">
                    <label class="col-md-6">Marca</label>
                    <div class="col-md-6">
                        <input type="text" REQUIRED name="marca" class="form-control"placeholder="Escribe la marca..."/>
                    </div>
                </div>
                <div class="form-group row justify-content-md-center">
                    <label class="col-md-6">Color</label>
                    <div class="col-md-6">
                        <input type="text" REQUIRED name="color" class="form-control"placeholder="Escribe el color..."/>
                    </div>
                </div>
                <div class="form-group row justify-content-md-center">
                    <label class="col-md-6">Precio</label>
                    <div class="col-md-6">
                        <input type="text" REQUIRED name="preciorenta" class="form-control"placeholder="Escribe el precio..."/>
                    </div>
                </div>
                <div class="form-group row justify-content-md-center">
                    <label class="col-md-6">Estado</label>
                    <div class="col-md-6">
                    <select name="estadoc" class="custom-select" id="inlineFormCustomSelect">
                        <option >Disponible</option>
                        <option >No disponible</option>
                     </select> 
                    </div>
                </div>
                <div class="form-group row  justify-content-md-center">
                    <label class="col-md-6">Imagen 1</label>
                    <div class="col-md-6">
                        <input type="file" name="img" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row justify-content-md-center">
                    
                    <div class="col-md-6">
                        <input type="submit" name="submit" value="Insertar Producto" class="btn btn-primary form-control">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
    if(isset($_POST["submit"])){
        $nombre = $_POST['nombre'];
        $marca = $_POST["marca"];
        $color = $_POST["color"];
        $precio = $_POST["preciorenta"];
        $estado = $_POST["estadoc"];

        $img = $_FILES['img']['name'];

        $name_temp = $_FILES['img']['tmp_name'];

        move_uploaded_file($name_temp,"../IMG/$img");

        $insertar_producto = "INSERT INTO computadora(nombrec,marca,color,preciorenta,img,estadoc) values ('$nombre','$marca','$color',$precio,'$img','$estado')";

        $guardar_producto = mysqli_query($conexion,$insertar_producto);

        if($guardar_producto){
            echo "<script>alert('Producto insertado')</script>";
            echo "<script>window.open('Computadoras.php','_self')</script>";
        }else{
            echo "<script>alert('No se pudo agregar producto')</script>";
        }
    }
?>