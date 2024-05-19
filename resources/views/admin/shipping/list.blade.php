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
                <th width='100'>name</th>
                <th>mobile</th>
                <th width='100'>email</th>
                <th width='100'>line1</th>
                <th width='200'>country</th>
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
                <td width='100'>{{$item->lastname}} {{$item->firstname}}</td>
                <td>
                    {!! $popupEdit($item, $item->mobile) !!}
                </td>
                <td width='100'>{{$item->email}}</td>
                <td width='100'>{{$item->line1}}</td>
                <td width='100'>{{$item->country}}</td>
            </tr>
            @endforeach
        @else
            목록이 없습니다.
        @endif
        </tbody>
    </x-datatable>
</div>
