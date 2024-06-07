const toDoForm = document.querySelector("#todo-form");
const toDoInput = toDoForm.querySelector("input");
const toDoList = document.querySelector("#todo-list");

function paintToDo(newToDo) {
	const listItem = document.createElement("li");
	const span = document.createElement("span");

	listItem.appendChild(span);

	span.innerText = newToDo;
	
	toDoList.appendChild(listItem);
}

function handleToDoSubmit(event) {
	event.preventDefault();

	const newToDo = toDoInput.value;

	toDoInput.value = "";

	paintToDo(newToDo);
}

toDoForm.addEventListener("submit", handleToDoSubmit);