@php
    $setting= \App\Http\Controllers\HomeController::getsetting()
@endphp

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>copyright &copy; <script> document.write(new Date().getFullYear()); </script> - developed by
              <b><a href="https://indrijunanda.gitlab.io/" target="_blank">indrijunanda</a></b>
            </span>
        </div>
    </div>
</footer>
<!-- Footer -->
</div>
</div>

<!-- Scroll to top -->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<script src="{{asset('assets')}}/admin/vendor/jquery/jquery.min.js"></script>
<script src="{{asset('assets')}}/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets')}}/admin/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="{{asset('assets')}}/admin/js/ruang-admin.min.js"></script>
<script src="{{asset('assets')}}/admin/vendor/chart.js/Chart.min.js"></script>
<script src="{{asset('assets')}}/admin/js/demo/chart-area-demo.js"></script>
