 <section class="content">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Haqqimizda</h3>
            </div>
            <?php echo $this->session->flashdata('status'); ?>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.No</th>
                  <th>Başliq</th>
                  <th>Haqqimizda</th>
                  <th>Əməliyyat</th>
                
                </tr>
                </thead>
                <tbody>
                	<?php $sayi=1; foreach ($melumat as $melumat) {?>
                <tr>
                  <td><?php echo $sayi++; ?></td>
                  <td> <?php echo $melumat['haqqimizda_basliq']; ?></td>
                  <td><?php echo $melumat['haqqimizda-melumat']; ?></td>
                   <td><a href="<?php echo base_url('admin/haqqimizdadeyisdir/'.$melumat['id'].''); ?>"><button type="button" class="btn btn-info"  name="button" >Deyisdir</button></a>
                    <a href="<?php echo base_url('admin/haqqimizdasil/'.$melumat['id'].'/id/haqqimizda');?>"><button type="button" class="btn btn-danger"  name="button" >Sil</button></a></td>
                </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
    </section>