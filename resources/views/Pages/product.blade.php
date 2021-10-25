@extends('layouts.admin')
@section('content')
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <div class="row page-titles">
        <div class="col-md-5 col-12 align-self-center">
            <h4 class="text-themecolor mb-0">Add New Product</h4>
		</div>
        <div class="col-md-7 col-12 align-self-center d-none d-md-block">
            <ol class="breadcrumb mb-0 p-0 bg-transparent fa-pull-right">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Add New Product</li>
			</ol>
		</div>
	</div>
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
		
		<div class="col-12">
			<div class="card">
				<div class="border-bottom title-part-padding">
					<h4 class="card-title mb-0">Add Product</h4>
				</div>
				<div class="card-body min_height">
					<form>
					    <div class="row">
							<div class="">
							
								<!-- Alert Append Box -->
								<div class="alert alert-success alert-dismissible text-white border-0 fade show" role="alert">
									<button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
									<strong>Success - </strong> A simple Success alert
								</div> 
								
							</div>
							
							<div class="mb-3 col-md-6">
								<label for="recipient-name" class="control-label">Product Name:</label>
								<input type="text" class="form-control">
							</div>
							<div class="mb-3 col-md-6">
								<label for="recipient-name" class="control-label">Product Category:</label>
								<select class="form-control">
									<option>Video</option>  
									<option>Audio</option>  
								</select>
							</div>
							<div class="mb-3 col-md-6">
								<label for="recipient-name" class="control-label">Date Picker:</label>
								<div class="input-group">
									<input type="text" class="form-control" id="datepicker-autoclose" placeholder="mm/dd/yyyy">
									<span class="input-group-text">
										<i data-feather="calendar" class="feather-sm"></i>
									</span>
								</div>
							</div>
							<div class="mb-3 col-md-6">
								<label class="font-weight-medium mb-1" for="hue-demo">Color Picker:</label>
								<input type="text" id="hue-demo" class="form-control demo" data-control="hue" value="#ff6161">
							</div>
							<div class="mb-3 col-md-6">
								<label for="recipient-name" class="control-label">Date Range Picker:</label>
								<div class='input-group'>
                                    <input type='text' class="form-control daterange" />
                                    <span class="input-group-text">
										<i data-feather="calendar" class="feather-sm"></i>
									</span>
                                </div>
							</div>
							<div class="mb-3 col-md-6">
								<label for="recipient-name" class="control-label">Date Range Time Picker:</label>
								<div class='input-group'>
                                    <input type='text' class="form-control datetime" />
                                    <span class="input-group-text">
										<i data-feather="calendar" class="feather-sm"></i>
									</span>
                                </div>
							</div>
							<div class="mb-3 col-md-12">
								<label for="recipient-name" class="control-label">Date Range Time Picker:</label>
								<textarea cols="80" id="testedit1" name="testedit1" rows="10" data-sample="2">
								</textarea>
							</div>
						</div>
						
						<button class="btn btn-success btn_submit fa-pull-right mt-3">Update</button>
					</form>
				</div>
			</div>
		</div>
		
	</div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->


<!-- CK Editor -->
<script src="{{ asset('assets/admin/libs/ckeditor/ckeditor.js') }}"></script>
<script data-sample="2">
	CKEDITOR.replace('testedit1', {
		//height: 400
	});
</script>



<!-- DatePicker -->
<link href="{{ asset('assets/admin/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
<script src="{{ asset('assets/admin/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>

<script>
	jQuery('.mydatepicker, #datepicker, .input-group.date').datepicker();
	jQuery('#datepicker-autoclose').datepicker({
		autoclose: true,
		todayHighlight: true
	});
</script>

<!-- DateTime Picker -->
<link href="{{ asset('assets/admin/libs/daterangepicker/daterangepicker.css') }}" rel="stylesheet">
<script src="{{ asset('assets/admin/libs/moment/moment.js') }}"></script>
<script src="{{ asset('assets/admin/libs/daterangepicker/daterangepicker.js') }}"></script>
<script>
$('.daterange').daterangepicker();

$('.datetime').daterangepicker({
	timePicker: true,
	timePickerIncrement: 30,
	locale: {
		format: 'MM/DD/YYYY h:mm A'
	}
});
</script>


<!-- Color Picker -->
<link href="{{ asset('assets/admin/libs/@claviska/jquery-minicolors/jquery.minicolors.css') }}" rel="stylesheet">
<script src="{{ asset('assets/admin/libs/@claviska/jquery-minicolors/jquery.minicolors.min.js') }}"></script>

<script>
$('.demo').each(function() {
	$(this).minicolors({
		control: $(this).attr('data-control') || 'hue',
		defaultValue: $(this).attr('data-defaultValue') || '',
		format: $(this).attr('data-format') || 'hex',
		keywords: $(this).attr('data-keywords') || '',
		inline: $(this).attr('data-inline') === 'true',
		letterCase: $(this).attr('data-letterCase') || 'lowercase',
		opacity: $(this).attr('data-opacity'),
		position: $(this).attr('data-position') || 'bottom left',
		swatches: $(this).attr('data-swatches') ? $(this).attr('data-swatches').split('|') : [],
		change: function(value, opacity) {
			if (!value) return;
			if (opacity) value += ', ' + opacity;
			if (typeof console === 'object') {
				console.log(value);
			}
		},
		theme: 'bootstrap'
	});

});
</script>



@stop