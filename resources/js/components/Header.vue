<template>
    <Card>
        <CardHeader>
            Liste de tâches
        </CardHeader>
        <CardContent>
            <div>
                <div>
                    <Label>Nouveau tâche</Label>
                <Input/>
                </div>
               <Button>Ajouter</Button> 
            </div>
        </CardContent>
    </Card>
</template>

<script setup lang="ts">
import {Input} from './ui/input';
import { Label } from './ui/label';
import { Button } from './ui/button';
import {Card, CardHeader,CardContent} from './ui/card';

</script>