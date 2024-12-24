<script setup>
import { defineProps } from 'vue';

defineProps({
  id: {
    type: Number,
    required: true,
  },
  title: {
    type: String,
    required: true,
  },
  description: {
    type: String,
    required: true,
  },
  date: {
    type: String,
    required: true,
  },
})
</script>

<template>
  <RouterLink :to="`/posts/${id}`">
    <article class="post-article">
      <h2>{{ title }}</h2>
      <p>{{ description }}</p>
      <time> {{ date }} </time>
    </article>
  </RouterLink>
</template>

<style scoped>
  a {
    width: 100%;

    text-decoration: none;
    color: var(--text-color);

    cursor: default;
  }

  .post-article {
    position: relative;
    max-width: 100%;
    height: 100%;
    
    padding: 5px 10px 25px 10px;

    background-color: var(--card-background);
  }

  .post-article:hover {
    background-color: var(--card-hover);
  }

  .post-article h2 {
    font-size: 1.75rem;
    color: var(--accent-color);
  }

  .post-article p {
    font-weight: normal;
  }

  .post-article time {
    position: absolute;

    display: block;
    padding-right: 5px;
    bottom: 5px;
    right: 5px;

    font-size: 0.85rem;
    font-weight: normal;

    white-space: nowrap;

    color: var(--secondary-color-text);
  }

  @media (max-width: 650px) {
    .post-article {
      padding: 10px 15px 15px 15px;
    }
  }
</style>