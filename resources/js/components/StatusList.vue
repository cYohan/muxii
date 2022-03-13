<template>


        <div class="row row-cols-1 row-cols-md-3 g-4">

            <div class="col"  v-for="status in statuses" :key="status.id">

                <div class="m-1 card">
                    <div class="card-body d-flex flex-column">
                        <div class="d-flex align-items-center mb-3">
                            <img class="rounded-circle mr-3 ml-3 me-2 shadow-sm" width= "40px" src="/img/avatar-default.png" alt="">
                            <div>
                                <h5 class="mb-1" v-text="status.user_name"></h5>

                            </div>
                        </div>
                        <p class="card-text text-secondary" v-text="status.body"></p>
                        <button class="btn btn-primary w-50" type="button" data-bs-toggle="offcanvas" :data-bs-target="`#offcanvasRight${status.id}`" aria-controls="offcanvasRight">Ver</button>

                        <div class="offcanvas offcanvas-end" tabindex="-1" :id="`offcanvasRight${status.id}`" aria-labelledby="offcanvasRightLabel">
                            <!--
                            <div class="offcanvas-header">
                                <h5 id="offcanvasRightLabel" v-text="status.user_name"></h5>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body" v-text="status.body">

                            </div>
                            -->
                            <button type="button" class="btn-close text-reset m-4" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            <div class="card w-75 mx-auto mt-4">
                                <div class="card-body">

                                    <h5 class="card-title" v-text="status.user_name"></h5>
                                    <p class="card-text"><small class="text-muted" v-text="status.ago"></small></p>
                                    <p class="card-text" v-text="status.body"></p>
                                </div>
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
                            </div>

                        </div>

                    </div>
                </div>

            </div>

        <!--<div class="card border-0 mb-3 shadow-sm" v-for="status in statuses" v-text="status.body"></div>-->



    </div>
</template>

<script>
    export default {

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
