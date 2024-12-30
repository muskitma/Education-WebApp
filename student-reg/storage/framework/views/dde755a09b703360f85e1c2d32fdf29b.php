
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row bg-dark p-2">
            <h3 class="text-white">Student Login</h3>
        </div>
        <div class="row bg-info py-5">
            <div class="col-6">
               
                <form action="/check-Login" method="post">
                    <div class="form-group">
                        <label for="uname" class="form-label">Username:</label>
                        <input type="text" class="form-control" name="uname" required>
                    </div>

                    <div class="form-group">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                 
                    <button type="submit" class="btn btn-dark">Login</button>
                   
                    <?php echo csrf_field(); ?>
                </form>
            </div>
            
            

            

                
            
        </div>
    </div>
</body>
</html>
<?php /**PATH D:\project\Education\eduweb-master\eduweb-master\student-reg\resources\views/hi.blade.php ENDPATH**/ ?>