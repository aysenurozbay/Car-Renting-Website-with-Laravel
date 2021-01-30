<div>
    {{-- The whole world belongs to you --}}



    <input wire:model="search" name="search" type="text" list="mylist" placeholder="Search Car.."/>

    @if(!empty($query))

        <datalist id="mylist">
            @foreach($datalist as $dl)
                <option value="{{$dl->title}}">{{$dl->category->title}}</option>
            @endforeach
        </datalist>
    @endif
</div>
