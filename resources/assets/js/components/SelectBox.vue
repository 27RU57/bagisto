<template>
    <div
        class="relative focus:outline-none py-2"
        tabindex="0"
        @blur="show = false"
    >
        <div @click="show = !show" class="select">
            {{ selected }}
            <svg
                class="w-3 ml-2 stroke-current transition duration-300"
                :class="{ 'transform -rotate-180': !show }"
                viewBox="0 0 12 7"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
            >
                <polyline
                    fill="none"
                    stroke-width="2"
                    points="1 1 6 6 11 1"
                ></polyline>
            </svg>
        </div>
        <div
            class="options"
            :class="{ 'options-closed': !show, 'right-0': position == 'right' }"
        >
            <slot></slot>
        </div>
    </div>
</template>

<script>
export default {
    props: ["endpoint", "default", "position"],

    data() {
        return {
            selected: this.default ? this.default : "",
            show: false,
        };
    },

    mounted() {
        let options = this.$slots.default.filter((item) => item.tag);
        if (!this.selected.length) this.selected = options[0].elm.text;
        options.forEach((item) => {
            item.elm.addEventListener("click", () =>
                this.handleClick(item.elm)
            );
        });
    },

    methods: {
        handleClick(item) {
            this.selected = item.innerText;
            console.log(this.endpoint + " val:" + item.dataset.value);
        },
    },
};
</script>

<style scoped>
.select {
    @apply flex items-center bg-gray-100 px-5 py-4 rounded-xl font-bold;
    user-select: none;
}

.options {
    @apply absolute bottom-0 bg-gray-100 shadow-lg px-5 py-2 transform translate-y-full rounded-xl transition duration-300;
}
.options-closed {
    @apply opacity-0 pointer-events-none;
    transform: translateY(90%);
}
</style>
