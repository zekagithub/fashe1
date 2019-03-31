 <section class="content">
<div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Xeber elave etmek</h3>
            </div>
            <form enctype="multipart/form-data" accept-charset="utf-8" method="post" action="<?php echo base_url('admin/xeberelaveetme'); ?>" class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Xeber basliqi</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="basliq" value=""  placeholder="xeberin basliqi">
                  </div>
                </div>
                 <div class="box-body">
                  <div class="form-group">
                  <label class="col-sm-2 control-label">Xeber Tarixi</label>
                  <div class="col-sm-7">
                   <input type="date" value="" name="tarix" class="form-control"  >
                  </div>
                </div>   
              </div>
                   <div class="form-group">
                  <label class="col-sm-2 control-label">Xeber</label>
                  <div class="col-sm-10">
                   <textarea name="xeber" id="editor1" rows="8" cols="80"></textarea>

                  </div>
                </div>
                     <div class="box-body">
                  <div class="form-group">
                  <label class="col-sm-2 control-label">Xeber Şekili</label>
                  <div class="col-sm-7">
                   <input type="file" value="" name="sekil" class="form-control">
                  </div>
                </div>   
              </div>
              
              </div>
             <div class="box-footer">
            <a class="btn btn-warning" href="<?php echo base_url('admin/xeberler'); ?>">Imtina Et</a>
                <button type="submit" class="btn btn-info pull-right">Elave et</button>
              </div>
            </form>
          </div>  
        </section>