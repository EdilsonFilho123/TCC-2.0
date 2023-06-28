import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
    state: {
        user: {
            id: 1,
            name: 'Edilson',
            email: "teste@gmail.com"
        },
        projects: [],
        tasks: [],
        isMenuVisible: false,
        newProject: {
            termo: '',
            titulo: '',
            descricao: '',
            participantes: [],
            prazoInicial: '',
            prazoFinal: '',
            uploads: [],
        }
    },
    getters: {
        getUser(state) {
            return state.user
        },
        getProjects(state) {
            return state.projects
        },
        getTasks(state) {
            return state.tasks
        },
        getMenuVisibility(state) {
            return state.isMenuVisible
        },
        getNewProject(state){
            return state.newProject
        },
    },
    mutations: {
        setUser(state, payload) {
            state.user = payload
        },
        setProjects(state, payload) {
            state.projects = payload
        },
        setTasks(state, payload) {
            state.tasks = payload
        },
        setMenuVisible(state, payload) {
            state.isMenuVisible = payload
        },
        toggleMenu(state) {
            state.isMenuVisible = !state.isMenuVisible;
        },
        setNewProject(state, payload) {
            state.newProject = payload;
        },
    },
    actions: {
        setUser({ commit }, payload) {
            commit('setUser', payload)
        },
        setProjects({ commit }, payload) {
            commit('setProjects', payload)
        },
        setTasks({ commit }, payload) {
            commit('setTasks', payload)
        }
    }
})