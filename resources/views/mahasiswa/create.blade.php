<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa - SIM</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background: #f8fafc; color: #1e293b; }
        .container { max-width: 600px; margin: auto; background: #fff; padding: 24px; border-radius: 8px; box-shadow: 0 1px 4px rgba(0,0,0,0.1); }
        .form-group { margin-bottom: 14px; }
        label { display: block; font-weight: bold; margin-bottom: 6px; font-size: 14px; }
        input, textarea { width: 100%; padding: 8px; border: 1px solid #cbd5e1; border-radius: 5px; box-sizing: border-box; }
        .btn { padding: 9px 16px; background: #2563eb; color: #fff; border: none; border-radius: 5px; cursor: pointer; font-size: 14px; }
        .btn-back { display: inline-block; margin-left: 8px; color: #475569; text-decoration: none; font-size: 14px; }
    </style>
</head>
<body>
<div class="container">
    <h1>Tambah Data Mahasiswa</h1>

    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nim">NIM</label>
            <input type="text" id="nim" name="nim" required>
        </div>
        <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" id="nama" name="nama" required>
        </div>
        <div class="form-group">
            <label for="prodi">Program Studi</label>
            <input type="text" id="prodi" name="prodi" placeholder="Contoh: Teknik Informatika">
        </div>
        <div class="form-group">
            <label for="angkatan">Angkatan</label>
            <input type="text" id="angkatan" name="angkatan" placeholder="Contoh: 2023">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea id="alamat" name="alamat" rows="3"></textarea>
        </div>

        <button type="submit" class="btn">Simpan</button>
        <a href="{{ route('mahasiswa.index') }}" class="btn-back">Kembali</a>
    </form>
</div>
</body>
</html>