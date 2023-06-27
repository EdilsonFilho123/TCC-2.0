import Vue from 'vue'
import Router from 'vue-router'

import HomeTemplate from '@/components/layouts/HomeTemplate'
import LoginTemplate from '@/components/layouts/LoginTemplate'

import Login from '@/components/pages/Login'
import Cadastro from '@/components/pages/Cadastro'
import Home from '@/components/pages/Home'
import LGPD from '@/components/pages/LGPD'
import Painel from '@/components/pages/Painel'
import Termo from '@/components/pages/project/Termo'
import Titulo from '@/components/pages/project/Titulo'
import Participantes from '@/components/pages/project/Participantes'
import Prazo from '@/components/pages/project/Prazo'
import Uploads from '@/components/pages/project/Uploads'
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
                    path: '/newProject/1',
                    name: 'termo',
                    component: Termo
                },
                {
                    path: '/newProject/2',
                    name: 'titulo',
                    component: Titulo
                },
                {
                    path: '/newProject/3',
                    name: 'participantes',
                    component: Participantes
                },
                {
                    path: '/newProject/4',
                    name: 'prazo',
                    component: Prazo
                },
                {
                    path: '/newProject/5',
                    name: 'uploads',
                    component: Uploads
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