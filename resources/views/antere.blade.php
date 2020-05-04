<?php $__env->startSection('content'); ?>
<h3>Administrador de Anteproyectos</h3>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Anteproyectos Registrados</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
            <thead >
            <tr>
            <th>Nombre del Proyecto</th>
            <th>Tipo de Anteproyecto</th>
            <th>Nombre del primer Estudiante</th>
            <th>Cedula del primer Estudiante</th>
            <th>Nombre del segundo Estudiatne</th>
            <th>Cedula del segundo Estidoante </th>
            <th>Asesor de la Universidad</th>
            <th>Asesor de la Empresa</th>
            <th>Nombre de la Empresa</th>
            <th>Carrera</th>            
            <th>Fecha de Registro</th>
            <th>Estado</th>
            <th>Observaciones</th>
            <th>Acciones</th>
            </tr>
            </thead>

            <tbody>
            <?php $__currentLoopData = $ejemplos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ejemplo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            <tr>
            
            <td><?php echo e($ejemplo->Nombre_anteproyecto); ?></td>
            <td><?php echo e($ejemplo->Tipo_Anteproyecto); ?></td>
            <td><?php echo e($ejemplo->Nombre_estudiante1); ?></td>
            <td><?php echo e($ejemplo->Cedula_est1); ?></td>
            <td><?php echo e($ejemplo->Nombre_estudiante2); ?></td>
            <td><?php echo e($ejemplo->Cedula_est2); ?></td>
            <td><?php echo e($ejemplo->Asesor); ?></td>
            <td><?php echo e($ejemplo->Asesor_empresa); ?></td>
            <td><?php echo e($ejemplo->Nombre_empresa); ?></td>
            <td><?php echo e($ejemplo->Carrera); ?></td>        
            <td><?php echo e($ejemplo->created_at); ?></td>
            <td><?php echo e($ejemplo->Estado); ?></td>
            <td><?php echo e($ejemplo->comentario); ?></td>
            
            <td><a class="btn btn-primary" style="width: 100%;" href="<?php echo e(url('/anteproyectosregistrados/'.$ejemplo->id.'/edit')); ?>">Editar</a>
            <form action="<?php echo e(url('/anteproyectosregistrados/'.$ejemplo->id)); ?>" method="POST" class="float-left" style="display:inline">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button class="btn btn-danger " style="width: 117%;" type="submit" onclick="return confirm('¿SEGURO QUE DESEA BORRAR EL REGISTRO?');">Borrar
                                </button>
                            </form>
            
            @if($ejemplo->Tipo_Anteproyecto=='Tesis' or $ejemplo->Tipo_Anteproyecto=='Teorico Practico')
                @if($ejemplo->Estado=='En Revision')
                    <a class="btn btn-info" style="width: 100%;" href="{{url('imprimir-pdf/'.$ejemplo->id.'/pdf')}}"> Nota Tesis</a>
                @endif
            @endif
            
            @if($ejemplo->Tipo_Anteproyecto=='Practica Profesional')
                @if($ejemplo->Estado=='En Revision')
                    <a class="btn btn-info" style="width: 100%;" href="{{url('imprimir-pdff/'.$ejemplo->id.'/pdf')}}"> Nota PP</a></td>
                @endif
            @endif

             </tr>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
            </table>
        </div>
    </div>
</div>

        <?php echo e($ejemplos->links()); ?>

            <?php $__env->stopSection(); ?>
                 <?php echo $__env->make('layouts.template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\SoftEng6\resources\views/antere.blade.php ENDPATH**/ ?>