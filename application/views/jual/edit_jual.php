<br><br><br>
<div class="container">
    <h3><i class="fas fa-edit"></i> EDIT DATA BARANG</h3>

    <?php foreach ($barang as $brg) : ?>

        <form method="post" action="<?php echo base_url().'jual/update' ?>">

            <div class="for-group">
                <label>Nama Barang</label>
                <input type="text" name="nama_brg" class="form-control" value="<?= $brg['nama_brg'] ?>">
            </div>

            <div class="form-group">
                <label>Keterangan</label>
                <input type="hidden" name="id_brg" class="form-control" value="<?= $brg['id_brg'] ?>">
                <input type="text" name="keterangan" class="form-control" value="<?= $brg['keterangan'] ?>">
            </div>

            <div class="form-group">
                <label>Kategori</label>
                <input type="text" name="kategori" class="form-control" value="<?= $brg['kategori'] ?>">
            </div>

            <div class="form-group">
                <label>Harga</label>
                <input type="text" name="harga" class="form-control" value="<?= $brg['harga'] ?>">
            </div>

            <div class="form-group">
                <label>Stok</label>
                <input type="text" name="stok" class="form-control" value="<?= $brg['stok'] ?>">
            </div>

            <button type="submit" class="btn btn-primary btn-sm"> Simpan</button>

        </form>

    <?php endforeach; ?>

</div>