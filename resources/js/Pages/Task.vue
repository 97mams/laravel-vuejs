<template>
<h1>Leo ah</h1>
<template v-for="task in tasks">
    <p>{{ task.content }}</p>
</template>
</template>

<script setup lang="ts">
import { ref } from 'vue';
const task = [
{
    id : Date.now(),
    content: 'manao',
    completed: false
},
{
    id : Date.now(),
    content: 'test',
    completed: false
}
]

const tasks = ref(task) 
</script>