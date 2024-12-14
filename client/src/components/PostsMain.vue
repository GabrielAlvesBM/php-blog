<template>
  <section class="posts-section">
    <article class="post-article">
      <h2>Postagem 1</h2>
      <p>Descrição breve: Lorem ipsum dolor sit amet consectetur adipisicing elit. ab asperiores odit voluptatum vitae eius earum consequatur provident recusandae!</p>
      <time>
        <span>20:32</span> 12/12/24
      </time>
    </article>



    <article class="post-article">
      <h2>Postagem 1</h2>
      <p>Descrição breve: Lorem ipsum dolor sit amet consectetur adipisicing elit. ab asperiores odit voluptatum vitae eius earum consequatur provident recusandae!</p>
      <time>
        <span>20:32</span> 12/12/24
      </time>
    </article>
    <article class="post-article">
      <h2>Postagem 1</h2>
      <p>Descrição breve: Lorem ipsum dolor sit amet consectetur adipisicing elit. ab asperiores odit voluptatum vitae eius earum consequatur provident recusandae!</p>
      <time>
        <span>20:32</span> 12/12/24
      </time>
    </article>
    <article class="post-article">
      <h2>Postagem 1</h2>
      <p>Descrição breve: Lorem ipsum dolor sit amet consectetur adipisicing elit. ab asperiores odit voluptatum vitae eius earum consequatur provident recusandae!</p>
      <time>
        <span>20:32</span> 12/12/24
      </time>
    </article>
    <article class="post-article">
      <h2>Postagem 1</h2>
      <p>Descrição breve: Lorem ipsum dolor sit amet consectetur adipisicing elit. ab asperiores odit voluptatum vitae eius earum consequatur provident recusandae!</p>
      <time>
        <span>20:32</span> 12/12/24
      </time>
    </article>




  </section>
</template>

<style scoped>
  .posts-section {
    display: grid;
    justify-items: center;
    gap: 15px;

    grid-template-columns: repeat(auto-fill, minmax(375px, 1fr));
  }

  .post-article {
    max-width: 100%;
    padding: 5px 10px 10px 10px;

    background-color: var(--card-background);

    transition: background-color 0.1s ease;
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
    display: block;
    padding-right: 5px;

    font-size: 0.85rem;
    font-weight: normal;
    text-align: right;

    white-space: nowrap;

    color: var(--secondary-color-text);
  }

  .post-article span {
    font-weight: normal;
  }

  @media (max-width: 650px) {
    .posts-section {
      grid-template-columns: 1fr;
    }

    .post-article {
      padding: 10px 15px 15px 15px;
    }
  }
</style>