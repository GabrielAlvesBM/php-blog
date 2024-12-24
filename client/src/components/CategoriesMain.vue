<template>
  <section>
    <ul class="categories-list">
      <RouterLink to="/categories/tecnologia"><li>Tecnologia</li></RouterLink>
      <RouterLink to="/categories/php"><li>PHP</li></RouterLink>
      <RouterLink to="/categories/javascript"><li>JavaScript</li></RouterLink>
      <RouterLink to="/categories/java"><li>Java</li></RouterLink>
      <RouterLink to="/categories/docker"><li>Docker</li></RouterLink>
      <RouterLink to="/categories/vps"><li>VPS</li></RouterLink>
      <RouterLink to="/categories/design"><li>Design</li></RouterLink>
    </ul>
  </section>
</template>

<style scoped>
section {
  text-align: center;
}

.categories-list {
  font-size: 1.5rem;
  list-style-type: none;
}

.categories-list li:hover {
  background-color: var(--hover-color);
}

.categories-list a {
  text-decoration: none;
  cursor: default;

  color: var(--color-text);
}
</style>