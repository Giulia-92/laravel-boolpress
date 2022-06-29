<template>
    <section>
        <div v-if="post">
            <div class="card" style="width: 18rem">
                <div class="card-body">
                    <h5 class="card-title">{{ post.title }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">
                        {{ post.content }}
                    </h6>
                    <ul v-if="post.tags">
                        <li v-for="tag in post.tags" :key="tag.id">
                            {{ tag.name }}
                        </li>
                    </ul>
                </div>
                <!--<img src="`/storage/${post.image}`" alt="">-->
            </div>
        </div>
        <div>
            <form @submit.prevent="addComment()">
                <label for="username">inserisci nome</label>
                <input v-model="formData.username" type="text" />
                <label for="content">inserisci contenuto</label>
                <input v-model="formData.username" type="text" />
                <button type="submit">invia</button>
            </form>
        </div>
        <div v-if="post.comment.length > 0">
            <h4>Comment:</h4>
            <div v-for="comment in post.comments" :key="comment.id">
                {{ comment.content }}
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "SinglePostComponent",
    data() {
        return {
            post: null,
            formData: {
                username: "",
                content: "",
                post_id: "",
            },
        };
    },
    methods: {
        addComment() {
            axios.post("/api/comments", this.formData);
            then((response) => {
                console.log(response);
                this.posdt.comments.push(response.data);
            });
        },
    },

    mounted() {
        const slug = this.$route.params.slug;
        axios
            .get(`/api/posts/${slug}`)
            .then((response) => {
                this.post = response.data;
                this.formData.post_id = this.post.id;
            })
            .catch((error) => {
                //se è presente una function il this non funziona, si deve mettere una arrow function
                //handle error
                console.log(error);
                this.$router.push({
                    name: "page-404",
                });
            });
    },
};
</script>
<style lang="scss"></style>
