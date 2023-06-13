<template>
    <!-- <div class="card"> -->
    <b-card title="LIE" style="min-width: 50%; text-align: center; position: relative;" class="mb-2">
        <div class="container">
            <div class="mb-2"><slot></slot></div>
            <div class="footer"><slot name="footer"></slot></div>
        </div>
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
        left: 0px;

        width: 100%;

        font-size: 10px;
        color: gray;
    }
</style>