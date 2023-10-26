import { createStore } from 'vuex';
import axios from '../plugins/axios';
import { createToaster } from "@meforma/vue-toaster";

const toaster = createToaster({ /* options */ });

const store = createStore({
    state: {
        marcas: null, // Define the initial state as null
    },
    mutations: {
        setMarcas(state, marcas) {
            state.marcas = marcas;
        },
    },
    actions: {
        fetchMarcas({ commit }) {
            return axios.get('/marca')
            .then(response => {
                console.log(response.data);
                    commit('setMarcas', response.data);
                    // Redirecionar para a dashboard
                    // window.location.href = '/dashboard';
                    // return true;
                return false;
            })
            .catch(error => {
                toaster.error(error.response.data.message, {
                    duration: 4000,
                    position: "bottom-right",
                });
                return false;
            });
        },
    },
});

export default store;
