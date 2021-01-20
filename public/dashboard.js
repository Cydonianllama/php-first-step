const tableRows = document.querySelectorAll('.table__body__row')
const btnDeleteProduct = document.getElementById('btn-delete-product')

// for render the log facing the user
const logTable = document.querySelector('.log-table')

//max quantity of selected items row
const maxSelected = 5 // only 5 element

//the current elements row selected (this will change with local storage)
var currentSelected = 0
// validator of business rule
var isPermitedSelectMore = true

var selectedItems = []

//store id of the products
var arrayWaitingData = []
var waitingData =
{
    "idProduct1": null,
    "idProduct2": null,
    "idProduct3": null,
    "idProduct4": null,
    "idProduct5": null,
    "quantityForDeletion": null,
    "dateOfDeletion": null
}

function addProductWaitingAction(){
    
}

function validateActionForSelectedProduct(idProduct){
    //first validate lasted insertions
    switch(idProduct){
        case waitingData["idProduct1"]:
            waitingData["idProduct1"] = null
            break
        case waitingData["idProduct2"]:
            waitingData["idProduct2"] = null
            break
        case waitingData["idProduct3"]:
            waitingData["idProduct3"] = null
            break
        case waitingData["idProduct4"]:
            waitingData["idProduct4"] = null
            break
        case waitingData["idProduct5"]:
            waitingData["idProduct5"] = null
            break
        case null: 

            //insert in any waitin data null
            break
    }
}

function toggleBoolean(element){
    if (element === true) return false
    else return true
}

function processSelectRow(callback,checkRow){
    // action of increase of decrease the max quantity of rows allowed
    if (isPermitedSelectMore == true) {
        callback()
        //checkRow.checked = toggleBoolean(checkRow.checked)
        if (checkRow.checked) currentSelected++
        else currentSelected--
    } else {
        if (checkRow.checked == true) {
            callback()
            
            // clear the log
            logTable.innerHTML = ''
            logTable.classList.toggle("advice")

            //checkRow.checked = toggleBoolean(checkRow.checked)
            isPermitedSelectMore = true
            currentSelected--
        
        }
    }
}

const selectRowAction = (event) =>{

    //for cached data object of the DOM
    var row
    var checkRow

    if (event.target.tagName !== 'INPUT'){
        // the current row
        row = event.target
        // the check of the current row
        checkRow = row.parentNode.childNodes[9].childNodes[0]

        //convert check to not checked (respecting business rules)
        processSelectRow(() => checkRow.checked = toggleBoolean(checkRow.checked),checkRow)

    }else{

        //the checkbox has selected directly
        checkRow = event.target

        //convert check to not checked (respecting business rules)
        processSelectRow(()=>{ console.log('nothig to see here')},checkRow)
    }
    

    

    console.log(currentSelected, maxSelected, isPermitedSelectMore)

    // validation of the business rule (max rows selected)
    if (currentSelected >= maxSelected) {
        isPermitedSelectMore = false

        //set information for the user
        logTable.innerHTML = 'max permited'
        logTable.classList.toggle("advice")

        console.log('max permited')
    }
    else return // no action check mean

    event.preventDefault()
}


async function postDataForDeletion(url = '', data = {}) {
    // Opciones por defecto estan marcadas con un *
    const response = await fetch(url, {
        method: 'POST',
        mode: 'no-cors',
        cache: 'no-cache',
        credentials: 'same-origin',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        redirect: 'follow',
        referrerPolicy: 'no-referrer',
        body: JSON.stringify(data)
    });
    return response.json();
}
const deleteProductAction = (event) => {    
    let response = postDataForDeletion('../controllers/controllerDashboard.php',)
    event.preventDefault()
}

function listeners(){
    tableRows.forEach(item => {
        item.addEventListener('click',selectRowAction)
    })
    btnDeleteProduct.addEventListener('click',deleteProductAction)
}

function app(){
    listeners()
}

app()