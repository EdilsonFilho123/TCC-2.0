<template>
    <header class="header">
        <a class="toggle" v-if="isLogged" @click="toggleMenu">
            <i class="fa fa-lg" :class="!isMenuVisible ? 'fa-bars' : 'fa-times'"></i>
        </a>
        <h1 class="title">
            <router-link to="/">LIE</router-link>
        </h1>
        <UserController v-if="isLogged" />
        <button v-else class="btn" @click="session_init">Iniciar sessão</button>
    </header>
</template>

<script>
    import UserController from '../templates/UserController.vue';

    export default {
        name: "Header",
        components: { UserController },
        computed: {
            isLogged() {
                return !!this.$store.state.user
            },
            isMenuVisible(){
                return this.$store.state.isMenuVisible;
            }
        },
        methods: {
            toggleMenu() {
                this.$store.commit("toggleMenu");
            },
            session_init(){
                this.$router.push({ name: 'login' })
            }
        }
    }
</script>

<style scoped>
    .header {
        grid-area: header;
        /* background: linear-gradient(to right, #FFF, #49a7c1); */
        background-color: #FFF;

        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .title {
        font-size: 1.7rem;
        color: #3711A6;
        font-weight: 100;
        /* flex-grow: 1; */
        text-align: center;
        padding: 0 20px;
        margin: 0;
    }

    .title a, .title a:hover {
        font-family: 'Libre Baskerville', serif;
        font-family: 'Encode Sans', sans-serif;
        color: #3711A6;
        text-decoration: none;
        font-weight: bold;
    }

    header.header > a.toggle {
        width: 70px;
        height: 100%;
        color: #3711A6;;
        justify-self: flex-start;
        text-decoration: none;
        font-size: 18px;

        display: flex;
        justify-content: center;
        align-items: center;
    }

    header.header > a.toggle:hover {
        /* color: #ffffff; */
        background-color: rgba(0, 0, 0, 0.2);
    }

    .btn{
        font-family: 'Libre Baskerville', serif;
        font-size: 14px !important;
        margin: 0px 10px;
        background-color: #DADADA;
        padding: 3px 10px;
        /* border: 1px solid black; */
    }
</style>