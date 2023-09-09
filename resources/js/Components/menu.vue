<template>
    <div>
        <!-- start: Navbar -->
        <nav class="px-3 py-2 bg-white rounded shadow-sm">
            <i class="ri-menu-line sidebar-toggle me-3 d-block d-md-none"></i>
            <h5 class="fw-bold mb-0 me-auto">Dashboard</h5>
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
            <div class="dropdown">
                <div class="d-flex align-items-center cursor-pointer dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <span class="me-2 d-none d-sm-block"> {{ user['name'] }}</span>
                    <img class="navbar-profile-image"
                        src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cGVyc29ufGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                        alt="Image">
                </div>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Perfil</a></li>
                    <li><a class="dropdown-item" href="#">Editar</a></li>
                    <li>
                        <Link href="/api/logout" method="post" as="button" type="button" class="dropdown-item">Logout
                        </Link>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</template>
<script setup>
import { useStore, createStore } from 'vuex';
import { Link } from '@inertiajs/vue3'
import axios from '../plugins/axios';
import { ref, watch, onMounted, computed } from 'vue'
import storeUser from '../store/user'

onMounted(() => {
    storeUser.dispatch('getUser');
})

const user = computed(() => storeUser.state.user)

</script>