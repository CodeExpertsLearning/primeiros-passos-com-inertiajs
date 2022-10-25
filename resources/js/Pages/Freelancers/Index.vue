<template>
    <ul>
        <li v-for="freelancer of freelancers">{{freelancer}}</li>
    </ul>
</template>

<script>
    export default {
        props: {
            freelancers: Object
        }
    }
</script>