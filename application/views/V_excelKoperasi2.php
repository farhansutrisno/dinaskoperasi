<?php
 header("Content-type: application/vnd-ms-excel");
 header("Content-Disposition: attachment; filename=Data_Koperasi.xls");
 header("Pragma: no-cache");
 header("Expires: 0");
 ?>

<table border="1">
                        <tr>
                              <th rowspan="1">KOPERASI</th>
                              <th rowspan="1">KABUPATEN</th>
                              <th rowspan="1">BENTUK KOPERASI</th>
                              <th rowspan="1">JENIS KOPERASI</th>
                              <th rowspan="1">KELOMPOK KOPERASI</th>
                              <th rowspan="1">STATUS AKTIF</th>
                              <th rowspan="1">TANGGAL RAT</th>
                            </tr>
                            
                            <tbody>
                                <?php foreach ($koperasi as $r) {
                            echo "<tr>
                                  <td>".  ($r->koperasi)."</td>
                                  <td>".  ($r->kabupaten)."</td>
                                  <td>".  ($r->bentukKoperasi)."</td>
                                  <td>".  ($r->jenisKoperasi)."</td>
                                  <td>".  ($r->kelompokKoperasi)."</td>
                                  <td>".  ($r->statusAktif)."</td>
                                  <td>".  ($r->tanggalRAT)."</td>
                                  </tr>";
                                } ?>
                            </tbody>    
                </table>
