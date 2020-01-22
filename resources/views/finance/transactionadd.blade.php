@extends('layout')
@section('navbar')
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('backend/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Data Transaksi
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{URL::to('/transactionlist')}}" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Pembayaran</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{URL::to('/transactionstage')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tahapan Transaksi</p>
              </a>
            </li>
          </ul>
        </li>


      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Tambah Transaksi Pembayaran</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{URL::to('/homemaster')}}">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="{{URL::to('/transactionlist')}}">Pembayaran</a></li>
                  <li class="breadcrumb-item active">Tambah Transaksi</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Detail Transaksi</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
                    <div class="row">
                      <div class="col-12 col-sm-4">
                        <div class="info-box bg-light">
                          <div class="info-box-content">
                            <span class="info-box-text text-center text-muted">Estimated budget</span>
                            <span class="info-box-number text-center text-muted mb-0">2300</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-sm-4">
                        <div class="info-box bg-light">
                          <div class="info-box-content">
                            <span class="info-box-text text-center text-muted">Total amount spent</span>
                            <span class="info-box-number text-center text-muted mb-0">2000</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-sm-4">
                        <div class="info-box bg-light">
                          <div class="info-box-content">
                            <span class="info-box-text text-center text-muted">Estimated project duration</span>
                            <span class="info-box-number text-center text-muted mb-0">20 <span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <h4>Recent Activity</h4>
                          <div class="post">
                            <div class="user-block">
                              <img class="img-circle img-bordered-sm" src="{{asset('backend/dist/img/user1-128x128.')}}" alt="user image">
                              <span class="username">
                                <a href="#">Jonathan Burke Jr.</a>
                              </span>
                              <span class="description">Shared publicly - 7:45 PM today</span>
                            </div>
                            <!-- /.user-block -->
                            <p>
                              Lorem ipsum represents a long-held tradition for designers,
                              typographers and the like. Some people hate it and argue for
                              its demise, but others ignore.
                            </p>

                            <p>
                              <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Demo File 1 v2</a>
                            </p>
                          </div>

                          <div class="post clearfix">
                            <div class="user-block">
                              <img class="img-circle img-bordered-sm" src="{{asset('backend/dist/img/user7-128x128.jpg')}}" alt="User Image">
                              <span class="username">
                                <a href="#">Sarah Ross</a>
                              </span>
                              <span class="description">Sent you a message - 3 days ago</span>
                            </div>
                            <!-- /.user-block -->
                            <p>
                              Lorem ipsum represents a long-held tradition for designers,
                              typographers and the like. Some people hate it and argue for
                              its demise, but others ignore.
                            </p>
                            <p>
                              <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Demo File 2</a>
                            </p>
                          </div>

                          <div class="post">
                            <div class="user-block">
                              <img class="img-circle img-bordered-sm" src="{{asset('backend/dist/img/user1-128x128.jpg')}}" alt="user image">
                              <span class="username">
                                <a href="#">Jonathan Burke Jr.</a>
                              </span>
                              <span class="description">Shared publicly - 5 days ago</span>
                            </div>
                            <!-- /.user-block -->
                            <p>
                              Lorem ipsum represents a long-held tradition for designers,
                              typographers and the like. Some people hate it and argue for
                              its demise, but others ignore.
                            </p>

                            <p>
                              <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Demo File 1 v1</a>
                            </p>
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                    <h3 class="text-primary"><i class="fas fa-paint-brush"></i> AdminLTE v3</h3>
                    <p class="text-muted">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.</p>
                    <br>
                    <div class="text-muted">
                      <p class="text-sm">Client Company
                        <b class="d-block">Deveint Inc</b>
                      </p>
                      <p class="text-sm">Project Leader
                        <b class="d-block">Tony Chicken</b>
                      </p>
                    </div>

                    <h5 class="mt-5 text-muted">Project files</h5>
                    <ul class="list-unstyled">
                      <li>
                        <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Functional-requirements.docx</a>
                      </li>
                      <li>
                        <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-pdf"></i> UAT.pdf</a>
                      </li>
                      <li>
                        <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-envelope"></i> Email-from-flatbal.mln</a>
                      </li>
                      <li>
                        <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-image "></i> Logo.png</a>
                      </li>
                      <li>
                        <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Contract-10_12_2014.docx</a>
                      </li>
                    </ul>
                    <div class="text-center mt-5 mb-3">
                      <a href="#" class="btn btn-sm btn-primary">Add files</a>
                      <a href="#" class="btn btn-sm btn-warning">Report contact</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
      <!-- Default box -->
    </section>

        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <!-- left column -->
              <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-success">
                  <div class="card-header">
                    <h3 class="card-title">Form Transaksi Pembayaran</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form role="form">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Pembayaran Booking</label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                              <span class="input-group-text">Rp.</span>
                              </div>
                              <input type="text" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                          <label>Metode Pembayaran Rumah</label>
                          <div class="select2-purple">
                            <select class="select2" data-placeholder="Select a State" data-dropdown-css-class="select2-purple" style="width: 100%;">
                              <option>Cicilan 24x</option>
                              <option>Cicilan 48x</option>
                              <option>Cicilan 68x</option>
                              <option>Lunas</option>
                            </select>
                          </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Pembayaran DP</label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                              <span class="input-group-text">Rp.</span>
                              </div>
                              <input type="text" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label>Nominal Pembayaran Rumah</label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                              <span class="input-group-text">Rp.</span>
                              </div>
                              <input type="text" class="form-control">
                            </div>
                          </div>
                        </div>

                      </div>
                      <div class="form-group">
                      <label>Metode Pembayaran</label>
                      <div class="select2-purple">
                        <select class="select2" data-placeholder="Select a State" data-dropdown-css-class="select2-purple" style="width: 100%;">
                          <option>Bank</option>
                          <option>Cash</option>
                        </select>
                      </div>
                      </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                      <button type="submit" class="btn btn-success float-right">Simpan</button>
                    </div>
                  </form>
                </div>
                <!-- /.card -->


                <!-- /.card -->
              </div>
              <!--/.col (right) -->
            </div>
            <!-- /.row -->
          </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>
  @endsection

  @section('script')

    <script src="{{asset('backend/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- bs-custom-file-input -->
    <script src="{{asset('backend/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('backend/dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('backend/dist/js/demo.js')}}"></script>
    <script type="text/javascript">
    $(document).ready(function () {
      bsCustomFileInput.init();
    });
    </script>

    <!-- Select2 -->
    <script src="{{asset('backend/plugins/select2/js/select2.full.min.js')}}"></script>
    <!-- Bootstrap4 Duallistbox -->
    <script src="{{asset('backend/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js')}}"></script>
    <!-- InputMask -->
    <script src="{{asset('backend/plugins/moment/moment.min.js')}}"></script>
    <script src="{{asset('backend/plugins/inputmask/min/jquery.inputmask.bundle.min.js')}}"></script>
    <!-- date-range-picker -->
    <script src="{{asset('backend/plugins/daterangepicker/daterangepicker.js')}}"></script>
    <!-- bootstrap color picker -->
    <script src="{{asset('backend/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{asset('backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <!-- Bootstrap Switch -->
    <script src="{{asset('backend/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
    <!-- Page script -->
    <script>
      $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
          theme: 'bootstrap4'
        })

        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
        //Datemask2 mm/dd/yyyy
        $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
        //Money Euro
        $('[data-mask]').inputmask()

        //Date range picker
        $('#reservation').daterangepicker()
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({
          timePicker: true,
          timePickerIncrement: 30,
          locale: {
            format: 'MM/DD/YYYY hh:mm A'
          }
        })
        //Date range as a button
        $('#daterange-btn').daterangepicker(
          {
            ranges   : {
              'Today'       : [moment(), moment()],
              'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
              'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
              'Last 30 Days': [moment().subtract(29, 'days'), moment()],
              'This Month'  : [moment().startOf('month'), moment().endOf('month')],
              'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            startDate: moment().subtract(29, 'days'),
            endDate  : moment()
          },
          function (start, end) {
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
          }
        )

        //Timepicker
        $('#timepicker').datetimepicker({
          format: 'LT'
        })

        //Bootstrap Duallistbox
        $('.duallistbox').bootstrapDualListbox()

        //Colorpicker
        $('.my-colorpicker1').colorpicker()
        //color picker with addon
        $('.my-colorpicker2').colorpicker()

        $('.my-colorpicker2').on('colorpickerChange', function(event) {
          $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
        });

        $("input[data-bootstrap-switch]").each(function(){
          $(this).bootstrapSwitch('state', $(this).prop('checked'));
        });

      })
    </script>

  @endsection
