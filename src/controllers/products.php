<?php
/**
 * Fonction dédiée à l'affichage des Pizzas
 *
 * @return void
 */
function products_pizzas()
{
    // Inclusion de la dépendance "Products model"
    include_once "../src/models/products.php";
    // Récupération des données de type "pizza"
    $productsModel= productsBuilder(getPizzas());
    
    // Titre de la page
    $pageTitle = "Nos Pizzas";
    // Intégration de la vue "product"
    include_once "../src/views/products/index.php";
}


/**
 * Fonction dédiée à l'affichage des Pates
 *
 * @return void
 */
function products_pastas()
{
    // Inclusion de la dépendance "Products model"
    include_once "../src/models/products.php";
    // Récupération des données de type "pasta"
    $productsModel= productsBuilder(getPastas());
    
    // Titre de la page
    $pageTitle = "Nos Pates";
    // Intégration de la vue "product"
    include_once "../src/views/products/index.php";
}


/**
 * Fonction dédiée à l'affichage des Salads
 *
 * @return void
 */
function products_salads()
{
    // Inclusion de la dépendance "Products model"
    include_once "../src/models/products.php";
    // Récupération des données de type "pizza"
    $productsModel= productsBuilder(getSalads());
    
    // Titre de la page
    $pageTitle = "Nos Salades";
    // Intégration de la vue "product"
    include_once "../src/views/products/index.php";
}


/**
 * Fonction dédiée à l'affichage des Desserts
 *
 * @return void
 */
function products_desserts()
{
    // Inclusion de la dépendance "Products model"
    include_once "../src/models/products.php";
    // Récupération des données de type "pizza"
    $productsModel= productsBuilder(getDesserts());
    
    // Titre de la page
    $pageTitle = "Nos Desserts";
    // Intégration de la vue "product"
    include_once "../src/views/products/index.php";
    
}


/**
 * Fonction dédiée à l'affichage des Boissons
 *
 * @return void
 */
function products_drinks()
{
    // Inclusion de la dépendance "Products model"
    include_once "../src/models/products.php";
    // Récupération des données de type "pizza"
    $productsModel= productsBuilder(getDrinks());
    
    // Titre de la page
    $pageTitle = "Nos Boissons";
    // Intégration de la vue "product"
    include_once "../src/views/products/index.php";
}


/**
 * Fonction dédiée à l'affichage des Menus
 *
 * @return void
 */
function products_menus()
{
    // Inclusion de la dépendance "Products model"
    include_once "../src/models/products.php";
    // Récupération des données de type "pizza"
    $productsModel= productsBuilder(getMenus());
    
    // Titre de la page
    $pageTitle = "Nos Menus";
    // Intégration de la vue "product"
    include_once "../src/views/products/index.php";
}


/**
 * Fonction dédiée à l'affichage des Entrées
 *
 * @return void
 */
function products_starters()
{
    // Inclusion de la dépendance "Products model"
    include_once "../src/models/products.php";
    // Récupération des données de type "starter"
    dump( getStarters() );
}
 

    function productsBuilder($products):Array{
        $output = [];

        if(is_array ($products)){
            // On se base sur la clé primaire du produit ID dans la BDD et identifier sous le nom "product_id" dans la requête t1.id AS product_id. Pour définir le nombre réel de produits dans le tableau $output
            //Si l'index "ID du produit" n'existe pas dans le tableau $output, alors on le créer et on lui affecte un tableau vide ($output[2] = [1])
            foreach ($products as $product){
                if ( !isset($output[$product->product_id])){
                    $output [$product->product_id] = [];
                }
                //On reprend les prorpriétés du produit ($product) pour les ajouter à notre nouveau tableau $output[2] 
                $output[ $product->product_id]['id'] = $product->product_id;
                $output[ $product->product_id]['name'] = $product->product_name;
                $output[ $product->product_id]['description'] = $product->product_description;
                $output[ $product->product_id]['price'] = $product->product_price;
                $output[ $product->product_id]['illustration'] = $product->product_illustration;

                if (!isset($output[ $product->product_id] ['ingredients']))
                {
                $output[ $product->product_id]['ingredients'] = [];
                }
                //On ajoute les ingrédients dans le tableau $output[2] ['ingredients]
                array_push (
                    $output [ $product->product_id] ['ingredients'],
                    [
                        "name"=>$product->ingredient_name,
                        "type"=>$product->ingredient_type
                    ]
                );
            }
        }

        return $output;
    }