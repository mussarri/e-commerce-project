<?php

function login($data)
{
    $_SESSION['id'] = $data['id'];
    $_SESSION['role'] = $data['role'];
    $_SESSION['username'] = $data['username'];
}

function isError()
{
    global $error;
    return $error ?? false;
}

function isSuccess()
{
    global $success;
    return $success ?? false;
}

function session($name)
{
    return $_SESSION[$name] ?? false;
}

function session_cart($product_id, $quantity=1, $remove = false)
{
    if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
        if (array_key_exists($product_id, $_SESSION['cart'])) {
            // Product exists in cart so just update the quanity
            if ($remove) {
                unset($_SESSION['cart'][$product_id]);
            } else {
                $_SESSION['cart'][$product_id] += $quantity;
            }
        } else {
            // Product is not in cart so add it
            $_SESSION['cart'][$product_id] = $quantity;
        }
    } else {
        // There are no products in cart, this will add the first product to cart
        $_SESSION['cart'] = array($product_id => $quantity);
    }
}