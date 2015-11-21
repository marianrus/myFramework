<div class="cart-container">
    <?php if($data['cart']) : ?>
    <table>
        <tr>
            <td>Id</td>
            <td>Nume</td>
            <td>Cantitate</td>
            <td>Pret</td>
            <td></td>
            <td></td>
        </tr>
        <?php endif ?>
        <?php foreach($data['cart'] as $cart) : ?>
            <?php if($data['cart']) : ?>

            <form action="cart/modify/<?=$cart['book_id']?>">
                <tr>
                    <td><?= $cart['book_id']?></td>
                    <td><?= $cart['book']['name'] ?></td>
                    <td><input type="text" name="qty" value="<?= $cart['quantity']?>"></td>
                    <td><?= $cart['price'] ?></td>
                    <td><button onclick="this.form.submit();">Modifica</button></td>
                    <td><a href="cart/delete/<?=$cart['book_id']?>"><button>Sterge</button></a></td>
                </tr>
            </form>
            <?php endif ?>
        <?php endforeach ?>

        <?php if($data['cart']) : ?>
    </table>
    <div class="checkout">
        <a href="cart/checkout"><button>Finalizeaza Comanda</button></a>
    </div>
    <?php endif ?>

    <?php if(!$data['cart']) : ?>
        <div>
            <h1>Cosul este gol</h1>
        </div>
    <?php endif ?>
</div>

