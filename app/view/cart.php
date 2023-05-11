<?php require view('static/header');
global $productInf, $products, $error;
?>
    <section id="cart_items">
        <div class="container" style="min-height: 150px;">
            <?php if ($error): ?>
                <div class="alert alert-warning">
                    <?= $error ?>
                </div>
            <?php else: ?>
                <div class="table-responsive cart_info">
                    <table class="table table-condensed">
                        <thead>
                        <tr class="cart_menu">
                            <td class="image">Item</td>
                            <td class="description"></td>
                            <td class="price">Price</td>
                            <td class="quantity">Quantity</td>
                            <td class="total">Total</td>
                            <td></td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        if ($productInf) foreach ($productInf as $product):
                            ?>

                            <tr>
                                <td class="cart_product" style="max-width: 100px;margin-right: 0px">
                                    <a href="<?= site_url('product') . '/'
                                    . $product['id'] ?>"><img src="<?= $product['image_url'] ?>" alt=""
                                                              style="width: 100%"></a>
                                </td>
                                <td class="cart_description" style="max-width: 500px">
                                    <p style="font-size: 14px"><a href="<?= site_url('product') . '/'
                                        . $product['id'] ?>"><?= $product['name'] ?></a></p>
                                    <p>Web ID: 1089772</p>
                                </td>
                                <td class="cart_price">
                                    <p>$<?= $product['price'] ?></p>
                                </td>
                                <td class="cart_quantity">
                                    <div class="cart_quantity_button">
                                        <a class="cart_quantity_up" href="<?= site_url('api') . '/addcart?product_id='
                                        . $product['id'] ?>">
                                            + </a>
                                        <input class="cart_quantity_input" type="text" name="quantity"
                                               value="<?= $product['quantity'] ?>"
                                               autocomplete="off" size="2">
                                        <a class="cart_quantity_down"
                                           href="<?= site_url('api') . '/removecart?product_id='
                                           . $product['id'] ?>"> - </a>
                                    </div>
                                </td>
                                <td class="cart_total">
                                    <p class="cart_total_price">$<?= $product['price'] * $product['quantity'] ?></p>
                                </td>
                                <td class="cart_delete">
                                    <a class="cart_quantity_delete"
                                       href="<?= site_url('api') . '/removecart?product_id='
                                       . $product['id'] . '&remove=1' ?>"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            <?php endif; ?>
        </div>
    </section>


<?php if ($productInf): ?>
    <section id="do_action">
        <div class="container">
            <div class="heading">
                <h3>What would you like to do next?</h3>
                <p>Choose if you have a discount code or reward points you want to use or would like to estimate
                    your delivery cost.</p>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="chose_area">
                        <ul class="user_option">
                            <li>
                                <input type="checkbox">
                                <label>Use Coupon Code</label>
                            </li>
                            <li>
                                <input type="checkbox">
                                <label>Use Gift Voucher</label>
                            </li>
                            <li>
                                <input type="checkbox">
                                <label>Estimate Shipping &amp; Taxes</label>
                            </li>
                        </ul>
                        <ul class="user_info">
                            <li class="single_field">
                                <label>Country:</label>
                                <select>
                                    <option>United States</option>
                                    <option>Bangladesh</option>
                                    <option>UK</option>
                                    <option>India</option>
                                    <option>Pakistan</option>
                                    <option>Ucrane</option>
                                    <option>Canada</option>
                                    <option>Dubai</option>
                                </select>

                            </li>
                            <li class="single_field">
                                <label>Region / State:</label>
                                <select>
                                    <option>Select</option>
                                    <option>Dhaka</option>
                                    <option>London</option>
                                    <option>Dillih</option>
                                    <option>Lahore</option>
                                    <option>Alaska</option>
                                    <option>Canada</option>
                                    <option>Dubai</option>
                                </select>

                            </li>
                            <li class="single_field zip-field">
                                <label>Zip Code:</label>
                                <input type="text">
                            </li>
                        </ul>
                        <a class="btn btn-default update" href="">Get Quotes</a>
                        <a class="btn btn-default check_out" href="">Continue</a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="total_area">
                        <?php
                        $cartTotal = 0;
                        foreach ($productInf as $product) {
                            $cartTotal += $product['price'] * $product['quantity'];
                        }
                        ?>
                        <ul>
                            <li>Cart Sub Total <span>$<?= price($cartTotal) ?></span></li>
                            <li>Eco Tax <span>$<?= price(2) ?></span></li>
                            <li>Shipping Cost <span>Free</span></li>
                            <li>Total <span>$<?= price($cartTotal + 2) ?></span></li>
                        </ul>
                        <a class="btn btn-default update" href="">Update</a>
                        <a class="btn btn-default check_out" href="">Check Out</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php endif; ?>


<?php require view('static/footer');
?>