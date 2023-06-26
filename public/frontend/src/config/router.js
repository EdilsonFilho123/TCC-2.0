import Vue from 'vue'
import Router from 'vue-router'

import HomeTemplate from '@/components/layouts/HomeTemplate'
import LoginTemplate from '@/components/layouts/LoginTemplate'
import ProjectTemplate from '@/components/layouts/ProjectTemplate'

import Login from '@/components/pages/Login'
import Cadastro from '@/components/pages/Cadastro'
import Home from '@/components/pages/Home'
import LGPD from '@/components/pages/LGPD'
import Painel from '@/components/pages/Painel'
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
                    name: 'home',
                    path: '',
                    component: Home
                },
                {
                    name: 'project',
                    path: 'project',
                    component: Project
                },
                {
                    name: 'lgpd',
                    path: '/lgpd',
                    component: LGPD
                },
                {
                    name: 'painel',
                    path: '/painel',
                    component: Painel
                },
                {
                    path: '/project',
                    component: ProjectTemplate,
                    children: [
                        {
                            name: 'login',
                            path: '/1',
                            component: Login
                        },
                        // {
                        //     name: 'cadastro',
                        //     path: '/2',
                        //     component: Cadastro
                        // }
                    ]
                }
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