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
                <th >쇼핑몰명</th>
                <th width='200'>PC웹</th>
                <th width='200'>모바일웹</th>
                <th width='200'>등록자</th>
                <th width='200'>등록일</th>
                <th width='200'>최종수정자</th>
                <th width='200'>최종수정일</th>
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
                <td>
                    {!! $popupEdit($item, $item->name) !!}
                </td>
                <td width='200'>{{$item->pc}}</td>
                <td width='200'>{{$item->mobile}}</td>
                <td width='200'>{{$item->register}}</td>
                <td width='200'>{{$item->regdate}}</td>
                <td width='200'>{{$item->editor}}</td>
                <td width='200'>{{$item->editdate}}</td>
            </tr>
            @endforeach
        @else
            목록이 없습니다.
        @endif
        </tbody>
    </x-datatable>
</div>
