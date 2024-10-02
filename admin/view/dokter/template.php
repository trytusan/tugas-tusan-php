<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Informasi Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        html,
        body {
            height: 100%;
            overflow: hidden;
            font-family: 'Roboto', sans-serif;
        }

        .container-fluid {
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .main-content {
            flex: 1;
            display: flex;
            overflow: hidden;
        }

        aside {
            flex-basis: 20%;
            background-color: #f0f2f5;
            padding: 20px;
            border-right: 1px solid #ddd;
            overflow-y: auto;
        }

        aside .menu-item {
            padding: 12px 0;
            font-size: 18px;
            display: flex;
            align-items: center;
            gap: 10px;
            border-bottom: 1px solid #ddd;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        aside .menu-item:hover {
            background-color: #e3f2fd;
            border-radius: 5px;
        }

        .content-area {
            flex-basis: 80%;
            padding: 20px;
            overflow-y: auto;
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            padding-bottom: 20px;
        }

        .card-wrapper {
            width: calc(33.333% - 15px);
            background-color: #ffffff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 15px;
            border-radius: 10px;
            transition: transform 0.3s ease;
            margin-bottom: 20px;
        }

        .card-wrapper:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        }

        .button-container {
            display: flex;
            gap: 10px;
        }

        .add-btn {
            position: absolute;
            bottom: 20px;
            right: 20px;
            background-color: #007bff;
            border: none;
            border-radius: 50%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 18px;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .add-btn:hover {
            background-color: #0056b3;
            transform: scale(1.1);
        }

        .add-btn img {
            width: 30px;
            height: 30px;
        }

        @media (max-width: 992px) {
            .card-wrapper {
                width: calc(50% - 15px);
            }
        }

        @media (max-width: 768px) {
            .card-wrapper {
                width: 100%;
            }
        }

        /* Navbar Customization */
        .navbar {
            background-color: #000;
            position: relative;
        }

        .navbar-brand {
            font-weight: bold;
            color: white !important;
        }

        .navbar .logout-container {
            position: absolute;
            top: 0;
            right: 20px;
            height: 100%;
            display: flex;
            align-items: center;
        }

        .navbar .logout-container img {
            filter: invert(100%);
        }

        .navbar .logout-container a {
            color: white;
            font-style: italic;
            transition: color 0.3s ease;
            text-decoration: none;
        }

        .navbar .logout-container a:hover {
            color: #ccc;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Pusat Informasi Perpustakaan</a>
            <!-- Tombol Logout di pojok kanan atas -->
            <div class="logout-container">
                <img src="/php_test1/assets/images/logout.png" alt="Logout" width="20px" height="20px" class="me-2">
                <a href="/php_test1/admin/controller/logout.php">Logout</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container-fluid main-content">
        <!-- Sidebar -->
        <aside>
    <a href="" class="text-decoration-none">
        <div class="menu-item">
            <img src="https://img.icons8.com/ios-filled/50/000000/organization.png" width="20px" height="20px" />
            Struktur Kepengurusan
        </div>
    </a>
    <a href="" class="text-decoration-none">
        <div class="menu-item">
            <img src="https://img.icons8.com/ios-filled/50/000000/planner.png" width="20px" height="20px" />
            Daftar Proker
        </div>
    </a>
</aside>

        <!-- Content Area -->
        <div class="content-area">
            <div class="card-container">
                <?php
                    // Pastikan $content berisi banyak kartu dari database
                    include_once $content; // Ini harus memuat data kartu dari database
                ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
