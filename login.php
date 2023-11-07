<!DOCTYPE html>
<html>
<head>
  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* 
        .custom-button:hover {
            background-color: #007bff; 
            color: #fff; 
        }
        */
        body {
            background-color: #343a40; 
            color: #fff; 
        }
        .form-control {
            background-color: #23272b; 
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="back/login.php" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary custom-button">Login</button>
        </form>
        <p>Tidak punya akun?</p>
        <button class="btn btn-secondary custom-button"><a style="text-decoration:none; color:white" href="daftar.php">Daftar</a></button>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
