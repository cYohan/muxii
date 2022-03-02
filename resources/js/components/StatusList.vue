<template>
    <div class="row row-cols-1 row-cols-md-3 g-4" data-masonry='{"percentPosition": true }'>

        <div class="col"  v-for="status in statuses">

            <div class="m-1 card">
                <div class="card-body d-flex flex-column">
                    <div class="d-flex align-items-center mb-3">
                        <img class="rounded-circle mr-3 ml-3 me-2 shadow-sm" width= "40px" src="/img/avatar-default.png" alt="">
                        <div>
                            <h5 class="mb-1" v-text="status.user_name"></h5>
                            <div class="small text-muted" v-text="status.ago"></div>
                        </div>
                    </div>
                    <p class="card-text text-secondary" v-text="status.body"></p>
                </div>
            </div>

        </div>
        <!-- <div class="card border-0 mb-3 shadow-sm" v-for="status in statuses" v-text="status.body"></div> -->

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

        }

    }
</script>

<style lang="scss" scoped>

</style>
