<template>
    <div class="w-[500px] m-auto">
        <Card>
            <CardHeader>
            <CardTitle class="flex gap-2">
                <Link class="text-primary/30"/>
                Lisitriny asa rehetra
            </CardTitle>
            </CardHeader>
            <CardContent>
                <ul v-show="true">
                    <li>manambotra laravel</li>
                </ul>
            </CardContent>
        </Card>
    </div>
</template>

<script setup lang="ts">
    import { Card,CardTitle,CardHeader, CardContent } from './ui/card';
    import { Link } from 'lucide-vue-next';
</script>