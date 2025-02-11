<template>
    <div class="w-[500px] m-auto sticky">
        <Card>
            <CardHeader>
                <CardTitle>
                    Ireo asa
            </CardTitle>
        </CardHeader>
        <CardContent class="flex gap-2 items-center">
                        <Input placeholder="asa vaovao"/>
                    <Button>Ampiditra</Button> 
        </CardContent>
    </Card>
</div>
</template>

<script setup lang="ts">
import {Input} from './ui/input';
import { Label } from './ui/label';
import { Button } from './ui/button';
import {Card,CardTitle, CardHeader,CardContent} from './ui/card';

</script>