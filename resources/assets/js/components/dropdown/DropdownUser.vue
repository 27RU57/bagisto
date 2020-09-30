<template>
    <div>
        <dropdown position="right">
            <template #header="{ show }">
                <div class="flex items-center font-bold">
                    Příklad

                    <svg
                        class="w-3 ml-3 stroke-current transition duration-300"
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
                <div class="text-xs pt-1">Administrátor</div>
            </template>

            <template v-slot:content>
                <a href="#" class="text-red-500 font-bold">Odhlásit se</a>
            </template>
        </dropdown>
    </div>
</template>

<script>
export default {};
</script>
