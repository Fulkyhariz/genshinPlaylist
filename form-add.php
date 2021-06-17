<form method="POST" id="formadd">
<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Masukan Data</h5>
      </div>
      <div class="modal-body">
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" id="judul" placeholder="Masukan Judul" name="judul">
            </div>
            <div class="form-group">
                <label for="album">Album</label>
                <select class="form-control" id="album" name="album">
                    <option disabled="" selected="">Pilih Album</option>
                    <option value="The Wind and The Star Traveler">The Wind and The Star Traveler</option>
                    <option value="City of Winds and Idylls">City of Winds and Idylls</option>
                    <option value="Jade Moon Upon a Sea of Clouds">Jade Moon Upon a Sea of Clouds</option>
                    <option value="The Stellar Moments">The Stellar Moments</option>
                    <option value="Vortex of Legends">Vortex of Legends</option>
                </select>
            </div>
            <div class="form-group">
                <label for="judul">Artist</label>
                <input type="text" class="form-control" id="artist" placeholder="Masukan Nama Artist" name="artist">
            </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" name="simpan" id="simpan" value="simpan" />Simpan</button>
        <button id="cancelButton" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>  
      </div>
    </div>
  </div>
  </form>