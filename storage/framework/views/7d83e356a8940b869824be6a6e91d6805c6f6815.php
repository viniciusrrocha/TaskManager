<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <?php echo $__env->make('Sistema.Base.alerts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="card">
                <div class="card-header">Novo Recado</div>

                <div class="card-body">
                    <form action="<?php echo route('recados.adicionar'); ?>" method="post">
                        <div class="form-group">
                            <?php echo csrf_field(); ?>
                            <div class="form-group row">
                                <label for="titulo">Titulo do Recado</label>
                                <input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo old('titulo'); ?>">
                            </div>
                            <div class="form-group row">
                                <label for="descricao">Descrição</label>
                                <textarea class="form-control" id="descricao" name="descricao"><?php echo old('descricao'); ?></textarea>
                            </div>
                            <div class="form-group row">
                                <label for="data">Data</label>
                                <input type="date" value="<?php echo old('data'); ?>" class="form-control" id="data" name="data">
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>