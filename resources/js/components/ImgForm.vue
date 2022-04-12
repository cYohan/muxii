<template>
    <div class="card b-0">
        <form @submit.prevent="submit" v-if="isAuthenticated">
            <div class="card-body">
                <input type="text" placeholder="Titulo" v-model="formData.body" name="body" class="form-control" id="body">
                <file-pond
                    name="imagenes"
                    ref="pond"
                    label-idle="Arrastra aquí tus archivos aqui ..."
                    max-file="1"
                    allow-multiple="true"
                    instant-upload="false"
                    v-on:updatefiles="handleFilePondUpdateFile"
                    v-on:init="handleFilePondInit"
                    class="mt-2"
                />
            </div>
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

    /* Importar la libreia de Filepond para Vue */

    import vueFilePond from 'vue-filepond';

    /* Importar los estilos css de Filepond */

    import 'filepond/dist/filepond.min.css';

    /* Importar los estilos css de Filepond */

    import 'filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css';

    import FilePondPluginFileValidateType from 'filepond-plugin-file-validate-type';
    import FilePondPluginImagePreview from 'filepond-plugin-image-preview';

    /* Creamos el componente */

    const FilePond = vueFilePond(FilePondPluginFileValidateType, FilePondPluginImagePreview);

    export default {

        components: {
            FilePond
        },
        data(){
            return{
                myFiles: [],
                formData: {
                    body: '',
                }
            }
        },
        methods:{
            //Manejo de un array de imagenes
            handleFilePondUpdateFile(files){
                this.myFiles = files.map(files => files.file)
            },

            submit(){

                const formData = new FormData();

                formData.append('body', this.formData.body);

                for (var i=0; i < this.myFiles.length; i++) {
                    let file = this.myFiles[i];
                    formData.append("files[" + i + "]", file);
                }

               /* alert('enviando ....'); */
               axios.post('/statuses', formData)
                    .then(res => {
                        /* console.log(res.data); */
                        /* this.statuses.push(res.data); */
                        EventBus.$emit('status-created', res.data.data);
                        this.body = '';
                        this.myFiles = [];
                    })
                    .catch(err => {
                        console.log(err.response.data)
                    })
            },
            handleFilePondInit : function(){
                console.log('FilePond has initialized');
            }
        }

    }
</script>

<style lang="scss" scoped>

</style>
