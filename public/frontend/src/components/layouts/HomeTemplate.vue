<template>
    <div id="home">
        <header />
		<menu />
        <router-view></router-view>
		<footer />
    </div>
</template>

<script>
    export default {
        
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
		grid-template-areas:
			"header header"
			"content content"
			"footer footer";
	}
</style>