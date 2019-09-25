<template>
    <h3>Name: {{ name | properCase }}</h3>
</template>
<script>
export default {
    props: ['id', 'color', 'name'],
    filters: {
        properCase(string) {
            return string.charAt(0).toUpperCase() + string.slice(1);
        }
    }
}
</script>
