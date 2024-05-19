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
                <th width='100'>order_id</th>
                <th width='300'>product</th>
                <th >title</th>
                <th width='100'>status</th>
                <th width='200'>start_date</th>
                <th width='200'>end_date</th>
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
                <td width='100'>{{$item->order_id}}</td>
                <td width='100'>{{$item->product}}</td>
                <td >
                    {!! $popupEdit($item, $item->title) !!}
                </td>

                <td width='100'>{{$item->status}}</td>
                <td width='200'>{{$item->start_date}}</td>
                <td width='200'>{{$item->end_date}}</td>

            </tr>
            @endforeach
        @else
            목록이 없습니다.
        @endif
        </tbody>
    </x-datatable>
</div>
