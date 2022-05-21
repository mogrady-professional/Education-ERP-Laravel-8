@extends('admin.admin_master')
@section('admin')

  <div class="content-wrapper">
	  <div class="container-full">

		<!-- Main content -->
		<section class="content">
			<div class="row">
			<div class="col-xl-12 col-12">
					<div class="box overflow-hidden pull-up">
	<div class="box-body">							
		<div>
			<p class="text-mute mt-20 mb-0 font-size-16 text-center">Demonstration Dashboard</p>
		</div>
	</div>
</div>
</div>	
			</div>
			<div class="row">
				<div class="col-xl-3 col-6">
					<div class="box overflow-hidden pull-up">
	<div class="box-body">							
		<div class="icon bg-primary-light rounded w-60 h-60">
			<i class="text-primary mr-0 font-size-24 mdi mdi-account-multiple"></i>
		</div>
		<div>
			<p class="text-mute mt-20 mb-0 font-size-16">Total Staff</p>
			<h3 class="text-white mb-0 font-weight-500">143 <small class="text-success"><i class="fa fa-caret-up"></i> +2.5%</small></h3>
		</div>
	</div>
</div>
</div>
<div class="col-xl-3 col-6">
<div class="box overflow-hidden pull-up">
	<div class="box-body">							
		<div class="icon bg-warning-light rounded w-60 h-60">
			<i class="text-warning mr-0 font-size-24 mdi mdi-account-plus"></i>
		</div>
		<div>
			<p class="text-mute mt-20 mb-0 font-size-16">Total Students</p>
			<h3 class="text-white mb-0 font-weight-500">810 <small class="text-success"><i class="fa fa-caret-up"></i> +2.5%</small></h3>
		</div>
	</div>
</div>
</div>
<div class="col-xl-3 col-6">
<div class="box overflow-hidden pull-up">
	<div class="box-body">							
		<div class="icon bg-info-light rounded w-60 h-60">
			<i class="text-info mr-0 font-size-24 mdi mdi-cash-multiple"></i>
		</div>
		<div>
			<p class="text-mute mt-20 mb-0 font-size-16">Total Costs this Month</p>
			<h3 class="text-white mb-0 font-weight-500">€16,250 <small class="text-danger"><i class="fa fa-caret-down"></i> -0.5%</small></h3>
		</div>
	</div>
</div>
</div>
<div class="col-xl-3 col-6">
<div class="box overflow-hidden pull-up">
	<div class="box-body">							
		<div class="icon bg-danger-light rounded w-60 h-60">
			<i class="text-danger mr-0 font-size-24 mdi mdi-alert-octagon"></i>
		</div>
		<div>
			<p class="text-mute mt-20 mb-0 font-size-16">Total Costs this Year</p>
			<h3 class="text-white mb-0 font-weight-500">€53,460 <small class="text-danger"><i class="fa fa-caret-up"></i> -1.5%</small></h3>
		</div>
	</div>
</div>
</div>
 
 
 
 
<div class="col-12">
<div class="box">
	<div class="box-header">
		<h4 class="box-title align-items-start flex-column">
			New Arrivals from Ukraine
			<small class="subtitle">More than 5+ new students from Ukraine arrived this week</small>
		</h4>
	</div>
	<div class="box-body">
		<div class="table-responsive">
			<table class="table no-border">
				<thead>
					<tr class="text-uppercase bg-lightest">
						<th style="min-width: 250px"><span class="text-white">Student Details</span></th>
						<th style="min-width: 100px"><span class="text-fade">Fees</span></th>
						<th style="min-width: 100px"><span class="text-fade">Deposit Paid</span></th>
						<th style="min-width: 100px"><span class="text-fade">Due</span></th>
						<th style="min-width: 150px"><span class="text-fade">Staff</span></th>
						<th style="min-width: 130px"><span class="text-fade">Status</span></th>
						<th style="min-width: 120px"></th>
					</tr>
				</thead>
				<tbody>
					<tr>										
						<td class="pl-0 py-8">
							<div class="d-flex align-items-center">
								<div class="flex-shrink-0 mr-20">
	 <div class="bg-img h-50 w-50" style="background-image: url(../images/gallery/creative/img-1.jpg)"></div>
								</div>

								<div>
									<a href="#" class="text-white font-weight-600 hover-primary mb-1 font-size-16">Marco Denic</a>
									<span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
								</div>
							</div>
						</td>
						<td>
							<span class="text-fade font-weight-600 d-block font-size-16">
								Paid
							</span>
							<span class="text-white font-weight-600 d-block font-size-16">
								€450
							</span>
						</td>
						<td>
							<span class="text-fade font-weight-600 d-block font-size-16">
								Paid
							</span>
							<span class="text-white font-weight-600 d-block font-size-16">
								€150
							</span>
						</td>
						<td>
							<span class="text-fade font-weight-600 d-block font-size-16">
								Due
							</span>
							<span class="text-white font-weight-600 d-block font-size-16">
								€0
							</span>
						</td>
						<td>
							<span class="text-fade font-weight-600 d-block font-size-16">
								Sophia
							</span>
							<span class="text-white font-weight-600 d-block font-size-16">
								Pharetra
							</span>
						</td>
						<td>
							<span class="badge badge-primary-light badge-lg">Approved</span>
						</td>
						<td class="text-right">
							<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-bookmark-plus"></span></a>
							<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-arrow-right"></span></a>
						</td>
					</tr>
					<tr>										
						<td class="pl-0 py-8">
							<div class="d-flex align-items-center">
								<div class="flex-shrink-0 mr-20">
									<div class="bg-img h-50 w-50" style="background-image: url(../images/gallery/creative/img-2.jpg)"></div>
								</div>

								<div>
									<a href="#" class="text-white font-weight-600 hover-primary mb-1 font-size-16">Rachel Jessy</a>
									<span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
								</div>
							</div>
						</td>
						<td>
							<span class="text-fade font-weight-600 d-block font-size-16">
								Paid
							</span>
							<span class="text-white font-weight-600 d-block font-size-16">
								€0
							</span>
						</td>
						<td>
							<span class="text-fade font-weight-600 d-block font-size-16">
								Paid
							</span>
							<span class="text-white font-weight-600 d-block font-size-16">
								€25
							</span>
						</td>
						<td>
							<span class="text-fade font-weight-600 d-block font-size-16">
								Due
							</span>
							<span class="text-white font-weight-600 d-block font-size-16">
								€425
							</span>
						</td>
						<td>
							<span class="text-fade font-weight-600 d-block font-size-16">
								Sophia
							</span>
							<span class="text-white font-weight-600 d-block font-size-16">
								Pharetra
							</span>
						</td>
						<td>
							<span class="badge badge-warning-light badge-lg">In Progress</span>
						</td>
						<td class="text-right">
							<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-bookmark-plus"></span></a>
							<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-arrow-right"></span></a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>  
				</div>
			</div>
		</section>
		<!-- /.content -->
	  </div>
  </div>

  @endsection