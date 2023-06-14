<template>
    <div class="login">
        <transition mode="out-in" 
			enter-active-class="animated bounce" 
			leave-active-class="animated shake"
        >
            <router-view></router-view>
        </transition>
    </div>
</template>

<script>
    export default {
        name: 'login',
        // beforeCreate: function () {
        //     this.$options.components.Card = require('@/components/templates/Card.vue').default
        // }
    }
</script>

<style >
.login {
    max-width: 100vw;
    /* max-height: 100vh; */
    min-height: 100vh;
    background: #3711A6;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
</style>