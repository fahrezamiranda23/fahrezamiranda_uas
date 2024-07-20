<h3>Nilai Siswa</h3>
<table border="1" width="75%">
    <tr>
            <th>Nomor</th>
            <th>Nama Siswa</th>
            <th>Mata Pelajaran</th>
            <th>Nama Guru</th>
            <th>Nilai</th>   
    </tr>

    @foreach($nilai as $item)
<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $item->nama_siswa }}</td>
    <td>{{ $item->nama_pelajaran }}</td>
    <td>{{ $item->nama_guru }}</td>
    <td>{{ $item->nilai }}</td>
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