<template>
    <layout>
        <div>
            Welcome to the {{ page }} page
        </div>
    </layout>
</template>

<script>
import layout from '@/Shared/Default'
export default {
    props: ['page'],
    components: {
        layout
    }
}
</script>








