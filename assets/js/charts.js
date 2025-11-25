(() => {
  const commonOptions = {
    responsive: true,
    maintainAspectRatio: false,
  };

  // 1. Recent Activity - Bar
    const activityCtx = document.getElementById("recentActivityChart");
    if (activityCtx && window.Chart) {
        new Chart(activityCtx, {
            type: "bar",
            data: {
                labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
                datasets: [
                    {
                        label: "Events",
                        data: [12, 19, 7, 15, 9, 14, 10],
                    },
                ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                    },
                },
                plugins: {
                    legend: {
                        display: false,
                    },
                },
            },
        });
    }

  // 2. Performance Metrics - Pie
  new Chart(document.getElementById("performanceMetricsChart"), {
    type: "pie",
    data: {
      labels: ["Completed", "In Progress", "Pending"],
      datasets: [{
        data: [55, 30, 15],
        backgroundColor: ["#198754", "#ffc107", "#dc3545"]
      }]
    },
    options: { ...commonOptions, plugins: { legend: { position: "bottom" } } }
  });

  // 3. User Engagement - Line
  new Chart(document.getElementById("userEngagementChart"), {
    type: "line",
    data: {
      labels: ["Week 1", "Week 2", "Week 3", "Week 4"],
      datasets: [
        { label: "Active Users", data: [40, 55, 48, 65], borderColor: "#36a2eb", tension: 0.4 },
        { label: "New Signups", data: [20, 25, 30, 35], borderColor: "#4bc0c0", tension: 0.4 },
        { label: "Inactive Users", data: [10, 15, 12, 8], borderColor: "#ff6384", tension: 0.4 }
      ]
    },
    options: {
      ...commonOptions,
      interaction: { mode: 'index', intersect: false },
      plugins: { legend: { position: 'top' } }
    }
  });

  // 4. Revenue Overview - Area Chart
  new Chart(document.getElementById("revenueChart"), {
    type: "line",
    data: {
      labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
      datasets: [{
        label: "Revenue ($K)",
        data: [45, 62, 58, 78, 95, 110, 105, 120, 135, 148, 160, 185],
        fill: true,
        backgroundColor: "rgba(255, 193, 7, 0.3)",
        borderColor: "#ffc107",
        tension: 0.4
      }]
    },
    options: { ...commonOptions }
  });

  // 5. Sales by Category - Doughnut
  new Chart(document.getElementById("salesCategoryChart"), {
    type: "doughnut",
    data: {
      labels: ["Electronics", "Clothing", "Food", "Books", "Home", "Others"],
      datasets: [{
        data: [350, 220, 180, 90, 150, 110],
        backgroundColor: ["#e91e63", "#9c27b0", "#3f51b5", "#00bcd4", "#ff9800", "#795548"]
      }]
    },
    options: { ...commonOptions }
  });

  // 6. Monthly Users - Stacked Area
  new Chart(document.getElementById("monthlyUsersChart"), {
    type: "line",
    data: {
      labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
      datasets: [
        { label: "Desktop", data: [120, 135, 140, 155, 170, 180], stack: 'Stack 0', backgroundColor: "rgba(54, 162, 235, 0.5)", fill: true },
        { label: "Mobile", data: [80, 95, 110, 130, 155, 175], stack: 'Stack 0', backgroundColor: "rgba(75, 192, 192, 0.5)", fill: true },
        { label: "Tablet", data: [30, 28, 35, 32, 38, 45], stack: 'Stack 0', backgroundColor: "rgba(255, 99, 132, 0.5)", fill: true }
      ]
    },
    options: {
      ...commonOptions,
      scales: { x: { stacked: true }, y: { stacked: true } },
      plugins: { legend: { position: 'bottom' } }
    }
  });

  // 7. Browser Stats - Polar Area
  new Chart(document.getElementById("browserStatsChart"), {
    type: "polarArea",
    data: {
      labels: ["Chrome", "Firefox", "Safari", "Edge", "Opera"],
      datasets: [{
        data: [45, 20, 18, 12, 5],
        backgroundColor: ["#ff6384", "#36a2eb", "#ffce56", "#4bc0c0", "#9966ff"]
      }]
    },
    options: { ...commonOptions }
  });

  // 8. Interactive Bar Chart
  new Chart(document.getElementById("interactiveBarChart"), {
    type: "bar",
    data: {
      labels: ["Product A", "Product B", "Product C", "Product D", "Product E"],
      datasets: [{
        label: "Sales (units)",
        data: [89, 67, 95, 54, 78],
        backgroundColor: ["#0d6efd", "#198754", "#ffc107", "#dc3545", "#6f42c1"]
      }]
    },
    options: {
      ...commonOptions,
      plugins: {
        tooltip: {
          callbacks: {
            afterLabel: function(context) {
              return 'Growth: +' + (context.parsed.y * 1.15).toFixed(0) + ' units projected';
            }
          }
        }
      }
    }
  });

  // 9. Radar Chart (Alternative to Force-Directed Graph - pure Chart.js)
  new Chart(document.getElementById("radarChart"), {
    type: "radar",
    data: {
      labels: ["Google", "Facebook", "Twitter", "LinkedIn", "Direct", "Email", "Ads"],
      datasets: [{
        label: "Traffic Sources (%)",
        data: [35, 25, 15, 10, 8, 5, 2],
        fill: true,
        backgroundColor: "rgba(111, 66, 193, 0.3)",
        borderColor: "#6f42c1",
        pointBackgroundColor: "#6f42c1"
      }]
    },
    options: {
      ...commonOptions,
      scales: {
        r: {
          angleLines: { display: true },
          suggestedMin: 0,
          suggestedMax: 40
        }
      }
    }
  });

})();