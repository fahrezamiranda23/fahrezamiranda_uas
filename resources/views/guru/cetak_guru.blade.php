<h3>Master Data Guru</h3>
<table border="1" width="75%">
    <tr>
        <td>NO</td>
        <td>ID</td>
        <td>Nama Guru</td>
        <td>Gender</td>
    </tr>

    @foreach($guru as $item)
<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $item->id_guru }}</td>
    <td>{{ $item->nama_guru }}</td>
    <td>{{ $item->gender }}</td>
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