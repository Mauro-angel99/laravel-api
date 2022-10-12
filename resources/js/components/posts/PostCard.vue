<template>
    <div class="card">
        <h4>{{ post.title }}</h4>
        <img :src="post.image" alt="">
        <p>{{ post.content }}</p>
    </div>
</template>

<style lang="scss">
.card {
    width: 350px;
    padding: 20px;
    text-align: center;
}
</style>

<script>

export default {
    name: "PostList",
    props: {
        post: Object,
    },
};
</script>