<template>
    <div class="w-full pt-8 mx-8">
            <a class="flex gap-2 scroll-m-20 text-2xl font-semibold tracking-tight">
                <Link class="text-primary/30"/>
                Lisitriny asa rehetra
            </a>
            <div v-for="task in tasks" class="flex flex-col overflow overflow-auto">
                <Card key="task.id" class="flex justify-between my-1 p-1">
                    <p>{{ task.content}}</p>
                    <div class="flex gap-2">
                        <Button @click="handleCompleted(task.id)">
                            <Check/>
                        </Button>
                        <Button>
                            <Trash/>
                        </Button>
                    </div>
                </Card>
            </div>
    </div>
</template>

<script setup>
import Card from './ui/card/Card.vue';
import { Check } from 'lucide-vue-next';
import { Link } from 'lucide-vue-next';
import { Trash } from 'lucide-vue-next';
import Button from './ui/button/Button.vue';
import { computed } from 'vue';

    const props = defineProps({
        task: Object
    })

    const tasks = computed(() => {
        return props.task?.filter((task) => {
           return  !task.completed 
        })
    })
    
    const handleCompleted = (id) => {
        fetch(`api/task/${id}`, {
            method: 'PUT',
            body: JSON.stringify({
                completed: true
            })
        })
    }
</script>