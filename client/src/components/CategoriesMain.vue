<template>
  <section>
    <ul class="categories-list">
      <RouterLink to="/categories/:categorie"><li>Tecnologia</li></RouterLink>
      <RouterLink to="/categories/:categorie"><li>PHP</li></RouterLink>
      <RouterLink to="/categories/:categorie"><li>JavaScript</li></RouterLink>
      <RouterLink to="/categories/:categorie"><li>Java</li></RouterLink>
      <RouterLink to="/categories/:categorie"><li>Docker</li></RouterLink>
      <RouterLink to="/categories/:categorie"><li>VPS</li></RouterLink>
      <RouterLink to="/categories/:categorie"><li>Design</li></RouterLink>
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