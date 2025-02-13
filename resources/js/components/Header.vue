<template>
    <div class="w-full border-b h-12 flex border-border items-center sticky px-8">
        <a href="#" class="flex items-center scroll-m-20 text-2xl font-semibold tracking-tight">
            <Link2Icon />
            Ny asako
        </a>
    </div>
    <form action="" v-on:submit.prevent="form.post('/task')" class="flex max-w-md py-2 gap-2">
        <Input placeholder="asa vaovao" type="text" v-model="form.content"/>
        <Button>Alefa</Button>
    </form>
</template>

<script setup>
import { Link2Icon } from 'lucide-vue-next';
import { Input } from './ui/input';
import { Button } from './ui/button';
import { useForm } from '@inertiajs/vue3';

    const form = useForm({
        content: null
    })

</script>