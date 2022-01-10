<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <div class="labels">
        </div>
        <img src="https://rebro-store.ru/upload/iblock/c7c/c7c844ccd5155142f2562d49fcc462a3.jpg" alt="iPhone X 64GB">
        <div class="caption">
            <h3>{{$product->name}}</h3>
            <p>{{$product->price}} руб.</p>
            {{$product->category->name}}
            <p>
                <br>
                <a href="{{route('basket')}}" class="btn btn-primary" role="button">В корзину</a>
                <a href="{{route('product',[$product->category->code, $product->code])}}"
                   class="btn btn-default"
                   role="button">Подробнее</a>
            </p>
        </div>
    </div>
</div>

