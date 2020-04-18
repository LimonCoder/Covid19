<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Corona Live BD</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    
</head>
<body class="sb-nav-fixed">
<nav class="navbar navbar-expand-lg navbar-light bg-success sticky-top" style="color: white">
    <a class="navbar-brand" href="#">Corona BD LIVE</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://www.fastaar.com/api" target="_self">API</a>
            </li>


        </ul>
        <form class="form-inline my-2 my-lg-0">
            <button class="btn btn-danger my-2 my-sm-0" type="submit">Login</button>
        </form>
    </div>
</nav>


        <div class="row">

                        <div class="container">
                            <marquee class="mt-4">Dashboard</marquee>
                            <ol class="breadcrumb mb-4">
                                <li class="breadcrumb-item active">মোট ফলাফল :</li>
                            </ol>
                            <div class="row">
                                <div class="col-xl-4 col-md-6">
                                    <div class="card bg-primary text-white mb-4">
                                        <div class="card-body"><h2 id="totalConfrimed"></h2></div>
                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                            <div class="small text-white"><h5>মোট আক্রান্ত</h5></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="card bg-warning text-white mb-4">
                                        <div class="card-body"><h2 id="totalRecovered"></h2></div>
                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                            <div class="small text-white"><h5>মোট সুস্থ</h5></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="card bg-success text-white mb-4">
                                        <div class="card-body"><h2 id="totaldeaths"></h2></div>
                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                            <div class="small text-white"><h5>মোট মৃ্ত্যু</h5></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <ol class="breadcrumb mb-4">
                                <li class="breadcrumb-item active"> আজকের ফলাফল : </li>
                            </ol>
                            <div class="row">
                                <div class="col-xl-4 col-md-6">
                                    <div class="card bg-danger text-white mb-4">
                                        <div class="card-body"><h2 id="Confrimed"></h2></div>
                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                            <div class="small text-white"><h5>আক্রান্ত</h5></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="card bg-secondary text-white mb-4">
                                        <div class="card-body"><h2 id="Recovered"></h2></div>
                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                            <div class="small text-white"><h5> সুস্থ</h5></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="card bg-dark text-white mb-4">
                                        <div class="card-body"><h2 id="deaths"></h2></div>
                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                            <div class="small text-white"><h5> মৃ্ত্যু</h5></div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="card mb-4">
                                        <div class="card-header"><i class="fas fa-chart-area mr-1"></i>লিঙ্গ :</div>
                                        <div class="card-body"><div id="piechart" width="100%" height="60" ></div></div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card mb-4">
                                        <div class="card-header"><i class="fas fa-chart-bar mr-1"></i>বয়সের অনুপাত :</div>
                                        <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-4">
                                <div class="card-header"><i class="fas fa-table mr-1"></i> জেলাভিত্তিক ফলাফল :</div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                            <tr>
                                                <th>জেলার নাম :</th>
                                                <th>আক্রান্ত</th>
                                                <th>সুস্থ</th>
                                                <th>মৃ্ত্যু</th>
                                            </tr>
                                            </thead>
                                            <tbody id="districttotal">


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <footer class="py-4 bg-light mt-auto">
                                    <div class="container-fluid">
                                        <div class="d-flex align-items-center justify-content-between small">
                                            <div class="text-muted">Devoloped By <a href="https://web.facebook.com/Limon369949/" target="_blank">Nurul Amin Limon</a></div>
                                            <div>
                                                <span>Technical Support :</span>

                                                <a href="#">InnovationIT</a>
                                            </div>
                                        </div>
                                    </div>
                                </footer>
                            </div>

                        </div>





    </div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="datatable.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/datatables-demo.js"></script>
</body>
</html>

<script type="text/javascript">

$(document).ready(function () {

    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {


        $.ajax({
            url: 'https://www.fastaar.com/api',
            type: 'get',
            dataType: 'json',
            cache: 'false',
            success: function (res) {



                var data = google.visualization.arrayToDataTable([
                    ['Gender', 'Number'],
                    ['ছেলে', parseInt(res.genders.male)],
                    ['মেয়ে', parseInt(res.genders.female)]

                ]);

                var options = {
                    title: 'ছেলে মেয়ে উভয় আক্রান্ত'
                };

                var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                chart.draw(data, options);


            }

        });






    }
})



    </script>

<script>
    $(document).ready(function(){

        var totaldis = "";

        $.ajax({
            url:'https://www.fastaar.com/api',
            type:'get',
            dataType:'json',
            cache:'false',
            success:function(res){
                $(res.total).each(function(index,value){
                     $("#totalConfrimed").html(value.confirmed);
                     $("#totalRecovered").html(value.recovered);
                     $("#totaldeaths").html(value.deaths);

                })
                $(res.today).each(function(index,value){
                    $("#Confrimed").html(value.todayConfirmed);
                    $("#Recovered").html(value.todayRecovered);
                    $("#deaths").html(value.todayDeaths);

                })

                $(res.districts).each(function(index,value){
                    totaldis += '<tr>';
                    totaldis += '<td>'+value.name+'</td>';
                    totaldis += '<td>'+value.confirmed+'</td>';
                    totaldis += '<td>'+value.recovered+'</td>';
                    totaldis += '<td>'+value.deaths+'</td>';
                    totaldis += '</tr>';
                })


                $("#districttotal").html( totaldis);
            }
        })

    });
</script>