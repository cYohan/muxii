<template>

        <div class="row row-cols-1 row-cols-md-3 g-4">

            <StatusListItems
                  v-for="status in statuses"
                  :status="status"
                  :key="status.id"
            ></StatusListItems>

        </div>
</template>

<script>
    import StatusListItems from './StatusListItems.vue';

    export default {

        components: {
            StatusListItems
        },

        data(){
            return{
                statuses: []
            }
        },
        mounted() {
            axios.get('/statuses')
                .then(res => {
                    this.statuses = res.data.data;
                })
                .catch(err => {
                    console.log(err.response.data)
                });
            EventBus.$on('status-created', status=> {
                this.statuses.unshift(status);
            });

        },

    }
</script>

<style lang="scss" scoped>

</style>
