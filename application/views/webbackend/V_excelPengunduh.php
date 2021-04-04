<?php
 header("Content-type: application/vnd-ms-excel");
 header("Content-Disposition: attachment; filename=Data_Pengunduh.xls");
 header("Pragma: no-cache");
 header("Expires: 0");
 ?>

<table border="1">
                        <tr>
                              <th rowspan="1">ID PENGUNDUH</th>
                              <th rowspan="1">NAMA LENGKAP</th>
                              <th rowspan="1">EMAIL</th>
                              <th rowspan="1">NO TELEPON</th>
                              <th rowspan="1">ALAMAT</th>
                              <th rowspan="1">TANGGAL UNDUH</th>
                            </tr>
                            
                            <tbody>
                                <?php foreach ($pengunduh as $r) {
                            echo "<tr>
                                  <td>".  ($r->idPengunduh)."</td>
                                  <td>".  ($r->namaLengkap)."</td>
                                  <td>".  ($r->email)."</td>
                                  <td>".  ($r->noTelepon)."</td>
                                  <td>".  ($r->alamat)."</td>
                                  <td>".  ($r->tglUnduh)."</td>
                                  </tr>";
                                } ?>
                            </tbody>    
                </table>
