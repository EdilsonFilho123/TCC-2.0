<template>
    <div id="home" :class="{'hide-menu': !isMenuVisible || !user}">
        <Header />
		<Menu />
        <div class="content"><router-view></router-view></div>
		<Footer />
    </div>
</template>

<script>
	import Footer from '../templates/Footer.vue';
	import Header from '../templates/Header.vue';
	import Menu from '../templates/Menu.vue';

    export default {
		components: { Header, Footer, Menu },
		computed: {
			isMenuVisible(){
                return this.$store.state.isMenuVisible;
			},
			user(){
                return this.$store.state.user;
			}
		}
	}
</script>

<style scoped>
    #home {
		-webkit-font-smoothing: antialiased;
		-moz-osx-font-smoothing: grayscale;
        max-width: 100vw;
        /* max-height: 100vh; */
        min-height: 100vh;
        background: #F0F0F0;
        
		display: grid;
		grid-template-rows: 60px 1fr 40px;
		grid-template-columns: 300px 1fr;
		grid-template-areas:
			"header header"
			"menu content"
			"menu footer";
    }

	#home.hide-menu {
		grid-template-columns: 1fr;
		grid-template-areas:
			"header"
			"content"
			"footer";
	}

	/* .content{
		width: 100%;
		background-color: chocolate;
	} */
</style>