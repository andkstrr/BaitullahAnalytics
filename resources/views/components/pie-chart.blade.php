@props(['title'])

<div class="card rounded-4">
    <div class="card-title text-center px-4 pt-4">
        <p class="fw-semibold text-gray fs-6 mb-0">{{ $title }}</p>
    </div>
    <div class="card-content p-4">
        <div style="width: 80%; margin: 0 auto;">
            <canvas id="browserUsage"></canvas>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
      const cbu = document.getElementById('browserUsage').getContext('2d');

      const browserUsage = new Chart(cbu, {
        type: 'pie',
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
              display: true,
              position: 'bottom'
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
