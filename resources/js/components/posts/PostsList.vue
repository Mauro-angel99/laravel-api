<template>
    <section>
        <h3>Post</h3>
        <div class="d-flex flex-wrap justify-content-between">
            <PostCard v-for="post in posts" :key="post.id" :post="post" />
        </div>
    </section>

</template>

<style lang="scss">

</style>

<script>
import Axios from 'axios';
import PostCard from './PostCard.vue';


export default {
    name: "PostList",
    components: {
        PostCard
    },
    data() {
        return {
            posts: []
        };
    },
    methods: {
        fetchPosts() {
            Axios.get('http://127.0.0.1:8000/api/posts')
                .then((res) => {
                    this.posts = res.data
                })
        }
    },
    mounted() {
        this.fetchPosts();
    }
};
</script>