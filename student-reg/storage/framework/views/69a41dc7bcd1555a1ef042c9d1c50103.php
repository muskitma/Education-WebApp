<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2 class="my-4">Edit Student</h2>
        
        <?php if(session('message')): ?>
            <div class="alert alert-success" role="alert">
                <?php echo e(session('message')); ?>

            </div>
        <?php endif; ?>

        <form action="<?php echo e(route('update-student', $student->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <div class="form-group">
                <label for="uname">Username:</label>
                <input type="text" class="form-control" name="uname" value="<?php echo e($student->uname); ?>" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" value="<?php echo e($student->email); ?>" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="tel" class="form-control" name="phone" value="<?php echo e($student->phone); ?>" required>
            </div>

            <div class="form-group">
                <label for="address">Address:</label>
                <textarea class="form-control" name="address" rows="3" required><?php echo e($student->address); ?></textarea>
            </div>

            <div class="form-group">
                <label for="department">Department:</label>
                <input type="text" class="form-control" name="department" value="<?php echo e($student->department); ?>" required>
            </div>

            <div class="form-group">
                <label for="joined_date">Joined Date:</label>
                <input type="date" class="form-control" name="joined_date" value="<?php echo e($student->joined_date); ?>" required>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>
<?php /**PATH D:\project\Education\eduweb-master\eduweb-master\student-reg\resources\views/edit-student.blade.php ENDPATH**/ ?>