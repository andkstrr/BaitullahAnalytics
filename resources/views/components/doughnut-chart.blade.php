@props(['width'])

<div style="width: {{ $width }}; margin: 0 auto;">
    <canvas id="doughnutChart"></canvas>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
      const cbu = document.getElementById('doughnutChart').getContext('2d');

      const doughnutChart = new Chart(cbu, {
        type: 'doughnut',
        data: {
          labels: ['Chrome', 'Edge', 'Firefox', 'Other'],
          datasets: [{
            label: 'Customer Satisfaction',
            data: [30, 25, 10, 15],
            backgroundColor: [
              '#036222',
              '#01A23B',
              '#68DA6B',
              '#79CB79'
            ],
            borderColor: [
              '#FDFDFD'
            ],
            borderWidth: 3
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          cutoutPercentage: 50, // ukuran lubang di tengah doughnut
          plugins: {
            legend: {
              display: false,
            },
            tooltip: {
              callbacks: {
                label: function(context) {
                  const label = context.label || '';
                  const value = context.formattedValue || '';
                  return `${label}: ${value}%`; // Menampilkan persentase pada tooltip
                }
              }
            }
          }
        }
      });
    });
</script>
