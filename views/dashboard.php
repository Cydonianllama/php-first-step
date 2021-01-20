<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/dashboard.css">
    <title>Dashboard</title>
</head>
<body>
    
    <div class = "container">
        <header class = "header">
            <nav class = "header__nav">
                <a class ="header__nav__a" href="../index.php">logout <img src="../public/assets/log-out.svg" alt="icon of logout"></a>
            </nav>
        </header>

        <div class = "view-product">

            <div class ="view-product__form">
                <fieldset class="container-form">
                    <legend>Product</legend>

                    <form class="form-product" method="post" action="<?php echo $_SERVER["PHP_SELF"]?>">
                
                        <div>
                            <label class="form-product__label" for="name-product">name product</label>
                            <input class="form-product__input" type="text" name="name-product" id="name-product"
                                placeholder="name-product">
                        </div>
                
                        <div>
                            <label class="form-product__label" for="text-area">description</label>
                            <textarea class="form-product__textarea" name="description-product" id="" cols="30" rows="5"></textarea>
                        </div>
                
                        <div>
                            <label class="form-product__label" for="select-category">category</label>
                            <select class="form-product__select" name="nameCategory" id="">
                                <option value="select">select</option>
                                <option value="carnes">carnes</option>
                                <option value="bebidas">bebidas</option>
                                <option value="dulces">dulces</option>
                                <option value="verdura">verdura</option>
                                <option value="fruta">fruta</option>
                                <option value="tuberculo">tuberculo</option>
                            </select>
                        </div>
                
                        <div>
                            <label class="form-product__label" for="quantity">quantity</label>
                            <input class="form-product__number" type="number" name="quantity" id="">
                        </div>
            
                        <button class="form-product__button" type="submit">create</button>

                    </form>
                </fieldset>
            </div>

            <div class="view-producr-table">
                <table class = "table">
                    <thead class ="table__head">
                        <tr class ="table__head__row">
                            <th>name</th>
                            <th>description</th>
                            <th>category</th>
                            <th>quantity</th>
                            <th>options</th>
                        </tr>
                    </thead>
                    <tbody class = "table__body">

                        <?php $controller->listAllProducts(); ?>

                    </tbody>
                </table>
                <div class ="log-table">
                    
                </div>
                <div class = "table-options">
                    <button id ="btn-delete-product" class ="table-options__delete">
                        <img src="../public/assets/trash-2.svg" alt="icon delete">
                        delete
                    </button>
                    <button class ="table-options__edit">
                        <img src="../public/assets/edit-2.svg" alt="icon edit">
                        edit
                    </button>
                </div>

            </div>
        </div>
    </div>

    <script src="../public/dashboard.js"></script>

</body>
</html>