<template>
    <Card>
        <div role="group">
            <!-- <input v-model="text" placeholder="Enter your name"/> -->
            <label for="email">E-mail:</label>
            <b-form-input
                id="email"
                :type="'email'"
                v-model="email"
                :state="emailState"
                aria-describedby="email-invalid"
                placeholder="Digite seu E-mail..."
                trim
            ></b-form-input>
            <b-form-invalid-feedback id="email-invalid">E-mail inválido</b-form-invalid-feedback>

            <Divisor txt="ou"/>

            <b-card-text>
                Some quick example text to build on the card title and make up the bulk of the card's content.
            </b-card-text>
        </div>

        <b-button variant="primary">Go somewhere</b-button>
        <footer slot="footer">Ao clicar acima, você concorda com os e Termos de serviço e Política de privacidade do LIE.</footer>
    </Card>
</template>

<script>
    import Divisor from '../others/Divisor.vue';
    import Card from '../templates/Card.vue';

    export default {
        components: { Card, Divisor },
        data(){
            return {
                email: '',
                text: ''
            }
        },
        computed: {
            emailState() {
                return this.email.length > 2 ? true : false
            }
        },
        created() {
            document.title += ' - Cadastro';
        }
    }
</script>

<style scoped>
</style>