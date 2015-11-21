
<div class="books">
        <ul class="float-left">
            <li>
                <div class="book float-left">
                    <img src="resourses/images/<?= $data['book'][0]['picture'] ?>" >
                    <h2><a href="/book/<?= $data['book'][0]['id'] ?>"><?= $data['book'][0]['name'] ?></a></h2>
                    <span class="price">Pret : <?= $data['book'][0]['price'] ?> RON</span>
                    <form method="post" action="cart/add">
                        <input type="hidden" name="book_id" value="<?= $data['book'][0]['id'] ?>">
                        <input type="hidden" name="book_price" value="<?= $data['book'][0]['price'] ?>">
                        <input type="hidden" name=e"action" value="add">
                        <br/>
                        Cantitate :  <input style="width: 100px" type="text" name="qty" value="1" ><br/> <br/>
                        <input type="submit" value="Adauga in cos">
                    </form>
                </div>
            </li>
        </ul>
</div>