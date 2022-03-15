<template>
    <div class="col">

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

                        <div class="offcanvas offcanvas-end w-40" tabindex="-1" :id="`offcanvasRight${status.id}`" aria-labelledby="offcanvasRightLabel" style="overflow: scroll;">
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

                                <like-btn

                                    :url="`statuses/${status.id}/like`"
                                    :model="status"
                                ></like-btn>

                                <status-comments
                                    :status="status"
                                ></status-comments>

                            </div>

                        </div>

                    </div>
                </div>

            </div>

        <!--<div class="card border-0 mb-3 shadow-sm" v-for="status in statuses" v-text="status.body"></div>-->
</template>

<script>

    import LikeBtn from './LikeBtn.vue';
    import StatusComments from './StatusComments.vue';

    export default {

        props: {
            status:{
                type: Object,
                required: true
            }
        },
        components: {
            LikeBtn,
            StatusComments
        }

    }
</script>

<style lang="scss" scoped>

</style>
