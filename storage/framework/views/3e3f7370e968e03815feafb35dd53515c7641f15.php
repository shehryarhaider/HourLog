<?php $__env->startSection('content'); ?>
        <!-- Start: Content-Wrapper -->
        <section id="content_wrapper">
            <!-- Start: Topbar -->
            <header id="topbar">
                <div class="topbar-left">
                    <ol class="breadcrumb">
                        <li class="crumb-active">
                            <a href="index.php">Dashboard</a>
                        </li>
                        <li class="crumb-icon">
                            <a href="index.php">
                                <span class="glyphicon glyphicon-home"></span>
                            </a>
                        </li>
                        <li class="crumb-icon active">
                            Phase
                        </li>
                    </ol>
                </div>
            </header>
            <!-- End: Topbar -->

            <!-- Begin: Content -->
            <section id="content" class="animated fadeIn">
                <?php if(session('message')): ?>
                    <p class="alert alert-success"><?php echo e(session('message')); ?></p>
                <?php endif; ?>
                <div class="card">
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading" style="height: 60px;padding: 7px;">
                                <span class="panel-title" style="font-size: 25px;">Phase</span>
                                <div class="widget-menu pull-right">
                                    <a href="<?php echo e(route('phase.create')); ?>">
                                        <div class="col-md-12">
                                            <button type="button"
                                                class="btn btn-primary btn-gradient dark btn-block">Add Phase</button>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="panel panel-visible" id="spy2">
                                    <div class="panel-body pn" style="padding: 0px;
                                     border: none;">
                                        <table class="table table-striped table-hover" id="datatable2" cellspacing="0"
                                            width="100%" style="border: 1px solid #80808052;">
                                            <thead style="background: #cfe8ff;">
                                                <tr>
                                                    <th>Name</th>
                                                    <th width="7%" class="text-center">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $__currentLoopData = $phase; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                <tr>
                                                    <td><?php echo e($item->name); ?></td>
                                                    <td>
                                                        <a href="<?php echo e(route('phase.edit',$item->id)); ?>"><i class="fa fa-edit" style="color: green;font-size: 18px;padding-right: 10px;"></i></a>
                                                        <a href="<?php echo e(route('phase.delete',$item->id)); ?>"><i class="fa fa-trash" style="color:orangered;font-size: 18px;"></i></a>
                                                    </td>
                                                </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End: Content -->

        </section>
        <!-- End: Content-Wrapper -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\HourLog\resources\views/phase.blade.php ENDPATH**/ ?>