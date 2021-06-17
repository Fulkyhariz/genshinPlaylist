<button id="addButton" class="btn btn-primary">Tambah Playlist</button>
<br>
<br>
<br>
<br>
<div class="container"
style="justify-content: center;">
  <div class='content'>
        <table class="table table-striped align-middle " style="height: 50px; background-color: white;">
          <thead>
            <tr>
                <th scope="col"style="text-align: center; vertical-align: middle;">No.</th>
                <th scope="col"style="text-align: center; vertical-align: middle;">Cover</th>
                <th scope="col"style="text-align: center; vertical-align: middle;">Judul</th>
                <th scope="col"style="text-align: center; vertical-align: middle;">Album</th>
                <th scope="col"style="text-align: center; vertical-align: middle;">Artist</th>
            </tr>
          </thead>
          <tbody>
          <?php
           include "koneksi.php";
           $no=1;
           $query=pg_query($koneksi, "SELECT * FROM playlist ORDER BY id DESC") or die(pg_error_result($query));
           while ($result=pg_fetch_assoc($query)) {?>
                    <tr>
                        <th scope="row" style="text-align: center; vertical-align: middle;">
                            <?= $no++; ?>
                        </th>
                        <td style="text-align: center; vertical-align: middle;">
                            <img src="<?= $result["cover"]?>" alt="<?= $result["album"]?>" width="300" height="300">
                        </td>
                        <td style="text-align: center; vertical-align: middle;">
                            <?= $result["judul"]; ?>
                        </td>
                        <td style="text-align: center; vertical-align: middle;">
                            <?= $result["album"]; ?>
                        </td>
                        <td style="text-align: center; vertical-align: middle;">
                            <?= $result["artist"]; ?>
                        </td>
                        <td style="text-align: center; vertical-align: middle;">
                            <button id="EditButton" value="<?= $result['id']; ?>"  class="btn btn-primary">Edit</button>
                            <button id="DeleteButton" value="<?= $result['id']; ?>" class="btn btn-secondary btn-danger">Delete</button>
                        </td>
                    </tr>
                    <?php
           }
           pg_close($koneksi);
          ?>
          </tbody>
        </table>
  </div>
</div>
