
<template>
    <input type="text" v-model="newTodo.title"
           @keyup.enter="addTodo" autofocus="autofocus"
           placeholder="What are you trying to get done?" class="new-todo">
</template>
<script>
    export default {
        name: "NewTodo",
        data: function(){
               return { newTodo:{title:'',completed:''}}
        },
        props: ['todos'],
        methods: {
            addTodo() {
                axios.post('/api/todos', this.newTodo).then(res => {
                    if (res.data === "added")
                        console.log('ok')
                        this.newTodo.title="";
                    // Either add locally
                    // Or update parent object
                    this.$parent.updateData();
                }).catch(err => {
                    console.log(err)
                })
            }
        },
        computed: {
        }
    };
</script>