export const chartData2 = {
    type: "line",
    data: {
      labels: ["2021", "2022", "2023", "2024"],
      datasets: [
        {
          label: "Profits",
          data: [40 , 20 , 10 , 0],
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
  
  export default chartData2;