<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <?php echo $__env->make('Sistema.base.alerts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="card">
                <div class="card-header">
                    Recados
                    <a href="<?php echo url('/recados/adicionar'); ?>">
                        <button class="btn btn-success float-right"> Adicionar</button>
                    </a>
                </div>
                

                <div class="card-body">
                <?php if(count($recados) > 0): ?>
          
                    <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Data</th>
                            <th scope="col">Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $recados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo $rec->id; ?></td>
                            <td><?php echo substr($rec->titulo,  0, 20); ?></td>
                            <td><?php echo substr($rec->descricao,  0, 40); ?></td>
                            <td><?php echo date("d/m/Y H:i:s", strtotime($rec->data)); ?></td>
                            <td>
                                <?php if($rec->status == "A"): ?>
                                    Aberto
                                <?php else: ?>
                                    Concluido
                                <?php endif; ?>
                            </td>
                            <td>
                            <a href="<?php echo url('/recados/alterar/'.$rec->id); ?>">
                                <button class="btn btn-warning">Alterar</button>
                            </a>
                            <i class="oi oi-pencil"></i>
                            <a href="<?php echo url('/recados/apagar/'.$rec->id); ?>">
                            <i class="oi oi-trash"></i>
                                <button class="btn btn-danger">Excluir</button>
                            </a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                    
                    </table>
                    <div>
                        <?php echo $recados->links(); ?>

                    </div>
                    
                    <?php else: ?>
                    <h1>Nao ha dados para mostrar, fazer adicionar uma noticia!</h1>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>