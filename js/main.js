
Chart.pluginService.register({
  beforeRender: function (chart) {
    if (chart.config.options.showAllTooltips) {
        // create an array of tooltips
        // we can't use the chart tooltip because there is only one tooltip per chart
        chart.pluginTooltips = [];
        chart.config.data.datasets.forEach(function (dataset, i) {
            chart.getDatasetMeta(i).data.forEach(function (sector, j) {
                chart.pluginTooltips.push(new Chart.Tooltip({
                    _chart: chart.chart,
                    _chartInstance: chart,
                    _data: chart.data,
                    _options: chart.options.tooltips,
                    _active: [sector]
                }, chart));
            });
        });

        // turn off normal tooltips
        chart.options.tooltips.enabled = false;
    }
},
  afterDraw: function (chart, easing) {
    if (chart.config.options.showAllTooltips) {
        // we don't want the permanent tooltips to animate, so don't do anything till the animation runs atleast once
        if (!chart.allTooltipsOnce) {
            if (easing !== 1)
                return;
            chart.allTooltipsOnce = true;
        }

        // turn on tooltips
        chart.options.tooltips.enabled = true;
        Chart.helpers.each(chart.pluginTooltips, function (tooltip) {
            tooltip.initialize();
            tooltip.update();
            // we don't actually need this since we are not animating tooltips
            tooltip.pivot();
            tooltip.transition(easing).draw();
        });
        chart.options.tooltips.enabled = false;
    }
  }
});

	var ctx = document.getElementById("distribution").getContext('2d');
	var myChart = new Chart(ctx, {
	    type: 'doughnut',
	    data: {
	        labels: [
			         "40% Token Sale", 
			         "13% Private&Partners ", 
			         "4% Mkt & Bounty",
			         "7% Acceleratino Prog.",   
			         "9% Foundation", 
			         "3% Advisors", 
			         "18% Founder and Team"
			         ],
	        datasets: [{
	            label: '# of Distribution',
	            data: [46.0, 13.0, 4.0, 7.0, 9.0, 3.0, 18.0],
	           
	            backgroundColor: [
	               'rgba(52,68,136, 0.3)',
	                'rgba(222,34,28, 0.3)',
	                'rgba(2255,203,5, 0.3)',
	                'rgba(0,185,242, 0.3)',
	                'rgba(0,169,157, 0.3)',
	                'rgba(99,62,225, 0.3)',
	                'rgba(255,173,255, 0.3)'




	            ],
	            borderColor: [
	                'rgba(52,68,136, 0.3)',
	                'rgba(222,34,28, 0.3)',
	                'rgba(2255,203,5, 0.3)',
	                'rgba(0,185,242, 0.3)',
	                'rgba(0,169,157, 0.3)',
	                'rgba(99,62,225, 0.3)',
	                'rgba(255,173,255, 0.3)'               
	            ],
	            borderWidth: 1,
	            pointStyle: 'circle'
	        }]
	    },
	    options: {
	    	showAllTooltips:true,
	        legend: {
	           	position:'top',
	            labels: {
	           		usePointStyle: false,
	           		fontSize:13,
	           		fontColor:'#fff',	            	
	            }
	        },
	        tooltips: {
	            callbacks: {
					title: function(tooltipItems, data) {
						// Pick first xLabel for now
						var title = '';
						var labels = data.labels;
						var labelCount = labels ? labels.length : 0;

						if (tooltipItems.length > 0) {
							var item = tooltipItems[0];

							if (item.xLabel) {
								title = item.xLabel;
							} else if (labelCount > 0 && item.index < labelCount) {
								title = labels[item.index];
							}
						}

						return title;
					},
	                label: function(tooltipItem, chart) {
						return false;
	                }
	            }
	        }
	    }
	});



	var ctx = document.getElementById("proceed").getContext('2d');
	var myChart = new Chart(ctx, {
	    type: 'doughnut',
	    data: {
	        labels: [
		        "40% Development ", 
		        "20% Marketing ", 
		        "15% Partners",
		        "12% Operations ", 
		        "10% Rewards", 
		        "3% Legal"
	        ],
	        datasets: [{
	            label: '# of Distribution',
	            data: [40.0, 20.0, 15.0, 12.0, 10.0, 3.0],
	            backgroundColor: [
	                'rgba(52,68,136, 0.3)',
	                'rgba(222,34,28, 0.3)',
	                'rgba(225,203,5, 0.3)',
	                'rgba(0,185,242, 0.3)',
	                'rgba(0,169,157, 0.3)',
	                'rgba(99,62,225, 0.3)'

	            ],
	            borderColor: [
	                'rgba(52,68,136, 0.3)',
	                'rgba(222,34,28, 0.3)',
	                'rgba(225,203,5, 0.3)',
	                'rgba(0,185,242, 0.3)',
	                'rgba(0,169,157, 0.3)',
	                'rgba(99,62,225, 0.3)'

	            ],
	            borderWidth: 1,
	            pointStyle: 'circle'
	        }]
	    },
	    options: {
	    	showAllTooltips:true,
	        legend: {
	           	position:'top',	           
	            labels: {
	           		usePointStyle: false,
	           		fontSize:13,
	           		fontColor:'#fff',

	                
	            }
	        },	    	
	        tooltips: {
	        	intersect:true,
	            callbacks: {
					title: function(tooltipItems, data) {
						// Pick first xLabel for now
						var title = '';
						var labels = data.labels;
						var labelCount = labels ? labels.length : 0;

						if (tooltipItems.length > 0) {
							var item = tooltipItems[0];

							if (item.xLabel) {
								title = item.xLabel;
							} else if (labelCount > 0 && item.index < labelCount) {
								title = labels[item.index];
							}
						}

						return title;
					},
	                label: function(tooltipItem, chart) {
						return false;
	                }
	            }
	        }
	    }
	});