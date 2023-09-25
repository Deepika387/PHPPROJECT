let result = document.getElementById("result");

function appendToResult(value) {
    if (result.value === "0" && value !== ".") {
        result.value = value;
    } else {
        result.value += value;
    }
}

function clearResult() {
    result.value = "0";
}

function calculateResult() {
    try {
        result.value = eval(result.value);
    } catch (error) {
        result.value = "Error";
    }
}
