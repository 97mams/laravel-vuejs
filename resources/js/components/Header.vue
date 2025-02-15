<template>
    <div class="w-full border-b h-16 flex border-border items-center sticky px-8">
        <a href="#" class="flex items-center scroll-m-20 text-2xl font-semibold tracking-tight">
            <Link2Icon />
            Ny asako
        </a>
        <form action="" @submit.prevent="addTask" class="flex max-w-md ml-32 gap-2">
            <Input placeholder="asa vaovao" type="text" v-model="form.content"/>
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

// const newTask = ref('')
// const form = useForm({
//     content: ''
// })
// const addTask = () => {
//     form.clearErrors()
//      form
//     .post('/task',{ onSuccess: () => form.reset(), })

// }
    

</script>