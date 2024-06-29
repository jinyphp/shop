<div>
    @if(Session::has('message'))
        <div class="alert alert-success">{{Session::get('message')}}</div>
    @endif

    <x-datatable>
        <thead>
            <tr>
                <th width='20'>
                    <input type='checkbox' class="form-check-input" wire:model="selectedall">
                </th>
                <th width='100'>Id</th>
                <th >name</th>
                <th width='100'>price</th>
                <th width='100'>priod</th>
                <th width='100'>manager_name</th>
                <th width='200'>manager_phone</th>
            </tr>
        </thead>
        <tbody>
        @if(!empty($rows))
            @foreach ($rows as $item)

            {{-- row-selected --}}
            @if(in_array($item->id, $selected))
            <tr class="row-selected">
            @else
            <tr>
            @endif

                <td width='20'>
                    <input type='checkbox' name='ids' value="{{$item->id}}"
                    class="form-check-input"
                    wire:model="selected">
                </td>

                <td width='100'>{{$item->id}}</td>
                <td >
                    {!! $popupEdit($item, $item->name) !!}
                </td>
                <td width='100'>
                    {{$item->price}}
                </td>
                <td width='100'>{{$item->priod}}</td>
                <td width='100'>{{$item->manager_name}}</td>
                <td width='200'>{{$item->manager_phone}}</td>
            </tr>
            @endforeach
        @else
            목록이 없습니다.
        @endif
        </tbody>
    </x-datatable>
</div>
