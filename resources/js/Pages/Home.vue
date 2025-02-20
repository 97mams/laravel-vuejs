<template>
    <Header />
    <div class="w-full h-screen flex  gap-4">
        <!-- <form action="" @submit.prevent="submit">
            <Input v-model="form.content"/>
            <Button type="submit" />
        </form> -->
        <Task :task="list"  class="flex1"/>
        <div class="border border-r border-border h-screen"></div>
        <TaskCompleted  class="flex1"/>
    </div>
</template>

<script setup>
import Header from '@/components/Header.vue';
import { Input } from '@/components/ui/input';
import Task from '@/components/Task.vue';
import { computed, defineProps, onMounted, ref } from 'vue';
import TaskCompleted from '@/components/TaskCompleted.vue';
import { useForm } from '@inertiajs/vue3';
// defineProps({
//     tasks:Object
// })

const list = ref(null)
const error = ref(null)

onMounted(()=> {
    fetch('/api/task')
    .then(respose => respose.json())
    .then(data => {
        list.value = data.data
    })
    .catch(error => error = true)
})

console.log(list);
console.log(error);


// const form = useForm({
//     content: ''
// })

// const submit = () => {
//     form
//     .post(
//         '/task',
//         {
//             onSuccess: ()=> {
//                 form.reset()
//             }
//         }
//     )
// }

</script>