<template>
    <div class="col">

                <div class="m-1 card">
                    <div class="card-body d-flex flex-column">
                        <div class="d-flex align-items-center mb-3">
                            <img class="rounded-circle mr-3 ml-3 me-2 shadow-sm" width= "40px" :src="status.user.avatar" :alt="status.user.name">
                            <div>
                                <h5 class="mb-1"><a :href="status.user.link" v-text="status.user.name"></a></h5>

                            </div>
                        </div>
                        <p class="card-text text-secondary" v-text="status.title"></p>
                        <div class="images mb-2">
                            <div v-for="image in images" :key="image.id">
                                <div class="item">
                                    <img :src="`/storage/media/${status.id}/${image.file_name}`" class="img-fluid" alt="img">
                                </div>
                            </div>
                        </div>
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

                                    <h3 class="mb-1" v-text="status.title"></h3>
                                    <h5 class="mb-1"><a :href="status.user.link" v-text="status.user.name"></a></h5>
                                    <p class="card-text"><small class="text-muted" v-text="status.ago"></small></p>
                                    <p class="card-text" v-text="status.body"></p>

                                    <div class="images mb-2">
                                        <div v-for="image in images" :key="image.id">
                                            <div class="item">
                                                <img :src="`/storage/media/${status.id}/${image.file_name}`" class="img-fluid" alt="img">
                                            </div>
                                        </div>
                                    </div>
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
         data(){
            return {
                images: this.status.images
            }
        },
        components: {
            LikeBtn,
            StatusComments
        }

    }
</script>

<style lang="scss" scoped>
.item {
        width: 100px;
        float: left;
    }
    .item img {
        display: block;
        width: 100%;
        padding: 0px 2px 0px 2px;
    }

</style>
