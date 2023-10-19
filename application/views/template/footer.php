<script src="<?= base_url('ui/') ?>js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url('ui/') ?>js/jquery.validate.min.js"></script>
<script src="<?= base_url('ui/') ?>js/swiper.min.js"></script>
<script src="<?= base_url('ui/') ?>js/jquery.custom.js"></script>




<?php
$this->load->view('template/ajaxVerifikator');
$this->load->view('template/ajaxAuditor');
$this->load->view('template/ajaxChecking');
$this->load->view('template/ajaxValidator');
$this->load->view('template/ajaxHunter');
$this->load->view('template/ajaxSaksi');
$this->load->view('template/ajaxHukum');
$this->load->view('template/ajaxPembayaran');
$this->load->view('template/ajaxHumanVerif');
$this->load->view('template/ajaxRelawan');

?>
<script>
  function ajax(url, data, toHTML) {
    jQuery.ajax({
      url: url,
      data: data,
      type: 'POST',
      success: function(res) {
        $(toHTML).html(res)
      }
    });
  }
</script>
</body>

</html>