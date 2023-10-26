<template>
    <div class="container p-4">
        <div class="row">
            <div class="col-12 col-md-6">
                <h3>Subscreva o nosso boletim informativo para receber as melhores ofertas de aluguer de carros diretamente
                    na sua caixa de correio. Sem spam, apenas ofertas exclusivas</h3>
            </div>
            <div class="col-12 col-md-5 d-flex justify-content-end mt-1">
                <custom-input :placeHolder="'O seu endereço de email'" :type="'text'" :value="value"
                    input-classes="form-control shadow bg-white rounded" style="width: 100%; margin-right: 10px;" />
                <div>
                    <button type="button" class="btn btn-primary">Enviar</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import customInput from '../Components/customInput.vue';
export default {
    components: {
        customInput,
    },
    data() {
        return {
            value: ''
        }
    }

}
</script>

<style scoped>
h3 {
    font-size: 14px;
}
</style>