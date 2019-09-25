<template>
    <div class="row">
        <div class="col-1">
            <p>image here</p>
        </div>
        <div class="col-2">
            <p>Name: {{ name | properCase }}</p>
            <select @change="update">
                <option
                        v-for="col in [ 'red', 'green' ]"
                        :value="col"
                        :key="col"
                        :selected="col === color ? 'selected' : ''"
                >{{ col | properCase }}</option>

            </select>
            <button @click="del">Delete</button>
        </div>
    </div>
</template>
<script>
export default {
    methods: {
      update(val) {
        this.$emit('update', this.id, val.target.selectedOptions[0].value);
      },
      del() {
        this.$emit('delete', this.id);
      }
    },
    props: ['id', 'color', 'name'],
    filters: {
        properCase(string) {
            return string.charAt(0).toUpperCase() + string.slice(1);
        }
    }
}
</script>
