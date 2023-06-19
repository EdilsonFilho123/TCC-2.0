<template>
    <aside class="menu" v-show="isMenuVisible">
    </aside>
</template>

<script>
    export default {
        name: 'Menu',
        data(){
            return {
                treeFilter: ''
            }
        },
        computed: {
            isMenuVisible(){
                return this.$store.state.isMenuVisible;
            }
        }
    }
</script>

<style>
    .menu{
        grid-area: menu;
        /* background: linear-gradient(to right, #232526, #414345); */
        background-color: #fff;

        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
    }

    .menu a, 
    .menu a:hover{
        color: #fff;
        text-decoration: none;
    }
</style>