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
                <th width='100'>Order-Id</th>
                <th width='100'>SubTotal</th>
                <th width='100'>Discount</th>
                <th width='100'>Tax</th>
                <th width='100'>Total</th>
                <th width='100'>Firstname</th>
                <th width='100'>Lastname</th>
                <th width='100'>Mobile</th>
                <th>Email</th>
                <th width='100'>Zipcode</th>
                <th width='100'>Order Date</th>
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
                <td width='100'>{{$item->subtotal}}</td>
                <td width='100'>{{$item->discount}}</td>
                <td width='100'>{{$item->tax}}</td>
                <td width='100'>{{$item->total}}</td>
                <td width='100'>{{$item->firstname}}</td>
                <td width='100'>{{$item->lastname}}</td>
                <td width='100'>{{$item->mobile}}</td>
                <td>
                    {!! $popupEdit($item, $item->email) !!}
                </td>
                <td width='100'>{{$item->zipcode}}</td>
                <td width='100'>{{$item->order_date}}</td>
            </tr>
            @endforeach
        @else
            목록이 없습니다.
        @endif
        </tbody>
    </x-datatable>
</div>
