

<div class="proceed-checkout">
    <?php if($data['cart']) :?>
    <table>
        <tr>
            <td>Id</td>
            <td>Nume</td>
            <td>Cantitate</td>
            <td>Pret</td>
        </tr>
        <?php foreach($data['cart'] as $cart) : ?>
        <form action="cart/modify/<?=$cart['book_id']?>">
            <tr>
                <td><?= $cart['book_id']?></td>
                <td><?= $cart['book']['name'] ?></td>
                <td><input type="text" name="qty" value="<?= $cart['quantity']?>"></td>
                <td><?= $cart['price'] ?></td>
            </tr>
        </form>
        <?php endforeach ?>
        <div >
            Nr. Produse : <?= $data['cartNum'] ?>
            Total       : <?= $data['cartTotal'] ?> RON
        </div>
        <hr>
    </table>

    <div>
        <h1>Informatii livrare</h1>
        <form action="cart/checkout" method="post">
            <fieldset>
                <h3>Contact</h3>
                <label>Nume</label><input name="name">
                <br><hr>
                <label>Prenume</label><input name="surname">
            </fieldset>

            <fieldset>
                <h3>Adresa</h3>
                <label>Localitate
                    <select name="county">
                        <option value="cluj">Cluj-Napoca</option>
                        <option value="alba">Alba Iulia</option>
                        <option value="bihor">Oradea</option>
                    </select>
                </label><br>
                <hr>
                <label>Oras
                    <select name="city">
                        <option value="cluj-napoca">Cluj</option>
                        <option value="alba-iulia">Alba</option>
                        <option value="oradea">Bihor</option>
                    </select>
                </label><br>
                <hr>
                <label>Adresa
                    <input name="address">
                </label>
                <hr>
            </fieldset>
            <fieldset>
                <input class="float-right" type="submit" value="Trimite comanda">
            </fieldset>
        </form>
    </div>
    <?php endif; ?>
    <div>
        <a href="cart"><button>Mergi inapoi</button></a>
    </div>
</div>