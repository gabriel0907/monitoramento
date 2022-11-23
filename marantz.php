<!DOCTYPE html>
<html lang="en">
<head>
    <base href="dist/">
	<meta charset="utf-8" />
	<title>MONITORAMENTO - WE-LOG</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	
	<!-- ================== BEGIN core-css ================== -->
	<link href="assets/css/vendor.min.css" rel="stylesheet" />
	<link href="assets/css/app.min.css" rel="stylesheet" />
	<!-- ================== END core-css ================== -->
	
</head>
<body class='pace-top'>
	<!-- BEGIN #app -->
	<div id="app" class="app app-content-full-height">
        <!-- BEGIN pos -->
			<div class="pos card" id="pos">
				<div class="pos-container card-body">
					<!-- BEGIN pos-menu -->
					<div class="pos-menu">
						<!-- BEGIN nav-container -->
						<div class="nav-container">
							<div data-scrollbar="true" data-height="100%" data-skip-mobile="true">
								<ul class="nav nav-tabs">
									<li class="nav-item">
										<a class="nav-link active" href="../index.php" data-filter="all">
											<div class="card">
												<div class="card-body">
													<i class="fa fa-fw fa-video"></i>CÂMERAS
												</div>
												<div class="card-arrow">
													<div class="card-arrow-top-left"></div>
													<div class="card-arrow-top-right"></div>
													<div class="card-arrow-bottom-left"></div>
													<div class="card-arrow-bottom-right"></div>
												</div>
											</div>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="../marantz.php" data-filter="snacks">
											<div class="card">
												<div class="card-body">
													<i class="fa fa-fw fa-sitemap"></i>SWITCHS
												</div>
												<div class="card-arrow">
													<div class="card-arrow-top-left"></div>
													<div class="card-arrow-top-right"></div>
													<div class="card-arrow-bottom-left"></div>
													<div class="card-arrow-bottom-right"></div>
												</div>
											</div>
										</a>
									</li>
                                    <li class="nav-item">
										<a class="nav-link" href="../vivo.php" data-filter="snacks">
											<div class="card">
												<div class="card-body">
													<i class="fa fa-fw fa-hdd"></i>NVR
												</div>
												<div class="card-arrow">
													<div class="card-arrow-top-left"></div>
													<div class="card-arrow-top-right"></div>
													<div class="card-arrow-bottom-left"></div>
													<div class="card-arrow-bottom-right"></div>
												</div>
											</div>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="../vivo.php" data-filter="snacks">
											<div class="card">
												<div class="card-body">
													<i class="fa fa-fw fa-server"></i>SERVIDORES
												</div>
												<div class="card-arrow">
													<div class="card-arrow-top-left"></div>
													<div class="card-arrow-top-right"></div>
													<div class="card-arrow-bottom-left"></div>
													<div class="card-arrow-bottom-right"></div>
												</div>
											</div>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="../vivo.php" data-filter="snacks">
											<div class="card">
												<div class="card-body">
													<i class="fa fa-fw fa-tablet-alt"></i>CONTROLADORAS
												</div>
												<div class="card-arrow">
													<div class="card-arrow-top-left"></div>
													<div class="card-arrow-top-right"></div>
													<div class="card-arrow-bottom-left"></div>
													<div class="card-arrow-bottom-right"></div>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- END nav-container -->
					</div>
					<!-- END pos-menu -->
				
					<!-- BEGIN pos-content -->
					<div class="pos-content">
						<div class="pos-content-container h-100 p-4" data-scrollbar="true" data-height="100%">
							<div class="row gx-12">
								<div class="col-xxl-12 col-xl-4 col-lg-6 col-md-4 col-sm-6 pb-4" data-type="meat">
									<!-- BEGIN card -->
                                    <div class="mt-3" data-bs-toggle="modal" data-bs-target="#modalEdit">
									<div class="btn-group d-flex">
										<!-- background & border -->
										<div class="card bg-theme border-theme bg-opacity-25 mb-3">
  											<div class="card-header border-theme fw-bold small text-white">Câmera</div>
  												<div class="card-body">
    												<h5 class="card-title text-white">105 - Câmera Estacionamento</h5>
    												<p class="card-text text-white text-opacity-75">Offline</p>
  												</div>
											</div>
										</div>
									</div>
									

                                <div class="mt-3">
									<div class="btn-group d-flex">
									</div>
								</div>
									<!-- END card -->
								</div>
							</div>
						</div>
					</div>
					<!-- END pos-content -->
				
				</div>
				<div class="card-arrow">
					<div class="card-arrow-top-left"></div>
					<div class="card-arrow-top-right"></div>
					<div class="card-arrow-bottom-left"></div>
					<div class="card-arrow-bottom-right"></div>
				</div>
			</div>
			<!-- END pos -->

			<!-- BEGIN #modalEdit -->
		<div class="modal fade" id="modalEdit">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">+ Informações</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
					</div>
					<div class="modal-body">
						<div class="alert alert-muted">
							<b>Descrição da Câmera:</b> 
						</div>
						<div class="mb-3">
							<label class="form-label">IP da Câmera:</label>
							<div>
								<a class="btn btn-outline-primary">192.168.48.25</a>
							</div>
						</div>

						<div class="mb-3">
							<label class="form-label">MacAddress da Câmera:</label>
							<div>
								<a class="btn btn-outline-primary">fe80::5c84:387d:199e:6ebe</a>
							</div>
						</div>

						<div class="mb-3">
							<label class="form-label">Switch Vinculado:</label>
							<div>
								<a class="btn btn-outline-primary">Switch estacionamento</a>
							</div>
						</div>

						<div class="mb-3">
							<label class="form-label">Porta do Switch:</label>
							<div>
								<a class="btn btn-outline-primary">1</a>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-outline-default" data-bs-dismiss="modal">Fechar</button>
					</div>
				</div>
			</div>
		</div>
		<!-- END #modalEdit -->

	<!-- BEGIN #modalPosItem -->
	<div class="modal modal-pos fade" id="modalPosItem">
		<div class="modal-dialog modal-lg">
			<div class="modal-content border-0">
				<div class="card">
					<div class="card-body p-0">
						<a href="#" data-bs-dismiss="modal" class="btn-close position-absolute top-0 end-0 m-4"></a>
						<div class="modal-pos-product">
							<div class="modal-pos-product-img">
								<div class="img" style="background-image: url(../assets/img/pos/product-1.jpg)"></div>
							</div>
							<div class="modal-pos-product-info">
								<div class="h4 mb-2">Grill Chicken Chop</div>
								<div class="text-white text-opacity-50 mb-2">
									chicken, egg, mushroom, salad
								</div>
								<div class="h4 mb-3">$10.99</div>
								<div class="d-flex mb-3">
									<a href="#" class="btn btn-outline-theme"><i class="fa fa-minus"></i></a>
									<input type="text" class="form-control w-50px fw-bold mx-2 bg-white bg-opacity-25 border-0 text-center" name="qty" value="1" />
									<a href="#" class="btn btn-outline-theme"><i class="fa fa-plus"></i></a>
								</div>
								<hr class="mx-n4" />
								<div class="mb-2">
									<div class="fw-bold">SWITCH VINCULADO:</div>
									<div class="option-list">
										<div class="option">
											<input type="radio" id="size3" name="size" class="option-input" checked />
											<label class="option-label" for="size3">
												<span class="option-text">Switch - Estacionamento</span>
											</label>
										</div>
									</div>
								</div>

								<div class="mb-2">
									<div class="fw-bold">Porta do SWITCH:</div>
									<div class="option-list">
										<div class="option">
											<input type="radio" id="size3" name="size" class="option-input" checked />
											<label class="option-label" for="size3">
												<span class="option-text">Porta</span>
												<span class="option-price">1</span>
											</label>
										</div>
									</div>
								</div>
								<hr class="mx-n4" />
								<div class="row">
									<div class="col-4">
										<a href="#" class="btn btn-default h4 mb-0 d-block rounded-0 py-3" data-bs-dismiss="modal">Cancel</a>
									</div>
									<div class="col-8">
										<a href="#" class="btn btn-success d-flex justify-content-center align-items-center rounded-0 py-3 h4 m-0">Add to cart <i class="bi bi-plus fa-2x ms-2 my-n3"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card-arrow">
						<div class="card-arrow-top-left"></div>
						<div class="card-arrow-top-right"></div>
						<div class="card-arrow-bottom-left"></div>
						<div class="card-arrow-bottom-right"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END #modalPosItem -->
    </div>
	<!-- END #app -->
	
	<!-- ================== BEGIN core-js ================== -->
	<script src="assets/js/vendor.min.js"></script>
	<script src="assets/js/app.min.js"></script>
	<!-- ================== END core-js ================== -->
	
	<!-- ================== BEGIN page-js ================== -->
	<script src="../assets/js/demo/pos-customer-order.demo.js"></script>
	<!-- ================== END page-js ================== -->
	
</body>
</html>
