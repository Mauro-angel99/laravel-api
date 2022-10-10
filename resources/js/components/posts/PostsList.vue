<template>
    <section>
        <h3>Post</h3>
        <ul>
            <li v-for="post in posts" :key="post.id">{{ post.title }}</li>
        </ul>
    </section>

</template>

<style lang="scss">

</style>

<script>
import Axios from 'axios';

export default {
    name: "PostList",
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