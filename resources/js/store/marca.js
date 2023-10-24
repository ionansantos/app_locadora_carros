import { createStore } from 'vuex'
import axios from '../plugins/axios';
import { createToaster } from "@meforma/vue-toaster";

const toaster = createToaster({ /* options */ });

const store = createStore({
    state: {
        marca: {} // Defina o estado inicial do usuário como null ou vazio
    },
    mutations: {
        setMarca(state, marca) {
            state.marca = marca;
        },
    },
    actions: {
        
    }
});

export default store