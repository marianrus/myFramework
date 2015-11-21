<?php

class DataLoader
{
    public function loadData()
    {
//        $this->loadDomainData();
        $this->loadBooksData();
    }

    private function loadDomainData()
    {
        $data = [
            [
                'name' => 'Dragoste',
                'description' => 'Dragoste descriere'
            ],
            [
                'name' => 'Informatica',
                'description' => 'Informatica descriere'
            ],
            [
                'name' => 'Manuale',
                'description' => 'Manuale descriere'
            ],
            [
                'name' => 'Medicina',
                'description' => 'Medicina descriere'
            ],
            [
                'name' => 'Mitologie',
                'description' => 'Mitologie descriere'
            ],
            [
                'name' => 'Poezii',
                'description' => 'Poezii descriere'
            ],
            [
                'name' => 'Povesti',
                'description' => 'Povesti descriere'
            ],
            [
                'name' => 'SF',
                'description' => 'SF descriere'
            ],
            [
                'name' => 'Teatru',
                'description' => 'Teatru descriere'
            ],



        ];

        $domain = new \app\models\Domain();
        $domain->delete('domain');
        foreach($data as $d)
        {
            $domain->insert('domain', $d);
        }
    }


    private function loadBooksData()
    {

        $books = [
            [
                'id'        => 1,
                'domain_id' => rand(0,16),
                'name'      => 'Visul unei nopti de vara',
                'price'     => 75,
                'picture'   => 'books/1.jpeg',
                'author_id' => rand(1,5),
                'date_added'=> date('Y-m-d')
            ],
            [
                'id'        => 2,
                'domain_id' => rand(0,16),
                'name'      => 'Poezii',
                'price'     => 76,
                'picture'   => 'books/2.jpeg',
                'author_id' => rand(1,5),
                'date_added'=> date('Y-m-d')
            ],
            [
                'id'        => 3,
                'domain_id' => rand(0,16),
                'name'      => 'Hamlet',
                'price'     => 105,
                'picture'   => 'books/3.jpeg',
                'author_id' => rand(1,5),
                'date_added'=> date('Y-m-d')
            ],
            [
                'id'        => 4,
                'domain_id' => rand(0,16),
                'name'      => 'Preludiul Fundatiei',
                'price'     => 83,
                'picture'   => 'books/4.jpeg',
                'author_id' => rand(1,5),
                'date_added'=> date('Y-m-d')
            ],
            [
                'id'        => 5,
                'domain_id' => rand(0,16),
                'name'      => 'Romeo si Julieta',
                'price'     => 52,
                'picture'   => 'books/5.jpeg',
                'author_id' => rand(1,5),
                'date_added'=> date('Y-m-d')
            ],
            [
                'id'        => 6,
                'domain_id' => rand(0,16),
                'name'      => 'Fundatie si Imperiu',
                'price'     => 99,
                'picture'   => 'books/6.jpeg',
                'author_id' => rand(1,5),
                'date_added'=> date('Y-m-d')
            ],
            [
                'id'        => 7,
                'domain_id' => rand(0,16),
                'name'      => 'Print si cersetor',
                'price'     => 180,
                'picture'   => 'books/7.jpeg',
                'author_id' => rand(1,5),
                'date_added'=> date('Y-m-d')
            ],
            [
                'id'        => 8,
                'domain_id' => rand(0,16),
                'name'      => 'Pace si razboi',
                'price'     => 74,
                'picture'   => 'books/8.jpeg',
                'author_id' => rand(1,5),
                'date_added'=> date('Y-m-d')
            ],
            [
                'id'        => 9,
                'domain_id' => 12,
                'name'      => 'Pace si razboi',
                'price'     => 74,
                'picture'   => 'books/8.jpeg',
                'author_id' => rand(1,5),
                'date_added'=> date('Y-m-d')
            ],
            [
                'id'        => 10,
                'domain_id' => 12,
                'name'      => 'Pace si razboi',
                'price'     => 74,
                'picture'   => 'books/8.jpeg',
                'author_id' => rand(1,5),
                'date_added'=> date('Y-m-d')
            ],
        ];
        $book =  new \app\models\Book();
//        $book->delete('books');

        foreach($books as $b)
        {
            $book->insert('books',$b);
        }

    }
}
