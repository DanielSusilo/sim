<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa - SIM</title>
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
    <h1>Edit Data Mahasiswa</h1>

    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nim">NIM</label>
            <input type="text" id="nim" name="nim" value="{{ $mahasiswa->nim }}" required>
        </div>
        <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" id="nama" name="nama" value="{{ $mahasiswa->nama }}" required>
        </div>
        <div class="form-group">
            <label for="prodi">Program Studi</label>
            <input type="text" id="prodi" name="prodi" value="{{ $mahasiswa->prodi }}">
        </div>
        <div class="form-group">
            <label for="angkatan">Angkatan</label>
            <input type="text" id="angkatan" name="angkatan" value="{{ $mahasiswa->angkatan }}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ $mahasiswa->email }}">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea id="alamat" name="alamat" rows="3">{{ $mahasiswa->alamat }}</textarea>
        </div>

        <button type="submit" class="btn">Perbarui</button>
        <a href="{{ route('mahasiswa.index') }}" class="btn-back">Kembali</a>
    </form>
</div>
</body>
</html>