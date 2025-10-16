const form = document.querySelector("form");

form.addEventListener("submit", (e) => {
    e.preventDefault();

    let isValid = true;

    const fields = form.querySelectorAll("input, textarea, select, checkbox, radio");

    fields.forEach((field) => {
        const fieldValid = validateField(field);

        if (!fieldValid) {
            isValid = false;
            field.closest(".form-item").classList.add("error");
        }
    });

    if (isValid) {
        console.log('valid form');
        // send form data
        form.reset();
    } else {
        form.querySelector(".error input, .error textarea, .error select, .error checkbox, .error radio").focus();
    }
});

function validateField(field) {
    let isValid = true;
    let errorMessage = '';
    if (field.hasAttribute('required') && field.checked === false && (field.type === 'checkbox' || field.type === 'radio')) {
        errorMessage = 'This field is required.';
        isValid = false;
    }
    if (field.hasAttribute('required') && field.value.trim() === '') {
        errorMessage = 'This field is required.';
        isValid = false;
    }
    else if (field.hasAttribute('pattern') && !new RegExp(field.getAttribute('pattern')).test(field.value.trim())) {
        errorMessage = 'Invalid format.';
        if (field.hasAttribute('title')) {
            errorMessage = field.getAttribute('title');
        }
        isValid = false;
    }

    if (!isValid) {
        field.closest(".form-item").classList.add("error");
        field.closest(".form-item").classList.remove("success");
        let errorElem = field.closest(".form-item").querySelector(".form-help");
        if (!errorElem) {
            errorElem = document.createElement("div");
            errorElem.classList.add("form-help");
            errorElem.textContent = errorMessage;
            field.closest(".form-item").appendChild(errorElem);
        }
        else {
            errorElem.textContent = errorMessage;
        }
        return false;
    }
    else {
        field.closest(".form-item").classList.add("success");
        field.closest(".form-item").classList.remove("error");
        return true;
    }
}

document.addEventListener('blur', (e) => {
    if (e.target.matches("input, textarea, select, checkbox, radio")) {
        const field = e.target;
        validateField(field);
    }
})