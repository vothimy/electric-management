
   
    
//(function () {

function drawPieChart(chartDataPas, chartDataPre, chartMonth) {
        $('#container').highcharts({
            chart: {
                type: 'column',
            },
            title: {
                text: ''
            },
            xAxis: {
                categories: chartMonth, // ['Tháng 6', 'Tháng 7', 'Tháng 8', 'Tháng 9', 'Tháng 10'],
                title: {
                    text: null
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Đơn vị tính (kWh)',
                    align: 'high'
                },
                labels: {
                    overflow: 'justify'
                }
            },
            tooltip: {
                valueSuffix: ' kWh'
            },
            exporting: {
                     enabled: false
            },
            plotOptions: {
                bar: {
                    dataLabels: {
                        enabled: true
                    }
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'top',
                x: -130,
                y: 0,
                floating: true,
                borderWidth: 1,
                backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
                shadow: true
            },
            credits: {
                enabled: false
            },
            series: [{
                name: 'Năm trước',                
                data: chartDataPas ,
                color: '#003366'
            }, {
                name: 'Năm nay',               
                data: chartDataPre ,
                color: '#f00'
            }]
        }); 
    };


//    })();




