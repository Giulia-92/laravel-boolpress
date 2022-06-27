<template>
<div>
    <h1>sono il Main</h1>
    <ul>
        <li v-for="(post,index) in posts" :key="index">
            {{post.title}}
           <a href="#" @click="getDetail(post.slug)">Vedi dettaglio</a>
           <span v-if="post.detail">{{post.detail.slug}}</span>
            
        </li>
        <li></li>
    </ul>
    </div>
   
</template>

<script>


export default {
    name:'MainComponent',
    data(){
        return{
           posts :[],
           detail:null
        }
    },
    methods:{
        getoDetail(slug){
             axios.get('/api/posts/'+slug).then((response)=>{
            console.log(response.data);
            this.posts[index].detail = response.data;
        })
        }
    },
    created(){
        axios.get('/api/posts').then((response)=>{
            console.log(response.data);
            this.posts = response.data;
        })
    }
}
</script>
