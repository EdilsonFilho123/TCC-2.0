<template>
    <b-card class="card-pai">
        <div class="card-title">
            <div>
                <div class="titulo">{{ title }}</div>
                <div class="input ml-3" v-if="search">
                    <input type="search" v-model="filter">
                    <i class="fa fa-search lupa"></i>
                </div>
            </div>
            <Button v-if="fncAdd" width="150px" txt="Adicionar"></Button>
        </div>

        <b-card class="card-filho">
            <b-table hover striped :items="data" :current-page="paginaAtual" :per-page="qtdPorPg" :filter="filter" :fields="fields" filter-included-fields="name" class="tbl" theadClass="displayNone" small @filtered="onFiltered">
                <template slot="control" slot-scope="data" v-if="type">
                    <i v-if="type == 'close'" class="fa fa-times"></i>
                    <b-form-select v-else v-model="data.item.status" :options="options" size="sm"></b-form-select>
                </template>
            </b-table>
            <div class="pg"><b-pagination v-model="paginaAtual" :total-rows="totalRows" :per-page="qtdPorPg" size="sm" class="my-0"></b-pagination></div>
        </b-card>
    </b-card>
</template>

<script lang="js">
    import Button from '../others/Button.vue';

    export default {
        props: {
            data: { type: Array, required: true },
            k: { type: String, default: 'title' },
            type: { type: String, default: null },
            title: { type: String },
            fncAdd: { default: null },
            search: { default: true }
        },
        components: { Button },
        data() {
            return {
                fields: [
                    { key: this.k, tdClass: 'flexAlignCenter' }
                ],
                options: [
                    { value: 'N', text: 'Não Iniciado'},
                    { value: 'P', text: 'Pausado'},
                    { value: 'A', text: 'Em Andamento'},
                    { value: 'C', text: 'Concluido'}
                ],
                paginaAtual: 1,
                totalRows: 1,
                qtdPorPg: 4,
                filter: null
            }
        },
        methods: {
            onFiltered(itensFiltrados) {
                this.totalRows = itensFiltrados.length
                this.paginaAtual = 1
            }
        },
        mounted() {
            this.totalRows = this.data.length

            if (this.type == 'opt' || this.type == 'close')
                this.fields.push({ key: 'control', headerClass: 'colunaControll', tdClass: 'colunaControll' });
            else if(this.type == 'pcent')
                this.fields.push({ key: 'porcentagem', headerClass: 'colunaControll', tdClass: 'colunaControll porcentagem' });
        }
    }
</script>

<style scoped>
    .card-title {
        height: 25px;
        display: flex;
        font-size: 14px;
        justify-content: space-between;
    }

    .card-title>div {
        display: flex;
    }

    .input {
        height: 25px;
        display: flex;
        align-items: center;
    }

    input {
        height: 20px;
        border: 1px;
        border-radius: 10px;
        padding: 2px 24px 2px 10px;
    }

    .lupa {
        height: 20px;
        border: 1px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        margin-left: -20px;
    }

    .titulo {
        font-family: 'Libre Baskerville', serif;
        font-family: 'Domine', serif;

        font-size: 25px;
        font-weight: bold;

        height: 25px;
        line-height: normal;
        margin-bottom: 2px;
        padding-left: 5px;
        color: #3711A6;
    }

    .card-body {
        padding: 10px;
    }

    .card-pai {
        width: 100%;
        background-color: #E3E3E3;
        height: fit-content;
    }

    .card-filho {
        width: 100%;
        background-color: #FFF;
    }

    .pg {
        width: 100%;
        display: flex;
        justify-content: right;
    }

    .tbl{
        border-bottom: 1px solid #dee2e6;
        margin-bottom: 5px;
    }
</style>