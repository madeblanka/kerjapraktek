  <?php
 $NIP = $_POST['nip'];
 $search = $mysqli->query($pegawai,"SELECT * FROM pegawai WHERE NIP LIKE '%$NIP%' OR NAMA LIKE '%$NIP%'");


?>
            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>KENAIKAN PANGKAT TERAHIR</th>
                  <th>KENAIKAN PANGKAT BERIKUTNYA</th>
                  <th>KENAIKAN BERKALA TERAHIR</th>
                  <th>KENAIKAN BERKALA BERIKUTNYA</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($pegawai as $pegawai) {?>
                <tr>

                  <td><?= $pegawai['TAMATANPANGKAT'] ?></td>
                  <td><?= $pegawai['PANGKATBERIKUTNYA'] ?></td>
                  <td><?= $pegawai['KENAIKANTERAHIR'] ?></td>
                  <td><?= $pegawai['KENAIKANBERIKUTNYA'] ?></td>
                </tr>
            <?php }?>
            </tbody>

            </table>
