<template>
    <div class="user">
        <div class="user-button">
            <!-- <span class="d-none d-sm-block">{{ user.name }}</span> -->
            <div class="user-img">
                <Gravatar :email="user.email" alt="User" />
            </div>
        </div>
        <div class="user-content">
            <router-link to="/admin">
                <i class="fa fa-cogs"></i> Configurações
            </router-link>
            <a href @click.prevent="logout"><i class="fa fa-sign-out"></i> Sair</a>
        </div>
    </div>
</template>

<script>
import { userKey } from '@/global'
import { mapState } from 'vuex'
import Gravatar from 'vue-gravatar'

export default {
    name: 'UserController',
    components: { Gravatar },
    computed: mapState(['user']),
    methods: {
        logout() {
            localStorage.removeItem(userKey)
            this.$store.commit('setUser', null)
            this.$router.push({ name: 'login' })
        }
    }
}
</script>

<style>
    .user {
        position: relative;
        height: 100%;
    }

    .user:hover {
        background-color: rgba(0, 0, 0, 0.2);
    }

    .user-button {
        display: flex;
        align-items: center;
        color: #3711A6;
        font-weight: 100;
        height: 100%;
        padding: 0px 20px;
    }

    /* .user-img {
        margin: 0px 10px;
    } */

    .user-img > img {
        max-height: 30px;
        border-radius: 5px;
    }

    .user:hover .user-content {
        visibility: visible;
        opacity: 1;
    }

    .user-content {
        position: absolute;
        right: 0px;
        background-color: #f9f9f9;
        min-width: 170px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        padding: 10px;
        z-index: 1;

        display: flex;
        flex-direction: column;
        flex-wrap: wrap;

        visibility: hidden;
        opacity: 0;
        transition: visibility 0s, opacity 0.5s linear;
    }

    .user-content a {
        text-decoration: none;
        color: #000;
        padding: 10px;
    }

    .user-content a:hover {
        text-decoration: none;
        color: #000;
        background-color: #EDEDED;
    }
</style>
