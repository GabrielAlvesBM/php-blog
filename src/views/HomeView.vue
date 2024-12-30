<script setup>
import HomeMain from '@/components/HomeMain.vue';
import PostsLimit from '@/components/PostsLimit.vue';
</script>

<template>
  <main>
    <HomeMain />

    <h3>Posts mais recentes:</h3>
    <PostsLimit limit="5" />
    <RouterLink to="/posts">...</RouterLink>
  </main>
</template>

<style scoped>
main {
  display: flex;
  flex-direction: column;
  align-items: center;
}

h3 {
  align-self: flex-start;
  margin-top: 25px;

  font-size: 1.3rem;

  background-color: var(--card-background);
}

a {
  text-decoration: none;

  color: var(--primary-color);
}
</style>
