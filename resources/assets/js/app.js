require("./bootstrap");

window.Vue = require("vue");

import VueApexCharts from "vue-apexcharts";
Vue.use(VueApexCharts);

Vue.component("apexchart", VueApexCharts);

Vue.component(
    "dropdown",
    require("./components/dropdown/Dropdown.vue").default
);
Vue.component(
    "dropdown-user",
    require("./components/dropdown/DropdownUser.vue").default
);
Vue.component("search-bar", require("./components/SearchBar.vue").default);
Vue.component("graph", require("./components/graph.vue").default);

const app = new Vue({
    el: "#app",
});
