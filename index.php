<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Corona Live BD</title>

    <link href="assets/css/styles-covid.css" rel="stylesheet"/>

    <link href="assets/css/custom-covid.css" rel="stylesheet"/>

    <link href="assets/css/jquery.dataTables.min.js" rel="stylesheet" crossorigin="anonymous"/>

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
        <h5>Corona BD LIVE </h5>
    </div>
</nav>


<div class="row">

    <div class="container-fluid">
        <!--------------------------------------------------------- Live Secore Broad -------------------------->
        <div class="row m-1" style="background-color:#3867d6;">
            <div class="col-md-12 clearfix">
                <div class="row">
                    <div class="col-sm-12 text-center  col-md-12 text-center my-2 p-2">
                        <h5><span class="h4 text-white"
                                  style="font-family: SutonnyOMJ; font-size: 40px; border-bottom: 2px solid white; padding-bottom: 2px">করোনা ভাইরাস বাংলাদেশ আপডেট</span>
                        </h5>
                        <h5><span class="text-white " style="font-size: 15px">করোনা ভাইরাস বাংলাদেশ আপডেট</span>
                        </h5>
                        <span></span>
                    </div>
                </div>


            </div>
            <div class="col-md-12 clearfix p-5 " style="margin-left: 50px">
                <div class="row justify-content-center">
                    <div class="score col-xl-3  col-md-6" style="margin-bottom: 28px; margin-left:55px;">
                        <div><h2 class="text-white " id="Confrimed" 
                                 style="font-family: SutonnyOMJ; font-size: 60px;margin-left: 60px; line-height: 50px"></h2>
                        </div>
                        <div class="small pt-4"><span
                                    style="font-family: SutonnyOMJ; font-size: 40px"
                                    class="h4 bg-white text-danger px-4 py-2">নতুন আক্রান্ত</span>
                        </div>
                    </div>
                    <div class="score col-xl-3 col-md-6" style="margin-bottom: 28px; margin-left:55px;">
                        <div><h2 class="text-white " id="Recovered" 
                                 style="font-family: SutonnyOMJ; font-size: 60px; margin-left: 60px; line-height: 50px"></h2>
                        </div>
                        <div class="small pt-4"><span
                                    style="font-family: SutonnyOMJ; font-size: 40px"
                                    class="h4 bg-white text-danger px-5 py-2">নতুন সুস্থ</span>
                        </div>
                    </div>
                    <div class="score col-xl-3 col-md-6" style="margin-bottom: 20px; margin-left:55px;">
                        <div><h2 class="text-white" id="deaths" 
                                 style="font-family: SutonnyOMJ; font-size: 60px; margin-left: 60px; line-height: 50px"></h2>
                        </div>
                        <div class="small pt-4"><span
                                    style="font-family: SutonnyOMJ; font-size: 40px"
                                    class="h4 bg-white text-danger px-5 py-2">নতুন মৃ্ত্যু</span>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-12 p-3">
                <div class="row">
                    <div class="col-sm-12 text-center col-md-12">
                        <div class="small pt-4"><span
                                    style="font-family: SutonnyOMJ; font-size: 20px; padding: 10px 60px; margin-right:30px"
                                    class="h4 bg-white text-muted">গত ২৪ ঘন্টায় নমুনা সংগ্রহ : <span
                                        id="total">2019</span></span></div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 p-3">
                <div class="row">
                    <div class="col-sm-12 text-center col-md-12">
                        <div class="small pt-4 text-white">
                                                <span style="font-family: SutonnyOMJ;  font-size: 27px; margin-right: 3px">মোট আক্রান্ত :<span
                                                            style="font-family: SutonnyOMJ;font-size: 27px; margin-left: 5px; padding: 2px"
                                                            id="totalConfrimed"></span></span>
                            <span style="font-family: SutonnyOMJ;font-size: 27px;">| মোট সুস্থ :<span
                                        style="font-family: SutonnyOMJ;font-size: 27px; margin-left: 5px;"
                                        id="totalRecovered"></span></span>
                            <span style="font-family: SutonnyOMJ;font-size: 27px;">| মোট মৃ্ত্যু :<span
                                        style="font-family: SutonnyOMJ;font-size: 27px; margin-left: 5px;"
                                        id="totaldeaths"></span></span></div>
                    </div>
                </div>
            </div>
        </div>
        <!------------------------------------------------------------ Live Secore Broad -------------------------->
        <div class="row">
            <!------------------------------------------------------------Start Gender wise piechart -------------------------->
            <div class="col-xl-6">
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
                    <div class="card-header"><i class="fas fa-chart-bar mr-1"></i>বয়সের অনুপাত :</div>
                    <div class="card-body">
                        <canvas id="myBarChart" width="100%" height="40"></canvas>
                    </div>
                </div>
            </div>
            <!------------------------------------------------------------ End Age wise Chartbar -------------------------->
        </div>


        <!------------------------------------------------------------ Start District wise Confirmed  -------------------------->
        <div class="card mb-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i> জেলাভিত্তিক ফলাফল :</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>জেলার নাম :</th>
                            <th>মোট আক্রান্ত</th>

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

<script src="assets/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>

</body>
</html>

<script type="text/javascript">


    $(document).ready(function () {

        google.charts.load('current', {'packages': ['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            $.ajax({
                url: 'https://www.fastaar.com/api',
                type: 'get',
                dataType: 'json',
                cache: 'false',
                success: function (res) {
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


                    var data = google.visualization.arrayToDataTable([
                        ['Gender', 'Number'],
                        ['পুরুষ', parseInt(res.genders.male)],
                        ['মহিলা', parseInt(res.genders.female)]

                    ]);

                    var options = {
                        title: 'পুরুষ মহিলা উভয় আক্রান্ত'
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

                    $(res.today).each(function (index, value) {
                        $("#Confrimed").html((value.todayConfirmed).toString().replace(/[0123456789]/g, function (s) {
                            return banglaDigits[s];
                        }));
                        $("#Recovered").html((value.todayRecovered).toString().replace(/[0123456789]/g, function (s) {
                            return banglaDigits[s];
                        }));
                        $("#deaths").html((value.todayDeaths).toString().replace(/[0123456789]/g, function (s) {
                            return banglaDigits[s];
                        }));

                    });

                    var totaldis = "";

                    $(res.districts).each(function (index, value) {
                        totaldis += '<tr>';
                        totaldis += '<td>' + value.name + '</td>';
                        totaldis += '<td>' + value.confirmed + '</td>';
                        totaldis += '</tr>';
                    });


                    $("#districttotal").html(totaldis);

                    $("#datatable").DataTable();

                }

            });
        }
    });

    $(document).ready(function () {

        var totaldis = "";

        // $.ajax({
        //     url:'https://www.fastaar.com/api',
        //     type:'get',
        //     dataType:'json',
        //     cache:'false',
        //     success:function(res){


        //         $(res.districts).each(function(index,value){
        //             totaldis += '<tr>';
        //             totaldis += '<td>'+value.name+'</td>';
        //             totaldis += '<td>'+value.confirmed+'</td>';
        //             totaldis += '<td>'+value.recovered+'</td>';
        //             totaldis += '<td>'+value.deaths+'</td>';
        //             totaldis += '</tr>';
        //         })


        //         $("#districttotal").html( totaldis);
        //     }
        // })

    });

</script>

