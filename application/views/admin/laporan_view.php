<?php

header("Content-type: application/vnd-ms-excel");

header("Content-Disposition: attachment; filename=$title.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>

<table border="1" width="100%">

     <thead>
          <tr>
            <center><?php echo $format ?></center>
          </tr>
          <tr>
            <th>No Rumah</th>
            <th>Nama Rumah</th>
            <th>Harga Rumah</th>
            <th>Blok</th>
            <th>Tipe</th>
            <th>Luas Bangunan </th>
            <th>Luas Tanah</th>
            <th>sertifikat</th>
            <th>Status</th>
          </tr>

     </thead>

     <tbody>

          <?php $i=1; foreach($rumah as $r) { ?>

          <tr>
            <td><?php echo $r->no_rumah; ?></td>
            <td><?php echo $r->nama_rumah; ?></td>
            <td>Rp <?php echo $r->harga_rumah; ?></td>
            <td><?php echo $r->blok; ?></td>
            <td><?php echo $r->tipe; ?></td>
            <td><?php echo $r->luas_bangunan; ?></td>
            <td><?php echo $r->luas_tanah; ?></td>
            <td><?php echo $r->sertifikat; ?></td>
            <td><?php echo $r->status; ?></td>

          </tr>

          <?php $i++; } ?>

     </tbody>

</table>
