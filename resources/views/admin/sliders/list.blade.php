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
                <th width='100'>이미지</th>
                <th width='300'>제목</th>
                <th>Subtitle</th>
                <th width='100'>prices</th>
                <th width='100'>link</th>
                <th width='200'>status</th>
                <th width='200'>date</th>
                <th width='200'>action</th>
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
                <td width='100'><img src="{{asset('/images/sliders')}}/{{$item->image}}" width="100px"/></td>
                <td width='300'>{{$item->title}}</td>
                <td>
                    {!! $popupEdit($item, $item->subtitle) !!}
                </td>
                <td width='100'>{{$item->price}}</td>
                <td width='100'>{{$item->link}}</td>
                <td width='200'>{{$item->status == 1 ? 'Active':'Inactive'}}</td>
                <td width='200'>{{$item->created_at}}</td>
                <td width='200'></td>
            </tr>
            @endforeach
        @else
            목록이 없습니다.
        @endif
        </tbody>
    </x-datatable>
</div>
