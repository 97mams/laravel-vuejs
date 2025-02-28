<template>
    <div class="w-full border-b h-16 flex border-border items-center sticky px-8">
        <a href="#" class="flex items-center scroll-m-20 text-2xl font-semibold tracking-tight">
            <Link2Icon />
            Ny asako
        </a>
        <form action="" @submit.prevent="submit" class="flex  ml-32 gap-2">
            <Input placeholder="asa vaovao" type="text" v-model="todo"/>
            <Button @click="emits('todo', todo)">Alefa</Button>
        </form>
    </div>
</template>

<script setup>
import { Link2Icon } from 'lucide-vue-next';
import { Input } from './ui/input';
import { Button } from './ui/button';
import { ref } from 'vue';
import { useForm } from '@inertiajs/vue3';

const newTask = ref(null)
const emits = defineEmits(['todo'])
const todo = ref(null)
// const submit = async() => {
//     const f = await fetch('/api/task', {
//         method: "POST",
//         headers: { "Content-Type": "application/json" },
//         body: JSON.stringify({
//             content: newTask.value
//         })
//     })
//     if(f.ok) {
//         alert('mety')
//     }
//     todo.value = await f.json()
// }

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