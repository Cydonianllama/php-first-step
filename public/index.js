'use strict'

const demoApp = document.getElementById('demo__app')
const btnCreate = document.getElementById('btn-create')

const inputNameProduct = document.getElementById('name-product')
const inputDescription = document.getElementById('description')
const inputQuantity = document.getElementById('quantity')

var products = []

function createProduct({nameproduct,description,category,quantity}){
    return {
        nameproduct,
        description,
        category,
        quantity
    }
}

function storeProduct(product){
    products.push(product)
    return product
}

function generateTemplate(product){
    let template = 
    `
        <div class = "product">
            <h2 class = "product__title">${product.nameproduct}</h2>
            <span class = "product__category">${product.category}</span>
            <span class ="product__quantity">${product.quantity}</span>
            <p class = "product__description">${product.description}</p>

        </div>
    `
    return template
}

function renderProduct(template){
    demoApp.innerHTML = demoApp.innerHTML + template 
}

const listenButtonCreate = (event) => {
    let capturedData = {
        nameproduct : inputNameProduct.value,
        description : inputDescription.value,
        category : 'name category',
        quantity : inputQuantity.value
    }
    console.log(capturedData)
    renderProduct(generateTemplate(storeProduct(createProduct(capturedData))))
    event.preventDefault()
}

function listenersApp(){
    btnCreate.addEventListener('click',listenButtonCreate)
}

function app(){
    listenersApp()
}

app()