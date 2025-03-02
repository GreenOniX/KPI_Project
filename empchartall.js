const ctx = document.getElementById('myChart');

fetch("databaseEmpall.php")
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
        data: chartData.map(row => row.income1),
        borderWidth: 2.5,
      },{
        label: 'income',
        data: chartData.map(row => row.income2),
        borderWidth: 2.5,
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