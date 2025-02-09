<template>
    <div class="w-72 flex flex-col m-auto">
        <Card>
        <CardHeader>
            <CardTitle>
                Todo liste
            </CardTitle>
        </CardHeader>
        <CardContent>
            <Label>Nom</Label>
            <Input type="text" v-model="name"/>
            <Button class="mt-2">Ajouter</Button>
        </CardContent>
    </Card>
    <div>
        <h1>{{user.name}}</h1>
    </div>
    </div>
</template>

<script setup>
import { Card,CardContent,CardTitle,CardHeader } from '@/components/ui/card'
import { Input } from '@/components/ui/input'
import { Button } from '@/components/ui/button';
import { Label } from '@/components/ui/label';

defineProps({user: Array})

console.log(items);


</script>