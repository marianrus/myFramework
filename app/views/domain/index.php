
<div class="books">
    <h1><?= $data['domain'][0]['name']?></h1>
    <h2><?= count($data['books']) ?> carti disponibile</h2>

    <?php foreach($data['books'] as $book) : ?>
        <ul class="float-left">
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
        </ul>
    <?php endforeach ?>
</div>