<template>
    <td>
        <a
            v-if="actions.includes('edit')"
            :href="`${endpoint}/edit`"
            class="inline-block mr-3"
        >
            <svg
                class="w-4 stroke-current"
                fill="none"
                stroke-width="2"
                viewBox="0 0 18 19"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
            >
                <path
                    d="M7.22275085,-0.173807092 C6.6704661,-0.173807092 6.22275085,0.273908158 6.22275085,0.826192908 L6.22275085,17.1413136 C6.22275085,17.3632798 6.29660062,17.5789376 6.4326651,17.7543099 L7.56455763,19.2131966 C7.61408321,19.2770297 7.67143706,19.3343835 7.73527017,19.3839091 C8.15590972,19.7102667 8.76147057,19.6338361 9.08782819,19.2131966 L10.2197207,17.7543099 C10.3557852,17.5789376 10.429635,17.3632798 10.429635,17.1413136 L10.429635,0.826192908 C10.429635,0.273908158 9.98191972,-0.173807092 9.42963497,-0.173807092 L7.22275085,-0.173807092 Z"
                    transform="translate(8.326193, 10.326193) rotate(-315.000000) translate(-8.326193, -10.326193) "
                ></path>
            </svg>
        </a>
        <a
            v-if="actions.includes('download')"
            :href="`${endpoint}/download`"
            class="inline-block"
        >
            <svg
                class="w-4 stroke-current"
                fill="none"
                stroke-width="2"
                viewBox="0 0 19 20"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
            >
                <path
                    d="M17.3664884,12.3574007 L17.3664884,14.4032117 L17.3664884,14.433305 C17.3664884,16.6764254 15.54808,18.4948338 13.3049596,18.4948338 L5.06152876,18.4948338 C2.81840837,18.4948338 1,16.6764254 1,14.433305 L1,14.4032117 L1,12.3574007"
                ></path>
                <path d="M9.1832442,12.3574007 L9.1832442,1"></path>
                <polyline
                    points="6.11452762 9.28868408 9.1832442 12.3574007 12.2519608 9.28868408"
                ></polyline>
            </svg>
        </a>
    </td>
</template>

<script>
export default {
    props: ["actions", "endpoint"],
};
</script>
