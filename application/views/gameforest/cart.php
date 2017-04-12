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
		
		<section class="elements">
			<div class="container">
				<h3>Cart</h3>
				<p>For purchase, go to Buy Now</p>
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-body">
								<table class="table">
									<thead>
										<tr>
											<th>#</th>
											<th>Product Name</th>
											<th>Unit Price</th>
											<th>Discount</th>
											<th>Total</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php $subtotal = '0'; $count = '1'; ?>
										<?php foreach($cartproductslist as $value): ?>
										<tr>
											<td><?php echo $count; $count++;?></td>
											<td class="hidden-xs"><a href="<?php echo base_url() . 'games/view/' . $value['url']; ?>"><b><?php echo $value['name']?></b></a> </br> <span style="font-size: 11px"><b>Category: <a href="<?php echo base_url() . 'games/category/' . $value['curl']; ?>"><?php echo $value['cname']?></a></b></span></td>
											<td Style="text-align: center;"><?php echo $value['price']?>Tk</td>
											<td Style="text-align: center;"><?php echo $value['discount']?>%</td>
											<td Style="text-align: center;"><?php if($value['discount']=='0'){$tdisc='0';} else {$tdisc=$value['discount']*$value['price']/'100';} $total = ($value['price'] - $tdisc); $subtotal = $subtotal + $total; echo $total;?>Tk</td>
											<td>
												<a href="<?php echo base_url() . 'games/cart_action/delete/' . $value['id']; ?>"><button class="btn btn-circle btn-sm" data-toggle="tooltip" title="delete"><i class="fa fa-trash"></i></button></a>
											</td>                          
										</tr>
										<?php endforeach; ?>
									</tbody>
									<?php if(!empty($cartproductslist)){?>
									<tr>
										<td></td>
										<td class="hidden-xs"></td>
										<td><b>Sub Total:</b></td>
										<td></td>
										<td Style="text-align: center;"><b><?php echo $subtotal; $subtotal = '0'; ?>Tk</b></td>
										<td>
											
											<a href="<?php echo base_url() . 'games/checkout';?>"><button class="btn btn-md" data-toggle="tooltip"><i class="fa fa-shopping-cart">&nbsp;Checkout</i></button></a>
											
										</td>                          
									</tr>
									<?php } ?>
								</table>
								
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
	</div>
	<!-- /#wrapper -->