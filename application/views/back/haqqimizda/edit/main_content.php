 <section class="content">
<div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Haqqimizda deyismek</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url('admin/haqqimizdaguncelle'); ?>">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Basliq</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="basliq" value="<?php echo $melumat['haqqimizda_basliq']; ?>"  placeholder="Haqqimizda basliq">
                    <input type="hidden" name="id" value="<?php echo $melumat['id']; ?>">
                  </div>
                </div>
                   <div class="form-group">
                  <label class="col-sm-2 control-label">Haqqimizda</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="melumat" value="<?php echo $melumat['haqqimizda-melumat']; ?>"  placeholder="haqqimizda">
                  </div>
                </div>
                 
               

              <div class="box-footer">
             <a class="btn btn-warning" href="<?php echo base_url('admin/haqqimizda'); ?>">Imtina Et</a>
                <button type="submit" class="btn btn-info pull-right">Deyisdir</button>

              </div>

            </form>
          </div>  
        </section>