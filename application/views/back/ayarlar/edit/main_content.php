 <section class="content">
<div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Ayar deyisdirmek</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url('admin/ayarguncelle'); ?>">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sayt Basliqi</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="title" value="<?php echo $melumat['title']; ?>"  placeholder="Sayt basliqi">
                    <input type="hidden" name="id" value="<?php echo $melumat['id']; ?>">
                  </div>
                </div>
                   <div class="form-group">
                  <label class="col-sm-2 control-label">Sayt aciqlamasi</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="keyword" value="<?php echo $melumat['keyword']; ?>"  placeholder="Sayt aciqlamasi">
                  </div>
                </div>
                  <div class="form-group">
                  <label class="col-sm-2 control-label">Sayt Author</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="author" value="<?php echo $melumat['author']; ?>"  placeholder="Sayt author">
                  </div>
                </div>
              </div>
              <div class="box-footer">
             <a class="btn btn-warning" href="<?php echo base_url('admin/ayarlar'); ?>">Imtina Et</a>
                <button type="submit" class="btn btn-info pull-right">Deyisdir</button>
              </div>
            </form>
          </div>  
        </section>