@include('template.header')
@include('template.sidebar')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Master Barang</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List Barang</h3>
              </div>
              <div class="container mt-2">
                <a href="{{ route('formtambahuser') }}"><button href= type="button" class="btn btn-primary float-left"><i class="fas fa-plus"></i>Tambah User</button></a> 
              </div>              
              <!-- /.card-header -->              
              <div class="card-body">                
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>id      </th>
                    <th>nama</th>
                    <th>level</th>
                    <th>email</th>
                    <th>password</th>
                    <th>action</th
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($userpage as $tpuser)
                  <tr>
                    <td>{{ $tpuser ->id }}</td>
                    <td>{{ $tpuser ->name }}</td>
                    <td>{{ $tpuser ->level }}</td>
                    <td>{{ $tpuser ->email }}</td>
                    <td>{{ $tpuser ->password }}</td>
                    
                    <td>
                        <a href="{{ url('home/edituser/'.$tpuser->id) }}">
                            <button type="submit" class="btn btn-primary btn-sm">Edit</button>    
                        </a>
                        |
                        <a href="{{ url('home/userdelete/'.$tpuser->id) }}">
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                        </a>
                    </td>                    
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>id</th>
                    <th>nama</th>
                    <th>level</th>
                    <th>email</th>
                    <th>password</th>
                    <th>action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->


            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  @include('template.footer')