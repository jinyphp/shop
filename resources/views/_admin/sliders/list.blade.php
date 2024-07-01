<div>
    <x-wire-table>
        <x-wire-thead>
            <th width='100'>Id</th>
            <th width='100'>이미지</th>
            <th width='300'>제목</th>
            <th>Subtitle</th>
            <th width='100'>prices</th>
            <th width='100'>link</th>
            <th width='200'>status</th>
            <th width='200'>date</th>
            <th width='200'>action</th>
        </x-wire-thead>
        <tbody>
            @if(!empty($rows))
                @foreach ($rows as $item)
                <x-wire-tbody-item :selected="$selected" :item="$item">
                    <td width='100'>{{$item->id}}</td>
                    <td width='100'><img src="{{asset('/images/sliders')}}/{{$item->image}}" width="100px"/></td>
                    <td width='300'>
                        <x-click wire:click="edit({{$item->title}})">
                            {{$item->title}}
                        </x-click>
                    </td>
                    <td width='200'>{{$item->subtitle}}</td>
                    <td width='100'>{{$item->price}}</td>
                    <td width='100'>{{$item->link}}</td>
                    <td width='200'>{{$item->status == 1 ? 'Active':'Inactive'}}</td>
                    <td width='200'>{{$item->created_at}}</td>
                    <td width='200'></td>
                </x-wire-tbody-item>
                @endforeach
            @endif
        </tbody>
    </x-wire-table>
</div>

