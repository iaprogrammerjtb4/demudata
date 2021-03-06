
		var color = Chart.helpers.color;
		function createConfig(colorName) {
			return {
				type: 'line',
				data: {
					labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
					datasets: [{
						label: '--- Datos ---',
						data: [
							randomScalingFactor(),
							randomScalingFactor(),
							randomScalingFactor(),
							randomScalingFactor(),
							randomScalingFactor(),
							randomScalingFactor(),
							randomScalingFactor()
						],
						backgroundColor: color(window.chartColors[colorName]).alpha(0.5).rgbString(),
						borderColor: window.chartColors[colorName],
						borderWidth: 1,
						pointStyle: 'rectRot',
						pointRadius: 5,
						pointBorderColor: 'rgb(0, 0, 0)'
					}]
				},
				options: {
					responsive: true,
					legend: {
						labels: {
							usePointStyle: false
						}
					},
					scales: {
						xAxes: [{
							display: true,
							scaleLabel: {
								display: true,
								labelString: 'Month'
							}
						}],
						yAxes: [{
							display: true,
							scaleLabel: {
								display: true,
								labelString: 'Value'
							}
						}]
					},
					title: {
						display: true,
						text: 'Grupos'
					}
				}
			};
		}

		function createPointStyleConfig(colorName) {
			var config = createConfig(colorName);
			config.options.legend.labels.usePointStyle = true;
			config.options.title.text = 'Investigadores';
			return config;
		}

		window.onload = function() {
			[{
				id: 'chart-legend-normal',
				config: createConfig('red')
			}, {
				id: 'chart-legend-pointstyle',
				config: createPointStyleConfig('blue')
			}].forEach(function(details) {
				var ctx = document.getElementById(details.id).getContext('2d');
				new Chart(ctx, details.config);
			});
		};