 <section class="content">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Law Firm saytinin ayarlar listi</h3>
            </div>
            <?php echo $this->session->flashdata('status'); ?>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.No</th>
                  <th>Sayt basliqi</th>
                  <th>Sayt unvani</th>
                  <th>Sayt aciqlamasi</th>
                  <th>Sayt author</th>
                  <th>Deyiş</th>

                </tr>
                </thead>
                <tbody>
                	<?php $sayi=1; foreach ($melumat as $melumat) {?>
                <tr>
                  <td><?php echo $sayi++; ?></td>
                  <td> <?php echo $melumat['title']; ?></td>
                  <td><?php echo $melumat['adres']; ?></td>
                  <td> <?php echo $melumat['keyword']; ?></td>
                  <td><?php echo $melumat['author']; ?></td>
                   <td><a href="<?php echo base_url('admin/ayardeyisdir/'.$melumat['id'].''); ?>"><button type="button" class="btn btn-info"  name="button" >Deyisdir</button></a></td>
                </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
    </section>c