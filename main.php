<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Header</h1>
    </header>
    <main>
        <section>
            <? if(isset($text)) :  ?>
                <? foreach($text as $item) : ?>
                    <h2>
                        <a href="index.php?id=<?=$item['id'];?>"><?=$item['title'];?></a>
                    </h2>
                    <p>
                        <?=$item['descr']?>
                    </p>
                    <? endforeach; ?>

            <? endif; ?>
        </section>
    </main>
    <footer>
        <h1>Footer</h1>
    </footer>
</body>
</html>