<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="asset/css/app.css">
</head>
<body>
    <div class="container">
        <h2>Search</h2>
        <input type="text" id="search" placeholder="Search name/Department/Designation">
        <div id="user-list">
            @foreach ($users as $user)
                <div class="tile">
                    <h2>{{ $user->name }}</h2>
                    <h3>{{ $user->designation->name }}</h3>
                    <h4>{{ $user->department->name }}</h4>
                </div>
            @endforeach
        </div>
    </div>

</body>

<script src="/asset/js/script.js"></script>
</html>
