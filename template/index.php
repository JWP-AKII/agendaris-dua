<?php 
    require_once("config.php");

    if(empty($_SESSION['id'])) {
        header('location:login.php');
    }

    $page = "";

    if(!empty($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = "city-index";
    }

    $pageCat = explode('-', $page);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Syafiq Muhammad Kahfi">
    <meta name="description" content="Website ini digunakan untuk belajar CRUD">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
    <header>
        <div class="header-content">
            <h2 id="logo">CRUD RELASI</h2>
    
            <nav>
                <p class="btn primary"><span class="fa fa-user"></span> <?= $_SESSION['user'] ?></p>
                <a href="logout.php" class="btn danger">Logout</a>
            </nav>
        </div>
    </header>
    
    <div class="content">
        <aside>
            <a href="index.php?page=city-index" class="<?= ($pageCat[0] == 'city') ? 'active' : '' ?>"><span class="fa fa-city"></span> Cities</a>
            <a href="index.php?page=class-index" class="<?= ($pageCat[0] == 'class') ? 'active' : '' ?>"><span class="fa fa-chalkboard-user"></span> Classes</a>
            <a href="index.php?page=parent-index" class="<?= ($pageCat[0] == 'parent') ? 'active' : '' ?>"><span class="fa fa-users"></span> Parents</a>
            <a href="index.php?page=student-index" class="<?= ($pageCat[0] == 'student') ? 'active' : '' ?>"><span class="fa fa-school"></span> Students</a>
        </aside>

        <main>
            <?php 
                // require_once page($page);
            ?>
        </main>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        function deleteConfirm($url) {
            $result = confirm("Hapus data?");

            if($result == true) {
                window.location.href = $url;
            }
        }
    </script>
</body>
</html>