<script setup lang="ts">
import PostArticle from './PostArticle.vue';
import axios from 'axios';
import { onMounted, ref } from 'vue';
import { defineProps } from 'vue';

const posts = ref([])

defineProps({
  limit: {
    type: Number,
    required: true,
  },
})

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
  <section>
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
  section {
    display: flex;
    flex-direction: column;
    gap: 10px;
  }
</style>