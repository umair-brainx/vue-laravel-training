
<template>
    <li class="todo" :class="{ completed: todo.completed }">
        <div class="view">
            <label>{{todo.title}}</label>
            <button @click="removeTodo(todo)" class="destroy">Delete</button>
        </div>
    </li>
</template>
<script>
    export default {
        name: "Todo",
        props: ["todo"],

        methods: {
            removeTodo(todo) {
                axios.delete(`/api/todos/${todo.id}`)
                    .then(res => {
                        if (res.data === 'deleted')
                        {
                            console.log('deleted');

                            // Either delete locally
                            // Or update parent object
                            this.$parent.$parent.updateData();
                        }

                    }).catch(err => {
                    console.log(err)
                })
            }
        }
    };
</script>
