<template>
    <div class="w-full flex flex-col justify-center gap-4 pt-8">
        <Header />
        <Task />
    </div>
</template>

<script setup lang="ts">
import Header from '@/components/Header.vue';
import Task from '@/components/Task.vue';
</script>