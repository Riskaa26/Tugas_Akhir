<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Example</title>
    <style>
        .main-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background-color: #f8f9fa;
        }
        .main-footer .float-right {
            display: none;
        }
    </style>
</head>
<body>
    <footer class="main-footer">
        <!-- Default to the left -->
        <strong>&copy; 2024 <a href="https://adminlte.io">Desa Nusa Poring</a>. All rights reserved.</strong>
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
            Riska
        </div>
    </footer>
</body>
</html>
