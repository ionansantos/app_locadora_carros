function setError(ObjectErrors, borderClass = 'border-danger') {
    var keys = Object.keys(ObjectErrors);
    keys.forEach(element => {
        document.getElementById(element).classList.add(borderClass)
        document.getElementById(element + '_alert').innerHTML = ObjectErrors[element]
        document.getElementById(element + '_alert').style.display = 'block'
    });
}


function clearError(fieldArray, borderClass = 'border-danger', clearFields = false) {
    for (let index = 0; index < fieldArray.length; index++) {
        const element = fieldArray[index];

        try {
            document.getElementById(element).classList.remove(borderClass)
            document.getElementById(element + '_alert').style.display = 'none'
        }
        catch (error) { }

        if (!clearFields) continue
        document.getElementById(element).value = ""
    }
}

function clearLostFocus(fieldArray) {
    for (let index = 0; index < fieldArray.length; index++) {
        const element = fieldArray[index];

        let elementDOM = document.getElementById(element)
        elementDOM.addEventListener("focusout", (event) => {
            clearError([element]);
            clearError([element], 'border-danger-bottom');
        })
    }
}