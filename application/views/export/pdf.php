<!DOCTYPE html>
<html><head><title></title></head><body><h1 align="center">Data Anggota Catur</h1><hr>
  <table border="1">
    <tr>
      <th>No</th>
      <th>NIM</th>
      <th>Nama</th>
      <th>Fakultas</th>
      <th>Prodi</th>
      <th>Bidang</th>
    </tr>
    <?php $no = 1;

foreach ($anggota as $a) : ?>
    <tr>

        <td><?= $no++; ?></td>
        <td><?= $a['nim']; ?></td>
        <td><?= $a['nama']; ?></td>
        <td><?= $a['fakultas']; ?></td>
        <td><?= $a['prodi']; ?></td>
        <td><?= $a['bidang']; ?></td>
    </tr>
  <?php endforeach; ?>
  </table>
  <script type="text/javascript">
    window.print();
  </script>
</body></html>