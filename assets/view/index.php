<div class="container" style="margin-top: 80px">
    <div class="jumbotron">
        <h2>registro de pedidos</h2>
        
    </div>
    <div class="container">
        <table class="table table-striped ">
            <thead>
                <tr>
                    <th>id</th>
                    <th>domicilio</th>
                    <th>valor del pedido</th>
                   
                    <th>acción</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($query as $data): ?>
                    <tr>
                        <th><?php echo $data['idpedido']; ?></th>
                        <th><?php echo $data['domicilio']; ?></th>
                        <th><?php echo $data['valortotalpedido']; ?></th>
                    
                        <th>
                            <a href="index.php?m=estudiante&id=<?php echo $data['idpedido']?>" class="btn btn-primary">Editar</a>
                            <a href="index.php?m=confirmarDelete&id=<?php echo $data['idpedido']?>" class="btn btn-danger">Eliminar</a>
                        </th>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
</div>