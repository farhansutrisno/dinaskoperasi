<?php
 header("Content-type: application/vnd-ms-excel");
 header("Content-Disposition: attachment; filename=Data_Koperasi.xls");
 header("Pragma: no-cache");
 header("Expires: 0");
 ?>
<table>
        <tr>
            <th colspan="25"><h2>Data Koperasi Se-Jawa Barat</h2></th>
        </tr>
</table>

<table border="1">
                        <tr>
                              <th rowspan="1">NO</th>
                              <th rowspan="1">ID KOPERASI</th>
                              <th rowspan="1">NAMA KOPERASI</th>
                              <th rowspan="1">NO BADAN HUKUM</th>
                              <th rowspan="1">TANGGAL BADAN HUKUM</th>
                              <th rowspan="1">ALAMAT</th>
                              <th rowspan="1">DESA/KEL</th>
                              <th rowspan="1">KECAMATAN</th>
                              <th rowspan="1">KABUPATEN</th>
                              <th rowspan="1">PROVINSI</th>
                              <th rowspan="1">KODE POS</th>
                              <th rowspan="1">NO TELPON KANTOR</th>
                              <th rowspan="1">EMAIL</th>
                              <th rowspan="1">STATUS AKTIF</th>
                              <th rowspan="1">KETUA</th>
                              <th rowspan="1">NO TELPON KETUA</th>
                              <th rowspan="1">BENTUK KOPERASI</th>
                              <th rowspan="1">JENIS KOPERASI</th>
                              <th rowspan="1">KELOMPOK KOPERASI</th>
                              <th rowspan="1">SEKTOR USAHA</th>
                              <th rowspan="1">JUMLAH ANGGOTA</th>
                              <th rowspan="1">JUMLAH MANAJER</th>
                              <th rowspan="1">JUMLAH KARYAWAN</th>
                              <th rowspan="1">TANGGAL RAT</th>
                              <th rowspan="1">MODAL SENDIRI</th>
                              <th rowspan="1">MODAL LUAR</th>
                              <th rowspan="1">ASET</th>
                              <th rowspan="1">VOLUME USAHA</th>
                              <th rowspan="1">TAHUN REKAP</th>
                              <th rowspan="1">SISA HASIL USAHA</th>
                            </tr>
                            
                            <tbody>

                                <?php 
                                $no=1;
                                foreach ($koperasi as $r) {

                            echo "<tr>
                                  <td>". ($no++).       "</td>
                                  <td>".  ($r->idKop)."</td>
                                  <td>".  ($r->koperasi)."</td>
                                  <td>".  ($r->noBadanHukum)."</td>
                                  <td>".  ($r->tglBadanHukum)."</td>
                                  <td>".  ($r->alamat)."</td>
                                  <td>".  ($r->desa_kel)."</td>
                                  <td>".  ($r->kecamatan)."</td>
                                  <td>".  ($r->kabupaten)."</td>
                                  <td>".  ($r->provinsi)."</td>
                                  <td>".  ($r->kodePos)."</td>
                                  <td>".  ($r->noTelpon1)."</td>
                                  <td>".  ($r->email)."</td>
                                  <td>".  ($r->statusAktif)."</td>
                                  <td>".  ($r->ketua)."</td>
                                  <td>".  ($r->noTelponKetua)."</td>
                                  <td>".  ($r->bentukKoperasi)."</td>
                                  <td>".  ($r->jenisKoperasi)."</td>
                                  <td>".  ($r->kelompokKoperasi)."</td>
                                  <td>".  ($r->sektorUsaha)."</td>
                                  <td>".  ($r->jml_anggota)."</td>
                                  <td>".  ($r->jml_manajer)."</td>
                                  <td>".  ($r->jml_karyawan)."</td>
                                  <td>".  ($r->tanggalRAT)."</td>
                                  <td>".  ($r->mdl_sendiri)."</td>
                                  <td>".  ($r->mdl_luar)."</td>
                                  <td>".  ($r->aset)."</td>
                                  <td>".  ($r->vlm_usaha)."</td>
                                  <td>".  ($r->tahunRekap)."</td>
                                  <td>".  ($r->SHU)."</td>
                                  </tr>";
                                } ?>
                            </tbody>    
                </table>
