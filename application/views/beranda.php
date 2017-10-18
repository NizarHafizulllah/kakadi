<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Data Tables
            <small>advanced tables</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data tables</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Data Table With Full Features</h3>
					<div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-hover">
                    <thead>
                      <tr>
						<th>#</th>  
                        <th>Username</th>
                        <th>Nama Depan</th>
                        <th>Email</th>
                        <th>action</th>
                      </tr>
                    </thead>
                    <tbody>
                    	<?php 
							foreach($users as $object){
						?> 
						<tr>
							<td><?php echo $object->id; ?></td>
							<td><?php echo $object->username; ?></td>
							<td><?php echo $object->nama_depan; ?></td>
							<td><?php echo $object->email; ?></td>
							<td><button id="<?php echo $object->id; ?>">Name</butto></td>
							
						</tr>
						
						<?php
							}
						?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <tr>
						<th>#</th>  
                        <th>Username</th>
                        <th>Nama Depan</th>
                        <th>Email</th>
                        <th>Password</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
