<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<div class="container-fluid">
    <div class="row justify-content-center mt-5">
        <div class="col-md-10">
            <canvas id="mileageChart"></canvas>

        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('mileageChart').getContext('2d');
    const mileageChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: @json($mileages->pluck('date')),
            datasets: [{
                label: 'Mileage (km/l)',
                data: @json($mileages->pluck('mileage')),
                borderColor: 'rgba(75, 192, 192, 1)',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>


