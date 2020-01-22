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
            <h1>Pembayaran</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{URL::to('/homefinance')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Pembayaran</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
                  <div class="card card-warning">
                        <div class="card-header">
                          <h3 class="card-title">Filter List Transaksi</h3>
                        </div>
                        <form class="" action="index.html" method="post">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-9">
                              <div class="form-group">
                                <label>Date range:</label>

                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="far fa-calendar-alt"></i>
                                    </span>
                                  </div>
                                  <input type="text" class="form-control float-right" id="reservation">
                                </div>
                                <!-- /.input group -->
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="">&nbsp;</label>
                                <div class="input-group">
                                  <button type="submit" class="btn btn-warning"><i class="fas fa-search"></i>&nbsp;Cari</button>
                                </div>
                              </div>
                            </div>
                          </div>


                        <!-- /.card-body -->
                      </div>
                    </form>
                </div>
                <!-- /.card-body -->
        </div>


        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">List Data Transaksi</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Tanggal&nbsp;Transaksi</th>
                  <th>Nama</th>
                  <th>Blok&nbsp;Rumah</th>
                  <th>DP&nbsp;Blok/Kavling</th>
                  <th>DP&nbsp;yang&nbsp;Dibayar</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td data-toggle="modal" data-target="#modal-lg">1</td>
                  <td data-toggle="modal" data-target="#modal-lg">12-12-2019</td>
                  <td data-toggle="modal" data-target="#modal-lg">Clara</td>
                  <td data-toggle="modal" data-target="#modal-lg">A12</td>
                  <td data-toggle="modal" data-target="#modal-lg">Rp.1.000.000</td>
                  <td data-toggle="modal" data-target="#modal-lg">Rp.20.000.000</td>
                  <td class="project-actions text-center">
                      <a class="btn btn-success btn-md" data-toggle1="tooltip" data-placement="bottom" title="Tambah Transaksi" href="{{URL::to('/transactionadd')}}">
                          <i class="fas fa-plus"></i>
                      </a>
                      <a class="btn btn-info btn-md" data-toggle1="tooltip" data-placement="bottom" title="Edit" href="{{URL::to('/transactionedit')}}">
                          <i class="fas fa-pencil-alt">
                          </i>
                      </a>
                      <a class="btn btn-primary btn-md" data-toggle1="tooltip" data-placement="bottom" title="Bukti Pembayaran" href="{{URL::to('/transactionedit')}}">
                          <i class="fas fa-print">
                          </i>
                      </a>
                      <a class="btn btn-danger btn-md" href="#" data-toggle1="tooltip" data-placement="bottom" title="Hapus" data-toggle="modal" data-target="#modal-default">
                          <i class="fas fa-trash">
                          </i>
                      </a>
                  </td>

                  <div class="modal fade" id="modal-default">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Hapus Data&hellip;</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p>Yakin Mau Hapus</p>
                        </div>
                        <div class="modal-footer justify-content-between">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-danger">Hapus</button>
                        </div>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
                  <!-- /.modal -->

                  <div class="modal fade" id="modal-lg">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Detail Data Customer</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p><b>No :</b> 1</p>
                          <p><b>Nama Lengkap :</b> Clara</p>
                          <p><b>Tanggal Lahir :</b> 12-12-1986</p>
                          <p><b>Jenis Kelamin :</b> Laki-laki</p>
                          <p><b>No Hp :</b> 08475374858</p>
                          <p><b>Alamat :</b> New Jersey,USA</p>
                          <p><b>Blok Rumah :</b> A12</p>
                          <p><b>Kategori Rumah :</b> Rumah Cluster</p>
                          <p><b>Spek Rumah :</b> Luas tanah 400x800, Kamar ada 6 ditambah 2 kamar mandi, ada ruang tamu dan tempat makan</p>
                          <p><b>Harga Rumah :</b> Rp.120.000.000</p>
                          <p><b>Tipe DP Rumah :</b> Nominal</p>
                          <p><b>DP yang dibayar :</b> Rp.1.000.000</p>
                          <p><b>Harga Booking Rumah :</b> Rp.1.000.000</p>
                          <p><b>Tanggal Transaksi :</b> 12-12-2019</p>
                          <hr>
                          <p><b>Marketing :</b> Erena</p>
                          <hr>
                          <h5>*Berkas - berkas</h5>
                          <p><b>KTP :</b> Sudah</p>
                          <p><b>KK :</b> Sudah</p>
                          <p><b>Foto :</b> Sudah</p>
                          <p><b>Surat Nikah :</b> Sudah</p>
                          <p><b>NPWP :</b> Sudah</p>
                          <hr>
                          <p><b>Diubah Oleh :</b> Shin</p>
                          <p><b>Pada Tanggal :</b> 05-01-2029</p>
                        </div>
                        <div class="modal-footer justify-content-between">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                        </div>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
                  <!-- /.modal -->

                </tr>
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Tanggal&nbsp;Transaksi</th>
                  <th>Nama</th>
                  <th>Blok&nbsp;Rumah</th>
                  <th>DP&nbsp;Blok/Kavling</th>
                  <th>DP&nbsp;yang&nbsp;Dibayar</th>
                  <th>Aksi</th>
                </tr>
                </tfoot>

              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
@endsection

@section('script')

  <script src="{{asset('backend/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('backend/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('backend/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('backend/dist/js/demo.js')}}"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
<script>

		$(function () {
			$('[data-toggle1="tooltip"]').tooltip();
		});

	</script>
@endsection
