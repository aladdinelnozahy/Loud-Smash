<!DOCTYPE html>
<html lang="en">
<!-- start heder  -->
@include('admin.includes.headerdash')
<!-- end header -->
<body class=" ">

{{-- {{ Auth::user()->name }} --}}
{{-- {{ request()->session()->pull('u_role', '  ') }}; --}}
{{-- {{ Session()->get('u_role') }} --}}
@if(Session()->get('u_role') == 1)
<!-- start sidebar -->
@include('admin.includes.adminsidebardash')
<!-- end sidebar -->

@else

@include('admin.includes.usersidebardash')
{{-- @include('admin.includes.adminsidebardash') --}}

@endif





  <div class="wrapper ">

    <div class="main-panel">
      <!--start Navbar -->
       @include('admin.includes.navbardash')
      <!-- end navbar -->
      <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
            <div class="modal-footer">
            </div>
          </div>
        </div>
      </div>
      <!-- End Navbar -->
      <!-- start content -->


        <div class="content">
          @yield('admincontent')
        </div>
        <!-- end content -->
      <!-- start footer -->
      @include('admin.includes.footerdash')

      <!-- end footer -->
      </div>
    </div>
    <div class="fixed-plugin">
      <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
          <i class="fa fa-cog fa-2x"> </i>
        </a>
        <ul class="dropdown-menu">
          <li class="header-title"> Sidebar Background</li>
          <li class="adjustments-line">
            <a href="javascript:void(0)" class="switch-trigger background-color">
              <div class="badge-colors text-center">
                <span class="badge filter badge-primary active" data-color="primary"></span>
                <span class="badge filter badge-blue" data-color="blue"></span>
                <span class="badge filter badge-green" data-color="green"></span>
              </div>
              <div class="clearfix"></div>
            </a>
          </li>
          <li class="adjustments-line text-center color-change">
            <span class="color-label">LIGHT MODE</span>
            <span class="badge light-badge mr-2"></span>
            <span class="badge dark-badge ml-2"></span>
            <span class="color-label">DARK MODE</span>
          </li>
          <!-- <li class="button-container">
            <a href="https://www.creative-tim.com/product/black-dashboard" target="_blank" class="btn btn-primary btn-block btn-round">Download Now</a>
            <a href="https://demos.creative-tim.com/black-dashboard/docs/1.0/getting-started/introduction.html" target="_blank" class="btn btn-default btn-block btn-round">
              Documentation
            </a>
          </li>
          <li class="header-title">Thank you for 95 shares!</li>
          <li class="button-container text-center">
            <button id="twitter" class="btn btn-round btn-info"><i class="fab fa-twitter"></i> &middot; 45</button>
            <button id="facebook" class="btn btn-round btn-info"><i class="fab fa-facebook-f"></i> &middot; 50</button>
            <br>
            <br>
            <a class="github-button" href="https://github.com/creativetimofficial/black-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
          </li> -->
        </ul>
      </div>
    </div>
    <!--   Core JS Files   -->
    <script src="../dashstyle/assets/js/core/jquery.min.js"></script>
    <script src="../dashstyle/assets/js/core/popper.min.js"></script>
    <script src="../dashstyle/assets/js/core/bootstrap.min.js"></script>
    <script src="../dashstyle/assets/js/script.js"></script>
    <script src="../dashstyle/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>


    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="../dashstyle/assets/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="../dashstyle/assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../dashstyle/assets/js/black-dashboard.min.js?v=1.0.0" type="text/javascript"></script>
    <!-- Black Dashboard DEMO methods, don't include it in your project! -->
    <script src="../dashstyle/assets/demo/demo.js"></script>
    {{-- DATA TABLE SCRIPTS CDN --}}
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap.min.js"></script> --}}
</body>

</html>
