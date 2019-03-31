<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view('back/include/head'); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php $this->load->view('back/include/header'); ?>
<?php $this->load->view('back/include/sidebar'); ?>
  <div class="content-wrapper">
  <?php $this->load->view('back/bread_crumb'); ?>
<?php $this->load->view('back/main_content'); ?>
  </div>
  <?php $this->load->view('back/include/footer'); ?>
  <div class="control-sidebar-bg"></div>
<?php $this->load->view('back/include/script'); ?>
</div>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
</body>
</html>
