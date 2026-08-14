<!-- Footer Start -->
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <p class="text-center">Copyright © 2026 <a href="#" class="">
                        <strong>username</strong>.</a> All Rights Reserved.
                        {{-- Designed with <i
                        class="bi bi-heart-fill m-1 mb-0 mt-0 fnt-16 text-danger"></i> by <a href="#"><strong>NRJ
                            DIGITAL SOLUTIONS</strong></a> --}}

                </p>
            </div>
        </div>
    </div>
</footer>
<!-- end Footer -->

</div>

<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->
</div>
<!-- END wrapper -->

<!-- Theme Settings -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="theme-settings-offcanvas">
    <div class="d-flex align-items-center bg-primary p-3 offcanvas-header">
        <h5 class="text-white m-0">Theme Settings</h5>
        <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
    </div>

    <div class="offcanvas-body p-0">
        <div data-simplebar class="h-100">
            <div class="p-3">
                <h5 class="mb-3 fs-16 fw-bold">Color Scheme</h5>

                <div class="row">
                    <div class="col-4">
                        <div class="form-check form-switch card-switch mb-1">
                            <input class="form-check-input" type="checkbox" name="data-bs-theme" id="layout-color-light"
                                value="light">
                            <label class="form-check-label" for="layout-color-light">
                                <img src="{{ asset('assets/images/layouts/light.png') }}" alt=""
                                    class="img-fluid">
                            </label>
                        </div>
                        <h5 class="font-14 text-center text-muted mt-2">Light</h5>
                    </div>

                    <div class="col-4">
                        <div class="form-check form-switch card-switch mb-1">
                            <input class="form-check-input" type="checkbox" name="data-bs-theme" id="layout-color-dark"
                                value="dark">
                            <label class="form-check-label" for="layout-color-dark">
                                <img src="{{ asset('assets/images/layouts/dark.png') }}" alt=""
                                    class="img-fluid">
                            </label>
                        </div>
                        <h5 class="font-14 text-center text-muted mt-2">Dark</h5>
                    </div>
                </div>

                <div id="layout-width">
                    <h5 class="my-3 fs-16 fw-bold">Layout Mode</h5>

                    <div class="row">
                        <div class="col-4">
                            <div class="form-check form-switch card-switch mb-1">
                                <input class="form-check-input" type="checkbox" name="data-layout-mode"
                                    id="layout-mode-fluid" value="fluid">
                                <label class="form-check-label" for="layout-mode-fluid">
                                    <img src="{{ asset('assets/images/layouts/light.png') }}" alt=""
                                        class="img-fluid">
                                </label>
                            </div>
                            <h5 class="font-14 text-center text-muted mt-2">Fluid</h5>
                        </div>

                        <div class="col-4">
                            <div id="layout-boxed">
                                <div class="form-check form-switch card-switch mb-1">
                                    <input class="form-check-input" type="checkbox" name="data-layout-mode"
                                        id="layout-mode-boxed" value="boxed">
                                    <label class="form-check-label" for="layout-mode-boxed">
                                        <img src="{{ asset('assets/images/layouts/boxed.png') }}" alt=""
                                            class="img-fluid">
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Boxed</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <h5 class="my-3 fs-16 fw-bold">Topbar Color</h5>

                <div class="row">
                    <div class="col-4">
                        <div class="form-check form-switch card-switch mb-1">
                            <input class="form-check-input" type="checkbox" name="data-topbar-color"
                                id="topbar-color-light" value="light">
                            <label class="form-check-label" for="topbar-color-light">
                                <img src="{{ asset('assets/images/layouts/light.png') }}" alt=""
                                    class="img-fluid">
                            </label>
                        </div>
                        <h5 class="font-14 text-center text-muted mt-2">Light</h5>
                    </div>

                    <div class="col-4">
                        <div class="form-check form-switch card-switch mb-1">
                            <input class="form-check-input" type="checkbox" name="data-topbar-color"
                                id="topbar-color-dark" value="dark">
                            <label class="form-check-label" for="topbar-color-dark">
                                <img src="{{ asset('assets/images/layouts/topbar-dark.png') }}" alt=""
                                    class="img-fluid">
                            </label>
                        </div>
                        <h5 class="font-14 text-center text-muted mt-2">Dark</h5>
                    </div>
                </div>

                <div>
                    <h5 class="my-3 fs-16 fw-bold">Menu Color</h5>

                    <div class="row">
                        <div class="col-4">
                            <div class="form-check form-switch card-switch mb-1">
                                <input class="form-check-input" type="checkbox" name="data-menu-color"
                                    id="leftbar-color-light" value="light">
                                <label class="form-check-label" for="leftbar-color-light">
                                    <img src="{{ asset('assets/images/layouts/sidebar-light.png') }}" alt=""
                                        class="img-fluid">
                                </label>
                            </div>
                            <h5 class="font-14 text-center text-muted mt-2">Light</h5>
                        </div>

                        <div class="col-4">
                            <div class="form-check form-switch card-switch mb-1">
                                <input class="form-check-input" type="checkbox" name="data-menu-color"
                                    id="leftbar-color-dark" value="dark">
                                <label class="form-check-label" for="leftbar-color-dark">
                                    <img src="{{ asset('assets/images/layouts/light.png') }}" alt=""
                                        class="img-fluid">
                                </label>
                            </div>
                            <h5 class="font-14 text-center text-muted mt-2">Dark</h5>
                        </div>
                    </div>
                </div>

                <div id="sidebar-size">
                    <h5 class="my-3 fs-16 fw-bold">Sidebar Size</h5>

                    <div class="row">
                        <div class="col-4">
                            <div class="form-check form-switch card-switch mb-1">
                                <input class="form-check-input" type="checkbox" name="data-sidenav-size"
                                    id="leftbar-size-default" value="default">
                                <label class="form-check-label" for="leftbar-size-default">
                                    <img src="{{ asset('assets/images/layouts/light.png') }}" alt=""
                                        class="img-fluid">
                                </label>
                            </div>
                            <h5 class="font-14 text-center text-muted mt-2">Default</h5>
                        </div>

                        <div class="col-4">
                            <div class="form-check form-switch card-switch mb-1">
                                <input class="form-check-input" type="checkbox" name="data-sidenav-size"
                                    id="leftbar-size-compact" value="compact">
                                <label class="form-check-label" for="leftbar-size-compact">
                                    <img src="{{ asset('assets/images/layouts/compact.png') }}" alt=""
                                        class="img-fluid">
                                </label>
                            </div>
                            <h5 class="font-14 text-center text-muted mt-2">Compact</h5>
                        </div>

                        <div class="col-4">
                            <div class="form-check form-switch card-switch mb-1">
                                <input class="form-check-input" type="checkbox" name="data-sidenav-size"
                                    id="leftbar-size-small" value="condensed">
                                <label class="form-check-label" for="leftbar-size-small">
                                    <img src="{{ asset('assets/images/layouts/sm.png') }}" alt=""
                                        class="img-fluid">
                                </label>
                            </div>
                            <h5 class="font-14 text-center text-muted mt-2">Condensed</h5>
                        </div>


                        <div class="col-4">
                            <div class="form-check form-switch card-switch mb-1">
                                <input class="form-check-input" type="checkbox" name="data-sidenav-size"
                                    id="leftbar-size-full" value="full">
                                <label class="form-check-label" for="leftbar-size-full">
                                    <img src="{{ asset('assets/images/layouts/full.png') }}" alt=""
                                        class="img-fluid">
                                </label>
                            </div>
                            <h5 class="font-14 text-center text-muted mt-2">Full Layout</h5>
                        </div>
                    </div>
                </div>

                <div id="layout-position">
                    <h5 class="my-3 fs-16 fw-bold">Layout Position</h5>

                    <div class="btn-group checkbox" role="group">
                        <input type="radio" class="btn-check" name="data-layout-position"
                            id="layout-position-fixed" value="fixed">
                        <label class="btn btn-soft-primary w-sm" for="layout-position-fixed">Fixed</label>

                        <input type="radio" class="btn-check" name="data-layout-position"
                            id="layout-position-scrollable" value="scrollable">
                        <label class="btn btn-soft-primary w-sm ms-0"
                            for="layout-position-scrollable">Scrollable</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas-footer border-top p-3 text-center">
        <div class="row">
            <div class="col-6">
                <button type="button" class="btn btn-light w-100" id="reset-layout">Reset</button>
            </div>
            <div class="col-6">
                <a href="https://1.envato.market/velonic" target="_blank" role="button"
                    class="btn btn-primary w-100">Buy Now</a>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- jQuery inclusion -->

<!-- Stack for page-specific scripts -->
@stack('scripts')
<script>
    //for alert div success, error
    $(document).ready(function() {
        $('.alert-success, .alert-danger').fadeIn('slow');
        setTimeout(function() {
            $('.alert-success, .alert-danger').fadeOut('slow', function() {
                $(this).remove();
            });
        }, 3000); // 3000 ms = 3 seconds
    });
</script>

<!-- Vendor js -->
<script src="{{ asset('assets/js/vendor.min.js') }}"></script>

<!-- Daterangepicker js -->
<script src="{{ asset('assets/vendor/daterangepicker/moment.min.js') }}"></script>
<script src="{{ asset('assets/vendor/daterangepicker/daterangepicker.js') }}"></script>

<!-- Apex Charts js -->
<script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>

<!-- Bootstrap Datepicker Plugin js -->
<script src="{{ asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>

<!-- Bootstrap Timepicker Plugin js -->
<script src="{{ asset('assets/vendor/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>

<!-- Vector Map js -->
<script src="{{ asset('assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('assets/vendor/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js') }}">
</script>

<!-- Dashboard App js -->
<script src="{{ asset('assets/js/pages/dashboard.js') }}"></script>

<!-- Quill Editor js-->
<script src="{{ asset('assets/vendor/quill/quill.min.js') }}"></script>

<!-- Quill Demo js -->
<script src="{{ asset('assets/js/pages/quilljs.init.js') }}"></script>

<!-- Bootstrap Touchspin Plugin js -->
<script src="{{ asset('assets/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js') }}"></script>

<!-- App js -->
<script src="{{ asset('assets/js/app.min.js') }}"></script>

<!-- Typehead Plugin js -->
<script src="{{ asset('assets/vendor/handlebars/handlebars.min.js') }}"></script>
<script src="{{ asset('assets/vendor/typeahead.js/typeahead.bundle.min.js') }}"></script>

<!-- Typehead Demo js -->
<script src="{{ asset('assets/js/pages/typehead.init.js') }}"></script>

<!-- Flatpickr Timepicker Plugin js -->
<script src="{{ asset('assets/vendor/flatpickr/flatpickr.min.js') }}"></script>

<!-- Timepicker Demo js -->
<script src="{{ asset('assets/js/pages/timepicker.init.js') }}"></script>

<!-- Input Mask Plugin js -->
<script src="{{ asset('assets/vendor/jquery-mask-plugin/jquery.mask.min.js') }}"></script>

<!--  Select2 Plugin Js -->
<script src="{{ asset('assets/vendor/select2/js/select2.min.js') }}"></script>

<!-- Custom Js -->
<script src="{{ asset('assets/js/custom.js') }}"></script>



<script>
    $(function() {
        $('.select2').select2();
    });
</script>

<!-- Global AJAX Loader — place before </body> -->
<div id="global-loader"
    style="
  display:none; position:fixed; inset:0; z-index:99999;
  background:rgba(0,0,0,0.45);
  align-items:center; justify-content:center;
">
    <div style="text-align:center">
        <div
            style="
      width:48px; height:48px; margin:0 auto;
      border:3px solid rgba(255,255,255,0.2);
      border-top-color:#fff; border-radius:50%;
      animation:__spin 0.7s linear infinite;
    ">
        </div>
        <p style="color:#fff; margin-top:12px; font-size:14px; font-weight:500;">Please wait…</p>
    </div>
</div>

<style>
    @keyframes __spin {
        to {
            transform: rotate(360deg);
        }
    }
</style>

<script src="{{ asset('assets/js/loader.js') }}"></script>

<!-- END OF AJAX LOADER -->
</body>

</html>
