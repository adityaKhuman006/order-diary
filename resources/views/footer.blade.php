<!-- <footer class="footer" style="background-color: white">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
      <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2024 <a
          href="https://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
      <span class="float-none float-sm-end d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i
          class="mdi mdi-heart text-danger"></i></span>
    </div>
  </footer> -->
<!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- plugins:js -->
<script src="assets/vendors/js/vendor.bundle.base.js"></script>

<script>


</script>
<!-- endinject -->
<!-- Plugin js for this page-->
<script src="assets/vendors/chart.js/chart.umd.js"></script>
<script src="assets/vendors/datatables.net/jquery.dataTables.js"></script>
<script src="assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="assets/js/off-canvas.js"></script>
<script src="assets/js/hoverable-collapse.js"></script>
<script src="assets/js/template.js"></script>
<script src="assets/js/settings.js"></script>
<script src="assets/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="assets/js/dashboard.js"></script>
<script src="assets/js/proBanner.js"></script>

<!-- datatable script -->
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/2.1.2/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/fixedheader/4.0.1/js/dataTables.fixedHeader.js"></script>
<script src="https://cdn.datatables.net/fixedheader/4.0.1/js/fixedHeader.dataTables.js"></script>
<script src="https://cdn.datatables.net/responsive/3.0.2/js/dataTables.responsive.js"></script>
<script src="https://cdn.datatables.net/responsive/3.0.2/js/responsive.dataTables.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    new DataTable('#example', {
        fixedHeader: true,
        responsive: true
    });
</script>

<script>
    $(document).ready(function (){
        $("#loader").hide();
    })
</script>


<!-- End custom js for this page-->
<script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
<script src="
https://cdn.jsdelivr.net/npm/jquery.repeater@1.2.1/jquery.repeater.min.js
"></script>
<script>
    $('.repeater').repeater({
        defaultValues: {
            'text-input': 'foo'
        },
        show: function () {
            $(this).slideDown();
        },
        hide: function (deleteElement) {
            $(this).slideUp(deleteElement);
        },
        isFirstItemUndeletable: true
    });
</script>
