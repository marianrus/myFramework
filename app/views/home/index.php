
<div class="main-page">
    <div class="new-booksss">
        <h1>Cele mai noi carti</h1>
        <ul>
            <?php foreach($data['newBooks'] as $book) : ?>
                <li class="float-left">
                    <div class="book float-left">
                        <img src="resourses/images/<?= $book['picture'] ?>" >
                        <h2><a href="/book/<?= $book['id'] ?>"><?= $book['name'] ?></a></h2>
                        <span class="price">Pret : <?= $book['price'] ?> RON</span>
                        <form method="post" action="cart/add">
                            <input type="hidden" name="book_id" value="<?= $book['id'] ?>">
                            <input type="hidden" name="book_price" value="<?= $book['price'] ?>">
                            <input type="hidden" name=e"action" value="add">
                            <br/>
                            Cantitate :  <input style="width: 100px" type="text" name="qty" value="1" ><br/> <br/>
                            <input type="submit" value="Adauga in cos">
                        </form>
                    </div>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
    <div class="popular-booksss margin-top">
        <h1>Cele mai populare carti</h1>
        <ul>
            <?php foreach($data['popularBooks'] as $book) : ?>
                <li>
                    <div class="book float-left">
                        <img src="resourses/images/<?= $book['picture'] ?>" >
                        <h2><a href="/book/<?= $book['id'] ?>"><?= $book['name'] ?></a></h2>
                        <span class="price">Pret : <?= $book['price'] ?> RON</span>
                        <form method="post" action="cart/add">
                            <input type="hidden" name="book_id" value="<?= $book['id'] ?>">
                            <input type="hidden" name="book_price" value="<?= $book['price'] ?>">
                            <input type="hidden" name=e"action" value="add">
                            <br/>
                            Cantitate :  <input style="width: 100px" type="text" name="qty" value="1" ><br/> <br/>
                            <input type="submit" value="Adauga in cos">
                        </form>
                    </div>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</div>

