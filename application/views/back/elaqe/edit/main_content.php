 <section class="content">
<div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Elaqe Ayarlarini deyisdirmek</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url('admin/elaqeguncelle'); ?>">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Telefon</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="tel" value="<?php echo $melumat['tel']; ?>"  placeholder="telefon nomresi">
                    <input type="hidden" name="id" value="<?php echo $melumat['id']; ?>">
                  </div>
                </div>
                   <div class="form-group">
                  <label class="col-sm-2 control-label">fax</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="fax" value="<?php echo $melumat['fax']; ?>"  placeholder="fax nomresi">
                  </div>
                </div>
                  <div class="form-group">
                  <label class="col-sm-2 control-label">Mail</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="mail" value="<?php echo $melumat['mail']; ?>"  placeholder="mail unvani">
                  </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-2 control-label">Unvan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="adres" value="<?php echo $melumat['adres']; ?>"  placeholder="Unvan">
                  </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-2 control-label">Is vaxti</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="is_vaxti" value="<?php echo $melumat['is_vaxti']; ?>"  placeholder="Is vaxti>
                  </div>
                </div>
              </div>
              <div class="box-footer">
             <a class="btn btn-warning" href="<?php echo base_url('admin/elaqe'); ?>">Imtina Et</a>
                <button type="submit" class="btn btn-info pull-right">Deyisdir</button>
              </div>
            </form>
          </div>  
        </section>