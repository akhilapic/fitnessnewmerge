@extends('layouts.admin')
@section('content')

<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <div class="row page-titles">
        <div class="col-md-5 col-12 align-self-center">
            <h4 class="text-themecolor mb-0">Add New Blog</h4>
		</div>
        <div class="col-md-7 col-12 align-self-center d-none d-md-block">
            <ol class="breadcrumb mb-0 p-0 bg-transparent fa-pull-right">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Add New Blog</li>
			</ol>
		</div>
	</div>
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
		<!-- basic table -->
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="border-bottom title-part-padding">
					    <h4 class="card-title mb-0">Add Blog</h4>             
					</div>
					<div class="card-body min_height">
					    <form class="row">
							<div class="col-md-12">
						
								<!-- Alert Append Box -->
								<div class="alert alert-danger alert-dismissible text-white border-0 fade show" role="alert">
									<button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
									<strong>Danger - </strong> A simple Danger alert
								</div> 
								
							</div>
							<div class="mb-3 col-md-12">
								<div class="mb-3 col-md-6">
									<label for="recipient-name" class="control-label">Blog Image <small class="text-danger">(Images Size : 800 X 800)</small></label>
									<input class="form-control" type="file" id="formFile">
									<div class="upload_img mt-2">
									    <img src="assets/admin/images/theme/no_images.png" class="fit_img" width="100px" height="100px">
										<i class="mdi mdi-close"></i>
									</div>
								</div>
							</div>
							<div class="mb-3 col-md-6">
								<label for="recipient-name" class="control-label">Category:</label>
								<select class="form-control">
								    <option>Video</option>  
								    <option>Audio</option>  
								</select>
							</div>
							<div class="mb-3 col-md-6">
								<label for="recipient-name" class="control-label">Blog Title:</label>
								<input type="text" class="form-control" value="Blog Title">
							</div>
							<div class="mb-3 col-md-6">
								<label for="recipient-name" class="control-label">Author Name:</label>
								<input type="text" class="form-control" value="Author Name">
							</div>
							<div class="mb-3 col-md-6">
								<label for="recipient-name" class="control-label">Blog Publish Date:</label>
								<input type="datetime-local" class="form-control" value="2008-05-13T22:33:00">
							</div>
							<div class="mb-3 col-md-12">
								<label for="recipient-name" class="control-label">Blog Description:</label>
								<textarea cols="80" id="testedit1" name="testedit" rows="10" data-sample="2">

								</textarea>
							</div>
							<div class="col-md-12">
								<button class="btn btn-success btn_submit fa-pull-right">Add Blog</button>  
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
	</div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->

<script src="assets/admin/libs/ckeditor/ckeditor.js"></script>
<script src=" assets/admin/libs/ckeditor/samples/js/sample.js"></script>
<script>
	//default
	initSample();
	
	//inline editor
	// We need to turn off the automatic editor creation first.
	CKEDITOR.disableAutoInline = true;
	
	CKEDITOR.inline('editor2', {
		extraPlugins: 'sourcedialog',
		removePlugins: 'sourcearea'
	});
	
	var editor1 = CKEDITOR.replace('editor1', {
		extraAllowedContent: 'div',
		height: 460
	});
	editor1.on('instanceReady', function () {
		// Output self-closing tags the HTML4 way, like <br>.
		this.dataProcessor.writer.selfClosingEnd = '>';
		
		// Use line breaks for block elements, tables, and lists.
		var dtd = CKEDITOR.dtd;
		for (var e in CKEDITOR.tools.extend({}, dtd.$nonBodyContent, dtd.$block, dtd.$listItem, dtd.$tableContent)) {
			this.dataProcessor.writer.setRules(e, {
				indent: true,
				breakBeforeOpen: true,
				breakAfterOpen: true,
				breakBeforeClose: true,
				breakAfterClose: true
			});
		}
		// Start in source mode.
		this.setMode('source');
	});
</script>
<script data-sample="1">
	CKEDITOR.replace('testedit', {
		height: 150
	});
</script>
<script data-sample="2">
	CKEDITOR.replace('testedit1', {
		height: 400
	});
</script>
<script data-sample="3">
	CKEDITOR.replace('testedit2', {
		height: 400
	});
</script>
<script data-sample="4">
	CKEDITOR.replace('tool-location', {
		toolbarLocation: 'bottom',
		// Remove some plugins that would conflict with the bottom
		// toolbar position.
		removePlugins: 'elementspath,resize'
	});
</script>


@stop