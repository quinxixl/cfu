const formElements = document.querySelector('form');


formElements.addEventListener('submit', (event) => {
    event.preventDefault();

    const formData = new FormData(formElements);
    const formDataObject = Object.fromEntries(formData);

    fetch('/register',{
        method: 'POST',
        body: JSON.stringify({...formDataObject}),
        headers: {
            'Content-Type': 'application/json; charset=UTF-8',
        }
    }).then(res => res.json())
        .then(json => {
            console.log(json);
        })
})



class FormsValidation {
    selectors = {
        form: '[data-js-form]',
        fieldErrors: '[data-js-field-errors]'
    }

    errorMessages = {
        valueMissing:() => 'Пожалуйста, заполните это поле',
        patternMismatch:({ title }) => title || 'Данные не соответствуют формату',
        tooShort: ({minLength}) =>`Слишком короткое значение, минимум символов - ${minLength}`,
        tooLong:({maxLength}) => `Слишком длинное значение, максимум символов - ${maxLength}`,
    }

    constructor() {
        this.bindEvents()
    }

    manageErrors(fieldControlElement, errorMessages) {
       const fieldErrorsElement = fieldControlElement.parentElement.querySelector(this.selectors.fieldErrors);

        fieldErrorsElement.innerHTML = errorMessages
            .map((message) => `<span class="field__error active">${message}</span>`)
            .join('');
    }

    validateField(fieldControlElement) {
        const errors = fieldControlElement.validity;
        const errorMessages = []

        Object.entries(this.errorMessages).forEach(([errorType, getErrorMessage]) => {
            if (errors[errorType]) {
                errorMessages.push(getErrorMessage(fieldControlElement));
            }
        })

        this.manageErrors(fieldControlElement, errorMessages);

        const isValid = errorMessages.length === 0;

        fieldControlElement.ariaInvalid = !isValid;

        return isValid;
    }

    onBlur(event) {
        const {target} = event;

        const isFormField= target.closest(this.selectors.form);
        const isRequired= target.required;

        if (isFormField && isRequired) {
            this.validateField(target)
        }
    }

    onSubmit(event) {

        const isFormElement = event.target.matches(this.selectors.form);

        if (!isFormElement) {
            return
        }
        const requiredControlElements = [...event.target.elements].filter(( required ) => required )

        let isFormValid = true;

        requiredControlElements.forEach((element) => {
            const isFieldValid =  this.validateField(element);

            if (!isFieldValid) {
                isFormValid = false;
            }

            if (!isFormElement) {
                event.preventDefault();
            }
        })
    }

    bindEvents() {
        document.addEventListener('blur', (event) => {
            this.onBlur(event);
        }, true)
        document.addEventListener('submit', (event) => this.onSubmit(event));
    }
}

new FormsValidation();