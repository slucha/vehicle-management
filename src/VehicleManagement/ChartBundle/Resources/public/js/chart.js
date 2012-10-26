	$(document).ready(function() {
		
		var chart;

		var options = {
				chart: {
					renderTo: 'container',
					type: 'column'
				},
				title: {
					text: 'Monthly refuel cost',
					x: -20 //center
				},
				subtitle: {
					text: 'Year : 2012',
					x: -20
				},
				xAxis: {
					categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
					             'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
				},
				yAxis: {
					title: {
						text: 'Cost (€)'
					},
					plotLines: [{
						value: 0,
						width: 1,
						color: '#808080'
					}]
				},
				tooltip: {
					formatter: function() {
						return '<b>'+ this.series.name +'</b><br/>'+
						this.x +': '+ this.y +'€';
					}
				},
				/*legend: {
					layout: 'vertical',
					align: 'right',
					verticalAlign: 'top',
					x: -10,
					y: 100,
					borderWidth: 0
				},*/
				series: []
		};
		
		
		$.getJSON('data/retrieve/2012', function(data) {

			$.each(data, function(key, val) {
				var serie = {
						name: key,
						data: []
				};
				serie.name = key;
				serie.data = val
	            options.series.push(serie);
			});
		    var chart = new Highcharts.Chart(options);
		});  

	});