<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li class="active"><?php echo ucfirst($data['page']); ?></li>
            </ul>
        </div>
    </div>
</div>
<div class="Shopping-cart-area pt-60 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="#">
                    <div class="table-content table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="li-product-checkall">
                                        <input type="checkbox" >
                                    </th>
                                    <th class="li-product-thumbnail">Images</th>
                                    <th class="cart-product-name">Product</th>
                                    <th class="li-product-price">Unit Price</th>
                                    <th class="li-product-quantity">Quantity</th>
                                    <th class="li-product-subtotal">Total</th>
                                    <th class="li-product-remove">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="li-product-remove">
                                        <input type="checkbox" >
                                    </td>
                                    <td class="li-product-thumbnail"><a href="#"><img src="images/product/small-size/5.jpg" alt="Li's Product Image"></a></td>
                                    <td class="li-product-name"><a href="#">Accusantium dolorem1</a></td>
                                    <td class="li-product-price"><span class="amount">$46.80</span></td>
                                    <td class="quantity">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" value="1" type="text">
                                            <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                            <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                        </div>
                                    </td>
                                    <td class="product-subtotal"><span class="amount">$70.00</span></td>
                                    <td class="li-product-remove"><i class="fa-solid fa-trash"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-5 ml-auto">
                            <div class="cart-page-total">
                                <h2>Cart totals</h2>
                                <div class="cart-page-content">
                                    <ul>
                                        <li>Total <span>$130.00</span></li>
                                    </ul>
                                    <a href="#">Checkout</a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>