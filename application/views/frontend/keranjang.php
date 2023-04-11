<div class="main-content">
    <section class="section">
<table class="table table-striped">
    <tr>
        <th>NO</th>
        <th>Nama Produk</th>
        <th>Gambar</th>
        <th>Harga</th>
        <th>qty</th>
        <th>Sub Total</th>
        <th>Aksi</th>
    </tr>
    <?php
    $total=0;
    $i=1;
    $cart = $this->cart->contents();
    foreach($cart as $val) {
        $total = $total+$val['subtotal']; 
        $total_berat = $total_berat + $berat;
        ?>
        <tr>
            <td><?php echo $i++;?></td>
            <td><?php echo $val['name'];?></td>
            <td><?php echo $val['gambar'];?></td>
            <td><?php echo number_format($val['price']);?></td>
            <td><input type="number" min="1" value="<?php echo $val['qty']; ?>"></td>
            <td><?php echo number_format($val['price']*$val['qty']);?></td>
            <td>
                <a href="<?php echo site_url('member/hapus_cart/'.$val['rowid']); ?>" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
    <?php } ?>

    <tr>
        <th>Total</th>
        <th><?php echo $total; ?></th>
        <th></th>
        <th>Total Berat</th>
        <th><?php echo $total_berat; ?></th>
        <th></th>
        <th><a href="<?php echo site_url('member/selesai_belanja'); ?>" class="btn btn-success">Selesai Belanja</th>
    </tr>

</table>
    </section>
</div>