<!DOCTYPE html>
<html>
<head>
    <title>Pencatatan Keuangan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background-color:#f8f9fa;">

<div class="container mt-5">

    <h2 class="text-center mb-4">💰 Pencatatan Keuangan Mahasiswa</h2>

    <!-- FORM DI ATAS -->
    <div class="card mb-4 shadow">
        <div class="card-header bg-primary text-white">
            Tambah Transaksi
        </div>
        <div class="card-body">

            <form action="/simpan" method="POST">
                @csrf

                <div class="row">
                    <div class="col-md-3">
                        <label>Jenis</label>
                        <select name="jenistransaksi" class="form-control">
                            <option value="Masuk">Masuk</option>
                            <option value="Keluar">Keluar</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <label>Jumlah</label>
                        <input type="number" name="jumlah" class="form-control">
                    </div>

                    <div class="col-md-4">
                        <label>Keterangan</label>
                        <input type="text" name="keterangan" class="form-control">
                    </div>

                    <div class="col-md-2 d-flex align-items-end">
                        <button type="submit" class="btn btn-primary w-100">
                            Simpan
                        </button>
                    </div>
                </div>

            </form>

        </div>
    </div>

    <!-- TABEL DI BAWAH -->
    <div class="card shadow">
        <div class="card-header bg-secondary text-white">
            Daftar Transaksi
        </div>
        <div class="card-body">

            <table class="table table-bordered table-hover">
                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>Jenis</th>
                        <th>Jumlah</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                @foreach($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>

                    <td class="{{ strtolower($item->jenistransaksi) == 'masuk' ? 'text-success' : 'text-danger' }}">
                        {{ $item->jenistransaksi }}
                    </td>

                    <td>
                        Rp {{ number_format($item->jumlah, 0, ',', '.') }}
                    </td>

                    <td>{{ $item->keterangan }}</td>

                    <td>
                        <a href="/edit/{{ $item->idtransaksi }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="/hapus/{{ $item->idtransaksi }}" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                </tr>
                @endforeach
                </tbody>

            </table>

        </div>
    </div>

</div>

</body>
</html>