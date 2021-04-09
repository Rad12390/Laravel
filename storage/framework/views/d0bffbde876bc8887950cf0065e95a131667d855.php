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
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                        <?php if(!count($items)): ?>
                        <li class="item">
                            <div class="product-info" style="text-align:center;">
                                No items found
                            </div>
                        </li>
                        <?php endif; ?>
                        
                        <tr>
                            <th> Name </th>
                            <th> Details </th>
                       </tr>

                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($product->name); ?></td>
                                    <td><?php echo e($product->details); ?></td>
                                   
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                     <?php echo e($items->links()); ?>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
   <!-- <script type="text/javascript" src="<?php echo e(asset('backend/js/plugins/jquery.dataTables.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('backend/js/plugins/dataTables.bootstrap.min.js')); ?>"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>-->
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xamppps\htdocs\interview\resources\views/web/products/index.blade.php ENDPATH**/ ?>