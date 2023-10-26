<template>
    <div class="container p-4">
        <div class="d-flex flex-column bd-highlight mb-3">
            <custom-input :placeHolder="'digite uma cidade...'" :type="'text'" label="Local do levantamento:" :value="value"
                input-classes="form-control shadow bg-white rounded" />
            <div class="d-flex flex-row mt-5">
                <custom-input :type="'date'" class="flex-fill me-2" label="Data do levantamento:" :value="value"
                    input-classes="form-control  shadow bg-white rounded" />
                <custom-input :type="'date'" class="flex-fill mr-2" label="Data da devolução:" :value="value"
                    input-classes="form-control  shadow bg-white rounded" />
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <button type="button" class="btn btn-success">Pesquisar agora</button>
        </div>
    </div>
</template>
<script>
import CustomInput from '../Components/customInput.vue'

export default {
    components: {
        CustomInput
    },
    data() {
        return {
            value: ''
        }
    }
}
</script>