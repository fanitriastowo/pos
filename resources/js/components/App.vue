<template>
    <div>
        <h3>list of data</h3>
        <crud-component
            v-for="crud in cruds"
            v-bind="crud"
            :key="crud.id"
            ></crud-component>
    </div>
</template>
<script>
    function Crud({ id, color, name}) {
        this.id = id;
        this.color = color;
        this.name = name;
    }

  import CrudComponent from './Crud.vue';

  export default {
    data() {
      return {
        cruds: [],
        working: false
      }
    },
    methods: {
      read() {
        this.mute = true;
        window.axios.get('/api/cruds').then(({ data }) => {
          data.forEach(crud => {
            this.cruds.push(new Crud(crud));
          });
        });
      },
    },
    components: {
      CrudComponent
    },
    created() {
      this.read();
    }
  }
</script>
