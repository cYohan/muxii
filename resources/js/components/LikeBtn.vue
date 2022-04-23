<template>
    <div class="card-footer d-flex justify-content-between align-items-center">
        <div v-if="isAuthenticated">
            <button @click="toogle()" :class="getBtn">{{ getText }}</button>
        </div>
        <div v-else>

            <small class="text-muted">Inicia sesión para interactuar</small>
        </div>


        <div class="text-secundary me-2">

            <p class="card-text">Likes: <small class="text-muted" v-text="model.likes_count"></small></p>
        </div>
    </div>
</template>

<script>
    export default {

        props: {
            model:{
                type: Object,
                required: true
            },
            url:{
                type: String,
                required: true
            }
        },

        methods: {

            toogle(){
                let method = this.model.is_liked ? 'delete' : 'post';

                axios[method](this.url)
                .then(res => {
                    this.model.is_liked = ! this.model.is_liked;
                    if(method === 'post'){
                        this.model.likes_count ++;
                    }else{
                        this.model.likes_count --;
                    }
                })
            }

        },
        computed: {
            getText(){
                return this.model.is_liked ? 'No me gusta' : 'Me gusta';
            },
            getBtn(){
                return this.model.is_liked ? 'btn btn-outline-primary' : 'btn btn-primary';
            }
        }

    }
</script>

<style lang="scss" scoped>

</style>
