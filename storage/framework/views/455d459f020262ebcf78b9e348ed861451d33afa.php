<?php $__env->startSection('title'); ?> <?php echo e("Product Listing"); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="app-title">
        <div>
            <h1><i class="fa fa-tags"></i> <?php echo e("Product Listing"); ?></h1>
            
        </div>
        <a href="<?php echo e(url('/')); ?>" class="btn btn-primary pull-right">Listing 1</a>
        <a href="<?php echo e(route('datatablePagination')); ?>" class="btn btn-primary pull-right">Listing 2 (with datatable)</a>
        <a href="<?php echo e(route('numbericPagination')); ?>" class="btn btn-primary pull-right">Listing 3 (with numbers)</a>
        <!-- <a href="<?php echo e(route('datatablePagination')); ?>" class="btn btn-primary pull-right">Listing 3 (with datatable)</a> -->
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th width="300px;">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if(!empty($data) && $data->count()): ?>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($value->name); ?></td>
                        <td><?php echo e($value->details); ?></td>
                       
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <tr>
                    <td colspan="10">There are no data.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
    <?php echo $data->appends(['sort' => 'products'])->links(); ?>


                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xamppps\htdocs\interview\resources\views/web/products/numberic.blade.php ENDPATH**/ ?>