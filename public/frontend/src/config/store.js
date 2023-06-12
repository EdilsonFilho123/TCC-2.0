import Vue from 'vue'
import Vuex from 'vuex'

// import carrinho from './modules/carrinho'
// import parametros from './modules/parametros'

Vue.use(Vuex)

export default new Vuex.Store({
    state: {
        nome: 'Maria',
        sobrenome: 'Silva',
        // cor1: '3711A6',
        // cor2: '3711A6'
    },
    // modules: { carrinho, parametros }
})