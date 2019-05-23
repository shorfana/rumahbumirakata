<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?><!DOCTYPE html>
 <html lang="en">
 <head>
      <meta charset="utf-8">
      <title><?php echo $title ?></title>
      <style>
           ::selection { background-color: #E13300; color: white; }
           ::-moz-selection { background-color: #E13300; color: white; }

           body {
                background-color: #fff;
                margin: 40px;
                font: 13px/20px normal Helvetica, Arial, sans-serif;
                color: #4F5155;
           }

           main {
                width: 80%;
                padding: 20px;
                background-color: white;
                min-height: 300px;
                border-radius: 5px;
                margin: 30px auto;
                box-shadow: 0 0 8px #D0D0D0;
           }
           table {
                border-top: solid thin #000;
                border-collapse: collapse;
           }
           th, td {
                border-top: border-top: solid thin #000;
                padding: 6px 12px;
           }

           a {
                color: #003399;
                background-color: transparent;
                font-weight: normal;
           }
      </style>
 </head>

 <body>
      <main>
        <br><br><br><br><br><br>
           <h1>Laporan Excel</h1>
          <a href="<?php echo base_url() ?>admin/export_excel"  type="button" class="btn btn-primary btn-bordered waves-effect waves-light">Export to excel</a>
           <table border="1" width="100%">
                <thead>
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
      </main>
 </body>
 </html>
