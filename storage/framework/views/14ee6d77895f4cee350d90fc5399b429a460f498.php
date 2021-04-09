<?php $__env->startSection('title'); ?> <?php echo e("Product Listing"); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="app-title">
        <div>
            <h1><i class="fa fa-tags"></i> <?php echo e("Product Listing"); ?></h1>
            
        </div>
         <a href="<?php echo e(url('/')); ?>" class="btn btn-primary pull-right">Listing 1</a>
        <a href="<?php echo e(route('datatablePagination')); ?>" class="btn btn-primary pull-right">Listing 3 (with datatable)</a>
       
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                   <table  class="table table-striped table-bordered" style="width:100%" id="table">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>Details</th>
                  </tr>
                  </thead>
                  <tbody></tbody>
                </table>
                 
                </div>
            </div>
        </div>
    </div>

<?php $__env->startSection('script'); ?>
<script>
  $(function () {
    $('#table').DataTable({
      processing: true,
      serverSide: true,
      ajax:{ 
        url: "<?php echo e(url('http://127.0.0.1:8000/datatablePagination')); ?>" 
      },
      columns:[
        {data: 'name',name: 'name'},
        {data: 'details',name: 'details'},
      ]
    });
  });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xamppps\htdocs\interview\resources\views/web/products/datatable.blade.php ENDPATH**/ ?>