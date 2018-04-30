<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <?php echo $__env->make('Sistema.base.alerts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="card">
                <div class="card-body">
                <?php if(count($recados) > 0): ?>
                <div class="row">
                    <?php $__currentLoopData = $recados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      
                       
                            <div class="col-sm-4">
                                <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $rec->titulo; ?></h5>
                                    <p class="card-text"><?php echo $rec->descricao; ?></p>
                                    <p>
                                        <b>Data: </b>
                                        <?php echo date("d/m/Y H:i:s", strtotime($rec->data)); ?>

                                    </p>
                                    
                                    <a href="<?php echo url('/recados/'.$rec->id.'/concluido'); ?>" class="btn btn-primary">Concluido</a>
                                </div>
                                </div>
                            </div>
                            
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php else: ?>
                <h1>Nao ha recados para serem exibidos</h1>
                <?php endif; ?>
                
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>