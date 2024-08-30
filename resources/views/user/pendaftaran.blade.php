<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jalur Pendaftaran PPDB</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f3ecfc;
            font-family: Arial, sans-serif;
        }

        .title {
            text-align: center;
            margin-top: 30px;
            margin-bottom: 50px;
            font-size: 2.5em;
            font-weight: bold;
        }

        .title span {
            color: #6f42c1;
        }

        .card {
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            border-radius: 10px;
            overflow: hidden;
            height: 100%;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .card-body {
            padding: 20px;
            /* Menambahkan padding untuk keseimbangan */
            text-align: center;
        }

        .card-title {
            font-size: 1.5em;
            /* Memperbesar ukuran font judul */
            font-weight: bold;
            /* Membuat teks lebih tebal */
            margin: 15px 0;
            /* Mengatur margin atas dan bawah */
            color: #333;
            /* Warna teks */
        }

        .card-text {
            margin-bottom: 20px;
            /* Memberikan jarak antara teks dan tombol */
        }

        .btn-primary {
            background: linear-gradient(to right, #6f42c1, #b491f7);
            border: none;
            border-radius: 20px;
            padding: 10px 30px;
            font-size: 1em;
            color: #fff;
            transition: background 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-decoration: none;
            /* Menghilangkan underline */
        }

        .btn-primary:hover {
            background: linear-gradient(to right, #5a34a1, #9e7ee0);
            text-decoration: none;
            /* Menghilangkan underline saat hover */
        }

        .card-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .card-item {
            flex: 1;
            min-width: 280px;
            max-width: 320px;
            margin-bottom: 30px;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2 class="title">Jalur Pendaftaran <span>PPDB</span></h2>
        <form action="{{ route('pendaftaran.store') }}" method="post">
            @csrf
            <div class="card-container">
                <div class="card-item">
                    <div class="card">
                        <img src="img/jalurreguler.jpg" class="card-img-top" alt="Jalur Reguler">
                        <div class="card-body">
                            <h5 class="card-title">Jalur Reguler</h5>
                            <p class="card-text">Pendaftaran untuk jalur reguler, terbuka bagi semua siswa yang memenuhi
                                syarat umum.</p>
                            <button type="submit" value="reguler" name="jenis_pendaftaran"
                                class="btn btn-primary">Daftar</button>
                        </div>
                    </div>
                </div>
                <div class="card-item">
                    <div class="card">
                        <img src="img/jalurprestasi.jpg" class="card-img-top" alt="Jalur Prestasi">
                        <div class="card-body">
                            <h5 class="card-title">Jalur Prestasi</h5>
                            <p class="card-text">Pendaftaran untuk jalur prestasi, terbuka bagi siswa dengan prestasi
                                akademik atau non-akademik.</p>
                            <button type="submit" value="prestasi" name="jenis_pendaftaran"
                                class="btn btn-primary">Daftar</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>
