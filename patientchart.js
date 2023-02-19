const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November','December'],
      datasets: [{
        label: 'BP RATE',
        data: [12, 19, 3, 5, 2, 3, 7, 9, 10 ,44, 4],
        backgroundColor:[
          'rgba(255, 99, 132, 0.9)',
          'rgba(54, 99, 132, 0.9)',
          'rgba(255, 206, 82, 0.9)',
          'rgba(75, 192, 192, 0.9)',
          'rgba(255, 99, 222, 0.9)',
          'rgba(255, 99, 132, 0.9)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      responsive: true
    }
  });

  const ctxx = document.getElementById('polar');

  new Chart(ctxx, {
    type: 'polarArea',
    data: {
      labels: ['Sugar level', 'Heart rate', 'Temperature', 'Pulse'],
      datasets: [{
        label: 'Others',
        data: [12, 19, 3, 6],
        backgroundColor:[
          'rgba(255, 99, 132, 0.9)',
          'rgba(54, 99, 132, 0.9)',
          'rgba(255, 206, 82, 0.9)',
          'rgba(75, 192, 192, 0.9)',
          'rgba(255, 99, 222, 0.9)',
          'rgba(255, 99, 132, 0.9)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      responsive: true
    }
  });