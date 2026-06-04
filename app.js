const clearForm = document.getElementById("clear-form");
clearForm.addEventListener("submit", function(e){
    const yesSubmit = confirm("Are you sure you want to DELETE all tasks?");
    if(!yesSubmit){
        e.preventDefault();
    }
});