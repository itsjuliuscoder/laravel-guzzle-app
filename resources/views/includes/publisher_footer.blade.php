
<!-- Sticky Footer -->
<footer class="box-effect3 bg-default-100 p-3" id="footer">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Copyright © AfriHow Publisher's Platform <?php echo date('Y'); ?></span>
    </div>
  </div>
</footer>
</div>
<!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top box-effect3" href="/publisher/create-article">
  <i data-feather="edit"></i>
</a>



<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="login.html">Logout</a>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap core JavaScript-->

<script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script type="text/javascript" src="{{ asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Page level plugin JavaScript-->
<script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('vendor/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('vendor/datatables/dataTables.bootstrap4.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('js/sb-admin.min.js') }}"></script>

<!-- Demo scripts for this page-->
<script src="{{ asset('js/demo/datatables-demo.js')  }}"></script>
<script src="{{ asset('js/demo/chart-area-demo.js') }}"></script>

<!-- Custom scripts for all pages-->
<script>
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
</script>

<script>
  feather.replace()
</script>