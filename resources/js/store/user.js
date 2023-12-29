import { createStore } from "vuex";
import axios from "../plugins/axios";
import { createToaster } from "@meforma/vue-toaster";

const toaster = createToaster({
    /* options */
});

const store = createStore({
    state: {
        user: {}, // Defina o estado inicial do usuário como null ou vazio
    },
    mutations: {
        setUser(state, user) {
            state.user = user;
        },
    },
    actions: {
        login({ commit }, formData) {
            return axios
                .post("/login", formData)
                .then((response) => {
                    if (response.data.type === "success") {
                        const user = response.data.data.user;

                        commit("setUser", user);

                        // Redirecionar para a dashboard
                        const dashboardPath =
                            user.isAdmin === 1 ? "/dashboard" : "/homecliente";
                        window.location.href = dashboardPath;

                        return true;
                    } else {
                        toaster.error(response.data.message, {
                            duration: 4000,
                            position: "bottom-right",
                        });
                        return false;
                    }
                })
                .catch((error) => {
                    toaster.error(error.response.data.message, {
                        duration: 4000,
                        position: "bottom-right",
                    });
                    return false;
                });
        },

        getUser({ commit }) {
            return axios
                .get("/user")
                .then((response) => {
                    commit("setUser", response.data);
                    console.log(response.data);
                })
                .catch((error) => {
                    console.log(error, "hummmm cheirinho de bug :p");
                });
        },
    },
});

export default store;
