<?php
include "./header.html";
?>
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Pedido</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">

                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Tablero</a></li>

                                    <li class="active">Datos del Pedido</li>
                                </ol>

                            </div>


                        </div>
                    </div>
                </div>
            </div>


            <div class="content">
                <div class="animated fadeIn">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">

                                    <form action="#" target="" method="#" name="formDatosPersonales">
                                        <H2>Crear Pedido</H2><br />
                                        <label for="domicilio">Domicilio</label>

                                        <select name="domicilio" id="domicilio">
                                            <option value="value1">Si</option>
                                            <option value="value2">No</option>
                                        </select>
                                        <br>
                                        
                                        <label for="producto">Nombre Productos</label>
                                        <textarea name="comentarios" rows="10" cols="30">Escribe aquí los productos que deseas comprar</textarea><br />

                                        <label for="especificacionP">Especificación Producto</label>
                                        <input type="text" name="especificacionP" id="especificacionP" placeholder="Ingrese la Especificacion del producto"
                                            required /><br />

                                            <label for="tipoPago">Tipo de Pago</label>

                                            <select name="tipoPago" id="tipoPago">
                                                <option value="value1">Tarjeta de Credito</option>
                                                <option value="value2">Tarjeta Debito</option>
                                                <option value="value3">Efectivo</option>
                                            </select>
                                            <br>
                                            <label for="especificacionP">Valor del Pedido</label>
                                        <input type="text" name="especificacionP" id="especificacionP" placeholder="Ingrese el valor del pedido"
                                            required /><br />
                                            <center>
                                        <input type="submit" name="enviar" value="Pedir" />
                                            </center>
                                    </form>



                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
    <?php
    include "./headerCliente.html"
    ?>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
        <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
        <script src="assets/js/lib/data-table/jszip.min.js"></script>
        <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
        <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
        <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
        <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
        <script src="assets/js/init/datatables-init.js"></script>

</body>

</html>