<h3>Master Data Hari</h3>
<table border="1" width="75%">
    <tr>
        <td>NO</td>
        <td>Nama Hari</td>
    </tr>

    @foreach($hari as $item)
<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $item->NamaHari }}</td>
</tr>
    @endforeach
</table>

<!-- Tombol cetak -->
<button onclick="printTable()">Cetak Tabel</button>

<!-- Script untuk fungsi cetak -->
<script>
    function printTable() {
        window.print(); // Memanggil fungsi print bawaan dari window
    }
</script>