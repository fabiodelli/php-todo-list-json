<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div id="app">
        <h1>Todo List</h1>
        <input v-model="newTask" type="text" placeholder="Add a new task">
        <button @click="addTask">Add</button>
        <ul>
            <li v-for="task in tasks" :key="task.id">
                {{ task.title }}
            </li>
        </ul>
    </div>

    <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="app.js"></script>
</body>
</html>

