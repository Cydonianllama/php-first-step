
class Product{
    constructor(name,price,year){
        this.name  = name;
        this.price = price;
        this.year  = year;
    }
}

class valuesUI{
    constructor(estate){
        this.estate = estate;
    }
}

class UI{

    prueba(){
        console.log('mi prueba debe funcionar');
    }
    loggin_verificator(anonimous) {

        console.log('[info]verificador cargado');
        let button = document.querySelector('.btnlogin1');
        let forminterface = document.querySelector('.login-form-tipe1');
        

        button.addEventListener('click', function () {

            let username = document.getElementById('username').value;
            let password = document.getElementById('password').value;

            if (username === "pollito" && password === "admin") {
                
                valuesui.estate = 1;//para que se diriga a la interfaz de productos 
                console.log('[info]usuario y contraseñas correctas  : ' + valuesui.estate);
                setTimeout(() => {
                    forminterface.remove();
                }, 1500);

                anonimous();

            }
            else {
                console.log('error');
            }

        });

    }

    loggin_main() {

        const visuals_loggin =
            `
            <form class="login-form"  action="index.php">
                <h2>Login</h2>
                <div class="form-control">
                    <input type="text" name="username" id="username" placeholder=" " autocomplete="off" required />
                    <label for="username">Username</label>
                </div>
                <div class="form-control">
                    <input type="password" name="password" id="password" placeholder=" " autocomplete="off" required />
                    <label for="password">Password</label>
                </div>
                <button type="submit" class="btnlogin1">Login</button>
            </form>

        `;

        let container_ = document.createElement('div');
        let container = document.querySelector('.container');

        container_.className = "login-form-tipe1 ";
        container_.innerHTML = visuals_loggin; // le paso la estructura html de mi loggin
        container.appendChild(container_);

    }

    behaviour_interface_main(){

        let navItems = document.querySelectorAll(".nav__item");

        // Event Listeners
        navItems.forEach(val => val.addEventListener("click", e => accentUpdate(e.target)));
        window.addEventListener('load', () => accentUpdate());
        window.addEventListener('resize', () => accentUpdate());

        accentUpdate = el => {
            let active = el || [...navItems].filter(val => val.classList.contains('active'))[0];
            navItems.forEach(val => val.classList.remove('active'));
            active.classList.add('active');
            handleAccent(active);
        }

        handleAccent = el => {
            let style =
                `left: ${el.offsetLeft}px;
                     width: ${el.offsetWidth}px`;
            document.querySelector("#js-accent").style.cssText = style;
        };

        console.log('interface_main in behaviour');
    }

    interface_main(){

        let container = document.querySelector('.container');

        const nav =
        `   
            <header class="nav-tipe1">
                <ul>
                    <li class="nav__item active" onClick='ui.shell(2);'>productos</li>
                    <li class="nav__item" >Nav item</li>
                    <li class="nav__item" >Nav item</li>
                    <li class="nav__item" >Nav item</li>
                    <li class="nav__item longer ">Nav item longer</li>
                    <li class="nav__item ">Nav item</li>
                    <li class="nav__item " >Nav item</li>
                </ul>
                <div class="header__accent" id="js-accent">
                </div>
            </header>
        `;

        container.innerHTML = nav;
    }


    behaviours_products(){

        let self = this;

        //DOM evenets
        document.getElementById('formp')
            .addEventListener('submit', function (e) {

                //mandado a la base de datos a travez de metodo asícrono
                
                let data_form = document.getElementById('formp');
                
                const data = new FormData(data_form);
                fetch('crud.php', {
                    method: 'POST',
                    body: data
                })
                .then(res => console.log(res.text()) );
                /*
                    .then(res => res.json())
                    .then(data => {
                        console.log(data);
                    });
                */
                    
                //crud statico
                let name = document.getElementById('name').value,
                    price = document.getElementById('price').value,
                    year = document.getElementById('year').value;

                let product = new Product(name, price, year);

                console.log(product);
                    
                if (name === '' || price === '' ) {
                    console.log('[info] error en log line 157');
                    self.showMessage(1);
                }
                else {
                    self.addProduct(product);
                    console.log('[info] exito en log line 162');
                    self.showMessage(0);
                }
                
                //e es el dato que te dan cuando captura un evento
                e.preventDefault();//cancelar la actualizacion de la DOM

            });

        document.getElementById('listprod')
            .addEventListener('click', function (e) {
                self.deleteProduct(e.target);
            });

    }

    visuals_products(){

        let container = document.querySelector('.container');

        const visuals_products = 
        `
            <div class="forml">
                <form id="formp" >
                    <h4>PRODUCTO</h4>
                    <input type="text" placeholder="Product name" id="name" name="name">
                    <input type="number" placeholder="Product price" step="0.01" id="price" name="price">
                    <input type="number" placeholder="Product year" id="year" step="0000" value="2018" max="2025" min="2011" name="year">
                    <input type="submit" value="save" >
                </form>
            </div>
        
            <div id="listprod">
        
            </div>
        `;

        container.innerHTML = visuals_products;

    }

    addProduct(product){
        let productList = document.getElementById('listprod');
        let element = document.createElement('div');
        element.innerHTML = 
            `
                <h3 class ="addPh3">${product.name}</h3>
                <p class= "addPp">precio   :$${product.price}</p>
                <p class= "addPp">ano      :${product.year}</p>
                <div id = "list-operaciones">
                    <button id="a-modificar" name="modify">modificar</button>
                    <button id="a-eliminar" name="delete">eliminar</button>
                </div>
            `;
        
        productList.appendChild(element); 
        this.resetForm_a();   
    }
    deleteProduct(element){
        if(element.name =="delete"){
            console.log('eliminando');
            element.parentElement.parentElement.remove();
        }
        if(element.name =="modify"){
            console.log('[warning] not implemented')
        }
    }

    showMessage(type){
        let div = document.createElement('div');
        div.className = ` red-sun `;

        let message;
        switch(type){
            case 0:
                message = 'insertacion exitosa (have fun)' ;
                break;
            case 1:
                message = 'insertacion erronea (cries in spanish)';
                break;
        }

        div.appendChild(document.createTextNode(message));
        // Show in The DOM
        let container = document.querySelector('.container');
        let app = document.querySelector('#listprod');
        // Insert Message in the UI
        container.insertBefore(div, app);
        
        // Remove the Message after 3 seconds
        setTimeout(function () {
            document.querySelector('.red-sun').remove();
        }, 500);
    }

    resetForm_a(){
        document.getElementById('formp').reset();
    }


    
    functionalities_activate(i) {

        let self = this;

        switch(i) {

            case 0:

                console.log('quiero verificar');
                self.loggin_verificator(function(){
                    document.querySelector('.btnlogin1');
                    console.log(valuesui.estate);
                    if (valuesui.estate === 1) {
                        self.prueba();
                        self.shell(1);    
                    }
                }) 

                break;

            case 1:
                //dont work
                //this.behaviour_interface_main();
                break;

            case 2:
                this.behaviours_products();
                break;

        }
    }

    shell(estado) {

        switch (estado) {

            case 0:
                this.loggin_main();
                this.functionalities_activate(0);
                break;

            case 1:
                this.interface_main();//mostrar la interfaz principal
                this.functionalities_activate(1);
                console.log(document.querySelector('.container'));
                break;
            case 2://productos
                this.visuals_products();
                this.functionalities_activate(2);
                break;
        }

    }

}

console.log('[bienvenida] hola a mi single page web');
const ui = new UI();
const valuesui = new valuesUI(0); 
ui.shell(valuesui.estate);

