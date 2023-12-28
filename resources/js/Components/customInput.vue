<template>
    <label>
        {{ label }}
        <input :type="type" :name="name" v-model="model" :class="inputClasses" :placeholder="placeHolder">
    </label>
</template>

<script>

export default {
    name: 'customInput',
    props: {
        type: {
            type: String,
            required: true,
        },
        label: {
            type: String,
            default: '',
        },
        value: {
            type: String,
            required: true,
        },
        inputClasses: {
            type: String,
            default: '', // Valor padrão é uma string vazia
        },
        placeHolder: {
            type: String,
            default: '',
        }
    },
    computed: {
        name() {
            return this.label.toLowerCase();
        },
        model: {
            get() {
                return this.value;
            },
            set(value) {
                this.$emit('input', value);
            },
        },
    }
}
</script>

<style></style>