<template>
    <Card>
        <div>
            <InputValidation v-model="email" id="email" type="email" label="E-mail:" place="Digite seu E-mail" :validade="emailValidade" />
            <InputValidation v-model="password" id="password" type="password" label="Senha:" place="Digite sua senha" :validade="passwordValidade" />
            <InputValidation v-model="passwordConfirmation" id="passwordConfirmation" type="password" label="Confirmação de senha:" place="Digite sua senha novamente" :validade="passwordConfirmationValidade()" />
            <div class="control mt-4">
                <b-button variant="primary" @click="validaForm">Cadastrar</b-button>
                <div class="link">Já tem cadastro? Efetuar <router-link to="/login">Login</router-link></div>
            </div>
        </div>
        <footer slot="footer">Ao clicar acima, você concorda com os e Termos de serviço e Política de privacidade do LIE.</footer>
    </Card>
</template>

<script>
import InputValidation from '../form/InputValidation.vue';
import Divisor from '../others/Divisor.vue';
import Card from '../templates/Card.vue';

export default {
    components: { Card, Divisor, InputValidation },
    data() {
        return {
            email: null,
            emailValidade(email) {
                if(email === null) return { css: null, msg: '' };

                const cssValid = { "is-valid": true, "is-invalid": false }
                const cssInvalid = { "is-invalid": true, "is-valid": false }
                const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

                return (emailRegex.test(email) ? { css: cssValid, msg: '' } : { css: cssInvalid, msg: 'E-mail Inválido!' })
            },
            password: null,
            passwordValidade(password) {
                if(password === null) return { css: null, msg: '' };

                const cssValid = { "is-valid": true, "is-invalid": false }
                const cssInvalid = { "is-invalid": true, "is-valid": false }
                const senhaRegex = /^(?=.*[!@#$%^&*()_+\-=[\]{};':"\\|,.<>/?])(?=.*[0-9]).{8,}$/;

                return (senhaRegex.test(password) ? { css: cssValid, msg: '' } : { css: cssInvalid, msg: 'Senha deve conter, no minimo, 8 caracteres, 1 letra e 1 caracter especial' })
            },
            passwordConfirmation: null
        }
    },
    methods: {
        passwordConfirmationValidade(){
            if(this.password == this.passwordConfirmation)
                return function(password) { return ((password === null) ? { css: null, msg: '' } : { css: { "is-valid": true, "is-invalid": false }, msg: '' }) }
            else 
                return function() { return { css: { "is-invalid": true, "is-valid": false }, msg: 'Senhas diferentes' } }
        },
        validaForm(){
            return true;
        }
    },
    created() {
        document.title += ' - Cadastro';
    }
}
</script>

<style scoped>
    button{
        background-color: #3711A6;
        border-color: #3711A6;
    }
    button:hover{
        background-color: rgba(55, 17, 166, 0.9);
        border-color: rgba(55, 17, 166, 0.9);
    }
    .control{
        display: flex;
        flex-direction: column;
    }

    .link, .link a, .link a:hover{
        font-size: 12px;
        color: #4858b2;
    }

    .link a {
        text-decoration: underline;
    }

</style>