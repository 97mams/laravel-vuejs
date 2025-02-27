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
</template>

<script setup>
import { Link2Icon } from 'lucide-vue-next';
import { Input } from './ui/input';
import { Button } from './ui/button';
import { ref } from 'vue';
import { useForm } from '@inertiajs/vue3';

const newTask = ref('')

const submit = async() => {
    const f = await fetch('/api/task', {
        method: "POST",
        body: JSON.stringify({
            content: newTask.value,
        })
    })
    if(f.ok) {
        alert('mety')
    }
}

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