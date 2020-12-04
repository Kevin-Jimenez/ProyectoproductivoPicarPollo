<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedido Nuevo</title>
</head>
<body>
<?php
        require '../../../Controller/Login/StarterController.php';
        $is = new StarterController();
    
        if (empty($_SESSION['nombre'])) {
          header("location: ../../../Controller/Login/LoginController.php?action=login");
        }
        if ($_SESSION['rol'] == 1 ){
          header('location: ../../');
        }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="../../../librerias/mesas/css/main.css" rel="stylesheet" type="text/css"/>
    <link href="../../../librerias/mesas/css/mesas.css" rel="stylesheet" type="text/css"/>
    <!-- <link rel="stylesheet" id="theme-color" type="text/css" href="#"/>
    <link rel="stylesheet" id="theme-pattern" type="text/css" href="#"/> -->
    <link href="../../../librerias/cssuc/customize-template.css" type="text/css" media="screen, projection" rel="stylesheet" />
       <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="librerias/public/img/Logo.jpeg">
    <title>Picar Pollo</title>
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../librerias/public/css/modal.css">
    <link rel="stylesheet" href="../../../librerias/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../librerias/public/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../../../librerias/public/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../../../librerias/public/css/styles.css">
    <link rel="stylesheet" href="../../../librerias/mesas/jquery/iu/jquery-ui-1.12.1/jquery-ui.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<nav class="navbar navbar-expand-lg">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">

                <a class="nav-item nav-link" style="color: white;" href="../Mesero/">Volver</a>
                <a class="nav-item nav-link" style="color: white;" href="../mesasdis/mesas.php">Mesas</a>
                
            </div>
        </div>
    </nav> 
    <?php
       include "../../../Confing/conexion.php";
       
       //SELECT p.id_pedido, p.fecha_p, p.tiempo_inicio, p.tiempo_fin, m.numero_m,e.documento_e,e.nombre_e,u.usuario, d.descripcion,d.precio_d, pr.nombre_p, pr.precio_p, pr.imagen_p FROM pedido p INNER JOIN descripcion d ON p.id_pedido = d.id_pedido INNER JOIN mesa m ON m.id_mesa = p.id_mesa INNER JOIN producto pr ON pr.id_producto = d.id_producto INNER JOIN empleado e ON e.documento_e = p.id_empleado INNER JOIN usuario u ON u.id_usuario = e.id_usuario WHERE p.id_pedido = 1

            $usuario = $_SESSION['user'];
            $idusuario = $_REQUEST['id'];

            

            $sql= mysqli_query($conection,"SELECT id_pedido FROM pedido WHERE id_mesa = $idusuario ");
            while ($dato = mysqli_fetch_array($sql)) {
                $pedido = $dato['id_pedido'];
            }
            
            
            $query= mysqli_query($conection,"SELECT e.documento_e,u.nombre_u,u.usuario
                                                            FROM empleado e 
                                                            INNER JOIN usuario u ON u.id_usuario = e.id_usuario
                                                            WHERE u.usuario = '$usuario'");
            
            while ($data = mysqli_fetch_array($query)) {
                $documento = $data['documento_e'];
                $nombre = $data['nombre_e'];
                
            }
    
        ?>
        <br><br>

                <div class="form_register">
                    <div class="page-header">
                        <strong style="font-size:40px;" >Registrar Pedido de MESA #<?php echo $idusuario; ?></strong>
                    </div>
                    <div class="Aregistro">
                        <?php echo isset($alert) ? $alert : '';?>
                    </div>
                        <form class="pedidoR form_pedido" action="eliminar_pedido.php" method="post">
                        <div class="form-row">
                            <div class="col-md-3 mb-3">
                            <input type="hidden" class="form-control" name="pedido"  placeholder="pedido" value="<?php echo $pedido; ?>" readonly>
                                <label for="documento">N° de documento Empleado</label>
                                <input type="text" class="form-control" name="documento" id="documento" placeholder="documento empleado" value="<?php echo $documento; ?>" readonly>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="nombre">Nombre Empleado</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="nombre empleado" value="<?php echo $nombre; ?>" readonly>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="usuario">Usuario Empleado</label>
                                <input type="text" class="form-control" name="usuario" id="usuario" placeholder="usuario empleado" value="<?php echo $usuario; ?>" readonly>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="mesa">Numero de mesa</label>
                                <input type="text" class="form-control" name="mesa" id="mesa" placeholder="Numero de mesa" value="<?php echo $idusuario; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                        <div class="col-md-12 mb-3">

                                <label>Detalle</label>

                                <table>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Precio</th>
                                        <th>Categoria</th>
                                        <th>Subcategoria</th>
                                        <!-- <th>Foto</th> -->
                                        <th>Descripcion</th>
                                        <th>Valor Adicional</th>
                                        <th>Acciones</th>
                                    </tr>

                                    <?php
                                        $query = mysqli_query($conection,"SELECT pe.id_mesa,d.id_descripcion,ca.etiqueta_ca,ca.tipo_ca, p.nombre_p, p.precio_p,d.precio_d,p.imagen_p,d.descripcion
                                                                                FROM producto p 
                                                                                INNER JOIN categoria ca ON p.id_categoria = ca.id_categoria
                                                                                INNER JOIN descripcion d ON d.id_producto = p.id_producto
                                                                                INNER JOIN pedido pe ON pe.id_pedido = d.id_pedido
                                                                                WHERE (p.estatus = 1 AND pe.id_mesa = $idusuario)");
                                        mysqli_close($conection);
                                        $result = mysqli_num_rows($query);

                                        $valor_p = 0;
                                        if ($result > 0) {
                                            while ($data = mysqli_fetch_array($query)) {

                                                $valor_p = $valor_p + $data["precio_p"] + $data["precio_d"];

                                                if ($data['imagen_p'] != 'img_producto.png') {
                                                    $foto = 'img/uploads/'.$data['imagen_p'];
                                                }
                                                else{
                                                    $foto = 'img/'.$data['imagen_p'];
                                                }
                                        ?>
                                        <?php
                                        if ($data["descripcion"] == null) {
                                            $data["descripcion"] = "N/N";
                                        }else{
                                            $data["descripcion"];
                                        }
                                        ?>
                                    
                                            <tr>
                                                <td><?php echo $data["nombre_p"]?></td>
                                                <td><?php echo '$'.$data["precio_p"]?></td>
                                                <td><?php echo $data["etiqueta_ca"]?></td>
                                                <td><?php echo $data["tipo_ca"]?></td>
                                                <td><?php echo $data["descripcion"]?></td>
                                                <td><?php echo '$'.$data["precio_d"]?></td>
                                                <td>
                                                    <a href="eliminar.php?mesa=<?php echo $data["id_mesa"]?>&&id=<?php echo $data["id_descripcion"]?>" class="btn btn-danger">Eliminar</a>
                                                    <?php } ?>
                                                </td>
                                            <tr>
                                    <?php
                                            }

                                    ?>
                                    </tr>
                                </table>
                                </div>
                        </div>
                        <label for="mesa">Precio a Pagar</label>
                            <center>
                            <input type="text" class="form-control" name="valor_p" placeholder="Numero de mesa" value="<?php echo $valor_p; ?>" readonly>
                            <input type="submit"class="btn btn-success boton form-control"  value="Finalizar pedido">
                            </center>
                        </div>
                    </form>
                </div>
            </section>

            
            <form action="insertar_producto.php" class="contenedor_p" method="post" >

                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                <?php 
                                    include "../../../Confing/conexion.php";

                                    $producto_a= mysqli_query($conection,"SELECT id_producto,nombre_p, precio_p FROM producto WHERE estatus = 1");
                                    $array = array();
                                    # WHERE (estatus = 1 AND nombre_p LIKE '%$producto%')
                                        if ($producto_a) {
                                            
                                            while ($row = mysqli_fetch_array($producto_a)) {
                                                $id_producto = $row['id_producto'];
                                                $producto = utf8_encode($row['nombre_p']);
                                                array_push($array, $producto ); // productos
                                            }
                                        }
                                ?>

                                    <label for="producto">Producto a añadir:</label>
                                    <input type="text" class="form-control" name="nombre_p" id="producto" placeholder="Ingrese el producto pedido" required="">
                                    <input type="text" class="form-control" name="precio" id="precio" readonly>
                                    <input type="hidden" class="form-control" name="producto" id="idproducto">
                                    </div>
                                    <div class="col-md-12 mb-3">
                                    <label for="descripcion">Descripcion</label>
                                    <textarea class=" form-control" name="descripcion" id="descripcion" cols="30" rows="3" placeholder="Digite la descripcion del Pedido"></textarea>
                                    <label for="valor_d">Valor adicional</label>
                                    <input type="number" class="form-control" name="valor_d" id="valor_d" placeholder="Valor adicional" required="">
                                    <input type="hidden" name="mesa"  value="<?php echo $idusuario; ?>"  >
                                    </div>
                                    </div>
                                    <div class="centro">
                                    <input type="submit"class="btn btn-success boton form-control " value="Añadir"  >
                                    </div>
                        </div>
                                
            </form>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../../../librerias/mesas/jquery/iu/jquery-ui-1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var items = <?= json_encode($array) ?>

            $("#producto").autocomplete({
                source: items,
                select: function (event, item){
                    var params = {
                        producto: item.item.value
                    };
                    $.get("getproducto.php", params, function (response){
                        var json = JSON.parse(response);
                        $("#idproducto").attr("value",json.id_producto);
                        $("#precio").attr("value",json.precio_p);
                    }); //ajax
                }
            });
        });
    </script>
</body>
</html>