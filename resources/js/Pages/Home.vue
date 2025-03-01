<template>
    <div v-if="error">
        <Card>
            <CardHeader>
                <CardTitle class="text-danger">
                    Erreur
                </CardTitle>
            </CardHeader>
            <CardContent>
                Il y a une erreur !!!
            </CardContent>
        </Card>
    </div>
    <div v-else>
        <Header  @todo="addTask(todo)" :tasks="list"/>
    </div>
</template>

<script setup>
import Header from '@/components/Header.vue';
import { onMounted, ref } from 'vue';
import { Card, CardContent, CardHeader, CardTitle } from '@/components/ui/card';


const list = ref(null)
const error = ref(null)

onMounted(()=> {
    fetch('/api/task')
    .then(respose => respose.json())
    .then(data => {
        list.value = data.data
    })
    .catch(er => error.value = true)
})

</script>