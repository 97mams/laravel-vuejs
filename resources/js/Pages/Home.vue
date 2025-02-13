<template>
    <Header />
    <div class="w-full h-screen flex  gap-4">
        <Task  class="flex1"/>
        <div class="border border-r border-border h-screen"></div>
        <TaskCompleted  class="flex1"/>
        
    </div>
</template>

<script setup lang="ts">
import Header from '@/components/Header.vue';
import Task from '@/components/Task.vue';
import { defineProps } from 'vue';
import TaskCompleted from '@/components/TaskCompleted.vue';
defineProps({
    tasks:Object,
})

</script>