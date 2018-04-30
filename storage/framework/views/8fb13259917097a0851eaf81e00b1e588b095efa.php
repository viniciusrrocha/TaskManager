<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tarefas</div>

                <div class="card-body">
          
                    <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Descricao</th>
                            <th scope="col">status</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $tarefas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tarefa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($tarefa->status == 'F'): ?>
                            <tr class="table-danger">
                                <td><?php echo $tarefa->id; ?></td>
                                <td><?php echo $tarefa->descricao; ?></td>
                                <td><?php echo $tarefa->status; ?></td>
                            </tr>
                        <?php else: ?>
                            <tr class="table-success">
                                <td><?php echo $tarefa->id; ?></td>
                                <td><?php echo $tarefa->descricao; ?></td>
                                <td><?php echo $tarefa->status; ?></td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                    
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>