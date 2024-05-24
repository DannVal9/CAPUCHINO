import { createRouter, createWebHistory, RouteRecordRaw } from 'vue-router'
import HomeView from '../views/capuchino.vue'

const routes: Array<RouteRecordRaw> = [
  {
    path: '/',
    name: 'home',
    component: HomeView
  },
  {
    path: '/login',
    name: 'login',
    component: () => import('../views/pages/login.vue')
  }
  ,
  {
    path: '/registro',
    name: 'registro',
    component: () => import('../views/pages/registro.vue')
  },
  {
    path: '/recuperar',
    name: 'recuperar',
    component: () => import('../views/pages/recuperar.vue')
  },
  {
    path: '/perfil',
    name: 'perfil',
    component: () => import('../views/pages/perfil.vue')
  }
  ,
  {
    path: '/lives',
    name: 'lives',
    component: () => import('../views/pages/Lives.vue')
  },
  {
    path: '/curso',
    name: 'curso',
    component: () => import('../views/pages/curso.vue')
  },

  {
    path: '/cursos1',
    name: 'cursos1',
    component: () => import('../views/pages/cursos1.vue')
  }
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
