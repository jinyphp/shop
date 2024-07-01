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
                <th width='100'>dispute_id</th>

                <th >content</th>

                <th width='200'>email</th>
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
                <td width='100'>{{$item->dispute_id}}</td>

                <td >
                    {!! $popupEdit($item, $item->content) !!}
                </td>


                <td width='200'>{{$item->email}}</td>

            </tr>
            @endforeach
        @else
            목록이 없습니다.
        @endif
        </tbody>
    </x-datatable>
</div>
