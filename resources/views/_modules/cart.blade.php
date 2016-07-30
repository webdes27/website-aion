@if ($count > 0)
    <table>
        <thead>
        <tr>
            <th width="45%">{{Lang::get('all.shop.name')}}</th>
            <th>{{Lang::get('all.shop.price')}}</th>
            <th width="15%">{{Lang::get('all.shop.qt')}}</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($items_cart as $item)
            <tr>
                <td width="45%" style="font-size: 10px; text-align: left; padding-left: 2px">{{\Illuminate\Support\Str::limit($item->name, 20, '...')}}</td>
                <td>{{$item->price}}</td>
                <td width="15%">{{$item->qty * $item->options['quantity']}}</td>
                <td><a href="#" data-id="{{$item->options['id_item']}}" class="fa fa-trash-o removeItemInCart"></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <a href="{{Route('shop.summary')}}" class="btn">{{Lang::get('all.shop.buy')}} {{$total}} Points</a>
@else
    Votre panier est vide pour le moment
@endif