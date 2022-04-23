<template>
    <div class="d-flex flex-column">
        <form @submit.prevent="addComment" class="d-flex flex-column p-2" v-if="isAuthenticated">

            <textarea name="content" v-model="newComment" class="form-control border-0"></textarea><br>
            <button class="btn btn-primary pt-2">Comentar</button>

        </form>
        <div v-for="comment in comments" :key="comment.id" class="m-1">

            <div class="d-flex align-items-center mb-3 border-0 shadow-sm p-2">
                <img class="rounded-circle mr-3 ml-3 me-2 shadow-sm" width= "40px" :src="comment.user.avatar" :alt="status.user.name">
                <div>
                    <h5 class="mb-1"><a :href="status.user.link" v-text="status.user.name"></a></h5>
                    <p>{{ comment.body }}</p>
                </div>
            </div>

            <like-btn
                :model="comment"
                :url="`comments/${comment.id}/likes`"
            ></like-btn>

        </div>
    </div>
</template>

<script>
    import LikeBtn from './LikeBtn.vue';
    export default {
        props: {
            status:{
                type: Object,
                required: true
            }
        },
        components: {
            LikeBtn,
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
                .catch(err => {
                    console.log(err.response.data)
                })
            }
        }

    }
</script>

<style lang="scss" scoped>

</style>
