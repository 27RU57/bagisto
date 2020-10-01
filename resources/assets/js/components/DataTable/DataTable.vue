<template>
    <div>
        <table class="data-table">
            <thead>
                <tr>
                    <td v-for="(col, i) in cols" :key="`col-${i}`">
                        {{ col.text }}
                    </td>
                    <td v-if="actions">Akce</td>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(row, r) in rows" :key="`row-${r}`">
                    <TableRows
                        v-for="(col, c) in cols"
                        :key="`${r}-${c}`"
                        :col="col"
                        :row="row"
                    />
                    <TableActions
                        v-if="actions"
                        :actions="actions"
                        :endpoint="endpoint"
                    />
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import TableRows from "./TableRows";
import TableActions from "./TableActions";

export default {
    props: ["endpoint", "actions", "cols", "rows"],

    mounted() {},

    components: {
        TableRows,
        TableActions,
    },
};
</script>

<style scoped>
.data-table {
    @apply w-full shadow-lg rounded-xl font-bold;
}
.data-table td {
    @apply h-16 px-5;
}
.data-table tbody td {
    @apply border-t-2;
}
</style>
