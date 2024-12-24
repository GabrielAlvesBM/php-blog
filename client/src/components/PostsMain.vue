<script setup>
import PostArticle from './PostArticle.vue';
import axios from 'axios';
import { onMounted, ref } from 'vue';

const posts = ref([])

onMounted(async () => {
  axios.get('http://localhost/php-blog/server/posts/list')
    .then((res) => {
      posts.value = res.data.dados
    })
    .catch((error) => {
      console.error('Erro ao buscar dados: ', error)
    })
})
</script>

<template>
  <section class="posts-section">
    <PostArticle 
      v-for="post in posts"
      :key="post.id"
      :id="post.id"
      :title="post.title"
      :description="post.short_description"
      :date="post.date"
    />
  </section>
</template>

<style scoped>
  .posts-section {
    display: grid;
    justify-items: center;
    gap: 15px;

    grid-template-columns: repeat(auto-fill, minmax(375px, 1fr));
  }

  @media (max-width: 650px) {
    .posts-section {
      grid-template-columns: 1fr;
    }
  }
</style>