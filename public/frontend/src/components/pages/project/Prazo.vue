<template>
    <ProjectTemplate etapa="4" btn="P">
        <div class="content">
            <div class="container mt-5">
                <h2 for="date_inicial">Selecione o prazo incial:</h2>
                <Datepicker
                    v-model="dataInicial"
                    :language="pt"
                    :bootstrap-styling="true"
                    :calendar-button="true"
                    calendar-button-icon="fa fa-calendar-o"
                    :format="customFormatter"
                    class="date"
                />
            </div>
            <div class="container mt-5">
                <h2 for="date_final">Selecione o prazo final:</h2>
                <Datepicker
                    v-model="dataInicial"
                    :language="pt"
                    :bootstrap-styling="true"
                    :calendar-button="true"
                    calendar-button-icon="fa fa-calendar-o"
                    :format="customFormatter"
                    class="date"
                />
                    <!-- <div slot="beforeCalendarHeader" class="calender-header"></div> -->
            </div>
        </div>
    </ProjectTemplate>
</template>

<script>
    import Datepicker from 'vuejs-datepicker';
    import ProjectTemplate from '../../layouts/ProjectTemplate.vue';
    import { ptBR } from 'vuejs-datepicker/dist/locale'
    import moment from 'moment';
    import 'moment/locale/pt-br';

    moment.locale('pt-br');

    export default {
        name: "Prazo",
        components: { ProjectTemplate, Datepicker },
        data(){
            return {
                dataInicial: '',
                dataFinal: '',
                pt: ptBR
            }
        },
        methods: {
            customFormatter(date) {
                return moment(date, 'DD MMM YYYY').format('dddd, D [de] MMMM [de] YYYY');
            }
        }
    }
</script>

<style scoped>
    .content{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        height: 20rem;
    }

    .date{
        width: 100%;
        background-color: #FFF;
    }

    h2{
        /* text-align: center; */

        font-family: 'Libre Baskerville', serif;
        font-family: 'Domine', serif;

        color: #5A5A5A;

        font-size: 25px;
        font-weight: bold;
    }
</style>