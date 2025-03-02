const ctx = document.getElementById('myChart');

fetch("databaseemp1.php")
.then((response) => {
  return response.json();
})
.then((data) => {
  createChart(data, 'bar')
});

function createChart(chartData, type){
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: type,
    data: {
      labels: chartData.map(row => row.date),
      datasets: [{
        label: 'income',
        data: chartData.map(row => row.income),
        borderWidth: 2.5,
        tension: 0.3
      }],
      options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
            x: { beginAtZero: true },
            y: { beginAtZero: true }
        }
      }
    },
  });
}


