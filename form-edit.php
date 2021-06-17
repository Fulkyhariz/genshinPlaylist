<?php
 include "koneksi.php";
 $idlist=$_GET["idlist"];
 $query=pg_query($koneksi, "SELECT * FROM playlist WHERE id='$idlist'") or die(pg_error_result($query));
 $result=pg_fetch_assoc($query);
?>
    <form method="POST" id="formedit">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Masukan Data</h5>
      </div>
      <div class="modal-body">
            <div style="text-align: center; vertical-align: middle;">
                <img src="<?php echo $result['cover']?>" width="300" height="300" alt="">
            </div>
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" required="" value="<?php echo $result['judul'];?>"/>
                <input type="hidden" name="idlist" id="idlist" required="" value="<?php echo $result['id']; ?>" />
            </div>
            <div class="form-group">
                <label for="album">Album</label>
                <select class="form-control" id="album" name="album">
                    <option disabled="" selected="">Pilih Album</option>

                    <option value="The Wind and The Star Traveler"
                    <?php if($result['album']=="The Wind and The Star Traveler" ) echo "selected"; ?>
                    >The Wind and The Star Traveler</option>

                    <option value="City of Winds and Idylls" 
                    <?php if($result['album']=="City of Winds and Idylls" ) echo "selected"; ?>
                    >City of Winds and Idylls</option>

                    <option value="Jade Moon Upon a Sea of Clouds" 
                    <?php if($result['album']=="Jade Moon Upon a Sea of Clouds" ) echo "selected"; ?>
                    >Jade Moon Upon a Sea of Clouds</option>

                    <option value="The Stellar Moments"
                    <?php if($result['album']=="The Stellar Moments" ) echo "selected"; ?>
                    >The Stellar Moments</option>

                    <option value="Vortex of Legends" 
                    <?php if($result['album']=="Vortex of Legends" ) echo "selected"; ?>
                    >Vortex of Legends</option>
                </select>
            </div>
            <div class="form-group">
                <label for="judul">Artist</label>
                <input type="text" class="form-control" id="artist" required="" value="<?php echo $result['artist']; ?>" name="artist">
            </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" name="simpan" id="simpan" value="Simpan" />Simpan</button>
        <button id="cancelButton" type="button" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>  
      </div>
    </div>
  </div>
    </form>