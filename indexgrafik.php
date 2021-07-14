<!DOCTYPE html>
<html>
<head lang="kr">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
    <title>Grafik</title>
    <link rel="stylesheet" type="text/css" href="dist2/tui-chart.css" />
    <link rel='stylesheet' type='text/css' href='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.43.0/codemirror.css'/>
    <link rel='stylesheet' type='text/css' href='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.43.0/addon/lint/lint.css'/>
    <link rel='stylesheet' type='text/css' href='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.43.0/theme/neo.css'/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css2/example.css" />
    <link rel="icon" type="png" href="images1/logo3.png"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="css1/style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <style>
    body {
      background-image: url('../assetss/images/login-new.jpeg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: 100% 100%;
      position: fixed;
      margin-right: 100px
    }

  </style>

</head>
<body>

       <div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-dark">>
	                </button>
                </div>
	  		    <div class="img bg-wrap text-center py-4" style="background-image: url(images1/bg_1.jpg);">
	  			<div class="user-logo">
	  				<div class="img" style="background-image: url(images1/aaa.jpeg);"></div>
	  				<h3>M-A-W</h3>
	  			</div>
	  		    </div>
        <ul class="list-unstyled components mb-5">
		<li class="active">
            <a href="tampil.php"><span class="fa fa-home mr-3"></span> Home</a>
          </li>
          <li>
            <a href="indexgrafik.php"><span class="fa fa-support mr-3"></span> Grafik Data</a>
          </li>
          <li>
          <li>
            <a href="input.php"><span class="fa fa-support mr-3"></span> Input Data</a>
          </li>
          <li>
            <a href="../login/logout"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
          </li>
        </ul>
    	</nav>
        <div id="content" class="p-4 p-md-5 pt-5">
        <div class='code-html' id='code-html'>
        <div id='chart-area'></div>
        </div>
        </div>
        </div>


<script type='text/javascript' src='https://uicdn.toast.com/tui.chart/latest/raphael.js'></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/core-js/2.5.7/core.js'></script>
<script src='dist2/tui-chart.js'></script>
<script class='code-js' id='code-js'>
var container = document.getElementById('chart-area');
$.getJSON('datagrafik.php',function(data){
    var tahun = [];
    var jlionair = [];
    var jcitylink = [];
    var jairasia = [];
    var jbatik = [];
    for (var i in data) {
        tahun.push(data[i].tahun);
        jlionair.push(data[i].lionair);
        jcitylink.push(data[i].citylink);
        jairasia.push(data[i].airasia);
        jbatik.push(data[i].batik);
    }
    var data = {
    categories: tahun,
    series: [
        {
            name: 'Lion Air',
            data: jlionair
        },
        {
            name: 'Citylink',
            data: jcitylink
        },
        {
            name: 'Air Asia',
            data: jairasia
        },
        {
            name: 'Batik Air',
            data: jbatik
        }
    ]
};
var options = {
    chart: {
        width: 1160,
        height: 650,
        title: 'Grafik Keberangkatan Maskapai 10 Tahun Terakhir',
        format: '1,000'
    },
    yAxis: {
        title: 'Banyaknya Keberangkatan'
    },
    xAxis: {
        title: 'Tahun',
        min: 0,
        max: 75000,
        suffix: ''
    },
     series: {
         showLabel: false
     }
};
var theme = {
    series: {
        colors: [
            '#e49b0f', '#4E9C81', '#cf3a24', '#b97595', '#289399',
            '#289399', '#617178', '#8a9a9a', '#516f7d', '#dddddd'
        ]
    }
};
// For apply theme

tui.chart.registerTheme('myTheme', theme);
options.theme = 'myTheme';


tui.chart.columnChart(container, data, options);

});

</script>

<!--For tutorial page-->
<script src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.43.0/codemirror.js'></script>
<script src='https://ajax.aspnetcdn.com/ajax/jshint/r07/jshint.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.43.0/addon/edit/matchbrackets.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.43.0/addon/selection/active-line.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.43.0/mode/javascript/javascript.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.43.0/addon/lint/lint.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.43.0/addon/lint/javascript-lint.js'></script>
<script src='js2/example.js'></script>
<script src="js1/jquery.min.js"></script>
    <script src="js1/popper.js"></script>
    <script src="js1/bootstrap.min.js"></script>
    <script src="js1/main.js"></script>
</body>
</html>