<div>
    <input class="form-control mt-4 w-50 mx-auto" wire:model="search" type="text" placeholder="Search For Place">
    
    <ul class="list-group w-50 mt-4 mx-auto">
        @foreach ($items as $item)
            <li class="list-group-item">{{$item->name}}</li>
        @endforeach
        
    </ul>
</div>
