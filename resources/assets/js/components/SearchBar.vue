<template>
    <div class="relative py-3">
        <div class="relative h-12 bg-gray-100 rounded-lg">
            <input
                class="bg-transparent px-4 h-full w-full rounded-lg font-bold focus:outline-none"
                type="text"
                placeholder="Hledejte..."
                v-model="input"
            />

            <button
                class="absolute right-0 top-1/2 transform -translate-y-1/2 p-3"
            >
                <svg
                    class="text-black stroke-current"
                    width="22px"
                    fill="none"
                    stroke-width="2"
                    viewBox="0 0 22 23"
                    version="1.1"
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                >
                    <circle cx="11" cy="11" r="10"></circle>
                    <path d="M18,19 L21,22"></path>
                </svg>
            </button>
        </div>

        <div
            class="searchbar-content"
            :class="{
                'searchbar-closed': !show,
            }"
        >
            <h2 class="mb-2 text-xs">Suggested</h2>
            <ul class="-my-1">
                <li class="font-bold py-1">
                    <a href="#" class="flex items-center justify-between">
                        Curri

                        <svg
                            class="mx-2"
                            width="8px"
                            viewBox="0 0 8 14"
                            version="1.1"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                        >
                            <polyline
                                fill="none"
                                stroke="#000000"
                                stroke-width="2"
                                transform="translate(3.782352, 6.564705) rotate(-270.000000) translate(-3.782352, -6.564705) "
                                points="-1.78235248 9.34705743 3.78235248 3.78235248 9.34705743 9.34705743"
                            ></polyline>
                        </svg>
                    </a>
                </li>
                <li class="font-bold py-1">
                    <a href="#" class="flex items-center justify-between">
                        Curri

                        <svg
                            class="mx-2"
                            width="8px"
                            viewBox="0 0 8 14"
                            version="1.1"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                        >
                            <polyline
                                fill="none"
                                stroke="#000000"
                                stroke-width="2"
                                transform="translate(3.782352, 6.564705) rotate(-270.000000) translate(-3.782352, -6.564705) "
                                points="-1.78235248 9.34705743 3.78235248 3.78235248 9.34705743 9.34705743"
                            ></polyline>
                        </svg>
                    </a>
                </li>
                <li class="font-bold py-1">
                    <a href="#" class="flex items-center justify-between">
                        Curri

                        <svg
                            class="mx-2"
                            width="8px"
                            viewBox="0 0 8 14"
                            version="1.1"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                        >
                            <polyline
                                fill="none"
                                stroke="#000000"
                                stroke-width="2"
                                transform="translate(3.782352, 6.564705) rotate(-270.000000) translate(-3.782352, -6.564705) "
                                points="-1.78235248 9.34705743 3.78235248 3.78235248 9.34705743 9.34705743"
                            ></polyline>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            show: false,
            input: "",
        };
    },

    watch: {
        input() {
            if (this.input.length) {
                this.show = true;
            } else {
                this.show = false;
            }
        },
    },
};
</script>

<style scoped>
.searchbar-content {
    @apply absolute bottom-0 inset-x-0 transform translate-y-full bg-white p-4 rounded-lg shadow-lg transition duration-300;
}
.searchbar-closed {
    @apply opacity-0 pointer-events-none;
    transform: translateY(90%);
}
</style>
