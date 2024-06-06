const toDoForm = document.querySelector("#todo-form");
const toDoInput = toDoForm.querySelector("input");
const toDoList = document.querySelector("#todo-list");

function handleToDoSubmit(event) {
	event.preventDefault();

	const newToDo = toDoInput.value;

	toDoInput.value = "";

	const toDoItem = document.createElement("li");
	toDoItem.innerText = newToDo;
	toDoList.appendChild(toDoItem);
}

toDoForm.addEventListener("submit", handleToDoSubmit);