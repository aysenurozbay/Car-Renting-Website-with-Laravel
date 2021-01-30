@php

    $parentCategories = \App\Http\Controllers\HomeController::categoryList()

@endphp





<li class="menu_has_children" ><a href="#0">cars</a>

    <ul class="sub-menu" style="width:max-content;" >
        @foreach($parentCategories  as $dl)
        <li >

            <a href="#" >{{$dl->title}}  </a>

            @if(count($dl->children))
                @include('home.categorytree',['children' => $dl->children])
            @endif

        </li>
        @endforeach
    </ul>

</li>





