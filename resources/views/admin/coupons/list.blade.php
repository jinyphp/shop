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
                <th width='100'>쿠폰코드</th>
                <th width='300'>쿠폰타입</th>
                <th>쿠폰값</th>
                <th width='100'>cart value</th>
                <th width='100'>expiry_date</th>
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
                <td width='100'>{{$item->code}}</td>

                <td width='300'>{{$item->type}}</td>
                <td>
                    {!! $popupEdit($item, $item->value) !!}
                </td>
                <td width='100'>{{$item->cart_value}}</td>
                <td width='100'>{{$item->expiry_date}}</td>
            </tr>
            @endforeach
        @else
            목록이 없습니다.
        @endif
        </tbody>
    </x-datatable>
</div>
