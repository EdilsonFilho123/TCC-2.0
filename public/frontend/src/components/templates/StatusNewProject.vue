<template>
    <b-card>
        <div class="status">
            <div v-for="item in [0, 1, 2, 3, 4]" :key="item" @click="$router.push({ path: '/newProject/' + (item + 1) })" class="link">
                <div class="circle" :class="((nivel > item) ? 'purple' : '')"></div>
                <p>Etapa {{ item + 1 }}</p>
            </div>
        </div>
        <div class="seta mt-3">
            <div class="reta"></div>
            <!-- > -->
            <div class="ponta"></div>
        </div>
    </b-card>
</template>

<script>
    export default {
        props: ['nivel']
    }
</script>

<style scoped>
    .status{
        display: flex;
        align-items: center;
        justify-content: space-evenly;
    }

    .circle{
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background-color: #D9D9D9;
    }

    .purple{
        background-color: #3711A6;
    }

    .link{
        display: flex;
        align-items: center;
        flex-direction: column;
    }

    .seta{
        /* height: 20px; */
        display: flex;
        align-items: center;
    }

    .reta{
        width: 100%;
        height: 1px;
        background-color: #838383;
    }

    .ponta{
        width: 15px;
        height: 15px;
        border: 1px solid #838383;
        transform: rotate(45deg);
        border-bottom: transparent;
        border-left: transparent;
    }
</style>