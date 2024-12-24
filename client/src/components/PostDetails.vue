<script setup>
import { onMounted, ref } from 'vue';
import { useRoute } from 'vue-router';
import axios from 'axios';

const route = useRoute()
const postId = route.params.id

const post = ref([])

onMounted(async () => {
  axios.get(`http://localhost/php-blog/server/posts/list/${postId}`)
    .then((res) => {
      post.value = res.data.dados
    })
    .catch((error) => {
      console.error('Houve um erro ao carregar o post: ', error)
    })
})

</script>

<template>
  <header>
    <h1>{{ post.title }}</h1>
    <p class="short_description">{{ post.short_description }}</p>
  </header>

  <main>
    <p class="content">{{ post.content }}</p>
  </main>

  <footer>
    <time>{{ post.date }}</time>
  </footer>
</template>

<style scoped>
  h1 {
    font-size: 2rem;
    color: var(--accent-color);
  }

  p {
    font-weight: normal;
  }

  .short_description {
    max-width: 800px;
    margin-bottom: 25px;

    font-size: 0.9rem;

    color: var(--secondary-color-text);
  }

  .content {
    padding-left: 10px;

    font-size: 1rem;
  }

  footer {
    text-align: right;
  }

  time {
    font-size: 0.8rem;

    color: var(--secondary-color-text);
  }
</style>