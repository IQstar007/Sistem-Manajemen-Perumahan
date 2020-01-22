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
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Data Rumah
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{URL::to('/categorylist')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>List Kategori Rumah</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{URL::to('/productlist')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>List Rumah</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Data User
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{URL::to('/userlist')}}" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>List User</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="{{URL::to('/financialreport')}}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Laporan Keuangan
              <span class="right badge badge-danger">New</span>
            </p>
          </a>
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
              <h1>List User</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{URL::to('/homemaster')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">List User</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Kumpulan Data User</h3>
                <a class="btn btn-outline-success btn-sm float-right" href="{{URL::to('/useradd')}}">
                    <i class="fas fa-plus"></i>&nbsp;Tambah User
                </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>No&nbsp;Hp</th>
                    <th>Bagian</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td data-toggle="modal" data-target="#modal-lg">1</td>
                    <td data-toggle="modal" data-target="#modal-lg">Sukirman</td>
                    <td data-toggle="modal" data-target="#modal-lg">086541325</td>
                    <td data-toggle="modal" data-target="#modal-lg">Keuangan</td>
                    <td class="project-actions text-center">
                        <a class="btn btn-info btn-md" href="{{URL::to('/useredit')}}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>&nbsp;
                        <a class="btn btn-danger btn-md" href="#" data-toggle="modal" data-target="#modal-default">
                            <i class="fas fa-trash">
                            </i>
                            Delete
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
                            <h4 class="modal-title">Detail User</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <p><b>No :</b> 1</p>
                            <p><b>Nama Lengkap :</b> Sukirman</p>
                            <p><b>Email :</b> sukirman@mail.ru</p>
                            <p><b>Username :</b> suekir</p>
                            <p><b>No Hp :</b> 086541325</p>
                            <p><b>Alamat :</b> Los Angel, USA</p>
                            <p><b>Bagian :</b> Keuangan</p>
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
                    <th>Nama</th>
                    <th>No&nbsp;Hp</th>
                    <th>Bagian</th>
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
@endsection
