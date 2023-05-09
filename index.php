<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <link rel="stylesheet" href="./style.scss">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div id="app">
        <div class="container">
            <div>
                <h1 >Todo List</h1>
                <input v-model="newTask" type="text" placeholder="Add a new task">
                <button @click="addTask">Add</button>
                <ul class="lista">
                    <li class="mt-2"  v-for="task in tasks" :key="task.id">
                        <div class="task" :class="{'completed': task.status}" @click="completed(task)">{{ task.title }}</div>
                        <span class="status" :class="{'bg-danger':!task.status,'bg-success':task.status}">Status</span>
                        <span class="delete bg-danger ">Delete</span>
                    </li>
                </ul>
            </div>
            </div>       
    </div>
    
    <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="app.js"></script>
</body>


