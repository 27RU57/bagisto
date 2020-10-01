require("./bootstrap");

window.Vue = require("vue");

import VueApexCharts from "vue-apexcharts";
Vue.use(VueApexCharts);

Vue.component("apexchart", VueApexCharts);

Vue.component(
    "dropdown",
    require("./components/Dropdown/Dropdown.vue").default
);
Vue.component(
    "dropdown-user",
    require("./components/Dropdown/DropdownUser.vue").default
);

Vue.component(
    "data-table",
    require("./components/DataTable/DataTable.vue").default
);

Vue.component("search-bar", require("./components/SearchBar.vue").default);
Vue.component("graph", require("./components/graph.vue").default);
Vue.component("select-box", require("./components/SelectBox.vue").default);

const app = new Vue({
    el: "#app",
});
