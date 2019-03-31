 <section class="content">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Law Firm saytinin əlaqə ayarlari listi</h3>
            </div>
            <?php echo $this->session->flashdata('status'); ?>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.No</th>
                  <th>Telefon </th>
                  <th>Fax</th>
                  <th>Mail unvani</th>
                  <th>Unvan</th>
                  <th>Is vaxti</th>
                  <th>Deyiş</th>
                </tr>
                </thead>
                <tbody>
                	<?php $sayi=1; foreach ($melumat as $melumat) {?>
                <tr>
                  <td><?php echo $sayi++; ?></td>
                  <td> <?php echo $melumat['tel']; ?></td>
                  <td><?php echo $melumat['fax']; ?></td>
                  <td> <?php echo $melumat['mail']; ?></td>
                  <td><?php echo $melumat['adres']; ?></td>
                   <td><?php echo $melumat['is_vaxti']; ?></td>

                   <td><a href="<?php echo base_url('admin/elaqedeyisdir/'.$melumat['id'].''); ?>"><button type="button" class="btn btn-info"  name="button" >Deyisdir</button></a></td>
                </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
    </section>