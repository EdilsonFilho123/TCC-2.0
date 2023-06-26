<template>
	<router-view />
</template>

<script>
export default {
	name: "App",
}
</script>

<style>
	* {
		font-family: "Lato", sans-serif;
		box-sizing: border-box;
		margin: 0;
	}
	
	.displayNone {
		display: none;
	}

	.flexAlignCenter{
		vertical-align: middle!important;
		padding: 8.3px 4.8px!important;
		/* border: 1px solid transparent; */
	}

	.colunaControll {
		width: 200px;
		text-align: right;
		height: 100%;
		vertical-align: middle!important;
	}

	.porcentagem{
		text-align: center;
		color: #FFF;
		width: 50px;
        border-color: #3711A6;
        background-color: #3711A6;
	}
</style>