(function () {
    /**
     * Initialize Chart.js demo charts
     */
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

    const performanceCtx = document.getElementById("performanceMetricsChart");
    if (performanceCtx && window.Chart) {
        new Chart(performanceCtx, {
            type: "pie",
            data: {
                labels: ["Completed", "In Progress", "Pending"],
                datasets: [
                    {
                        data: [55, 30, 15],
                    },
                ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: "bottom",
                    },
                },
            },
        });
    }

    const engagementCtx = document.getElementById("userEngagementChart");
    if (engagementCtx && window.Chart) {
        new Chart(engagementCtx, {
            type: "line",
            data: {
                labels: ["Week 1", "Week 2", "Week 3", "Week 4"],
                datasets: [
                    {
                        label: "Active Users",
                        data: [40, 55, 48, 65],
                        tension: 0.4,
                        fill: false,
                        borderColor: '#36a2eb',
                        backgroundColor: '#36a2eb',
                    },
                    {
                        label: "New Signups",
                        data: [20, 25, 30, 35],
                        tension: 0.4,
                        fill: false,
                        borderColor: '#4bc0c0',
                        backgroundColor: '#4bc0c0',
                    },
                    {
                        label: "Inactive Users",
                        data: [10, 15, 12, 8],
                        tension: 0.4,
                        fill: false,
                        borderColor: '#ff6384',
                        backgroundColor: '#ff6384',
                    }
                ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                interaction: {
                    mode: 'index',
                    intersect: false,
                },
                plugins: {
                    legend: {
                        display: true,
                        position: 'top',
                    },
                },
                scales: {
                    y: {
                        beginAtZero: true,
                    },
                },
            },
        });
    }
})();