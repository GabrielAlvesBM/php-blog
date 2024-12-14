<script setup>
</script>

<template>
  <nav class="nav">
    <RouterLink to="/">Página Inicial</RouterLink>
    <RouterLink to="/posts">Posts</RouterLink>
    <RouterLink to="/categories">Categorias</RouterLink>
  </nav>
</template>

<style scoped>
.nav {
  padding: 0px 7.5px 30px 7.5px;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 25px;
}

a,
button {
  text-decoration: none;

  font-size: 1.1rem;

  color: var(--accent-color);
  will-change: transform, padding;

  transition:
    transform 0.2s ease-in-out,
    padding 0.45s ease;
}

button {
  background: none;
  border: none;

  cursor: pointer;
}

a:hover,
button:hover {
  padding: 0 15px;
  transform: scale(1.1);
}

@media (max-width: 540px) {
  .nav {
    flex-direction: column;
    align-content: center;
    align-items: center;
    gap: 15px;
  }

  a:hover {
    padding: 15px 0;
  }
}
</style>