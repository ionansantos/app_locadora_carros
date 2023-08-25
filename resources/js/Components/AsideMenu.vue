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
                    <span class="me-2 d-none d-sm-block">Ionan Santos</span>
                    <img class="navbar-profile-image"
                        src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cGVyc29ufGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                        alt="Image">
                </div>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Perfil</a></li>
                    <li><a class="dropdown-item" href="#">Editar</a></li>
                    <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
            </div>
        </nav>
        <!-- end: Navbar -->

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
                <li class="sidebar-menu-item has-dropdown">
                    <Link href="/modelos">
                    <i class="ri-award-line sidebar-menu-item-icon"></i>
                    Modelos
                    <!-- <i class="ri-arrow-down-s-line sidebar-menu-item-accordion ms-auto"></i> -->
                    </Link>
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
                <li class="sidebar-menu-item has-dropdown">
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
                    <Link href="/marcas">
                    <i class="ri-honour-line sidebar-menu-item-icon"></i>
                    Marcas
                    <!-- <i class="ri-arrow-down-s-line sidebar-menu-item-accordion ms-auto"></i> -->
                    </Link>
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
                <li class="sidebar-menu-item has-dropdown">
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
    </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
</script>