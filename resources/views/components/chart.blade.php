<div class="h-full w-full p-3">
    <canvas id="{{ $chartId }}"></canvas>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const chartType = '{{ $type }}';
        const ctx = document.getElementById('{{ $chartId }}').getContext('2d');
        const monthColors = {
            'January': 'rgba(255, 99, 132, 0.6)',
            'February': 'rgba(54, 162, 235, 0.6)',
            'March': 'rgba(255, 206, 86, 0.6)',
            'April': 'rgba(75, 192, 192, 0.6)',
            'May': 'rgba(153, 102, 255, 0.6)',
            'June': 'rgba(255, 159, 64, 0.6)',
            'July': 'rgba(199, 99, 132, 0.6)',
            'August': 'rgba(164, 162, 235, 0.6)',
            'September': 'rgba(255, 209, 86, 0.6)',
            'October': 'rgba(75, 232, 192, 0.6)',
            'November': 'rgba(153, 102, 255, 0.6)',
            'December': 'rgba(255, 159, 64, 0.6)'
        };

        let labels = @json($chartData['labels']);
        let data = @json($chartData['data']);

        let datasets = [{
            label: 'My Dataset',
            data: data,
            borderWidth: 2
        }];

        if (chartType === 'bar' || chartType === 'line') {
            datasets[0].backgroundColor = labels.map(label => {
                const month = label.split(' ')[0];
                return monthColors[month];
            });
            datasets[0].borderColor = datasets[0].backgroundColor.map(color => color.replace('0.6', '1'));
        } else if (chartType === 'pie') {
            datasets[0].backgroundColor = Object.values(monthColors);
            datasets[0].borderColor = '#fff';
        }

        let gradientLine = ctx.createLinearGradient(0, 0, 0, 400);
        gradientLine.addColorStop(0, 'rgba(54, 162, 235, 0.8)');
        gradientLine.addColorStop(1, 'rgba(54, 162, 235, 0)');

        if (chartType === 'line') {
            datasets[0].backgroundColor = gradientLine;
            datasets[0].borderColor = 'rgba(54, 162, 235, 1)';
            datasets[0].tension = 0.4;
            datasets[0].fill = true;
        }

        let options = {
            responsive: true,
            maintainAspectRatio: true,
            plugins: {
                legend: {
                    display: true
                },
                tooltip: {
                    enabled: true
                }
            },
            scales: chartType !== 'pie' ? {
                x: {
                    grid: {
                        display: false
                    }
                },
                y: {
                    grid: {
                        display: true
                    }
                }
            } : {}
        };

        const myChart = new Chart(ctx, {
            type: chartType,
            data: {
                labels: labels,
                datasets: datasets
            },
            options: options
        });
    });

</script>
