<template>
    <div class="w-full pt-8 mx-8">
            <a class="flex gap-2 scroll-m-20 text-2xl font-semibold tracking-tight">
                <Link class="text-primary/30"/>
                Lisitriny asa rehetra
            </a>
            <ul v-for="task in tasks.task">
                <!-- <li :key="task.id">{{ task.content}}</li> -->
            </ul>
            <div v-for="task in tasks.task" class="flex flex-col overflow overflow-auto">
                <Card key="task.id" class="flex justify-between my-1 p-1">
                    <p>{{ task.content}}</p>
                        <Trash/>
                </Card>
            </div>
    </div>
</template>

<script setup>
    import { ref } from 'vue';
    import { Card,CardTitle,CardHeader, CardContent } from './ui/card';
    import { Link } from 'lucide-vue-next';
    import { Button } from './ui/button';
    import { Trash } from 'lucide-vue-next';
    const tasks = defineProps({
        task: Object
    })
    
</script>