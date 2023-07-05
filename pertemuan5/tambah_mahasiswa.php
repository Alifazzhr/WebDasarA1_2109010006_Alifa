<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah mahasiswa</title>
</head>
<body>
    <h1>Form Tambah Mahasiswa</h1>
    <a href="../pertemuan5/">kembali</a>
    <table>
        <tr>
            <td>NPM</td>
            <td>:</td>
            <td>
                <input type="number" name="NPM" id="">
            </td>
        </tr>
        <tr>
            <td>Nama Mahasiswa</td>
            <td>:</td>
            <td>
                <input type="text" name="Nama_Mahasiswa">
            </td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>
                <select name="Gender" id="">
                    <option value="" selected>pilih Jenis Kelamin</option>
                    <option value="lk">laki laki</option>
                    <option value="pr">perempuan</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td>
                <input type="date" name="tgl_lahir" id="">
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>
                <textarea name="Alamat" id="" cols="30" rows="10"></textarea>
            </td>
        </tr>
        <tr>
            <td>Program Studi</td>
            <td>:</td>
            <td>
                <select name="Prodi" id="">
                    <option value="" selected>pilih Program Studi</option>
                    <option value="SI">Sistem Informasi</option>
                    <option value="TI">Teknologi Informasi</option>
                    <option value="CS">Cyber Security</option>
                    <option value="DS">Data Sains</option>
                </select>
            </td>
        </tr>
        <td colspan="3" style="text-align:right">
        <a herf="../pertemuan5/">
            <button>kembali</button>
        </a>

            <button>simpan</button>
        </td>
        </tr>
    </table>
</body>
</html>