<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
	<meta name="description" content=""/>
	<meta name="author" content=""/>
	<title>Corona Live BD</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
	<link href="assets/css/styles-covid.css" rel="stylesheet"/>

	<link href="assets/css/custom-covid.css" rel="stylesheet"/>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"
	crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


</head>
<body class="sb-nav-fixed">
	<nav class="navbar navbar-expand-lg navbar-light bg-success sticky-top" style="color: white">

		<div class="col">
			<img src="assets/img/Innovationit-logo.png" class="img-fluid img-responsive"
			sizes="(max-width: 200px) 100vw, 800px"/>
		</div>

		<div class="col">
			<h4 class="main-header" >Corona BD LIVE </h4>
		</div>
	</nav>


	<div class="row">

		<div class="container-fluid">
			<!--------------------------------------------------------- Live Secore Broad -------------------------->
			<div class="row m-1" style="background-color:#3867d6;">
				<div class="col-md-12 clearfix">
					<div class="row">
						<div class="col-sm-12 text-center  col-md-12 text-center">
							<h5><span class="infohead h4 text-white"
								>করোনা ভাইরাস বাংলাদেশ আপডেট</span>
							</h5>

						</div>
					</div>


				</div>
				<div class="col-md-12 clearfix p-5 ">
					<div class="row justify-content-center">
						<div class="score col-lg-3  col-md-6"> 
							<div><h2 class="infores text-white" id="Confrimed" ></h2>
							</div>
							<div class="small"><span
								class="info h4 bg-white text-danger">নতুন আক্রান্ত</span>
							</div>
						</div>
						<div class="score col-lg-3 col-md-6">
							<div><h2 class="infores text-white" id="Recovered" ></h2>
							</div>
							<div class="small"><span

								class="info h4 bg-white text-danger"><span class="a">নতুন সুস্থ  </span></span>
							</div>
						</div>
						<div class="score col-lg-3 col-md-6">
							<div><h2 class="infores text-white" id="deaths"></h2>
							</div>
							<div class="small"><span class="info h4 bg-white text-danger"><span class="a" >নতুন মৃ্ত্যু</span></span>
							</div>
						</div>
					</div>

				</div>
				<div class="col-md-12 p-3">
					<div class="row">
						<div class="col-sm-12 text-center col-md-12">
							<div class="small"><span
								class="nomuna h4 bg-white text-muted">গত ২৪ ঘন্টায় নমুনা সংগ্রহ : <span
								id="totaltest"></span></span></div>
							</div>
						</div>
					</div>
					<div class="col-md-12 p-3">
						<div class="row">
							<div class="col-sm-12 text-center col-md-12">
								<div class="small pt-4 text-white">
									<span class="totalinfo">মোট আক্রান্ত :<span
										class="totalres"
										id="totalConfrimed"></span></span>
										<span class="totalinfo">| মোট সুস্থ :<span
											class="totalres"
											id="totalRecovered"></span></span>
											<span class="totalinfo">| মোট মৃ্ত্যু :<span
												class="totalres"
												id="totaldeaths"></span></span>

											</div>
											<span class="source">সূত্র: আইইডিসিআর</span>
											</div>
										</div>
									</div>
								</div>
								<!------------------------------------------------------------ Live Secore Broad -------------------------->
								<div class="row">
									<!------------------------------------------------------------Start Gender wise piechart -------------------------->
									<div class="genderwise col-xl-6">
										<div class="card mb-4">
											<div class="card-header"><i class="fas fa-chart-area mr-1"></i>লিঙ্গ :</div>
											<div class="card-body">
												<div id="piechart" width="100%" height="60"></div>
											</div>
										</div>
									</div>
									<!------------------------------------------------------------ End Gender wise piechart -------------------------->


									<!------------------------------------------------------------ Start Age wise Chartbar -------------------------->
									<div class="col-xl-6">
										<div class="card mb-4">
											<div class="card-header"><i class="fas fa-chart-bar mr-1"></i>বয়সের সমষ্টি :</div>
											<div class="card-body">
												<canvas id="myBarChart" width="100%" height="40"></canvas>
											</div>
										</div>
									</div>
									<!------------------------------------------------------------ End Age wise Chartbar -------------------------->
								</div>


								<!------------------------------------------------------------ Start District wise Confirmed  -------------------------->
								<div class="card mb-4">
									<div class="card-header"><i class="fas fa-table mr-1"></i> জেলা ভিত্তিক তথ্য :</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
												<thead>
													<tr>
														<th>জেলার নাম :</th>
														<th>মোট আক্রান্ত</th>

													</tr>
												</thead>
												<tbody>


												</tbody>
											</table>
										</div>
									</div>

									<footer class="py-4 bg-light mt-auto">
										<div class="container-fluid">
											<div class="d-flex align-items-center justify-content-between small">
												<!-- <div class="text-muted">Devoloped By <a href="https://web.facebook.com/Limon369949/" target="_blank">Nurul Amin Limon</a></div> -->
												<div>

													<span>Technical Support :</span>

													<a href="http://innovationit.com.bd" target="_blank">Innovation IT</a>
												</div>
											</div>
										</div>
									</footer>
								</div>
								<!------------------------------------------------------------ End District wise Confirmed  -------------------------->
							</div>


						</div>

						<script src="assets/js/jquery-3.3.1.js" crossorigin="anonymous"></script>

						<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"
						crossorigin="anonymous"></script>

						<script src="assets/js/scripts-covid.js"></script>

						<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>

						<script src="assets/demo/chart-area-demo.js"></script>

						<script src="assets/demo/chart-bar-demo.js"></script>

						<script src="assets/js/datatable.min.js" crossorigin="anonymous"></script>
						<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
						<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

					</body>
					</html>

					<script type="text/javascript">


						$(document).ready(function () {

							var banglaDigits = {
								0: '০',
								1: '১',
								2: '২',
								3: '৩',
								4: '৪',
								5: '৫',
								6: '৬',
								7: '৭',
								8: '৮',
								9: '৯'


							};

							google.charts.load('current', {'packages': ['corechart']});
							google.charts.setOnLoadCallback(drawChart);

							function drawChart() {
								$.ajax({
									url: 'https://www.fastaar.com/api',
									type: 'get',
									dataType: 'json',
									cache: 'false',
									success: function (res) {

										$("#totaltest").html((res.new.tested).toString().replace(/[0123456789]/g, function (s) {
												return banglaDigits[s];
											}));

										var data = google.visualization.arrayToDataTable([
											['Gender', 'Number'],
											['পুরুষ', parseInt(res.genders['male'].confirmed)],
											['মহিলা', parseInt(res.genders['female'].confirmed)]

											]);

										var options = {
											title: 'পুরুষ মহিলা গড় আক্রান্ত'
										};

										var chart = new google.visualization.PieChart(document.getElementById('piechart'));
										chart.draw(data, options);

										$(res.total).each(function (index, value) {


											$("#totalConfrimed").html((value.confirmed).toString().replace(/[0123456789]/g, function (s) {
												return banglaDigits[s];
											}));

											$("#totalRecovered").html((value.recovered).toString().replace(/[0123456789]/g, function (s) {
												return banglaDigits[s];
											}));
											$("#totaldeaths").html((value.deaths).toString().replace(/[0123456789]/g, function (s) {
												return banglaDigits[s];
											}));

										});

										$(res.new).each(function (index, value) {
											$("#Confrimed").html((value.confirmed).toString().replace(/[0123456789]/g, function (s) {
												return banglaDigits[s];
											}));
											$("#Recovered").html((value.recovered).toString().replace(/[0123456789]/g, function (s) {
												return banglaDigits[s];
											}));
											$("#deaths").html((value.deaths).toString().replace(/[0123456789]/g, function (s) {
												return banglaDigits[s];
											}));

										});



									}

								});
							}

							$.getJSON("https://www.fastaar.com/api", function(res){

								$.each(res.districts, function(index,value){
									var tr = `
									<tr>
									<td>${value.bnname}</td>
									<td>${(value.confirmed).toString().replace(/[0123456789]/g, function (s) {
										return banglaDigits[s];
									})}</td>
									</tr>
									`;

									$('tbody').append(tr);


								})

								$("#dataTable").DataTable({

								});
							});




						});



					</script>

