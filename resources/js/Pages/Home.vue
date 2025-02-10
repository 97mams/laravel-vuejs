<template>
    <div class="w-72 flex flex-col m-auto">
        <Card>
        <CardHeader>
            <CardTitle>
                Counter :
                    {{ counter }}
            </CardTitle>
        </CardHeader>
        <CardContent>
            <template v-for=" user in users">
                <h1>{{user.name}}</h1>
                <userList :name="user.name" :age="user.age"/>
            </template>
            <Button @click="counter++">Increment</Button>
        </CardContent>
    </Card>
    </div>
</template>

<script setup lang="ts">
import { Card,CardContent,CardTitle,CardHeader } from '@/components/ui/card'
import { Button } from '@/components/ui/button'
import { ref } from 'vue';
import userList from '@/components/userList.vue';
const counter = ref(0)

const user = [{name:'mamisoa', age: 28}, {name:"santatra", age:29}]

const users = ref(user)

</script>