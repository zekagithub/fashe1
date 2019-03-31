 <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Mesaj Listi</h3>
            </div>
                <?php echo $this->session->flashdata('status'); ?>

            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                <th>Nomre</th>
                <th>Ad ve Soyad</th>
                <th>Email</th>
                <th>Mesajin tarixi</th>
                <th>Status</th>
                <th style="width: 120px;">Əməliyyat</th>


                </tr>
                </thead>
                <tbody>
                  <tr>
                  <?php $sayi=1; foreach ($melumat as $melumat) {?>
                  <td><?php echo $sayi++; ?></td>
                  <td><?php echo $melumat['adi']; ?></td>
                  <td><?php echo $melumat['email']; ?></td>
                  <td><?php echo $melumat['tarix']; ?></td>

                  <td><?php if ($melumat['status']==1) {?>
                   <a class="btn btn-success">Mesaj oxundu</a>

                    <?php }else{?>
                   <a class="btn btn-danger">Mesaj oxunmamis</a>

                  <?php  } ?>
                   </td>


                  <td><a href="<?php echo base_url('admin/mesajdeyis/'.$melumat['id'].'');?>"><button type="button" class="btn btn-info"  name="button" >Mesaji oxu</button></a>
                    <a href="<?php echo base_url('admin/mesajsil/'.$melumat['id'].'/id/mesajlar');?>"><button type="button" class="btn btn-danger"  name="button" >Sil</button></a></td>
</tr>
               <?php } ?>
               </tbody>

                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
         
