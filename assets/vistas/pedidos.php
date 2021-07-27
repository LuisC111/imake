<div class="container">
    <div class="jumbotron">
        <h2>formulario registro</h2>

    </div>
    <div class="col-md-6 col-md-offset-3">
        <div class="form-horizontal" style="">
            <?php if($data['idpedido']==""){ ?>
            <form action="index.php?m=get_datosE" method="post">
            <?php } ?>
            <?php if($data['idpedido']!=""){ ?>
            <form action="index.php?m=get_datosE&idpedido=<?php echo $data['idpedido'];?>" method="post">
            <?php } ?>

                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_idpedido">ID:</label>
                    <div class="col-sm-10">
                <input type="text" class="form-control" name="txt_idpedido" value="<?php echo $data['idpedido']; ?>">
                    </div>
                    
                </div>
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_domicilio">DOMICILIO:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="txt_domicilio" value="<?php echo $data['domicilio']; ?>">
                    </div>
                    
                </div>
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_valortotalpedido">VALOR TOTAL:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="txt_valortotalpedido" value="<?php echo $data['valortotalpedido']; ?>">
                    </div>
                    
                </div>
              
               
                <div class="form-group">
                    <div class="col-md-12 col-md-off-set-3">
                    <?php if($data['idpedido']==""){ ?>
                        <input type="submit" class="btn btn-primary form-control" name="" value="registrar">
                    <?php }  ?>
                    <?php if($data['idpedido']!=""){ ?>
                    <input type="submit" class="btn btn-primary form-control" name="" value="Actualizar">
                    <?php }  ?>
                    </div>
                </div>
            </form>
            
        </div>
    </div>
    
</div>