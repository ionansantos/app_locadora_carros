<template>
    <div>
        <section class="h-100 gradient-form" style="background-color: #eee;">
            <div class="container py-53 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-xl-10">
                        <div class="card rounded-3 text-black">
                            <div class="row g-0">
                                <div class="col-lg-6">
                                    <div class="card-body p-md-5 mx-md-4">

                                        <div class="text-center">
                                            <img src="../../images/car-logo.webp" style="width: 185px;" alt="logo">
                                            <h4 class="mt-1 mb-5 pb-1">Bem vindo a Locamais</h4>
                                        </div>

                                        <form method="POST" @submit.prevent="submit">
                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="form2Example11">Email</label>
                                                <input type="email" id="email" class="form-control" v-model="email"
                                                    name="email" aria-describedby="email" placeholder="john@example.com" />
                                            </div>

                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="form2Example22">Senha</label>
                                                <input type="password" id="password" name="password" class="form-control"
                                                    required v-model="password" aria-describedby="password" />
                                            </div>

                                            <div class="d-grid gap-2">
                                                <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                                                    type="submit">Pronto</button>
                                                <!-- <a class="text-muted mb-4 mx-auto" href="#!">Forgot password?</a> -->
                                            </div>

                                            <div class="d-flex align-items-center justify-content-center pb-4">
                                                <p class="mb-0 me-2">Não tem uma conta?</p>
                                                <Link href="/register" as="button" type="button"
                                                    class="btn btn-outline-danger">Criar nova</Link>
                                            </div>

                                        </form>

                                    </div>
                                </div>
                                <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                        <h4 class="mb-4">Sua Jornada, Nossa Paixão</h4>
                                        <p class="small mb-0">Entendemos a importância de cada viagem. Seja uma aventura em
                                            família, uma viagem de negócios ou um passeio relaxante, estamos comprometidos
                                            em fornecer veículos que se adequem ao seu estilo e preferência. Nossos carros
                                            estão equipados com as mais recentes tecnologias e recursos de segurança,
                                            garantindo não apenas conforto, mas também tranquilidade enquanto você está na
                                            estrada.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script setup>
import { Link, useForm } from '@inertiajs/vue3';
import { ref, watch, onMounted, computed } from 'vue'
import userStore from '../store/user';


const email = ref("")
const password = ref("")

function submit(e) {
    e.preventDefault();
    const formData = new FormData();
    formData.append('email', email.value);
    formData.append('password', password.value);

    userStore.dispatch('login', formData);
}
// let submit = () => {
//     axios.post('/login', {
//         email: form.email,
//         password: form.password
//     })
//         .then(response => {
//             if (response.data.status === true) {
//                 // Redirecionar para a dashboard
//                 window.location.href = '/dashboard';
//             }
//             console.log(response);
//         })
//         .catch(error => {
//             //lidar com erros
//             toaster.error(error.response.data.message, {
//                 duration: 4000,
//                 position: "bottom-right",
//             });
//         });
// };
</script>