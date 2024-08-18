
    var ctx = document.getElementById('ventesGraphique').getContext('2d');
    // Données fictives pour le premier graphique
    var labels = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
    var data = [120, 150, 180, 130, 160, 210, 240, 180, 190, 200, 220, 250];

    var myChart = new Chart(ctx, {
    type: 'line',
    data: {
    labels: labels,
    datasets: [{
    label: 'Ventes',
    data: data,
    backgroundColor: 'rgba(75, 192, 192, 0.2)',
    borderColor: 'rgba(75, 192, 192, 1)',
    borderWidth: 1
}]
},
    options: {
    responsive: true,
    maintainAspectRatio: false,
    scales: {
    y: {
    beginAtZero: true
}
}
}
});

    // Configuration des graphiques des stats avec symbole euro
    var revenuCtx = document.getElementById('revenuChart').getContext('2d');
    var depensesCtx = document.getElementById('depensesChart').getContext('2d');

    var revenuChart = new Chart(revenuCtx, {
    type: 'bar',
    data: {
    labels: ['01', '02', '03', '04', '05', '06'],
    datasets: [
{
    label: '6 derniers jours',
    data: [30, 40, 45, 50, 60, 70],
    backgroundColor: 'rgba(63, 81, 181, 1)',
},
{
    label: 'semaine dernière',
    data: [35, 50, 40, 45, 55, 65],
    backgroundColor: 'rgba(189, 189, 189, 1)',
}
    ]
},
    options: {
    responsive: true,
    maintainAspectRatio: false,
    scales: {
    y: {
    beginAtZero: true,
    ticks: {
    callback: function(value, index, values) {
    return value + '€'; // Ajout du symbole euro
}
}
}
}
}
});

    var depensesChart = new Chart(depensesCtx, {
    type: 'line',
    data: {
    labels: ['01', '02', '03', '04', '05', '06'],
    datasets: [
{
    label: 'cette semaine',
    data: [10, 20, 15, 30, 25, 35],
    backgroundColor: 'rgba(63, 81, 181, 0.2)',
    borderColor: 'rgba(63, 81, 181, 1)',
    fill: true
},
{
    label: 'semaine dernière',
    data: [15, 25, 20, 35, 30, 40],
    backgroundColor: 'rgba(189, 189, 189, 0.2)',
    borderColor: 'rgba(189, 189, 189, 1)',
    fill: true
}
    ]
},
    options: {
    responsive: true,
    maintainAspectRatio: false,
    scales: {
    y: {
    beginAtZero: true,
    ticks: {
    callback: function(value, index, values) {
    return value + '€'; // Ajout du symbole euro
}
}
}
}
}
});