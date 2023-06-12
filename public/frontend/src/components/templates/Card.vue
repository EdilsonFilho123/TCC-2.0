<template>
    <!-- <div class="card"> -->
    <b-card title="LIE" style="max-width: 50vw; text-align: center; position: relative;" class="mb-2">
        <slot></slot>
        
        <div class="mb-2"></div>
        <div class="footer"><slot name="footer"></slot></div>
    </b-card>
    <!-- </div> -->
</template>

<script>
export default {
}
</script>

<style>
    .card-title {
        font-family: 'Libre Baskerville', serif;
        font-family: 'Encode Sans', sans-serif;

        font-size: 42px;
        font-weight: bold;

        color: #3711A6;
    }
    .footer {
        position: absolute;
        bottom: 0px;

        width: calc(100% - 40px);

        font-size: 10px;
        color: gray;

        /* display: inline-block;
        text-align: center; */
        margin: 0 auto;
    }
</style>