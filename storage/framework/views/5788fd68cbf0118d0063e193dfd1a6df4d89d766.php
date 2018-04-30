<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <?php echo $__env->make('Sistema.base.alerts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="card">
                <div class="card-header">
                    Noticias
                    <a href="<?php echo url('/noticias/adicionar'); ?>">
                        <button class="btn btn-success float-right">+ Adicionar</button>
                    </a>
                </div>
                

                <div class="card-body">
                <?php if(count($noticias) > 0): ?>
          
                    <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Endereço</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $noticias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $not): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo substr($not->id,  0, 16); ?></td>
                            <td><?php echo substr($not->titulo,  0, 20); ?></td>
                            <td><?php echo substr($not->descricao,  0, 40); ?></td>
                            <td><?php echo substr($not->uri,  0, 40); ?></td>
                            <td>
                            <button class="btn btn-warning">Alterar</button>
                            <a href="<?php echo url('/noticias/apagar/'.$not->id); ?>">
                                <button class="btn btn-danger">Excluir</button>
                            </a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                    
                    </table>
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