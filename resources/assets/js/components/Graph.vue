<template>
    <div>
        <apexchart
            height="360"
            :options="chartOptions"
            :series="series"
        ></apexchart>
    </div>
</template>

<script>
export default {
    data() {
        return {
            series: [
                {
                    name: "High",
                    data: [0, 29, 33, 31, 32, 32, 33],
                },
                {
                    name: "Low",
                    data: [0, 11, 14, 18, 54, 13, 13],
                },
            ],
            chartOptions: {
                chart: {
                    type: "line",
                    zoom: {
                        enabled: false,
                    },
                    toolbar: {
                        show: false,
                    },
                },
                dataLabels: {
                    enabled: false,
                },
                stroke: {
                    curve: "smooth",
                },
                grid: {
                    row: {
                        colors: ["transparent"], // takes an array which will be repeated on columns
                        opacity: 0.5,
                    },
                },
                xaxis: {
                    categories: [
                        "Jan",
                        "Feb",
                        "Mar",
                        "Apr",
                        "May",
                        "Jun",
                        "Jul",
                        "Aug",
                        "Sep",
                    ],
                },
            },
        };
    },
};
</script>
