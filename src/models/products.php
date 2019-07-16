<?php

function getProducts($type)
{
global $db;

    $sql = "SELECT
            t1.id AS product_id,
            t1.name AS product_name,
            t1.description AS product_description,
            t1.price AS product_price,
            t1.illustration AS product_illustration,
            t3.name AS ingredient_name,
            t3.type AS ingredient_type
        
        FROM
            product AS t1
            INNER JOIN product_ingredient AS t2 ON t2.id_product=t1.id
            INNER JOIN ingredient AS t3 ON t3.id=t2.id_ingredient
        
        WHERE
            t1.type=\"".$type."\"
        
        ORDER BY 
            t1.name ASC,
            t3.type ASC,
            t3.name ASC";
    
    $q = $db['main']->query($sql);
    return $q->fetchAll (PDO::FETCH_OBJ);
}

function getPizzas()
{
return getProducts ('pizza');
}

function getPastas()
{
return getProducts ('pasta');
}

function getSalads()
{
return getProducts ('salad');
}

function getDrinks()
{
return getProducts ('drink');
}

function getDesserts()
{
return getProducts ('dessert');
}

function getStarters()
{
return getProducts ('starter');
}
function getMenus()
{
return getProducts ('menu');
}


