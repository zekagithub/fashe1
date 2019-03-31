 <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Xeberler</h3>
             <a href="<?php echo base_url('admin/xeberelave'); ?>" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Elave et</a>
            </div>
            <?php echo $this->session->flashdata('status'); ?>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                 <th>Nomre</th>
                  <th>Xeber tarix</th>
                  <th>Xeber Basliq</th>
                  <th>Xeber</th>
                  <th>Status</th>


                 <th style="width: 100px;">Əməliyyat</th>
                </tr>
                </thead>
                <tbody>
                  <?php $sayi=1; foreach ($melumat as $melumat) {?>
                <tr>
                  <td><?php echo $sayi++; ?></td>
                   <td><?php echo $melumat['xeber_tarix']; ?></td>

                  <td><?php echo $melumat['xeber_basliq']; ?></td>
                  <td><?php echo $melumat['xeber']; ?></td>
            <td><input class="toggle_check" data-on="aktiv" data-onstyle="success" data-off="passiv" data-offstyle="danger" type="checkbox" dataID="<?php echo $melumat['id']; ?>" dataURL="<?php echo base_url('admin/xeberset'); ?>" <?php echo ($melumat['xeber_status'] == 1 ) ? "checked" : ""; ?>></td>

 <td><a href="<?php echo base_url('admin/xeberdeyis/'.$melumat['id'].'');?>"><button type="button" class="btn btn-info"  name="button" >Deyisdir</button></a>
                    <a href="<?php echo base_url('admin/xebersil/'.$melumat['id'].'/id/xeberler');?>"><button type="button" class="btn btn-danger"  name="button" >Sil</button></a></td>
                </tr>
               <?php } ?>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
