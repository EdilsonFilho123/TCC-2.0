<template>
    <Card>
        <b-card-text>
            Some quick example text to build on the card title and make up the bulk of the card's content.
        </b-card-text>

        <Divisor txt="ou"/>

        <b-card-text>
            Some quick example text to build on the card title and make up the bulk of the card's content.
        </b-card-text>

        <b-button>Go somewhere</b-button>
    </Card>
</template>

<script>
    import Divisor from '../others/Divisor.vue';
    import Card from '../templates/Card.vue';

    export default {
        components: { Card, Divisor },
        created() {
            document.title += ' - Login';
        }
    }
</script>

<style>

</style>