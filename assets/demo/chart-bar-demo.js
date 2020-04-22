// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Bar Chart Example
var ctx = document.getElementById("myBarChart");
$(document).ready(function () {

    $.ajax({
        url: 'https://www.fastaar.com/api',
        type: 'get',
        dataType: 'json',
        cache: 'false',
        success: function (res) {
			
            var myLineChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["১-১০", "১০-২০", "২০-৩০", "৩০-৪০", "৪০-৫০", "৫০-৬০", "৬০++"],
                    datasets: [{
                        label: "আক্রান্ত",
                        backgroundColor: "rgba(2,117,216,1)",
                        borderColor: "rgba(2,117,216,1)",
                        data: [parseInt(res.ages['onetoten'].confirmed), parseInt(res.ages['eleventotwenty'].confirmed), parseInt(res.ages['twentyonetothirty'].confirmed), parseInt(res.ages['thirtyonetofourty'].confirmed), parseInt(res.ages['fourtyonetofifty'].confirmed), parseInt(res.ages['fiftyonetosixty'].confirmed), parseInt(res.ages['sixtyplus'].confirmed)],
                    }],
                },
                options: {
                    scales: {
                        xAxes: [{
                            time: {
                                unit: 'Age'
                            },
                            gridLines: {
                                display: false
                            },
                            ticks: {
                                maxTicksLimit: 7
                            }
                        }],
                        yAxes: [{
                            ticks: {
                                min: 0,
                                max: 25,
                                maxTicksLimit: 5
                            },
                            gridLines: {
                                display: true
                            }
                        }],
                    },
                    legend: {
                        display: true
                    }
                }
            });


        }

    });

})
