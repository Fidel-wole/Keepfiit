
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Surgery', 'Anatomy', 'Manicure', 'Death', 'Sick', 'thinking'],
      datasets: [{
        label: 'Number of Patients in departments',
        data: [12, 19, 3, 5, 2, 3],
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
      labels: ['Surgery', 'Anatomy', 'Manicure', 'Death', 'Sick', 'thinking'],
      datasets: [{
        label: 'Number of Patients in departments',
        data: [12, 19, 3, 5, 2, 3],
        borderWidth: 1
      }]
    },
    options: {
      responsive: true
    }
  });

