<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Product | Laravel CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .form-control {
            border-radius: 8px;
        }
        .btn-lg {
            border-radius: 8px;
        }
        .product-image {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-height: 250px;
            object-fit: cover;
        }
    </style>
</head>
<body>

    <div class="bg-dark py-3">
        <h3 class="text-white text-center">Laravel CRUD - Edit Product</h3>
    </div>

    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-10 d-flex justify-content-end">
                <a href="<?php echo e(route('products.index')); ?>" class="btn btn-dark">Back</a>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg my-4">
                    <div class="card-header bg-dark text-white">
                        <h4 class="mb-0">Edit Product</h4>
                    </div>
                    <form action="<?php echo e(route('products.update', $product->id)); ?>" method="post" enctype="multipart/form-data">
                        <?php echo method_field('put'); ?>
                        <?php echo csrf_field(); ?>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Name</label>
                                <input type="text" value="<?php echo e(old('name', $product->name)); ?>" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Product Name" name="name">
                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="invalid-feedback"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">SKU</label>
                                <input type="text" value="<?php echo e(old('sku', $product->sku)); ?>" class="form-control <?php $__errorArgs = ['sku'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Product SKU" name="sku">
                                <?php $__errorArgs = ['sku'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="invalid-feedback"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Price</label>
                                <input type="text" value="<?php echo e(old('price', $product->price)); ?>" class="form-control <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Product Price" name="price">
                                <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="invalid-feedback"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Description</label>
                                <textarea placeholder="Product Description" class="form-control" name="description" cols="30" rows="5"><?php echo e(old('description', $product->description)); ?></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Availability</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="availability" value="yes" <?php echo e(($product->availability == 'yes') ? 'checked' : ''); ?>>
                                    <label class="form-check-label">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="availability" value="no" <?php echo e(($product->availability == 'no') ? 'checked' : ''); ?>>
                                    <label class="form-check-label">No</label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Country</label>
                                <select class="form-control" name="country">
                                    <option value="">Select Country</option>
                                    <option value="USA" <?php echo e($product->country == 'USA' ? 'selected' : ''); ?>>USA</option>
                                    <option value="Canada" <?php echo e($product->country == 'Canada' ? 'selected' : ''); ?>>Canada</option>
                                    <option value="India" <?php echo e($product->country == 'India' ? 'selected' : ''); ?>>India</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Product Image</label>
                                <input type="file" class="form-control" name="image">
                                <?php if(!empty($product->image)): ?>
                                    <div class="mt-3 text-center">
                                        <img class="product-image img-fluid" src="<?php echo e(asset('/uploads/products/'.$product->image)); ?>" alt="Product Image">
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="d-grid">
                                <button class="btn btn-primary btn-lg">Update Product</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\laravel11crud\resources\views/products/edit.blade.php ENDPATH**/ ?>