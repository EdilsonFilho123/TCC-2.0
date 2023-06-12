<template>
    <div class="line">
        <hr>
        <span class="text">{{ txt }}</span>
    </div>
</template>

<script>
    export default {
        props: [ 'txt' ]
    }
</script>

<style scoped>
    .line {
        position: relative;

        display: flex;
        align-items: center;
        justify-content: center;
    }

    .line hr {
        flex-grow: 1;
        border: none;
        border-bottom: 1px solid #C8C8C8;
    }

    .text {
        position: absolute;
        padding: 0 10px;
        /* top: 50px; */

        color: #C8C8C8;
        background-color: #fff;
    }
</style>