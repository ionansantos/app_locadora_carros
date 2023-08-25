<template>
    <div>
        <!-- start: Main -->
        <main class="bg-light">
            <AsideMenu />
            <div class="p-2">
                <!-- start: Content -->
                <div class="py-4">
                    <div class="row g-3 mt-2">
                        <div class="col-12 col-md-7 col-xl-8">
                            <div class="card border-0 shadow-sm h-100">
                            </div>
                        </div>
                        <div class="col-12 col-md-5 col-xl-4">
                            <div class="card border-0 shadow-sm h-100">

                            </div>
                        </div>
                    </div>
                    <!-- end: Graph -->
                </div>
                <!-- end: Content -->
            </div>
        </main>
        <!-- end: Main -->
    </div>
</template>

<script>
import AsideMenu from '../Components/AsideMenu.vue';

export default {
    components: {
        AsideMenu
    }
}
</script>