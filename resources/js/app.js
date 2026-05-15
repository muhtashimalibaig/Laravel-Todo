import { createIcons, icons } from "lucide";

const renderLucideIcons = () => {
    createIcons({ icons });
};

if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", renderLucideIcons);
} else {
    renderLucideIcons();
}

let todoItems = JSON.parse(localStorage.getItem("TODO")) || [];
const submitBtn = document.getElementById("submit");
console.log(submitBtn);

function saveTodo() {
    const title = document.getElementById("todoTitle").value;
    const date = document.getElementById("todoDate").value;
    const priority = document.getElementById("todoBestOption").value;
    const category = document.getElementById("todoCategory").value;
    const desc = document.getElementById("todoDescription").value;

    if (!title.trim()) {
        alert("Title is required!");
        return;
    }

    const todo = {
        title,
        date,
        priority,
        category,
        desc,
    };

    todoItems.push(todo);
    localStorage.setItem("TODO", JSON.stringify(todoItems));

    alert("Todo saved successfully!");

    clearForm();
}
function clearForm() {
    document.getElementById("todoTitle").value = "";
    document.getElementById("todoDate").value = "";
    document.getElementById("todoBestOption").value = "High";
    document.getElementById("todoCategory").value = "";
    document.getElementById("todoDescription").value = "";
}

if (submitBtn) {
    submitBtn.addEventListener("click", saveTodo);
}


// ✅ RENDER TODOS
function getAllTodos() {
  const todos = JSON.parse(localStorage.getItem("TODO")) || [];

   renderTodos(todos);
}

getAllTodos();


// ✅ DELETE TODO
document.addEventListener("click", function (e) {
    const btn = e.target.closest(".delete-btn");

    if (!btn) return;

    const index = btn.dataset.index;

    let todos = JSON.parse(localStorage.getItem("TODO")) || [];

    todos.splice(index, 1);

    localStorage.setItem("TODO", JSON.stringify(todos));

    getAllTodos();
});

function filterTodos(query){
    const todoList = document.getElementById("todoList");
    
    if (!todoList) return;

    const todos = JSON.parse(localStorage.getItem("TODO")) || [];

    const filtered = todos.filter(todo => {
        return (
            todo.title.toLowerCase().includes(query)
        )
    })

    // Render filtered todos
    renderTodos(filtered);
};

const searchInput = document.getElementById("search");

if(searchInput){
    searchInput.addEventListener('input', function(){
        const query = this.value.toLowerCase();
        filterTodos(query);
    })
}


function renderTodos(todos) {
    const todoList = document.getElementById("todoList");
    if (!todoList) return;

    todoList.innerHTML = "";

    if (todos.length === 0) {
        todoList.innerHTML = `
            <div class="text-center py-10 text-slate-400">
                <span data-lucide="inbox" class="h-10 w-10 mx-auto mb-3"></span>
                <p class="text-lg font-semibold text-white">No tasks found</p>
                <p class="text-sm text-slate-500">Try a different search keyword</p>
            </div>
        `;
        createIcons({ icons });
        return;
    }

    todos.forEach((todo, index) => {
        const task = document.createElement("div");

        task.className =
            "rounded-[1.75rem] border border-white/10 bg-[#090909] p-6 transition hover:border-red-500/20";

        task.innerHTML = `
            <div class="flex items-center justify-between gap-4">
                <div class="flex items-center gap-4">
                    <span class="inline-flex h-10 w-10 items-center justify-center rounded-3xl bg-green-600/15 text-red-400">
                        <span data-lucide="check-circle" class="h-5 w-5 text-green-500"></span>
                    </span>

                    <div>
                        <p class="font-semibold text-white">${todo.title}</p>
                        <p class="text-sm text-slate-400">
                            Due: ${todo.date || "No date"} • ${todo.priority}
                        </p>
                        <p class="text-xs text-slate-500">${todo.category || ""}</p>
                    </div>
                </div>

                <div class="flex gap-2">
                    <button class="delete-btn"
                        data-index="${index}"
                        class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-white/5 text-slate-400 hover:bg-red-600/15 hover:text-red-400">
                        <span data-lucide="trash-2" class="h-4 w-4"></span>
                    </button>
                </div>
            </div>
        `;

        todoList.appendChild(task);
    });

    createIcons({ icons });
}