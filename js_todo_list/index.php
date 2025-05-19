<!DOCTYPE html>
<html>
<head>
    <title>Todo List</title>
</head>
<body>
    <h1>Todo List</h1>
    <input type="text" id="task" placeholder="Tulis tugas...">
    <button onclick="addTask()">Tambah</button>
    <ul id="list"></ul>

    <script>
        function addTask() {
            const task = document.getElementById('task').value;
            if (!task) return;
            const li = document.createElement('li');
            li.textContent = task;
            li.onclick = () => li.remove();
            document.getElementById('list').appendChild(li);
            document.getElementById('task').value = '';
        }
    </script>
</body>
</html>