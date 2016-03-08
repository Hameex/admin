@extends("public.widgets.layout")

@section('page')



<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper" style="min-height: 901px;">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			General Form Elements
			<small>Preview</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Forms</a></li>
			<li class="active">General Elements</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="col-md-12">
			<div class="row">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Press Release</h3>
						<div class="box-tools">
							<div class="input-group" style="width: 150px;">
								<input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
								<div class="input-group-btn">
									<button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
								</div>
							</div>
						</div>
					</div><!-- /.box-header -->


					<div class="hpanel">
						<div class="panel-body float-e-margins">
							<button class="btn btn-primary " type="button"><i class="fa fa-caret-square-o-up"></i> Submit</button>
							<button class="btn btn-success " type="button"><i class="fa fa-upload"></i> Upload</button>
							<button class="btn btn-info" type="button"><i class="fa fa-paste"></i> Edit</button>
							<button class="btn btn-danger" type="button"><i class="fa fa-trash-o"></i> Delete</span></button>
							<button class="btn btn-warning" type="button"><i class="fa fa-archive"></i> Archive </button>
							<button class="btn bg-maroon" type="button"><i class="fa fa-archive"></i> Publish </button>




						</div>
					</div> <br>

					<div class="table-responsive">
						<div class="col-md-10">
							<table class="table table-bordered table-striped">
								<thead>
									<tr>
										<th class="press-id">Category Id</th>
										<th class="press-title">Title</th>
										<th class="press-date">Published Date</th>


									</tr>
								</thead>

								<tbody>
									<tr>
										<td><div class="press-id">01</div></td>
										<td><div class="press-title"><a href="#"> Press release 1 </a></div></td>
										<td><div class="press-date"> 2 January 2016</div></td>
									</tr>

									<tr>
										<td><div class="press-id">02</div></td>
										<td><div><a href="#">Press release 2 </a></div></td>
										<td><div class="press-date"> 5 Feburuary 2016</div></td>
									</tr>
									<tr>
										<td><div class="press-id">03</div></td>
										<td><div class="press-title"><a href="#"> Press release 3 </a></div></td>
										<td><div class="press-date"> 7 Feuruary 2016</div></td>
									</tr>

									<tr>
										<td><div class="press-id">04</div></td>
										<td><div><a href="#">Press release 4 </a></div></td>
										<td><div class="press-date"> 8 Feburuary 2016</div></td>
									</tr>







								</tbody>
							</table>
						</div>
					</div><!-- /.box -->
				</div>
			</div>
		</div>
	</div>   
</section>
</div>





@endsection





