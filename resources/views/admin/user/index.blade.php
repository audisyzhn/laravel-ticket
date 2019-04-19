@extends('layouts.app')
@section('content')

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>HayuCaw</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  @section('css')
  @show
  {{csrf_field()}}
  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Data User</h1>

    <div class="card shadow mb-4">
      
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Foto Profile</th>
                <th>Nama User</th>
                <th>Surel</th>
                <th>Aksi</th>
                <th>Option</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>No</th>
                <th>Foto Profile</th>
                <th>Nama User</th>
                <th>Surel</th>
                <th>Aksi</th>
                <th>Option</th>
              </tr>
            </tfoot>
            <tbody>
            @php $no = 1; @endphp
            @foreach($user as $users)        
              <tr>
                <td>{{ $no++ }}</td>
                <td>#</td>
                <td>{{$users->name}}</td>
                <td>{{$users->email}}</td>
                <td>#</td>
                <td>#</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->

  </table>
  </div>
  <!-- End of Main Content -->

  </div>
  <!-- End of Content Wrapper -->

  </div>


  @endsection