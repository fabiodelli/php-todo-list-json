const { createApp } = Vue;
createApp({
  data() {
    return {
      tasks: [],
      newTask: "",
    };
  },
  methods: {
    fetchTasks() {
      axios
        .get("api.php")
        .then((response) => {
          this.tasks = response.data;
        })
        .catch((error) => {
          console.error(error);
        });
    },
    addTask() {
      if (this.newTask) {
        axios
          .post("api.php", { title: this.newTask })
          .then(() => {
            this.newTask = "";
            this.fetchTasks();
          })
          .catch((error) => {
            console.error(error);
          });
      }
    },
    completed(task) {
      task.status = !task.status;
      this.updateTask(task);
    },
  },
  mounted() {
    this.fetchTasks();
  },
}).mount("#app");
