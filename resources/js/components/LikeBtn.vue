<template>
    <div class="card-footer d-flex justify-content-between align-items-center">
        <div v-if="isAuthenticated">
            <button v-if="status.is_liked" @click="unlike(status)" class="btn btn-outline-primary">No me gusta</button>
            <button v-else @click="like(status)" class="btn btn-primary">Me gusta</button>
        </div>
        <div v-else>

            <small class="text-muted">Inicia sesión para interactuar</small>
        </div>


        <div class="text-secundary me-2">

            <p class="card-text">Likes: <small class="text-muted" v-text="status.likes_count"></small></p>
        </div>
    </div>
</template>

<script>
    export default {

        props: {
            status:{
                type: Object,
                required: true
            }
        },

        methods: {

            like(status){
                axios.post(`/statuses/${status.id}/like`)
                .then(res => {
                    status.is_liked = true;
                    status.likes_count ++;
                })
            },

            unlike(status){
                axios.delete(`/statuses/${status.id}/like`)
                .then(res => {
                    status.is_liked = false;
                    status.likes_count --;
                })
            }

        }

    }
</script>

<style lang="scss" scoped>

</style>
