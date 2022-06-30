<template>
    <section>
        <ul v-if="posts.lenght > 0">
            <li v-for="(post, index) in posts" :key="post.id">
                {{ index }} - {{ post.title }}
                <router-link
                    :to="{ name: 'single-post', params: { slug: post.slug } }"
                    >Vedi Post</router-link
                >
            </li>
        </ul>
    </section>
</template>

<script>
export default {
    name: "PostsComponent",
    data() {
        return {
            posts: [],
        };
    },
    created() {
        axios.get("/api/posts").then((response) => {
            this.posts = response.data;
        });
    },
};
</script>
<style lang="scss"></style>
