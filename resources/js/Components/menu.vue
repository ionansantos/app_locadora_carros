<template>
    <div>
        <nav v-if="!user['name']" class="navbar navbar-expand-lg bg-body-tertiary px-3 py-2 bg-white rounded shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Loca+</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="nav-item-mobile collapse navbar-collapse  flex-row-reverse" id="navbarSupportedContent">
                    <button href="#" class="btn btn-outline-dark btn-singn"><i class="fa-solid fa-user me-1"></i>Iniciar
                        Sessão
                    </button>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Ofertas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Para Empresas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Duvidas</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <nav v-if="user['name']" class="px-3 py-2 bg-white rounded shadow-sm">
            <h5 class="fw-bold mb-0 me-auto">{{ pageTitle }}</h5>
            <div class="dropdown me-3 d-none d-sm-block">
                <div class="cursor-pointer dropdown-toggle navbar-link" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="ri-notification-line"></i>
                </div>
                <div class="dropdown-menu fx-dropdown-menu">
                    <h5 class="p-3 bg-indigo text-light">Notification</h5>
                    <div class="list-group list-group-flush">
                        <a href="#"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-start">
                            <div class="me-auto">
                                <div class="fw-semibold">Subheading</div>
                                <span class="fs-7">Content for list item</span>
                            </div>
                            <span class="badge bg-primary rounded-pill">14</span>
                        </a>
                        <a href="#"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-start">
                            <div class="me-auto">
                                <div class="fw-semibold">Subheading</div>
                                <span class="fs-7">Content for list item</span>
                            </div>
                            <span class="badge bg-primary rounded-pill">14</span>
                        </a>
                        <a href="#"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-start">
                            <div class="me-auto">
                                <div class="fw-semibold">Subheading</div>
                                <span class="fs-7">Content for list item</span>
                            </div>
                            <span class="badge bg-primary rounded-pill">14</span>
                        </a>
                        <a href="#"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-start">
                            <div class="me-auto">
                                <div class="fw-semibold">Subheading</div>
                                <span class="fs-7">Content for list item</span>
                            </div>
                            <span class="badge bg-primary rounded-pill">14</span>
                        </a>
                        <a href="#"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-start">
                            <div class="me-auto">
                                <div class="fw-semibold">Subheading</div>
                                <span class="fs-7">Content for list item</span>
                            </div>
                            <span class="badge bg-primary rounded-pill">14</span>
                        </a>
                    </div>
                </div>
            </div>
            <div v-if="user['name']" class="dropdown">
                <div class="d-flex align-items-center cursor-pointer dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <span class="me-2 d-none d-sm-block"> {{ user['name'] }}</span>
                    <img class="navbar-profile-image"
                        src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cGVyc29ufGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                        alt="Image">
                </div>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="/perfil">Perfil</a></li>
                    <!-- <li><a class="dropdown-item" href="#">Editar</a></li> -->
                    <li>
                        <Link @click="logout" class="dropdown-item" role="button">Logout</Link>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</template>
<script setup>
// import { useStore, createStore } from 'vuex';
// import axios from '../plugins/axios';
import { Link } from '@inertiajs/vue3'
import { ref, watch, onMounted, computed, defineProps } from 'vue'
import storeUser from '../store/user'

defineProps({
    pageTitle: String
})

onMounted(() => {
    storeUser.dispatch('getUser');
})

const user = computed(() => storeUser.state.user)

const logout = async () => {
    await storeUser.dispatch('logout');
};

</script>

<style>
.nav-link {
    color: black;
}

.nav-link:hover {
    color: orange;
}

@media (max-width: 968px) {
    .nav-item-mobile {
        height: 200px;
        position: relative;
    }

    .btn-singn {
        position: absolute;
        margin-top: 160px;
    }
}
</style>