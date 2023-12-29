<template>
    <!-- start: Sidebar -->
    <div class="sidebar position-fixed top-0 bottom-0 bg-white border-end">
        <div class="d-flex align-items-center p-3">
            <a href="#" class="sidebar-logo text-uppercase fw-bold text-decoration-none bg-orange fs-4">Loca +</a>
            <i class="sidebar-toggle ri-arrow-left-circle-line ms-auto fs-5 d-none d-md-block"></i>
        </div>
        <ul class="sidebar-menu p-3 m-0 mb-0">
            <li class="sidebar-menu-item active">
                <a href="/dashboard">
                    <i class="ri-dashboard-line sidebar-menu-item-icon"></i>
                    Home
                </a>
            </li>
            <li class="sidebar-menu-divider mt-3 mb-1 text-uppercase">Custom</li>
            <li class="sidebar-menu-item">
                <a href="/modelo">
                    <i class="ri-award-line sidebar-menu-item-icon"></i>
                    Modelos
                    <!-- <i class="ri-arrow-down-s-line sidebar-menu-item-accordion ms-auto"></i> -->
                </a>
                <!-- <ul class="sidebar-dropdown-menu">
                        <li class="sidebar-dropdown-menu-item">
                            <a href="#">
                                Novo
                            </a>
                        </li>
                        <li class="sidebar-dropdown-menu-item">
                            <a href="#">
                                Editar
                            </a>
                        </li> -->
                <!-- <li class="sidebar-dropdown-menu-item has-dropdown">
                            <a href="#">
                                Blog
                                <i class="ri-arrow-down-s-line sidebar-menu-item-accordion ms-auto"></i>
                            </a>
                            <ul class="sidebar-dropdown-menu">
                                <li class="sidebar-dropdown-menu-item">
                                    <a href="#">
                                        Home
                                    </a>
                                </li>
                                <li class="sidebar-dropdown-menu-item">
                                    <a href="#">
                                        Post
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-dropdown-menu-item has-dropdown">
                            <a href="#">
                                Email Template
                                <i class="ri-arrow-down-s-line sidebar-menu-item-accordion ms-auto"></i>
                            </a>
                            <ul class="sidebar-dropdown-menu">
                                <li class="sidebar-dropdown-menu-item">
                                    <a href="#">
                                        Reset Password
                                    </a>
                                </li>
                                <li class="sidebar-dropdown-menu-item">
                                    <a href="#">
                                        Changed Password
                                    </a>
                                </li>
                                <li class="sidebar-dropdown-menu-item">
                                    <a href="#">
                                        Verify Email
                                    </a>
                                </li>
                                <li class="sidebar-dropdown-menu-item">
                                    <a href="#">
                                        Invitation
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-dropdown-menu-item">
                            <a href="#">
                                Pricing
                            </a>
                        </li>
                        <li class="sidebar-dropdown-menu-item">
                            <a href="#">
                                About Us
                            </a>
                        </li>
                        <li class="sidebar-dropdown-menu-item">
                            <a href="#">
                                Contact Us
                            </a>
                        </li>
                        <li class="sidebar-dropdown-menu-item">
                            <a href="#">
                                Our Team
                            </a>
                        </li> -->
                <!-- </ul> -->
            </li>
            <li class="sidebar-menu-item">
                <a href="/carros">
                    <i class="ri-car-line sidebar-menu-item-icon"></i>
                    Carros
                    <!-- <i class="ri-arrow-down-s-line sidebar-menu-item-accordion ms-auto"></i> -->
                </a>
                <!-- <ul class="sidebar-dropdown-menu">
                        <li class="sidebar-dropdown-menu-item">
                            <a href="#">
                                Login
                            </a>
                        </li>
                        <li class="sidebar-dropdown-menu-item">
                            <a href="#">
                                Registration
                            </a>
                        </li>
                        <li class="sidebar-dropdown-menu-item">
                            <a href="#">
                                Reset Password
                            </a>
                        </li>
                        <li class="sidebar-dropdown-menu-item">
                            <a href="#">
                                Change Password
                            </a>
                        </li>
                        <li class="sidebar-dropdown-menu-item">
                            <a href="#">
                                Confirm Password
                            </a>
                        </li>
                        <li class="sidebar-dropdown-menu-item">
                            <a href="#">
                                Deactivate Account
                            </a>
                        </li>
                    </ul> -->
            </li>
            <li class="sidebar-menu-item">
                <a href="/marca">
                    <i class="ri-honour-line sidebar-menu-item-icon"></i>
                    Marcas
                    <!-- <i class="ri-arrow-down-s-line sidebar-menu-item-accordion ms-auto"></i> -->
                </a>
                <!-- <ul class="sidebar-dropdown-menu">
                        <li class="sidebar-dropdown-menu-item">
                            <a href="#">
                                Charts
                            </a>
                        </li>
                        <li class="sidebar-dropdown-menu-item">
                            <a href="#">
                                Tables
                            </a>
                        </li>
                    </ul> -->
            </li>
            <li class="sidebar-menu-item">
                <a href="/locacoes">
                    <i class="ri-map-pin-time-line sidebar-menu-item-icon"></i>
                    Locações
                    <!-- <i class="ri-arrow-down-s-line sidebar-menu-item-accordion ms-auto"></i> -->
                </a>
                <!-- <ul class="sidebar-dropdown-menu">
                        <li class="sidebar-dropdown-menu-item">
                            <a href="#">
                                Charts
                            </a>
                        </li>
                        <li class="sidebar-dropdown-menu-item">
                            <a href="#">
                                Tables
                            </a>
                        </li>
                    </ul> -->
            </li>
            <!-- <li class="sidebar-menu-divider mt-3 mb-1 text-uppercase">Apps</li>
                <li class="sidebar-menu-item has-dropdown">
                    <a href="#">
                        <i class="ri-shopping-cart-2-line sidebar-menu-item-icon"></i>
                        eCommerce
                        <i class="ri-arrow-down-s-line sidebar-menu-item-accordion ms-auto"></i>
                    </a>
                    <ul class="sidebar-dropdown-menu">
                        <li class="sidebar-dropdown-menu-item">
                            <a href="#">
                                Shop
                            </a>
                        </li>
                        <li class="sidebar-dropdown-menu-item">
                            <a href="#">
                                Checkout
                            </a>
                        </li>
                        <li class="sidebar-dropdown-menu-item">
                            <a href="#">
                                Details
                            </a>
                        </li>
                        <li class="sidebar-dropdown-menu-item">
                            <a href="#">
                                Wishlist
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-menu-item">
                    <a href="#">
                        <i class="ri-mail-line sidebar-menu-item-icon"></i>
                        Email
                    </a>
                </li>
                <li class="sidebar-menu-item">
                    <a href="#">
                        <i class="ri-calendar-line sidebar-menu-item-icon"></i>
                        Calendar
                    </a>
                </li> -->
        </ul>
    </div>
    <div class="sidebar-overlay"></div>
    <!-- end: Sidebar -->
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