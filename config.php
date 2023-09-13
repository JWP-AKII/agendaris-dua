<?php 

    // Turn error reporting off
    // error_reporting(0);

    // Start session
    session_start();

    // Constant for database
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'learn_surat');

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

            case 'surat-index':
                return 'surat/index.php';
                break;

            case 'surat-show':
                return 'surat/show.php';
                break;

            case 'surat-create':
                return 'surat/create.php';
                break;

            case 'surat-update':
                return 'surat/update.php';
                break;

            case 'surat-destroy':
                return 'surat/destroy.php';
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

    // Function for page title
    function title($page) {
        switch($page) {
            case 'user-index':
                return 'Data user';
                break;

            case 'user-create':
                return 'Tambah user';
                break;

            case 'user-update':
                return 'Edit user';
                break;

            case 'buku-index':
                return 'Data buku';
                break;

            case 'buku-create':
                return 'Tambah buku';
                break;

            case 'buku-update':
                return 'Edit buku';
                break;

            case 'surat-index':
                return 'Data surat';
                break;

            case 'surat-create':
                return 'Tambah surat';
                break;

            case 'surat-update':
                return 'Edit surat';
                break;
                
            case 'surat-show':
                return 'Detail surat';
                break;

            case 'disposisi-create':
                return 'Tambah disposisi';
                break;

            case 'disposisi-update':
                return 'Edit disposisi';
                break;
        }
    }
?>