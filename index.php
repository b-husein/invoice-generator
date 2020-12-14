<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8' />
    <title>Invoice preparation</title>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro&display=swap" rel="stylesheet">
</head>
<body>
<div id="wrap"><div>
        <h1>Checkout and bill</h1>
        <form method="post" action="create_receipt.php">
            <fieldset>
                <legend>Client Details</legend>
                <div class="col">
                    <p>
                        <label for="name">Name</label>
                        <input type="text" name="name" value="" />
                    </p>
                    <p>
                        <label for="email">Email Address</label>
                        <input type="text" name="email" value="" />
                    </p>
                </div>
                <div class="col">
                    <p>
                        <label for="address">Address</label>
                        <input type="text" name="address" value="" />
                    </p>
                    <p>
                        <label for="city">City</label>
                        <input type="text" name="city" value="" />
                    </p>
                    <p>
                        <label for="province">County</label>
                        <input type="text" name="province" value="" />
                    </p>
                    <p>
                        <label for="postal_code">Postal Code</label>
                        <input type="text" name="postal_code" value="" />
                    </p>
                    <p>
                        <label for="country">Country</label><input type="text" name="country" value="" />
                    </p>
                </div>
            </fieldset>
            <fieldset>
                <legend>Cart</legend>
                <table>
                    <thead>
                    <tr><td>Product</td><td>Price</td></tr>
                    <thead>
                    <tbody>
                    <tr>
                        <td><input type='text' value='Product 1' name='product[]' /></td>
                        <td>$<input type='text' value='00.00' name='price[]' /></td>
                    </tr>
                    <tr>
                        <td><input type='text' value='Product 2' name='product[]' /></td>
                        <td>$<input type='text' value='00.00' name='price[]' /></td>
                    </tr>
                    <tr>
                        <td><input type='text' value='Product 3' name='product[]' /></td>
                        <td>$<input type='text' value='00.00' name='price[]' /></td>
                    </tr>
                    <tr>
                        <td><input type='text' value='Product 4' name='product[]' /></td>
                        <td>$<input type='text' value='00.00' name='price[]' /></td>
                    </tr>
                    </tbody>
                </table>
            </fieldset>
            <button type="submit">Generate invoice</button>
        </form>
    </div></div>
</body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.0/jquery.min.js"></script>
<script type="text/javascript">
    $('button').click(function () {
        $.post('create_receipt.php', $('form').serialize(), function () {
            $('div#wrap div').fadeOut( function () {
                $(this).empty().html("<h2>Thank you!</h2><p>Thank you for your order. Please <a href='receipt.pdf'>download your receipt</a>. </p>").fadeIn();
            });
        });
        return false;
    });
</script>
</html>