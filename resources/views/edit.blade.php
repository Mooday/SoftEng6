<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Editar el campo del Estado</h1>      
    </header>  
    <div class="col-md-5">
                <form action="<?php echo e(url('/anteproyectosregistrados/'.$dato->id)); ?>" method="post" enctype="multipart/form-data">
              
                <?php echo e(csrf_field()); ?>

                <?php echo e(method_field('PATCH')); ?>

                <p>
                <label for="estado"class="control-label">Selecione el Estado</label><br/>
                <select name="Estado" class="form-control"id="estado"><br/>
                    <br/><option value="En Revision" name=Estado>En Revision</option><br/>
                    <br/><option value="Enviado" name=Estado>Enviado</option><br/>
                    <br/><option value="Aprobado" name=Estado>Aprobado</option><br/>
                    <br/><option value="Denegado" name=Estado>Denegado</option><br/>
                    <br/><option value="Finalizado" name=Estado>Finalizado</option><br/>
                </p>
                </select>
                <p>
                    
                <label for="Observaciones"class="control-label">Observaciones</label>
                <textarea type="text" rows="3" class="form-control " name="comentario" id="comentario" value="<?php echo e($dato->comentario); ?>" class="form-control"></textarea>
                </div>
                <br/><input type="submit" class="btn btn-success" value="Guardar Cambios">
                
                <a href="<?php echo e(url('/anteproyectosregistrados/')); ?>" class="btn btn-danger" >Cancelar</a><br/>
                </p>
                </form>

</body>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\SoftEng6\resources\views/edit.blade.php ENDPATH**/ ?>