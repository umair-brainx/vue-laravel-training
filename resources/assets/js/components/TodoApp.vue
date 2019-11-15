
<template>
    <section class="todoapp">
        <header class="header">
            <h1>todos</h1>
        </header>
        <new-todo  v-bind:todos="todos"></new-todo>
        <todo-list v-bind:todos="todos"></todo-list>
    </section>
</template>
<script>
    import newTodo from "../components/NewTodo.vue";
    import todoList from "../components/TodoList.vue";

    export default {
        components: {
            newTodo,
            todoList
        },
        data:function(){
            return {todos:[]}
        },
        name: "TodoApp",
        methods: {
            updateData: function () {
                axios.get('/api/todos')
                    .then(res => {
                        {
                            console.log(res.data);
                            this.todos = res.data;
                        }
                    }).catch(err => {
                    console.log(err)
                });
            }
        },
        mounted() {
            this.updateData();
        },
        computed: {

        }
    };
</script>