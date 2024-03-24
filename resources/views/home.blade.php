<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/app.css"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    
    <div class="Menu">
        <div>
            <h1>Featured Categories</h1>
        </div>
        <div class="Menu_b">
            <h2 class="a 5rem mt-5">All</h2>
            <span>Milks&Dairies</span>
            <span>Coffes&Teas</span>
            <span>Pet Foods</span>
            <span>Meats</span>
            <span>Vegatable</span>
            <span>Fruits</span>
        </div>
    </div>

    <div class="menu-container" style="display:flex; align-items:center; justify-content:space-between">
        @foreach ($categories as $category)
            <x-category img_path='{{"storage/static/category/".$category->image}}' 
                name='{{ $category->name }}' 
                n_of_products='{{ $category->n_of_product }}' 
                bg_color='{{ $category->color }}'>
            </x-category>
        @endforeach
    </div>

    {{-- promotion --}}
    <div class="promotion_container" style="display: grid; grid-template-columns: repeat(3,1fr); gap: 24px;">
        @foreach ($promotions as $promotion)

            <x-promotion title='{{$promotion->title}}' 
                bg_color='{{$promotion->bg_color}}'  
                btn_color='{{$promotion->btn_color}}' 
                img_path='storage/static/promotion/{{$promotion->image}}' > </x-promotion>
        @endforeach

    </div>

    <div class="Menu">
        <div>
            <h1>Puporlar Producut</h1>
        </div>
        <div class="Menu_b">
            <h2 class="a 5rem mt-5">All</h2>
            <span>Milks&Dairies</span>
            <span>Coffes&Teas</span>
            <span>Pet Foods</span>
            <span>Meats</span>
            <span>Vegatable</span>
            <span>Fruits</span>
        </div>
    </div>

    <div class="product_container" style="display: grid; grid-template-columns: repeat(5,1fr); gap: 24px; margin-top:50px">
        @foreach ($products as $product)

            <x-product title='{{$product->name}}' 
                category='{{$product->category->name}}' 
                rating='{{$product->rating}}' 
                weight='{{$product->weight}}' 
                dis_pricing='{{$product->discount_pricing}}' 
                pricing='{{$product->pricing}}' 
                tag='{{$product->specail_offer}}'  
                tag_color='{{$product->tag_color}}' 
                img_path='storage/static/product/{{$product->image}}' > </x-product>
        @endforeach

    </div>

</body>
</html>

<style>
    body {
        margin: auto;
        padding: 0;
        width: fit-content;
    }
    .Menu {
        display: flex;
        justify-content: space-between;
        width: 1578px;
        height: 40px;
    }
    .Menu_b {
        display: flex;
        gap: 20px;
        margin-right: 20px;
        align-items: center;
        margin-top: 50px;
    }
    .Menu_b .a {
        color: black;
        font-size: 20px;
    }
    .menu-container {
        margin-top: 50px;
    }
    .promotion_container{
        margin-top: 50px;
    }
</style>
