import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
    state: {
        user: {
            id: 1,
            name: 'Edilson',
            email: "teste@gmail.com",
            nivel: 0
        },
        projects: [],
        tasks: [],
        isMenuVisible: false
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
        }
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