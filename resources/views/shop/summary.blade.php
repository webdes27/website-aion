@extends('_layouts.master')

@section('title', 'Récapitulatif')

@section('content')
    <div class="container">
        <!-- LEFT CONTENT -->
        <div class="container_left">
            <div class="news">
                <div class="news_top">
                    <h2>Récapitulatif</h2>
                </div>
                <div class="news_body container_shop_recap">

                    <table>
                        <thead>
                        <tr>
                            <th width="45%">Nom</th>
                            <th>Price</th>
                            <th width="15%">QT</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($items_cart as $item)
                            <tr>
                                <td width="45%">{{$item->name}}</td>
                                <td>{{$item->price}}</td>
                                <td width="15%">{{$item->qty}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td style="font-weight: bold">{{$total}} Toll</td>
                        </tr>
                    </table>

                    {!! Form::open() !!}

                    {!! Form::select('player_id', $players, null, ['class' => 'select']) !!}

                    <input type="submit" class="btn" value="Acheter"/>

                    {!! Form::close() !!}

                </div>
                <div class="news_footer"></div>
            </div>
        </div>
        <!-- RIGHT SIDEBAR -->
        <div class="container_right">

            <!-- CATEGORIES -->
            <div class="bloc_with_header bloc_vote">
                <div class="bloc_header">
                    <h2>Catégories</h2>
                    <p>Des sous-catégories son disponibles</p>
                </div>
                <div class="bloc_body center container_shop_categories">

                    <ul class="categories">
                        @foreach($categories as $index => $category)
                            <li class="top_categorie">
                                <h4>> {{$category->category_name}}</h4>
                                <ul class="sub_categorie" style="display: @if ($index == 0) block @else none @endif">
                                    @foreach($category->name as $sub_category)
                                        <li><a href="/shop/category/{{$sub_category->id}}">{{$sub_category->name}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                    </ul>

                </div>
            </div>

        </div>
    </div>
@stop