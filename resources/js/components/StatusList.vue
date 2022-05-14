<template>

        <div>

            <div class="card border-success border-4 text-white bg-dark mb-3 break-inside
      max-w-sm
      w-full
      text-left
      my-2
      p-1
      row-span-1
      cursor-pointer" style="max-width: 18rem;">
                <div class="card-header" style="font-size: 1.5em;">¡Nuestros cómics!</div>
                <div class="card-body">

                    <p class="card-text">En Muxii Studio tenemos un equipo creador de cómics para diferentes propósitos, de entretenimiento o educativos, checa nuestro más reciente lanzamiento: "COOPERAMANÍA"</p>
                    <br />
                    <a href="/book/comics" class="btn btn-primary">Leer</a>

                </div>
            </div>

            <div class="card border-success border-4 text-white bg-dark mb-3 break-inside
      max-w-sm
      w-full
      text-left
      my-2
      p-1
      row-span-1
      cursor-pointer" style="max-width: 18rem;">
                <div class="card-header" style="font-size: 1.5em;" >Nuevos Spin-offs</div>
                <div class="card-body">

                    <p class="card-text">Si eres un apasionado por la lectura y quieres saber un poco más
                        acerca del universo de The Mad Squad, es hora de que leas nuestros nuevos spin-offs</p>
                    <br />
                    <a href="/book/spin-offs" class="btn btn-primary">Leer</a>

                </div>
            </div>

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
