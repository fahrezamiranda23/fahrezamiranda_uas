<h3>Master Data Pelajaran</h3>
<table border="1" width="75%">
    <tr>
        <td>NO</td>
        <td>Nama Pelajaran</td>
    </tr>

    @foreach($pelajaran as $item)
<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $item->nama_pelajaran }}</td>
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