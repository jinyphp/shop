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
                <th width='100'>opt</th>
                <th>옵션명</th>
                <th width='100'>옵션값</th>
                <th width='100'>재고</th>
                <th width='100'>가격</th>
                <th width='100'>순서</th>
                <th width='200'>수정일자</th>

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
                <td width='100'>{{$item->option_id}}</td>
                <td >
                    {!! $popupEdit($item, $item->name) !!}
                </td>
                <td width='100'>{{$item->value}}</td>
                <td width='100'>{{$item->stock}}</td>
                <td width='100'>{{$item->price}}</td>
                <td width='100'>{{$item->pos}}</td>
                <td width='200'>{{$item->updated_at}}</td>
            </tr>
            @endforeach
        @else
            목록이 없습니다.
        @endif
        </tbody>
    </x-datatable>
</div>
