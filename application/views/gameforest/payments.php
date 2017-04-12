
<!-- wrapper -->
	<div id="wrapper">	
		
		<section class="border-bottom-1 border-grey-300 padding-top-10 padding-bottom-10">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<ol class="breadcrumb">
							<li><a href="<?php echo base_url()?>games/all">Game Shop</a></li>
							<li><a href="#">Checklist</a></li>
						</ol>	
					</div>
				</div>
			</div>
		</section>

		<section class="elements" style="padding-bottom: 20px !important; padding-top: 20px !important;">
			<div class="container">
				<div class="row">

					<h3>Payment Page</h3>
					<p>Please pay through Bikash, Rocket, Bank payment or pay us directly visitng our address.</p>
					<?php if (!($payment_data['paymentstatus'] == '2')) { ?>
					<div class="col-md-9 col-md-offset-3">
						<p><b>Add your Payment Below or call us at +8801977223351</b></p>

						<?php echo form_open('games/payments/');?>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<b>Payment Method: </b>
										<?php echo form_dropdown($paymentmode['name'], $paymentmode['options'], $paymentmode['value']);?>
									</div>
									<div class="form-group">
										<b>Payment Details: </b>
										<?php echo form_textarea($paymentdetails);?>
									</div>
									<?php echo form_hidden($pid);?>
							</div>
							<div class="row">
								<div class="form-group">						
									<?php echo form_submit('submit', 'Add Payment');?>
								</div>
							</div>
						<?php echo form_close();?>

					</div>
					<?php } ?>
				</div>
			</div>
		</section>
		
		
		<section class="elements" style="padding-top: 20px !important;">
			<div class="container">
				
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-body">
								<table class="table">
									<thead>
										<tr>
											<th>Product Name</th>
											<th>Price</th>
											<th>Payment Status</th>
											<th>Payment Mode</th>
											<th>Payment Details</th>
											<th>Payment Date</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><?php echo $payment_data['name']; ?></td>
											<td><?php echo $payment_data['amount'] . 'TK'; ?></td>
											<td><?php if($payment_data['paymentstatus'] == '0'){echo 'Pending';} elseif($payment_data['paymentstatus'] == '1'){echo 'Processing';} elseif($payment_data['paymentstatus'] == '2'){echo 'Complete';}?></td>
											<td><?php if($payment_data['paymentmode'] == '1'){echo 'Bkash';} elseif($payment_data['paymentmode'] == '2'){echo 'DBBL Rocket';} elseif($payment_data['paymentmode'] == '3'){echo 'Bank Transfer';} elseif($payment_data['paymentmode'] == '4'){echo 'Others';}elseif($payment_data['paymentmode'] == '0'){echo 'None';}?></td>
											<td><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-modal">View Details</button></td>
											<td><?php $phpdate = strtotime( $payment_data['paymentdate'] ); $mysqldate = date( 'H:i:s, d-m-Y', $phpdate ); echo $mysqldate; ?></td>
										</tr>
									</tbody>
								</table>
								
								
							</div>
						</div>
					</div>
				</div>
			</div>



		</section>
		
		

	</div>
	<!-- /#wrapper -->
	<div class="modal fade bs-modal" tabindex="-1" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
								<h4 class="modal-title">Payment Details</h4>
							</div>
							<div class="modal-body">
								<?php echo $payment_data['paymentdetails'];?>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
								
							</div>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div>