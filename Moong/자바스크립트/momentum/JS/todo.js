const toDoForm = document.querySelector("#todo-form");
const toDoInput = toDoForm.querySelector("input");
const toDoList = document.querySelector("#todo-list");

const toDoItems = [];

function saveToDoItems() {
	localStorage.setItem("toDoItems", JSON.stringify(toDoItems));
}

function deleteToDo(event) {
	const li = event.target.parentNode;
	li.remove();
}

function paintToDo(newToDo) {
	const li = document.createElement("li");
	const span = document.createElement("span");
	const button = document.createElement("button");

	span.innerText = newToDo;

	button.innerText = "❌";
	button.addEventListener("click", deleteToDo);

	li.appendChild(span);
	li.appendChild(button);
	toDoList.appendChild(li);
}

function handleToDoSubmit(event) {
	event.preventDefault();

	const newToDo = toDoInput.value;

	toDoItems.push(newToDo);

	toDoInput.value = "";

	paintToDo(newToDo);

	saveToDoItems();
}

toDoForm.addEventListener("submit", handleToDoSubmit);