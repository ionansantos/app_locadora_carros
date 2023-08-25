<template>
    <div>
        <Link :i="icon" :href="link">
        {{ label }}
        </Link>
    </div>
</template>
<script setup>
import { defineProps } from 'vue';
import { Link } from '@inertiajs/vue3'
const props = defineProps({
    icon: {
        type: [String],
        default: ''
    },
    link: {
        type: [String],
        default: ''
    }

})
</script>