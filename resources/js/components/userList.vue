<template>
    <p>{{ props.name }} est d'agé(e) de <Badge variant="secondary">{{ props.age }}</Badge></p>
</template>

<script setup lang="ts">
import{ Badge }from "@/components/ui/badge"
    const props = defineProps<{name:string, age:number}>()
</script>