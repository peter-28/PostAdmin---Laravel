<div class="modal fade text-left" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="modal-title"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal-title">Modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" pointer>
                    <i class="bi bi-x"></i>
                </button>
            </div>

            <div class="modal-body">
                <label>Status : </label>
                <div class="form-group">
                    <select id="status" name="status" class="form-control">
                        <option value="">Silahkan Pilih Kondisi Bahan Bakar</option>
                        <option value="PENUH">Penuh</option>
                        <option value="SETENGAH">Setengah</option>
                        <option value="HABIS">Habis</option>
                    </select>
                </div>
                <label>Deskripsi : </label>
                <div class="form-group">
                    <select id="deskripsi" name="deskripsi" class="form-control">
                        <option value="">Silahkan Pilih Presentase Bahan Bakar</option>
                        <option value="Indikator Lebih Dari 75%">Indikator Lebih Dari 75%</option>
                        <option value="Indikator Diantara 50% - 75%">Indikator Diantara 50% - 75%</option>
                        <option value="Indikator Kurang Dari 50%">Indikator Kurang Dari 50%</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary mr-1"><i class="bx bx-save mt"></i> Submit
                </button>
            </div>
        </div>
    </div>
</div>