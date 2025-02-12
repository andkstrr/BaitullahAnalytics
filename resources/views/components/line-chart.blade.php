<canvas id="lineChart" style="width: 100%; height: 350px;"></canvas>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const ctx = document.getElementById('lineChart').getContext('2d');
        const data = {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: 'Data 1',
                data: [400, 430, 410, 430, 420, 500, 480, 480, 420, 420, 440, 520, 480],
                borderColor: 'rgb(0, 92, 21)',
                borderWidth: 4,
                fill: false,
            }, {
                label: 'Data 2',
                data: [300, 360, 310, 380, 320, 380, 460, 340, 340, 370, 340, 380],
                borderColor: 'rgb(0, 156, 5)',
                borderWidth: 0,
                fill: true,
                backgroundColor: function(context) {
                    const gradient = ctx.createLinearGradient(0, 0, 0, context.chart.height);
                    gradient.addColorStop(0, 'rgba(0, 156, 5, 0.8)');
                    gradient.addColorStop(0.5, 'rgba(0, 156, 5, 0.5)');
                    gradient.addColorStop(1, 'rgba(0, 156, 5, 0)');
                    return gradient;
                },
            }]
        };
        const config = {
            type: 'line',
            data: data,
            options: {
                responsive: true,
                plugins: {
                    datalabels: {
                        display: false,
                        font: {
                            size: 30,
                        }
                    },
                    legend: {
                        display: false
                    },
                },
                scales: {
                    x: {
                        grid: {
                            display: false
                        },
                    },
                    y: {
                        grid: {
                            display: false
                        },
                        max: 600,
                        ticks: {
                            stepSize: 200,
                        }
                    }
                },
                elements: {
                    point: {
                        radius: 0
                    },
                    line: {
                        tension: 0.1
                    }
                },
            }
        };
        const lineChart = new Chart(ctx, config);
    });
</script>
