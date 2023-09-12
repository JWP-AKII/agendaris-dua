<?php 

    // Turn error reporting off
    error_reporting(0);

    // Constant for database
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', '');

    // Database connection
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    // Function for page content
    function page($page) {
        switch($page) {
            case 'user-index':
                return 'user/index.php';
                break;

            case 'user-create':
                return 'user/create.php';
                break;

            case 'user-update':
                return 'user/update.php';
                break;

            case 'user-destroy':
                return 'user/destroy.php';
                break;

            case 'buku-index':
                return 'buku/index.php';
                break;

            case 'buku-create':
                return 'buku/create.php';
                break;

            case 'buku-update':
                return 'buku/update.php';
                break;

            case 'buku-destroy':
                return 'buku/destroy.php';
                break;

            case 'suratMasuk-index':
                return 'surat-masuk/index.php';
                break;

            case 'suratMasuk-create':
                return 'surat-masuk/create.php';
                break;

            case 'suratMasuk-update':
                return 'surat-masuk/update.php';
                break;

            case 'suratMasuk-destroy':
                return 'surat-masuk/destroy.php';
                break;

            case 'suratKeluar-index':
                return 'surat-keluar/index.php';
                break;

            case 'suratKeluar-create':
                return 'surat-keluar/create.php';
                break;

            case 'suratKeluar-update':
                return 'surat-keluar/update.php';
                break;

            case 'suratKeluar-destroy':
                return 'surat-keluar/destroy.php';
                break;

            case 'disposisi-index':
                return 'disposisi/index.php';
                break;

            case 'disposisi-create':
                return 'disposisi/create.php';
                break;

            case 'disposisi-update':
                return 'disposisi/update.php';
                break;

            case 'disposisi-destroy':
                return 'disposisi/destroy.php';
                break;
        }
    }
?>