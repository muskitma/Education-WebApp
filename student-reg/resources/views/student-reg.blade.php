<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row bg-dark p-2">
            <h3 class="text-white">Laravel Project</h3>
        </div>

        <div class="row bg-info py-5">
            <div class="col-6">
                <h2>Registration</h2>
                @if(session('message'))
                    <div class="alert alert-success" role="alert">
                        {{ session('message') }}
                    </div>
                @endif

                <form action="{{ route('add-student') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="uname">Username:</label>
                        <input type="text" class="form-control" name="uname" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone:</label>
                        <input type="tel" class="form-control" name="phone" required>
                    </div>

                    <div class="form-group">
                        <label for="address">Address:</label>
                        <textarea class="form-control" name="address" rows="3" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="gender">Gender:</label>
                        <select class="form-control" name="gender" required>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="department">Department:</label>
                        <input type="text" class="form-control" name="department" required>
                    </div>

                    <div class="form-group">
                        <label for="joined_date">Joined Date:</label>
                        <input type="date" class="form-control" name="joined_date" required>
                    </div>

                    <button type="submit" class="btn btn-dark">Submit</button>
                </form>
            </div>

            <div class="col-6">
            <h3>Registered Students<br><button type="submit" class="btn btn-dark" ><a  href="{{ route('hi') }}" style=" text-align: center; display: block; text-decoration: none;"> Login</a></button></div></h3>
                @if($students->count())
                    <ul class="list-group">
                        @foreach($students as $student)
                            <li class="list-group-item">
                                {{ $student->uname }} - {{ $student->email }} - {{ $student->joined_date }}
                                <form action="{{ route('delete-student', $student->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                                <a href="{{ route('edit-student', $student->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p>No Students Data</p>
                @endif
            </div>
        </div>
    </div>
</body>
</html>
