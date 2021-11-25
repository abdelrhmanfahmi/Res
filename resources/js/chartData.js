export const chartData = {
    type: "bar",
    data: {
      labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug" , "Sep" , "Oct" , "Nov" , "Dec"],
      datasets: [
        {
          label: "Profits",
          data: [0, 0, 1, 2, 79, 82, 27, 14, 0, 0, 82, 14],
          backgroundColor: "#20926B",
          borderColor: "#20926B",
          borderWidth: 3
        }
      ]
    },
    options: {
      responsive: true,
      lineTension: 1,
      scales: {
        yAxes: [
          {
            ticks: {
              beginAtZero: true,
              padding: 25
            }
          }
        ]
      }
    }
  };
  
  export default chartData;