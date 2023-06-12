import Vue from 'vue'
import Router from 'vue-router'

import HomeTemplate from '@/components/layouts/HomeTemplate'
import LoginTemplate from '@/components/layouts/LoginTemplate'

import Login from '@/components/pages/Login'
import Cadastro from '@/components/pages/Cadastro'
import Project from '@/components/Project'

Vue.use(Router)

const rotas = new Router({
    mode: "history",
    routes: [
        {
            path: '/',
            component: HomeTemplate,
            children: [
                {
                    name: 'project',
                    path: 'project',
                    component: Project
                },
            ]
        },
        {
            path: '/',
            component: LoginTemplate,
            children: [
                {
                    name: 'login',
                    path: 'login',
                    component: Login
                },
                {
                    name: 'cadastro',
                    path: 'cadastro',
                    component: Cadastro
                }
            ]
        },
        {
            path: '/redirecionar',
            redirect: '/usuario'
        },
        {
            path: '*',
            redirect: '/'
        }
    ]
})

// rotas.beforeEach((to, from, next) => {
//     next()
// })

export default rotas;