import { createStore } from 'vuex'
import axios from '../plugins/axios';
import { createToaster } from "@meforma/vue-toaster";

const toaster = createToaster({ /* options */ });

const store = createStore({
    state: {
        user: null,
    },
    mutations: {
        setUser(state, user) {
            state.user = user;
        },
    },
    actions: {
        login({ commit }, formData) {
            return axios.post('/login', formData)
                .then(response => {
                    console.log(response.data);
                    if (response.data.status === true) {
                        // Redirecionar para a dashboard
                        // window.location.href = '/dashboard';
                        commit('setUser', response.data.user);
                        return true;
                    }
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
    }
});

export default store