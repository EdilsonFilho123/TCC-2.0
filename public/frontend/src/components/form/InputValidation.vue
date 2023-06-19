<template>
    <div role="group" class="input_validate mb-3">
        <label :for="id" class="ml-1">{{ label }}</label>
        <input :id="id" :type="type" :value="value" @input="$emit('input', $event.target.value)" class="form-control" :class="validation" :placeholder="place" :aria-describedby="`${id}-invalid`" />
        <b-form-invalid-feedback :id="`${id}-invalid`" class="ml-1">{{ msgInvalid }}</b-form-invalid-feedback>
    </div>
</template>

<script>
    export default {
        props: ['value', 'id', 'type', 'label', 'place', 'validade'],
        data(){
            return {
                msgInvalid: '',
                cssValid: { "is-valid": true, "is-invalid": false },
                cssInvalid: { "is-invalid": true, "is-valid": false }
            }
        },
        computed: {
            validation(){
                var data = this.validade(this.value);

                // eslint-disable-next-line vue/no-side-effects-in-computed-properties
                this.msgInvalid = data.msg;

                return data.css;
            }
        }
    }
</script>

<style scoped>
    .input_validate{
        text-align: left;
    }
    input::placeholder{
        color: #ced4da;
    }
    label{
        color: #9D9D9D;
    }
</style>