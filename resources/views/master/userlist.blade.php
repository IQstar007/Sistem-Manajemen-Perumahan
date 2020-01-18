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
              <a href="{{URL::to('/productadd')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tambah Rumah</p>
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
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Data User
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{URL::to('/useradd')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tambah User</p>
              </a>
            </li>
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
              <h1>Projects</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Projects</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Projects</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
            </div>
          </div>
          <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 1%">
                            #
                        </th>
                        <th style="width: 20%">
                            Project Name
                        </th>
                        <th style="width: 30%">
                            Team Members
                        </th>
                        <th>
                            Project Progress
                        </th>
                        <th style="width: 8%" class="text-center">
                            Status
                        </th>
                        <th style="width: 20%">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            #
                        </td>
                        <td>
                            <a>
                                AdminLTE v3
                            </a>
                            <br/>
                            <small>
                                Created 01.01.2019
                            </small>
                        </td>
                        <td>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <img alt="Avatar" class="table-avatar" src="{{asset('backend/dist/img/avatar.png')}}">
                                </li>
                                <li class="list-inline-item">
                                    <img alt="Avatar" class="table-avatar" src="{{asset('backend/dist/img/avatar2.png')}}">
                                </li>
                                <li class="list-inline-item">
                                    <img alt="Avatar" class="table-avatar" src="{{asset('backend/dist/img/avatar3.png')}}">
                                </li>
                                <li class="list-inline-item">
                                    <img alt="Avatar" class="table-avatar" src="{{asset('backend/dist/img/avatar04.png')}}">
                                </li>
                            </ul>
                        </td>
                        <td class="project_progress">
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-green" role="progressbar" aria-volumenow="57" aria-volumemin="0" aria-volumemax="100" style="width: 57%">
                                </div>
                            </div>
                            <small>
                                57% Complete
                            </small>
                        </td>
                        <td class="project-state">
                            <span class="badge badge-success">Success</span>
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="#">
                                <i class="fas fa-folder">
                                </i>
                                View
                            </a>
                            <a class="btn btn-info btn-sm" href="#">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <a class="btn btn-danger btn-sm" href="#">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            #
                        </td>
                        <td>
                            <a>
                                AdminLTE v3
                            </a>
                            <br/>
                            <small>
                                Created 01.01.2019
                            </small>
                        </td>
                        <td>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <img alt="Avatar" class="table-avatar" src="{{asset('backend/dist/img/avatar.png')}}">
                                </li>
                                <li class="list-inline-item">
                                    <img alt="Avatar" class="table-avatar" src="{{asset('backend/dist/img/avatar2.png')}}">
                                </li>
                            </ul>
                        </td>
                        <td class="project_progress">
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-green" role="progressbar" aria-volumenow="47" aria-volumemin="0" aria-volumemax="100" style="width: 47%">
                                </div>
                            </div>
                            <small>
                                47% Complete
                            </small>
                        </td>
                        <td class="project-state">
                            <span class="badge badge-success">Success</span>
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="#">
                                <i class="fas fa-folder">
                                </i>
                                View
                            </a>
                            <a class="btn btn-info btn-sm" href="#">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <a class="btn btn-danger btn-sm" href="#">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

      </section>
      <!-- /.content -->
    </div>
@endsection

@section('script')

  <script src="{{asset('backend/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('backend/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('backend/dist/js/demo.js')}}"></script>
@endsection
