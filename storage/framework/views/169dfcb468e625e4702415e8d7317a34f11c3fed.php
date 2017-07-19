<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Produtos</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="<?php echo e(route('produto.create')); ?>"> Adicionar Produto</a>
            </div>
        </div>
    </div>
    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Preço</th>
            <th width="280px">Ação</th>
        </tr>
    <?php foreach($produtos as $produto): ?>
    <tr>
        <td><?php echo e(++$i); ?></td>
        <td><?php echo e($produto->produto); ?></td>
        <td><?php echo e($produto->valor); ?></td>
        <td>
            <a class="btn btn-info" href="<?php echo e(route('produto.show',$produto->id)); ?>">Show</a>
            <a class="btn btn-primary" href="<?php echo e(route('produto.edit',$produto->id)); ?>">Edit</a>
            <?php echo Form::open(['method' => 'DELETE','route' => ['produto.destroy', $produto->id],'style'=>'display:inline']); ?>

            <?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?>

            <?php echo Form::close(); ?>

        </td>
    </tr>
    <?php endforeach; ?>
    </table>
    <?php echo $produtos->render(); ?>

 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>