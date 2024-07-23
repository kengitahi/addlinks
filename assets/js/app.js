const formRows = document.getElementById("formRows");
const addRows = document.getElementById("addRows");

let row = `
    <div class="row mb-3">
        <div class="col">
            <label for="keywords" class="form-label">Keyword</label>
            <input type="text" class="form-control" name="keywords[]" id="linkText">
        </div>
        <div class=" col">
            <label for="links" class="form-label">Link</label>
            <input type="url" class="form-control" name="links[]" id="links[]">
        </div>
    </div>`;

addRows.addEventListener('click', function () {
    formRows.insertAdjacentHTML('beforeend', row)
})

function copyRaw() {
    var copyText = document.getElementById("htmlResults").innerText;
    navigator.clipboard.writeText(copyText).then(() => {
        // Alert the user that the action took place.
        // Nobody likes hidden stuff being done under the hood!
        alert("The raw HTML content has been copied to your clipboard");
    });
}

//Local storage stuff
// Get the fields to track
let originalText = document.getElementById("originalText");
let linkText = document.getElementById("linkText");
let linkAnchor = document.getElementById("linkAnchor");


function changed() {
    let resultDisplay = document.getElementById("resultDisplay");
    let htmlResults = document.getElementById("htmlResults");
    let resultDiv = document.getElementById('resultDiv');

    resultDisplay.innerHTML = htmlResults.value;

    if (resultDiv.classList.contains('hidden')) {
        resultDiv.classList.remove('hidden');
    }
    resultDiv.classList.add('visible');
}

// See if we have autosave values
if (sessionStorage.getItem("originalText")) {
    // Restore the contents of the text field
    originalText.value = sessionStorage.getItem("originalText");
}

if (sessionStorage.getItem("linkText")) {
    // Restore the contents of the text field
    linkText.value = sessionStorage.getItem("linkText");
}

if (sessionStorage.getItem("linkAnchor")) {
    // Restore the contents of the text field
    linkAnchor.value = sessionStorage.getItem("linkAnchor");
}

// Listen for changes in the field
originalText.addEventListener("change", () => {
    // And save the results into the session storage object
    sessionStorage.setItem("originalText", originalText.value);
});

linkText.addEventListener("change", () => {
    // And save the results into the session storage object
    sessionStorage.setItem("linkText", linkText.value);
});

linkAnchor.addEventListener("change", () => {
    // And save the results into the session storage object
    sessionStorage.setItem("linkAnchor", linkAnchor.value);
});

function resetSessionStorage() {
    sessionStorage.removeItem("originalText");
    sessionStorage.removeItem("linkText");
    sessionStorage.removeItem("linkAnchor");
}