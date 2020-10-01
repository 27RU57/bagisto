<template>
    <div class="relative py-4">
        <button @click="toggleShow" class="focus:outline-none">
            <slot name="header" :show="show"></slot>
        </button>
        <div
            class="dropdown-content"
            :class="{
                'dropdown-closed': !show,
                'right-0': position == 'right',
            }"
        >
            <slot name="content"></slot>
        </div>
    </div>
</template>

<script>
export default {
    props: ["position"],

    data() {
        return {
            show: false,
        };
    },

    methods: {
        open() {
            this.show = true;
        },
        close() {
            this.show = false;
        },
        toggleShow() {
            this.show = !this.show;
        },
    },
};
</script>

<style scoped>
.dropdown-content::before {
    content: "";
    top: 0;
    right: 1rem;
    @apply absolute transform -translate-y-full w-0 h-0;
    border-style: solid;
    border-width: 0 15px 9px 15px;
    border-color: transparent transparent #fff transparent;
}
.dropdown-content {
    @apply absolute bottom-0 bg-white shadow-lg p-6 transform translate-y-full w-40 rounded-xl transition duration-300;
}
.dropdown-closed {
    @apply opacity-0 pointer-events-none;
    transform: translateY(90%);
}
</style>
