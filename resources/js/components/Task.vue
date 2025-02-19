<template>
    <div class="w-full pt-8 mx-8">
            <a class="flex gap-2 scroll-m-20 text-2xl font-semibold tracking-tight">
                <Link class="text-primary/30"/>
                Lisitriny asa rehetra
            </a>
            <ul v-for="task in renderTask">
                <li :key="task.id">{{ task.content}}</li>
            </ul>
    </div>
</template>

<script setup lang="ts">
    import { ref } from 'vue';
import { Card,CardTitle,CardHeader, CardContent } from './ui/card';
    import { Link } from 'lucide-vue-next';

    const tasks = defineProps<{
        task: object
    }>()
    const renderTask = ref<[] |Object>()
    renderTask.value = tasks.task
    console.log(tasks.task);
    
</script>