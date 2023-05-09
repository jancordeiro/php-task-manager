function markDone(id) {
  if (confirm('Are you sure you want to mark as done?')) {
    // send an AJAX request to mark a task as done
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        // refresh page after the update is complete
        location.reload();
      }
    };
    xhr.open('GET', 'mark_done.php?id=' + id, true);
    xhr.send();
  }
}

function deleteTask(id) {
  if (confirm('Tem certeza de que deseja excluir esta tarefa?')) {
    // send an AJAX request to delete the task
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        // refresh page after deletion is complete
        location.reload();
      }
    };
    xhr.open('GET', 'delete_task.php?id=' + id, true);
    xhr.send();
  }
}