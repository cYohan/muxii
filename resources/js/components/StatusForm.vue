<template>
    <div class="card b-0">
        <form @submit.prevent="submit" v-if="isAuthenticated">

            <input type="text" placeholder="Titulo" v-model="formData.title" name="title" class="form-control" id="title">
            <div class="card-body">
                <textarea v-model="formData.body"
                class="form-control border-0"
                name="body"
                id="body"
                cols="5"
                rows="5"
                :placeholder="`¡Sorprendenos!`"></textarea>
            </div>

            <input type="hidden" value="write" name="type" v-model="formData.type">

            <div class="card-footer">
                <button class="btn btn-primary"
                data-bs-dismiss="modal"
                aria-label="Close">Publicar</button>
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
                formData: {
                    body: '',
                    title: '',
                    type: 'write',
                }
            }
        },
        methods:{
            submit(){

                const formData = new FormData();

                formData.append('body', this.formData.body);
                formData.append('title', this.formData.title);
                formData.append('type', this.formData.type);

               /* alert('enviando ....'); */
               axios.post('/statuses', formData)
                    .then(res => {
                        /* console.log(res.data); */
                        /* this.statuses.push(res.data); */
                        EventBus.$emit('status-created', res.data.data);
                        this.formData.body = '';
                        this.formData.title = '';

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
