<template>
    <b-button variant="primary" :style="{ width, height }">{{ txt }}</b-button>
</template>

<script>
    export default {
        props: {
            txt: { type: String },
            width: { type: String, default: '100%' },
            height: { type: String, default: 'auto' },
        }
    }
</script>

<style scoped>
    button{
        border-color: #3711A6;
        background-color: #3711A6;
        
        display: flex;
        align-items: center;
        justify-content: center;

        font-size: 14px;
        font-weight: 400;
        font-family: 'Domine', serif;
    }
    button:hover{
        background-color: rgba(55, 17, 166, 0.9);
        border-color: rgba(55, 17, 166, 0.9);
    }
</style>