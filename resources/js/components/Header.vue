<template>
    <div class="w-full border-b h-16 flex border-border items-center sticky px-8">
        <a href="#" class="flex items-center scroll-m-20 text-2xl font-semibold tracking-tight">
            <Link2Icon />
            Ny asako
        </a>
        <form action="" @submit.prevent="submit" class="flex  ml-32 gap-2">
            <Input placeholder="asa vaovao" type="text" v-model="newTask"/>
            <Button>Alefa</Button>
        </form>
    </div>
    <div class="w-full h-screen flex  gap-4">
        <Task :task="tasks"  class="flex1"/>
        <div class="border border-r border-border h-screen"></div>
        <TaskCompleted :task="tasks"  class="flex1"/>
    </div>  
</template>

<script setup>
import { Link2Icon } from 'lucide-vue-next';
import { Input } from './ui/input';
import { Button } from './ui/button';
import { ref } from 'vue';
import Task from './Task.vue';
import TaskCompleted from './TaskCompleted.vue';

const porps = defineProps({
    tasks:Object
})

const newTask = ref(null)

const submit = async() => {
    const f = await fetch('/api/task', {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({
            content: newTask.value
        })
    })
    if(f.ok) {
        const task = await f.json()
        porps.tasks.push(task.tasks)
        newTask.value = ''
    }

}

</script>