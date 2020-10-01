<template>
    <td>
        <span
            v-if="col.value == 'state'"
            class="bg-gray-100 text-primary-500 rounded-full px-5 py-2"
        >
            {{ row[col.value].text }}
        </span>
        <template v-else>
            {{ row[col.value] }}
        </template>
    </td>
</template>

<script>
export default {
    props: ["col", "row"],
};
</script>
