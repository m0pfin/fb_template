<?php
/**
 * Created by PhpStorm.
 * User: m0pfin
 * Date: 13.06.2020
 * Time: 16:00
 */
?>
<!-- Footer -->

<div class="container">
<footer class="footer">
    <div class="row align-items-center justify-content-md-center">

            <div class="copyright text-center text-lg-left text-muted">
                &copy; 2020 <a href="https://vk.com/bearded_cpa" class="font-weight-bold ml-1" target="_blank">Бородатый арбитраж</a>
            </div>
    </div>
</footer>
</div>
</div>
</div>
<!-- Argon Scripts -->
<!-- Core -->
<script src="assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/js-cookie/js.cookie.js"></script>
<script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
<script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
<!-- Optional JS -->
<script src="assets/vendor/chart.js/dist/Chart.min.js"></script>
<script src="assets/vendor/chart.js/dist/Chart.extension.js"></script>
<script src="assets/vendor/jvectormap-next/jquery-jvectormap.min.js"></script>
<script src="assets/js/vendor/jvectormap/jquery-jvectormap-world-mill.js"></script>
<script src="assets/vendor/bootstrap-notify/bootstrap-notify.min.js"></script>
<!-- Optional JS -->


<script src="assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="assets/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="assets/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="assets/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="assets/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="assets/vendor/datatables.net-select/js/dataTables.select.min.js"></script>

<!-- Select2 -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
        $('#myTable').DataTable( {
            "order": [[ 0, "desc" ]]
        } );
    } );
</script>
<script>
    // In your Javascript (external .js resource or <script> tag)
    $(document).ready(function() {
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        });
    });
</script>

<!-- Argon JS -->
<script src="assets/js/argon.js?v=1.1.0"></script>
<!-- Demo JS - remove this in your project -->
<script src="assets/js/demo.min.js"></script>
</body>

</html>
