<template>
    <Card>
        <div>
            <!-- <Divisor txt="ou"/> -->
            <InputValidation v-model="email" id="email" type="email" label="E-mail:" place="Digite seu E-mail" :validade="emailValidade" />
            <InputValidation v-model="password" id="password" type="password" label="Senha:" place="Digite sua senha" :validade="passwordValidade" />
            <div class="control mt-4">
                <b-button variant="primary" @click="validaForm">Prossegir</b-button>
                <div class="link">Não tem conta? <router-link to="/cadastro">Criar cadastro</router-link></div>
            </div>
        </div>
        <footer slot="footer">Ao clicar acima, você concorda com os <span class="link"><router-link to="/lgpd">Termos de serviço e Política de privacidade</router-link></span> do LIE.</footer>
    </Card>
</template>

<script>
    import InputValidation from '../form/InputValidation.vue';
    import Divisor from '../others/Divisor.vue';
    import Card from '../templates/Card.vue';
    // import { baseApiUrl, showError, userKey } from '@/global';
    // import axios from 'axios';

    export default {
        components: { Card, Divisor, InputValidation },
        data(){
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
            }
        },
        methods: {
            validaForm(){
                const validadeEmail = this.emailValidade(this.email);
                const validadePassword = this.passwordValidade(this.password);

                if(JSON.stringify(validadeEmail) == JSON.stringify(validadePassword) && !validadeEmail.msg && validadeEmail.css)
                    this.login();
            },
            login(){
                // axios.post(`${baseApiUrl}/login`, { email: this.email, senha: this.password }).then(res => {
                //     this.$store.commit('setUser', {
                //         id: res.data.usu_id,
                //         name: res.data.usu_nome,
                //         email: res.data.usu_email
                //     });
                //     localStorage.setItem(userKey, JSON.stringify(this.$store.state.user));
                //     this.$router.push({ path: '/painel' })
                // }).catch(showError)
            }
        },
        created() {
            document.title += ' - Login';
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
        color: #6c757d;
    }

    .link a {
        text-decoration: underline;
    }

</style>