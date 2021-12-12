<div>

    <input wire:model="search" name="search" type="text" class="input search-input" list="mylist" autocomplete="off" placeholder="Search Procuts..."/>

    @if(!empty($query))
        <datalist id="mylist">
            @foreach($datalist as $rs)
                <option value="{{$rs->title}}">{{$rs->categories->title}}</option>
            @endforeach
        </datalist>
    @endif
</div>
