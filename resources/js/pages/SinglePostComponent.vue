<template>
    <section>
        <div v-if="post">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{post.title}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{post.content}}</h6>
                    <ul v-if="post.tags">
                        <li v-for="tag in post.tags" :key="tag.id">{{tag.name}}</li> 
                    </ul>
                </div>
    <!--<img src="`/storage/${post.image}`" alt="">-->
            </div>
        </div>
    </section>
</template>

<script >


export default {
    name:'SinglePostComponent',
    data(){
        return{
            post: null
        }
    },
    mounted(){
        const slug =this.$route.params.slug;
        axios.get(`/api/posts/${slug}`).then((response)=>{
            this.post = response.data;
        });
    }
}
</script>
<style lang="scss">

</style>
