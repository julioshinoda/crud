<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Produto:</strong>
                <?php echo Form::text('produto', null, array('placeholder' => 'Produto','class' => 'form-control')); ?>

            </div>
        </div>



        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Valor:</strong>
                <?php echo Form::text('valor', null, array('placeholder' => 'Valor','class' => 'form-control')); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>