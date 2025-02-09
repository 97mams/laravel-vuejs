<template>
    <div>
        <h1>{{user.name}}</h1>
    </div>
</template>

<script setup>

defineProps({user: Array})

</script>