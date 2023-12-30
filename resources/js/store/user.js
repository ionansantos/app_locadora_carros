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

        async logout() {
            try {
                const response = await axios.post("/logout");

                if (response.data.type === "success") {
                    window.location.href = "/";
                }
                return false;
            } catch (error) {
                console.error("Erro durante o logout", error);
                return false;
            }
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
