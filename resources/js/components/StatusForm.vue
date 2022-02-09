<template>
    <div class="card">
        <form @submit.prevent="submit" v-if="isAuthenticated">
            <div class="card-body">
                <textarea v-model="body"
                class="form-control border-0"
                name="body"
                id="body"
                cols="5"
                rows="5"
                :placeholder="`¿En qué estas pensando?`"></textarea>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary">Publicar</button>
            </div>
        </form>
        <div v-else class="card-body">
            <a href="/login" class="link-danger text-center"><p class="my-auto">Necesitas iniciar sesión en una cuenta para poder hacer publicaciones</p></a>
        </div>
        <!-- <div v-for="status in statuses" v-text="status.body"></div> -->
    </div>
</template>

<script>
    export default {

        data(){
            return {
                body: '',
                /* statuses: [] */
            }
        },
        methods:{
            submit(){
               /* alert('enviando ....'); */
               axios.post('/statuses', {body: this.body})
                    .then(res => {
                        /* console.log(res.data); */
                        /* this.statuses.push(res.data); */
                        EventBus.$emit('status-created', res.data.data);
                        this.body = '';
                    })
                    .catch(err => {
                        console.log(err.response.data)
                    })
            }
        }
    }
</script>

<style lang="scss" scoped>

</style>
