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
        
        @if(session('message'))
            <div class="alert alert-success" role="alert">
                {{ session('message') }}
            </div>
        @endif

        <form action="{{ route('update-student', $student->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="uname">Username:</label>
                <input type="text" class="form-control" name="uname" value="{{ $student->uname }}" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" value="{{ $student->email }}" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="tel" class="form-control" name="phone" value="{{ $student->phone }}" required>
            </div>

            <div class="form-group">
                <label for="address">Address:</label>
                <textarea class="form-control" name="address" rows="3" required>{{ $student->address }}</textarea>
            </div>

            <div class="form-group">
                <label for="department">Department:</label>
                <input type="text" class="form-control" name="department" value="{{ $student->department }}" required>
            </div>

            <div class="form-group">
                <label for="joined_date">Joined Date:</label>
                <input type="date" class="form-control" name="joined_date" value="{{ $student->joined_date }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>
