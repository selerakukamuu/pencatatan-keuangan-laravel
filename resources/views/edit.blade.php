<!DOCTYPE html>
<html>
<head>
    <title>Edit Transaksi</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

<h2 class="mb-4">Edit Transaksi</h2>

<form action="/update/{{ $data->idtransaksi }}" method="POST">
    @csrf

    <!-- JENIS TRANSAKSI -->
    <div class="mb-3">
        <label class="form-label">Transaksi</label>
        <select name="jenistransaksi" class="form-control">
            <option value="Masuk" {{ $data->jenistransaksi == 'Masuk' ? 'selected' : '' }}>Masuk</option>
            <option value="Keluar" {{ $data->jenistransaksi == 'Keluar' ? 'selected' : '' }}>Keluar</option>
        </select>
    </div>

    <!-- JUMLAH -->
    <div class="mb-3">
        <label class="form-label">Jumlah</label>
        <input 
            type="number" 
            name="jumlah" 
            class="form-control" 
            value="{{ $data->jumlah }}"
        >
    </div>

    <!-- KETERANGAN -->
    <div class="mb-3">
        <label class="form-label">Keterangan</label>
        <input 
            type="text" 
            name="keterangan" 
            class="form-control" 
            value="{{ $data->keterangan }}"
        >
    </div>

    <!-- BUTTON -->
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="/" class="btn btn-secondary">Kembali</a>

</form>

</div>

</body>
</html>