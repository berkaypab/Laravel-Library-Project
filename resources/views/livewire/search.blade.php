<div>

    <input wire:model="search" style="width: 500px; height: 50px" name="search" type="text" class="input search-input" list="mylist"
           placeholder="Search Product..">
    @if(!empty($query))
        <datalist id="mylist">

            @foreach($datalist as $rs)
                <option value="{{$rs->title}}">{{$rs->category->title}}</option>
            @endforeach
        </datalist>
    @endif


</div>
