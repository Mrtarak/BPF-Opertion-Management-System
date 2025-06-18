</div>
<script>
  // Program dropdown filter
  const programDropdown = document.getElementById("programSelect");
  const programBlocks = document.querySelectorAll(".program-details");

  programDropdown.addEventListener("change", function () {
    const selected = this.value;
    programBlocks.forEach(block => {
      const blockProgram = block.getAttribute("data-program");
      block.style.display = (blockProgram === selected) ? "block" : "none";
    });
  });
// confirm delete
  function confirmDelete() {
    if (confirm("Are you sure you want to delete this program?")) {
      alert("Program deleted (demo only).");
    }
  }
</script>    

 <!-- plugins:js -->
    <script src="<?= base_url('assets/vendors/js/vendor.bundle.base.js') ?>"></script>
    <script src="<?= base_url('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') ?>"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?= base_url('assets/vendors/chart.js/chart.umd.js') ?>"></script>
    <script src="<?= base_url('assets/vendors/progressbar.js/progressbar.min.js') ?>"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?= base_url('assets/js/off-canvas.js') ?>"></script>
    <script src="<?= base_url('assets/js/template.js') ?>"></script>
    <script src="<?= base_url('assets/js/settings.js') ?>"></script>
    <script src="<?= base_url('assets/js/hoverable-collapse.js') ?>"></script>
    <script src="<?= base_url('assets/js/todolist.js') ?>"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="<?= base_url('assets/js/jquery.cookie.js') ?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/js/dashboard.js') ?>"></script>
    <!-- <script src="assets/js/Chart.roundedBarCharts.js"></script> -->
    <!-- End custom js for this page-->

