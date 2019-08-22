<?php
    function getPro(){
        global $conexion;
        mysqli_set_charset($conexion,"utf8");
        $get_producto = "SELECT * FROM computadora where estadoc = 'Disponible'";
        $resultado_producto = mysqli_query($conexion,$get_producto);
        if(mysqli_connect_errno()){
            echo "Error al conectar a la Base de datos";
            exit();
        }
        mysqli_select_db($conexion,'ecologycomputerbase') or die ("No se encuentra la base de datos");

        while ($fila = mysqli_fetch_array($resultado_producto)){

            $id_prod = $fila['idcompu'];
            $nombre = $fila['nombrec'];
            $marca = $fila['marca'];
            $color = $fila['color'];
            $precio = $fila['preciorenta'];
            $img = $fila['img'];

            
            echo " <div class='col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles'><div class='agile_ecommerce_tab_left mobiles_grid'>
            <div class='hs-wrapper hs-wrapper2'>
                <img src='IMG/$img' alt='' class='img-responsive' />
                <img src='IMG/$img' alt='' class='img-responsive' />
                <img src='IMG/$img' alt='' class='img-responsive' />
                <img src='IMG/$img' alt='' class='img-responsive' />
                <img src='IMG/$img' alt='' class='img-responsive' />
                <img src='IMG/$img' alt='' class='img-responsive' />
                <div class='w3_hs_bottom w3_hs_bottom_sub1'>
                    <ul>
                        <li>
                            <a href='#' data-toggle='modal' data-target='#myModal$id_prod'><span
                                    class='glyphicon glyphicon-eye-open' aria-hidden='true'></span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <h5><a href=''>$nombre</a></h5>
            <div class='simpleCart_shelfItem'>
                <p><span>$ $precio</span> <i class='item_price'>$ $precio</i></p>
                <form action='#' method='post'>
                    <input type='hidden' name='cmd' value='_cart' />
                    <input type='hidden' name='add' value='$id_prod' />
                    <input type='hidden' name='w3ls_item' value='$nombre' />
                    <input type='hidden' name='amount' value='$precio' />
                    <button type='submit' class='w3ls-cart'>Añadir</button>
                </form>
            </div>
        </div></div>";
        }
    }
?>

					