const updateColor = (inputNumber) => {
    let textInput = document.getElementById('text' + inputNumber);
    let colorInput = document.getElementById('color' + inputNumber);
    colorInput.value = textInput.value;
}

const updateText = (inputNumber) => {
    let textInput = document.getElementById('text' + inputNumber);
    let colorInput = document.getElementById('color' + inputNumber);
    let colorValue = colorInput.value;  
    textInput.value = colorValue;
}
