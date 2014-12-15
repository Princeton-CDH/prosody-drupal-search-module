<?php

?><html>
  <head>
    <script src="/sites/all/modules/contrib/prosodysearch/js/jquery.min.js"></script>
    <script src="/sites/all/modules/contrib/prosodysearch/js/highcharts.js"></script>
  </head>
  <body style="background:#f8f8f8">
    <div id="chart" style="width:600px;height:200px;"></div>


    <script type="text/javascript">
 jQuery(function () {
    jQuery('#chart').highcharts({
        chart: {
            type: 'column',
	    backgroundColor: '#f8f8f8'
        },
        title: {
            text: ''
        },

        xAxis: {
	    title: { text:null },
            categories: [
                '1860',
                '',
                '',
                '',
                '',
                '1865',
                '',
                '',
                '',
                '',
                '1870',
                '',
                '',
                '',
                '',
                '1875',
                '',
                '',
                '',
                '',
                '1880',
                '',
                '',
                '',
                '',
                '1885',
                '',
                '',
                '',
                '',
                '1890',
                '',
                '',
                '',
                '',
                '1895',
                '',
                '',
                '',
                '',
                '1900',
                '',
                '',
                '',
                '',
                '1905',
                '',
                '',
                '',
                '',
                '1910',
                '',
                '',
                '',
                '',
                '1915',
                '',
                '',
                '',
                '',
                '1920',
                '',
                '',
                '',
                '',
                '1925',
                '1926',
                '1927',
            ]
        },
        yAxis: {
            min: 0,
            title: {
                text: null
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0"><a href="http://www.google.com">{series.name}</a>: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: -0.2,
                borderWidth: 0
            }
        },
        series: [{
	    name: 'Occurrences',
            data: [1,4,5,6,8,3,4,5,7,12,3,13,4,5,18,4,5,6,7,32,4,3,6,2,5,8,3,21,13,44,45,67,53,32,23,45,13,18,10,5,4,3,6,5,47,6]

        }]
    });
});
    </script>



  </body>
</html>

