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
          borderWidth: 2
        }
      ]
    },
    options: {
      responsive: true,
      lineTension: 1,
      scales: {
        xAxes: [
          {
            gridLines: {
                display:false
            }
          }
        ],
        yAxes: [
          {
            gridLines: {
              display:false
            },
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