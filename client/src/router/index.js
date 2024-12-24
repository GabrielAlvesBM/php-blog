import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView,
    },
    {
      path: '/posts',
      name: 'posts',
      component: () => import('../views/PostsView.vue'),
    },
    {
      path: '/posts/:id',
      name: 'postDetails',
      component: () => import('../views/PostView.vue'),
      props: true,
    },
    {
      path: '/categories',
      name: 'categories',
      component: () => import('../views/CategoriesView.vue'),
    },
  ],
})

export default router
