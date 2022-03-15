<template>
    <div class="d-flex flex-column">
        <form @submit.prevent="addComment" class="d-flex flex-column p-2">

            <textarea name="content" v-model="newComment" class="form-control border-0"></textarea><br>
            <button class="btn btn-primary pt-2">Comentar</button>

        </form>
        <div v-for="comment in comments" :key="comment.id">
            <div class="card">
                <!--
                <div class="card-header">
                    {{ comment.user.name }}
                </div>
                -->
                <ul class="list-group list-group-flush">
                    <li class="list-group-item" >{{ comment.body }}</li>
                </ul>
            </div>


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

        data() {
            return{
                newComment: '',
                comments: this.status.comments
            }
        },

        methods: {
            addComment() {
                axios.post(`statuses/${this.status.id}/comment`, {body: this.newComment})
                .then(res =>{
                    this.newComment = '';
                    this.comments.push(res.data.data);
                })
            }
        }
    }
</script>

<style lang="scss" scoped>

</style>
