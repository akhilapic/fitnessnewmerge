@extends('layouts.admin')
@section('content')
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <div class="row page-titles">
        <div class="col-md-5 col-12 align-self-center">
            <h4 class="text-themecolor mb-0">User Order Details</h4>
		</div>
        <div class="col-md-7 col-12 align-self-center d-none d-md-block">
            <ol class="breadcrumb mb-0 p-0 bg-transparent fa-pull-right">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">User Order Details</li>
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
				<div class="material-card card min_height">
					<div class="card-body">
					
			            <div class="customer_details_order_box">
			                 <div class="order_box">
			                     <div class="prd_img">
			                         <img src="assets/admin/images/theme/no_images.png"> 
			                         <div class="body">
									    <p class="seller_information">Seller: Corner Store</p>
			                             <h2 class="prd_name limit_1">Burger</h2>
			                             <p class="cate_name">Category - Food</p>
			                             <h5 class="prd_price"> Price - $40.00</h5>
			                         </div>
			                     </div> 
			                     <div class="prd_order_body">
			                         <p class="order_Id">Order Id: <b>W3-00087</b></p>
			                         <p class="qty_box">Qty: 02 <span class="ms-3">Size: XL</span></p>
			                         <p class="order_status">Delivered</p>
			                     </div> 
			                 </div>
			                 
			                <ul class="list-group">
                                <li class="list-group-item">Order ID <span class="fa-pull-right">W3-1110013</span></li>
                                <li class="list-group-item">Order Date <span class="fa-pull-right">Sep 17 2020</span></li>
                                <li class="list-group-item">Order Delivered Date <span class="fa-pull-right">Sep 22 2020</span></li>
                                <li class="list-group-item">Order Total <span class="fa-pull-right">$760.52</span></li>
                            </ul>
			                 
			                
			                <div class="rate_order_box mt-3">
			                    <h2>Rate Order</h2>
			                    <ul>
			                        <li><a href="javascript:void(0);" class="active"><i class="fa fa-star"></i></a></li>
			                        <li><a href="javascript:void(0);" class="active"><i class="fa fa-star"></i></a></li>
			                        <li><a href="javascript:void(0);" class="active"><i class="fa fa-star"></i></a></li>
			                        <li><a href="javascript:void(0);"><i class="fa fa-star"></i></a></li>
			                        <li><a href="javascript:void(0);"><i class="fa fa-star"></i></a></li>
			                    </ul>
			                </div>
			                
			                <h3 class="list_title">Order Summary</h3>
			                <ul class="list-group">
                                <li class="list-group-item">Payment Method <span class="fa-pull-right">Credit Card</span></li>
                                <li class="list-group-item">Redeemed Point <span class="fa-pull-right">$1.00</span></li>
                                <li class="list-group-item">Cancellation charges <span class="fa-pull-right">$0.00</span></li>
                                <li class="list-group-item">Subtotal <span class="fa-pull-right">$760.52</span></li>
                                <li class="list-group-item total">Total <span class="fa-pull-right">$762.00</span></li>
                            </ul>
			                
			            </div>
	              	
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->

<!-- This Page JS -->
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