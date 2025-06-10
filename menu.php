<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    
</head>
<body>
  
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
       <img src="image/6.png" width="200" height="70" >
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?php if(basename($_SERVER['PHP_SELF']) == 'index.php') echo 'active'; ?>">
                    <a class="nav-link"  href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item <?php if(basename($_SERVER['PHP_SELF']) == 'about.php') echo 'active'; ?>">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item <?php if(basename($_SERVER['PHP_SELF']) == 'upcoming.php') echo 'active'; ?>">
                    <a class="nav-link" href="upcoming.php">Upcoming Events</a>
                </li>
                <li class="nav-item <?php if(basename($_SERVER['PHP_SELF']) == 'Contact1.php') echo 'active'; ?>">
                    <a class="nav-link" href="Contact1.php">Contact Us</a>
                </li>
                <li class="nav-item <?php if(basename($_SERVER['PHP_SELF']) == 'logout.php') echo 'active'; ?>">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

</body>
</html>
