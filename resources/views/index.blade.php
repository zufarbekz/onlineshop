
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Интернет Магазин: Главная</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/starter-template.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Интернет Магазин</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Все товары</a></li>
                <li ><a href="/categories">Категории</a>
                </li>
                <li ><a href="#">В корзину</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">₽<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">$</a></li>
                        <li><a href="#">€</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Войти</a></li>

            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="starter-template">
        <p class="alert alert-success">The Project was reset</p>
        <h1>Все товары</h1>
        <form method="GET" action="#">
            <div class="filters row">
                <div class="col-sm-6 col-md-3">
                    <label for="price_from">Цена от                    <input type="text" name="price_from" id="price_from" size="6" value="">
                    </label>
                    <label for="price_to">до                    <input type="text" name="price_to" id="price_to" size="6"  value="">
                    </label>
                </div>
                <div class="col-sm-2 col-md-2">
                    <label for="hit">
                        <input type="checkbox" name="hit" id="hit" > Хит                </label>
                </div>
                <div class="col-sm-2 col-md-2">
                    <label for="new">
                        <input type="checkbox" name="new" id="new" > Новинка                </label>
                </div>
                <div class="col-sm-2 col-md-2">
                    <label for="recommend">
                        <input type="checkbox" name="recommend" id="recommend" > Рекомендуем                </label>
                </div>
                <div class="col-sm-6 col-md-3">
                    <button type="submit" class="btn btn-primary">Фильтр</button>
                    <a href="#" class="btn btn-warning">Сброс</a>
                </div>
            </div>
        </form>
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <div class="labels">


                    </div>
                    <img src="http://internet-shop.tmweb.ru/storage/products/iphone_x.jpg" alt="iPhone X 64GB">
                    <div class="caption">
                        <h3>iPhone X 64GB</h3>
                        <p>71990 ₽</p>
                        <p>
                        <form action="https://internet-shop.tmweb.ru/basket/add/1" method="POST">
                            Не доступен                                <a href="https://internet-shop.tmweb.ru/mobiles/iphone_x_64"
                                                                          class="btn btn-default"
                                                                          role="button">Подробнее</a>
                            <input type="hidden" name="_token" value="vN7jQQKL17syc1D7M5pR3YDSg2lQIW1rWgXBF1R7">            </form>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <div class="labels">


                    </div>
                    <img src="http://internet-shop.tmweb.ru/storage/products/iphone_x_silver.jpg" alt="iPhone X 256GB">
                    <div class="caption">
                        <h3>iPhone X 256GB</h3>
                        <p>89990 ₽</p>
                        <p>
                        <form action="https://internet-shop.tmweb.ru/basket/add/2" method="POST">
                            <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                            <a href="https://internet-shop.tmweb.ru/mobiles/iphone_x_256"
                               class="btn btn-default"
                               role="button">Подробнее</a>
                            <input type="hidden" name="_token" value="vN7jQQKL17syc1D7M5pR3YDSg2lQIW1rWgXBF1R7">            </form>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <div class="labels">


                    </div>
                    <img src="http://internet-shop.tmweb.ru/storage/products/htc_one_s.png" alt="HTC One S">
                    <div class="caption">
                        <h3>HTC One S</h3>
                        <p>12490 ₽</p>
                        <p>
                        <form action="https://internet-shop.tmweb.ru/basket/add/3" method="POST">
                            <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                            <a href="https://internet-shop.tmweb.ru/mobiles/htc_one_s"
                               class="btn btn-default"
                               role="button">Подробнее</a>
                            <input type="hidden" name="_token" value="vN7jQQKL17syc1D7M5pR3YDSg2lQIW1rWgXBF1R7">            </form>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <div class="labels">


                    </div>
                    <img src="http://internet-shop.tmweb.ru/storage/products/iphone_5.jpg" alt="iPhone 5SE">
                    <div class="caption">
                        <h3>iPhone 5SE</h3>
                        <p>17221 ₽</p>
                        <p>
                        <form action="https://internet-shop.tmweb.ru/basket/add/4" method="POST">
                            <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                            <a href="https://internet-shop.tmweb.ru/mobiles/iphone_5se"
                               class="btn btn-default"
                               role="button">Подробнее</a>
                            <input type="hidden" name="_token" value="vN7jQQKL17syc1D7M5pR3YDSg2lQIW1rWgXBF1R7">            </form>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <div class="labels">


                    </div>
                    <img src="http://internet-shop.tmweb.ru/storage/products/beats.jpg" alt="Наушники Beats Audio">
                    <div class="caption">
                        <h3>Наушники Beats Audio</h3>
                        <p>20221 ₽</p>
                        <p>
                        <form action="https://internet-shop.tmweb.ru/basket/add/5" method="POST">
                            <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                            <a href="https://internet-shop.tmweb.ru/portable/beats_audio"
                               class="btn btn-default"
                               role="button">Подробнее</a>
                            <input type="hidden" name="_token" value="vN7jQQKL17syc1D7M5pR3YDSg2lQIW1rWgXBF1R7">            </form>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <div class="labels">


                    </div>
                    <img src="http://internet-shop.tmweb.ru/storage/products/gopro.jpg" alt="Камера GoPro">
                    <div class="caption">
                        <h3>Камера GoPro</h3>
                        <p>12000 ₽</p>
                        <p>
                        <form action="https://internet-shop.tmweb.ru/basket/add/6" method="POST">
                            <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                            <a href="https://internet-shop.tmweb.ru/portable/gopro"
                               class="btn btn-default"
                               role="button">Подробнее</a>
                            <input type="hidden" name="_token" value="vN7jQQKL17syc1D7M5pR3YDSg2lQIW1rWgXBF1R7">            </form>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <ul class="pagination">

                <li class="page-item disabled" aria-disabled="true" aria-label="pagination.previous">
                    <span class="page-link" aria-hidden="true">&lsaquo;</span>
                </li>


                <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                <li class="page-item"><a class="page-link" href="?&amp;page=2">2</a></li>


                <li class="page-item">
                    <a class="page-link" href="?&amp;page=2" rel="next" aria-label="pagination.next">&rsaquo;</a>
                </li>
            </ul>
        </nav>

    </div>
</div>
</body>
</html>
