require("./bootstrap");

window.Vue = require("vue");

Vue.component(
    "dropdown",
    require("./components/dropdown/Dropdown.vue").default
);
Vue.component(
    "dropdown-user",
    require("./components/dropdown/DropdownUser.vue").default
);

Vue.component("search-bar", require("./components/SearchBar.vue").default);

const app = new Vue({
    el: "#app",
});
