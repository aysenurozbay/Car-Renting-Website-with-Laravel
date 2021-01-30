

@foreach( $children as $subcategory)

    <li class="menu_has_children" >

{{--        <a href="#0">cars</a>--}}
        @if(count($subcategory->children))
            <ul class="menu_has_children" >

                {{$subcategory->title}}
                    <li style=" float: right;">

                        @include('home.categorytree',['children' => $subcategory->children])
                    </li>

            </ul>

        @else
            <li>
                <a href="{{route('categorycars',['id'=> $subcategory->id, 'slug'=> $subcategory->slug ] )}}"> <i class="fa fa-arrow-right" aria-hidden="true"></i> {{$subcategory->title}} </a>
            </li>

        @endif

    </li>

@endforeach










