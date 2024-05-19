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
                <th >product</th>
                <th width='200'>expire</th>
                <th width='100'>type</th>
                <th width='100'>discount</th>
                <th width='100'>max_count</th>
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
                <td >
                    {!! $popupEdit($item, $item->product) !!}
                </td>
                <td width='200'>{{$item->expire}}</td>
                <td width='100'>{{$item->type}}</td>
                <td width='100'>{{$item->discount}}</td>
                <td width='100'>{{$item->max_count}}</td>
                <td width='200'>{{$item->updated_at}}</td>
            </tr>
            @endforeach
        @else
            목록이 없습니다.
        @endif
        </tbody>
    </x-datatable>
</div>
