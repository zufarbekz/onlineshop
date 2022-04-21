<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="menu-content pb-60 col-lg-10">
            <div class="title text-center">
                <h1 class="mb-10 text-white">Some of Our Recent Products</h1>
                <p>Who cares about comfort.</p>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach($products as $product)
            <div class="col-lg-3 col-md-6">
                <div class="single-unique-product">
                    <img class="img-fluid" src="{{ $product->img }}" alt="">
                    <div class="desc">
                        <h4>
                            {{ $product->name }}
                        </h4>
                        <p>
                            {{ $product->description }}
                        </p>
                        <h6>${{ $product->price }}</h6>

                        <form action="{{ route('basket-add', $product) }}" method="post">
                            @csrf
                            <button type="submit" class="text-uppercase primary-btn">Add to basket</button>
                        </form>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
