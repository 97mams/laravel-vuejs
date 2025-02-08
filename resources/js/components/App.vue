<template>
    <div>
        <h1>🚀 Vue.js 3 + TypeScript fonctionne avec Laravel 11 et Bun !</h1>
        <p>Message : {{ message }}</p>
    </div>
</template>

<script setup lang="ts">
import { ref } from "vue";

const message = ref<string>("First Contribution !");
</script>