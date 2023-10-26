<template>
    <div class="container p-4">
        <div class="d-flex flex-column bd-highlight mb-3">
            <custom-input :placeHolder="'Digite uma cidade...'" :type="'text'" label="Local do levantamento:" :value="value"
                input-classes="form-control shadow bg-white rounded" />
            <div class="d-flex flex-row mt-5">
                <label class="me-2 flex-fill">Data do levantamento
                    <VueDatePicker v-model="dateInit"></VueDatePicker>
                </label>
                <label class="mr-2 flex-fill"> Data de devolução
                    <VueDatePicker v-model="dateFinal"></VueDatePicker>
                </label>
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <button type="button" class="btn btn-success">Pesquisar agora</button>
        </div>
    </div>
</template>
<script>
import CustomInput from '../Components/customInput.vue'
import VueDatePicker from '@vuepic/vue-datepicker';
import '@vuepic/vue-datepicker/dist/main.css'

export default {
    components: {
        CustomInput,
        VueDatePicker
    },
    data() {
        return {
            value: '',
            dateInit: null,
            dateFinal: null,
        }
    }
}
</script>