<template>
    <div>
        <AppHeader />
        <main>
            <div class="container">
                <PostList />
            </div>
        </main>
    </div>
</template>


<script>

import AppHeader from './AppHeader.vue';
import PostList from './posts/PostsList.vue';

export default {
    name: "App",
    components: {
        AppHeader,
        PostList,
    }
};
</script>