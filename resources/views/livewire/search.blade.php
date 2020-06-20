<div>
    <input class="form-control mt-4 w-50 mx-auto" wire:keydown="getData()" wire:model="search" type="text" placeholder="Search For Place">
    <p>{{$search}}</p>
    <ul class="list-group w-50 mt-4 mx-auto">
        <li class="list-group-item">Cras justo odio</li>
    </ul>
</div>
