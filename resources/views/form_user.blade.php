@include('template.header')
@include('template.sidebar')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Add User Baru
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">DataTables</li>
                </ol>
            </div>
            <form action="{{ route('simpanuser') }}" method="POST">
                {{ csrf_field() }}
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Id User</label>
                    <input name="id" type="text" class="form-control" id="exampleInputEmail1" placeholder="ID">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nama</label>
                    <input type="text" name="name" class="form-control" id="exampleInputPassword1" placeholder="Nama">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Level user</label>
                    <input type="text" name="level" class="form-control" id="exampleInputPassword1" placeholder="Nama">
                </div>                
                <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input name="email" type="text" class="form-control" id="exampleInputPassword1" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input name="password" type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>                                            
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                <input type="submit" class="btn btn-primary" value="simpan data">
                </div>
            </form>          
            </div>
        </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
        <div class="container-fluid">
            <div class="row">
            <div class="col-12">

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
