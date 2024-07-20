<h3>Master Data Kurikulum</h3>
<table border="1" width="75%">
    <tr>
        <td>NO</td>
        <td>Nama Kurikulum</td>
        <td>Tahun</td>
    </tr>

    @foreach($kurikulum as $item)
<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $item->nama_kurikulum }}</td>
    <td>{{ $item->tahun }}</td>
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