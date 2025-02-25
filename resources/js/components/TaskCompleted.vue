<template>
     <div class="w-full pt-8 mx-4">
        <a href="#" class="flex gap-2 scroll-m-20 text-2xl font-semibold tracking-tight">
            <Link class="text-primary/30"/>
            Asa efa vita
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
import { Link } from 'lucide-vue-next';
import Card from './ui/card/Card.vue';
import Button from './ui/button/Button.vue';
import { computed } from 'vue';
import { Trash } from 'lucide-vue-next';

const props = defineProps({
   task: Object
})

const tasks = computed(() => {
   return props.task?.filter((task) => task.completed)
})
</script>