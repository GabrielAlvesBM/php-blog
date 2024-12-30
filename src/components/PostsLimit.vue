<script setup lang="ts">
import PostArticle from './PostArticle.vue';
import axios from 'axios';
import { onMounted, ref } from 'vue';

const posts = ref([])

const { limit } = defineProps({
  limit: {
    type: String,
    required: true,
  },
})

onMounted(async () => {
  axios.get(`http://localhost/php-blog/server/posts/list/0/${limit}`)
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