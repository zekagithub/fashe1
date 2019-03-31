 <section class="content">
<div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Sosial Mediay elave etmek</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url('admin/smediyaelaveetme'); ?>">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sayt basliqi</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="sosial-title" value=""  placeholder="saytin adi">
                  </div>
                </div>
                   <div class="form-group">
                  <label class="col-sm-2 control-label">Sayt url</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="sosial-url" value=""  placeholder="saytin url">
                  </div>
                </div>
              
              </div>
             <div class="box-footer">
            <a class="btn btn-warning" href="<?php echo base_url('admin/sosial'); ?>">Imtina Et</a>
                <button type="submit" class="btn btn-info pull-right">Elave et</button>
              </div>
            </form>
          </div>  
        </section>