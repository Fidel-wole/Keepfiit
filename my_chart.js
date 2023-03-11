
var Surgery = 40
var anatomy = 45
var Manicure = 8
var death = 30
Sick = 60
think =45
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Surgery', 'Antomy', 'Manicure', 'Death', 'Sick', 'thinking'],
      datasets: [{
        label: 'Number of Patients in departments',
        data: [Surgery, anatomy, Manicure, death, Sick, think ],
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
      labels: ['Surgery', 'Anatomy', 'Manicure', 'Death', 'Sick', 'thinking'],
      datasets: [{
        label: 'Number of Patients in departments',
        data: [12, 19, 3, 5, 2, 3],
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

  const sctx = document.getElementById('line');

  new Chart(sctx, {
    type: 'line',
    data: {
      labels: ['Surgery', 'Anatomy', 'Manicure', 'Death', 'Sick', 'thinking'],
      datasets: [{
        label: 'Number of Patients in departments',
        data: [12, 19, 3, 5, 2, 3],
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


  const ssctx = document.getElementById('dough');
  new Chart(ssctx, {
    type: 'doughnut',
    data: {
      labels: ['Surgery', 'Antomy', 'Manicure', 'Death', 'Sick', 'thinking'],
      datasets: [{
        label: 'Number of Patients in departments',
        data: [12, 19, 3, 5, 2, 3],
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