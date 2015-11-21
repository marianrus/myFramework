

<div class="navigation float-left delimiter">
    <div>
        <ul class="navigation-content">
            <?php foreach($data['domain'] as $d) : ?>
                <li><a href="domain/<?= $d['id'] ?>"><?= $d['name'] ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <hr/>
    <div class="search">
        <h3>Cautare</h3>
        <form action>
            <input type="text" name="search">
            <input type="submit" value="cauta">
        </form>
    </div>
    <hr/>
    <div class="cart margin-top">
        <h2>Cos</h2>
        <p>Aveti <span class="value"><?= $data['cart_num'] ?></span> carti in cos in valoare de <span class="value">
                <?=  $data['cart_sum']?>
        </span> lei</p>
        <a href="cart">Click pentru a vedea tot cosul</a>
    </div>
</div>
