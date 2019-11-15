
<template>
    <ul class="todo-list">
        <todo v-for="todo in todos" :todo="todo" :key="todo.id" />
    </ul>
</template>

<script>
    import todo from "../components/Todo";
    export default {
        components: {
            todo
        },
        name: "TodoList",
        props: ['todos'],
        mounted() {
        },
        computed: {

        }
    };
</script>