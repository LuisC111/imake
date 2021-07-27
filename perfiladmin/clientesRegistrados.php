<?php
include "./headerAdministrador.html";
include "./animaciones.html";
?>
<div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Registros</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                                  
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Tablero</a></li>
                                   
                                    <li class="active">Datos tabla</li>
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
                                    <strong class="card-title">Usuarios Registrados</strong>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive" id="mydatatable-container">
                                        <table class="records_list table table-striped table-bordered table-hover" id="mydatatable">
                                            <thead>
                                                <tr>
                                                    <tr role="row">
                                                        <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Nombre: activate to sort column descending" style="width: 180.889px;">Nombre</th>
                                                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Rol: activate to sort column ascending" style="width: 140px;">Rol</th>
                                                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Ciudad: activate to sort column ascending" style="width: 169.889px;">Ciudad</th>
                                                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Estado: activate to sort column ascending" style="width: 100px;">Estado</th>
                                                        
                                                   
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Filter..</th>
                                                    <th>Filter..</th>
                                                    <th>Filter..</th>
                                                    <th>Filter..</th>
                                            
                                                    
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                               <tr>
                                                    <td>Angelica Ramos</td>
                                                    <td>Repartidor</td>
                                                    <td>Bogota</td>
                                                 <td>Activo</td>
                                                                  
                                                </tr>
                                                <tr>
                                                    <td>Bradley Greer</td>
                                                     <td>Vendedor</td>
                                                     <td>Cartagena</td>
                                                     <td>Inactivo</td>
                                                  
                                                   
                                                </tr>
                                                <tr>
                                                    <td>Caesar Vance</td>
                                                    <td>Cliente</td>
                                                    <td>Bogota</td>
                                                    <td>Activo</td>
                                                   
                                                </tr>
                                                <tr>
                                                    <td>Charde Marshall</td>
                                                    <td>Cliente</td>
                                                    <td>Medellin</td>
                                                    <td>Activo</td>
                                                   
                                                </tr>
                                                <tr>
                                                    <td>Dai Rios</td>
                                                    <td>Cliente</td>
                                                    <td>Bogota</td>
                                                    <td>Activo</td>
                                                   
                                                </tr>
                                                <tr>
                                                    <td>Doris Wilder</td>
                                                    <td>Cliente</td>
                                                    <td>Cali</td>
                                                    <td>Inactivo</td>
                                                  
                                                </tr>
                                                <tr>
                                                    <td>Gavin Joyce</td>
                                                                        <td>Vendedor</td>
                                                                        <td>Bogota</td>
                                                                        <td>Activo</td>
                                                                        
                                                </tr>
                                                <tr>
                                                    <td>Gloria Little</td>
                                                    <td>Repartidor</td>
                                                    <td>Cali</td>
                                                    <td>Activo</td>
                                                   
                                                </tr>
                                                <tr>
                                                    <td>Haley Kennedy</td>
                                                                        <td>Vendedor</td>
                                                                        <td>Cartagena</td>
                                                                        <td>Activo</td>
                                                                     
                                                </tr>
                                                <tr>
                                                <td>Jena Gaines</td>
                                                <td>Repartidor</td>
                                                <td>Bogota</td>
                                                <td>Activo</td>
                                               
                                                </tr>
                            
                                                <tr>
                                                    <td>Edwards Gaines</td>
                                                    <td>Cliente</td>
                                                    <td>Bogota</td>
                                                    <td>Activo</td>
                                                  
                                                    </tr>
                            
                                    
                                            </tbody>
                                        </table>
                                    </div>
                                    <style>
                                        #mydatatable tfoot input{
                                            width: 100% !important;
                                        }
                                        #mydatatable tfoot {
                                            display: table-header-group !important;
                                        }
                                        </style>
                                        
                                        <script type="text/javascript">
                                        $(document).ready(function() {
                                            $('#mydatatable tfoot th').each( function () {
                                                var title = $(this).text();
                                                $(this).html( '<input type="text" placeholder="Filtrar.." />' );
                                            } );
                                        
                                            var table = $('#mydatatable').DataTable({
                                                "dom": 'B<"float-left"i><"float-right"f>t<"float-left"l><"float-right"p><"clearfix">',
                                                "responsive": false,
                                                "language": {
                                                    "url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
                                                },
                                                "order": [[ 0, "desc" ]],
                                                "initComplete": function () {
                                                    this.api().columns().every( function () {
                                                        var that = this;
                                        
                                                        $( 'input', this.footer() ).on( 'keyup change', function () {
                                                            if ( that.search() !== this.value ) {
                                                                that
                                                                    .search( this.value )
                                                                    .draw();
                                                                }
                                                        });
                                                    })
                                                }
                                            });
                                        });
                                        </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- .animated -->
            </div><!-- .content -->
        <div class="clearfix"></div>
        <?php
        include "./footer.html"
        ?>
    </div>
    <!-- Scripts -->
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
    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
      } );
  </script>
</body>
</html>