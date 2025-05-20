<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Helperlog Dashboard</title>

    <!-- Bootstrap & font -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <style>
        body {
            display: flex;
            font-family: "Inter", sans-serif;
            background-color: #f5f7fa;
        }
        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #165185;
            color: white;
            padding: 20px;
            display: flex;
            flex-direction: column;
            position: relative;
        }
        .back-icon {
            position: absolute;
            top: 20px;
            right: 20px;
            cursor: pointer;
        }
        .admin-profile {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .admin-profile img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            margin-right: 15px;
        }
        .admin-profile h4 {
            margin: 0;
            font-size: 18px;
        }
        .admin-profile p {
            margin: 0;
            font-size: 14px;
            color: #ddd;
        }
        .sidebar-menu a {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: white;
            padding: 12px;
            border-radius: 5px;
            transition: background 0.3s;
            font-size: 16px;
        }
        .sidebar-menu a img {
            width: 20px;
            height: 20px;
            margin-right: 10px;
        }
        .sidebar-menu a:hover {
            background-color: #0F2D4D;
        }
        .logout-btn {
            background-color: white;
            color: #153A5B;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 10px;
            border-radius: 15px;
            font-weight: bold;
            text-decoration: none;
            margin-top: auto;
        }
        .logout-btn img {
            width: 20px;
            height: 20px;
            margin-right: 10px;
        }
        .main-content {
            flex: 1;
            padding: 20px;
        }
        .dashboard-title {
            font-size: 32px;
            font-weight: bold;
        }
        .stats-container {
            display: flex;
            gap: 20px;
            margin-top: 10px;
        }
        .stat-card {
            background: white;
            padding: 15px;
            border-radius: 10px;
            flex: 1;
            text-align: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .stat-card img {
            width: 30px;
            margin-bottom: 5px;
        }
        .table-container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
        }
        .table-container table {
            border-radius: 10px;
            overflow: hidden;
            border-collapse: separate;
            border-spacing: 0;
        }
        .table thead {
            background-color: #165185;
            color: white;
        }
        .table th, .table td {
            text-align: center;
            vertical-align: middle;
        }
        .table th:first-child {
            border-top-left-radius: 10px;
        }
        .table th:last-child {
            border-top-right-radius: 10px;
        }
        .table tr:last-child td:first-child {
            border-bottom-left-radius: 10px;
        }
        .table tr:last-child td:last-child {
            border-bottom-right-radius: 10px;
        }
        .thead-dark {
            background-color: #165185 !important;
            color: white;
        }
        .btn-primary {
            background-color: #165185 !important;
            border-color: #165185 !important;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="admin-profile">
            <img src="img/iconorang.png" alt="Admin Icon">
            <div>
                <h4>Admin</h4>
                <p>admin@mail.com</p>
            </div>
        </div>
        <div class="sidebar-menu">
            <a href="#" class="active">
                <img src="img/iconhelperlog.png" alt="Helperlog">
                Helperlog
            </a>
            <a href="#">
                <img src="img/iconhelperfind.png" alt="Helperfind">
                Helperfind
            </a>
        </div>
        <a href="#" class="logout-btn">
            <img src="img/iconlogout.png" alt="Logout">
            Log Out
        </a>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <h2 class="dashboard-title" style="margin-bottom: 40px;">Helperlog Dashboard</h2>

        <h4>Statistik anda</h4>
        <div class="stats-container">
            <div class="stat-card">
                <img src="img/icontotalpendaftar.png" alt="Total Pendaftar">
                <h5 style="color: gray;">Total Pendaftar</h5>
                <h3>105</h3>
            </div>
            <div class="stat-card">
                <img src="img/iconperlureview.png" alt="Perlu Review">
                <h5 style="color: gray;">Perlu Review</h5>
                <h3>49</h3>
            </div>
            <div class="stat-card">
                <img src="img/iconditerima.png" alt="Diterima">
                <h5 style="color: gray;">Diterima</h5>
                <h3>11</h3>
            </div>
            <div class="stat-card">
                <img src="img/iconditolak.png" alt="Ditolak">
                <h5 style="color: gray;">Ditolak</h5>
                <h3>3</h3>
            </div>
        </div>

        <!-- History Kontrak -->
        <div class="table-container">
            <h4>History Kontrak</h4>
            <table class="table table-bordered">
                <thead style="background-color: #165185; color: white;">
                    <tr>
                        <th>No.</th>
                        <th>Nama Pengaju</th>
                        <th>PRT Dibutuhkan</th>
                        <th>Durasi Kontrak</th>
                        <th>Asal Kota</th>
                        <th>Status</th>
                        <th>Total Pembayaran</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Adhitya Pratama</td>
                        <td>Sopir Pribadi</td>
                        <td>12 Bulan</td>
                        <td>Surabaya</td>
                        <td><span class="badge badge-success">Diterima</span></td>
                        <td>Rp 5.500.000</td>
                        <td><button class="btn btn-primary btn-sm">Selengkapnya</button></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Rahmat Hidayat</td>
                        <td>Asisten Rumah Tangga</td>
                        <td>6 Bulan</td>
                        <td>Jakarta</td>
                        <td><span class="badge badge-danger">Ditolak</span></td>
                        <td>Rp 3.200.000</td>
                        <td><button class="btn btn-primary btn-sm">Selengkapnya</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
