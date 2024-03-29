@extends('layouts.frontend')
@section('title')
Create Agent
@stop
{{-- @section('css')
	<!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset("app/front/app-assets/css/vendors.css")}}">
  <link rel="stylesheet" type="text/css" href="{{asset("app/front/app-assets/vendors/css/pickers/daterange/daterangepicker.css")}}">
  <link rel="stylesheet" type="text/css" href="{{asset("app/front/app-assets/vendors/css/pickers/pickadate/pickadate.css")}}">
  <!-- END VENDOR CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset("app/front/app-assets/css/core/menu/menu-types/vertical-menu.css")}}">
  <link rel="stylesheet" type="text/css" href="{{asset("app/front/app-assets/css/plugins/forms/wizard.css")}}">
  <link rel="stylesheet" type="text/css" href="{{asset("app/front/app-assets/css/plugins/pickers/daterange/daterange.css")}}">
  <!-- END Page Level CSS-->

  <!-- BEGIN STACK CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset("app/front/app-assets/css/app.css")}}">
  <!-- END STACK CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset("app/front/assets/css/style.css")}}">
  <!-- END Custom CSS-->
@endsection --}}
@section('header')
    <div class="content-header row">
	<div class="content-header col-md-6 col-12 mb-1">
    	<h3 class="content-header-title">Create Agent</h3>
    </div>
	  <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-12">
	    <div class="breadcrumb-wrapper col-12">
	      <ol class="breadcrumb">
	        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a>
	        </li>
	        <li class="breadcrumb-item"><a href="{{route('agents')}}">Agents</a>
	        </li>
	        <li class="breadcrumb-item">Add Agent</li>
	      </ol>
	    </div>
	  </div>
	</div>
@stop
@section('content')
	
	@if(count($errors)>0)
		<ul class="list-group">
			@foreach($errors->all() as $error)
				<li class="list_group-item text-danger">
					{{ $error }}
				</li>
			@endforeach
		</ul>
	@endif
	<div class="content-body">
	    <section id="number-tabs">
				<form action="{{route('agent.store')}}" method='post' enctype="multipart/form-data">
					{{csrf_field()}}
	          <div class="row">
	            <div class="col-8">
	              <div class="card">
	                <div class="card-content collapse show">
	                  <div class="card-body">
                      	<fieldset>
                      	<div class="row">
                      		<div class="col-md-6">
								<div class="form-group">
									<label for="name">Name</label>
									<input type="text" name='name' required class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="email">Email</label>
									<input type="email" name='email' required class="form-control">
								</div>
							</div>
                      		
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="company">Company</label>
									<input type="text" name='company' required class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="designation">Designation</label>
									<input type="text" name='designation' required class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
                      		<div class="col-md-6">
								<div class="form-group">
									<label for="website">Website</label>
									<input type="text" name='website' required class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="mobile">Mobile</label>
									<input type="text" name='mobile' required maxlength="10" minlength="10" class="form-control">
								</div>
							</div>
						</div>
						</fieldset>

						<!-- Step 2 -->
						<fieldset>
							<div class="row">
                      		<div class="col-md-6">
								<div class="form-group">
									<label for="address">Address</label>
									<input type="text" name='address' required class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="state">State/UT</label>
									<input type="text" name='state' required class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
                      		<div class="col-md-6">
								<div class="form-group">
									<label for="district">District</label>
									<input type="text" name='district' required class="form-control">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="location">City</label>
									<input type="text" name='location' required class="form-control">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="postal_code">Postal Code</label>
									<input type="number" name='postal_code' required class="form-control" maxlength="7">
								</div>
							</div>
						</div>
						
						{{-- <div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="id_proof">Id Proof</label>
									<input type="file" name='id_proof' class="form-control">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="license">License</label>
									<input type="file" name='license' class="form-control">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="photo">photo</label>
									<input type="file" name='photo' class="form-control">
								</div>
							</div>
						</div> --}}
						</fieldset>
						</div>
		      	    </div>
	              </div>
	              <div class="form-group">
					<div class="text-center">
						<button class="btn btn-success" type="submit">Update</button>
					</div>
				</div>	
	            </div>

	          
	            <div class="col-4">
	              <div class="card">
	                <div class="card-content collapse show">
	                  <div class="card-body">
							<fieldset>
								<div class="text-center"><h4>{{"Identity"}}</h4></div>
								<div class="row">
								<div class="col-md-6">
								<div class="form-group">
									<label for="id_name[]">ID Name:</label>
									<input type="text" name="id_name[]" class="form-control">
								</div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
									<label for="id_no[]">ID No.</label>
									<input type="text" name="id_no[]" class="form-control">
								</div>
								</div>
								</div>
								<div id="idd"></div>
									<div class="text-center">
										<button class="btn btn-success btn-sm" type="button" id="addid">Add Id</button>
									</div>
									<div class="row">
										<div class="form-group">
								<tr>
									<td><br><strong>Photos Received:</strong></td>
									<td>
										<input type="radio" name="photos_received" value="yes">Yes
										<input type="radio" name="photos_received" value="no" checked>No
									</td>
								</tr>
								</div>
							</div>
							</fieldset>
						</div>
					</div>
				</div>
			
				            <div class="card">
				                <div class="card-content collapse show">
				                  <div class="card-body">
										<fieldset>
												
												
											<div class="text-center"><h4>{{"Reference"}}</h4></div>
											<div class="row">
											<div class="col-md-6" >
												<div class="form-group">
													<div class="">
													<button class="btn btn-info btn-sm" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded='true' 
													aria-controls="collapse1">Reference 1</button></div><br>
													<div class="collapse" id="collapse1">
														<label for="reference1_name">College Name</label>
														<input type="text" name='reference1_name'  class="form-control" ><br>
														<label for="reference1_phone">Mobile</label>
														<input type="text" name='reference1_phone'  class="form-control" ><br>
														<label for="reference1_email">Email</label>
														<input type="email" name='reference1_email' class="form-control" ><br>
														<label for="reference1_contact">Consult Person</label>
														<input type="text" name='reference1_contact' class="form-control" ><br>
														<label for="reference1_website">Country</label>
														<input type="text" name='reference1_website' class="form-control" >
													</div>
												</div>
											</div>

											<div class="col-md-6" >
											<div class="form-group">
												<div class="">
												<button class="btn btn-warning btn-sm" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded='true' 
												aria-controls="collapse2">Reference 2</button></div><br>
												<div class="collapse" id="collapse2">
													<label for="reference2_name">College Name</label>
													<input type="text" name='reference2_name' class="form-control" ><br>
													<label for="reference2_phone">Mobile</label>
													<input type="text" name='reference2_phone' class="form-control" ><br>
													<label for="reference2_email">Email</label>
													<input type="email" name='reference2_email' class="form-control" ><br>
													<label for="reference2_contact">Consult Person</label>
													<input type="text" name='reference2_contact' class="form-control" ><br>
													<label for="reference2_website">Country</label>
													<input type="text" name='reference2_website' class="form-control" >
												</div>
											</div>
											
											</div>
											
											</div>
										</fieldset>
									</div>
								</div>
							</div>
				
			</div>
		</div>
						
				</form>
	    </section>
    </div>
		
@stop
@section('js')
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	<!-- BEGIN VENDOR JS-->
  {{-- <script src="{{asset("app/front/app-assets/vendors/js/vendors.min.js")}}" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="{{asset("app/front/app-assets/vendors/js/extensions/jquery.steps.min.js")}}" type="text/javascript"></script>
  <script src="{{asset("app/front/app-assets/vendors/js/pickers/dateTime/moment-with-locales.min.js")}}"
  type="text/javascript"></script>
  <script src="{{asset("app/front/app-assets/vendors/js/pickers/daterange/daterangepicker.js")}}"
  type="text/javascript"></script>
  <script src="{{asset("app/front/app-assets/vendors/js/pickers/pickadate/picker.js")}}" type="text/javascript"></script>
  <script src="{{asset("app/front/app-assets/vendors/js/pickers/pickadate/picker.date.js")}}" type="text/javascript"></script>
  <script src="{{asset("app/front/app-assets/vendors/js/forms/validation/jquery.validate.min.js")}}"
  type="text/javascript"></script> --}}
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN STACK JS-->
  {{-- <script src="{{asset("app/front/app-assets/js/core/app-menu.js")}}" type="text/javascript"></script>
  <script src="{{asset("app/front/app-assets/js/core/app.js")}}" type="text/javascript"></script>
  <script src="{{asset("app/front/app-assets/js/scripts/customizer.js")}}" type="text/javascript"></script>
  <!-- END STACK JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="{{asset("app/front/app-assets/js/scripts/forms/wizard-steps.js")}}" type="text/javascript"></script> --}}
  <!-- END PAGE LEVEL JS-->
  <script type="text/javascript">
	$(document).ready(function(){
    $("#addid").click(function(){
    	var name = '<div class="row"><div class="col-md-5"><div class="form-group"><label for="id_name[]">ID Name:</label><input type="text" name="id_name[]" class="form-control"></div></div><div class="col-md-5"><div class="form-group"><label for="id_no[]">ID No.</label><input type="text" name="id_no[]" class="form-control"></div></div><div class="col-md-2"><div class="form-group"><label for="">Action</label><input type="button" class="btn btn-danger" value="X" onclick="SomeDeleteRowFunction(this);"></div></div></div>';
    	$("#idd").append(name);  
    	});
	});


    function SomeDeleteRowFunction(btndel) {
    if (typeof(btndel) == "object") {
        $(btndel).closest('.row').remove();
    } else {
        return false;
    }
}
	</script>
@endsection