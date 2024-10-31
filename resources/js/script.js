const cleanFormElements = document.querySelectorAll("form.pokemon-del");

cleanFormElements.forEach((formElement) => {
    formElement.addEventListener("submit", function (event) {
        event.preventDefault();
        const name = this.getAttribute("data-name");
        const userChoice = window.confirm(`Do you want to delete ${name}?`);

        if (userChoice) this.submit();
    })
})
