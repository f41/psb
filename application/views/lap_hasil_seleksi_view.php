<html>
  <head>
    <title> Laporan
    </title>
  </head>
  <body bgcolor="white" onload="window.print()">
    <font face="Arial" size="5"> 
      <p align="center"> 
        <u> 
          <b> LAPORAN HASIL SELEKSI
          </b>
        </u>
    </font>
    <br>
    </p>
  </font>
<br>
<table width="100%" border="1">
              <thead>
                <tr>
                  <th>No
                  </th>
                  <th>No Pendaftaran
                  </th>
                  <th>Nama Calon Siswa
                  </th>
                  <th>Jenis Kelamin
                  </th>
                  <th>Tanggal Lahir
                  </th>
                  <th>Alamat
                  </th>
                  <th>
                  </th>
                </tr>
              </thead>
              <tbody>
                <?php $no=1; foreach ($hasil as $list) { ?>
                <tr>
                  <td><?php echo $no ?>
                  </td>
                  <td><?php echo $list['dftr_nodaftar']?></td>
                  <td><?php echo $list['dftr_nama_calon_siswa']?>
                  </td>
                  <td><?php echo $list['dftr_jenkel']?>
                  </td>
                  <td><?php echo $list['dftr_tgl_lahir']?>
                  </td>
                  <td><?php echo $list['dftr_alamat']?>
                  </td>
                  <td>
                    <?php $status = $list['dftr_status'];
                    if ($status == 1) { ?>
                      Lulus
                    <?php } else { ?>
                      Tidak Lulus
                    <?php } ?>
                  </td>
                </tr>
              <?php $no++; } ?>
              </tbody>
            </table>
</body>
</html>
