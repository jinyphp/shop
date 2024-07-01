<x-wire-table>
    {{-- 테이블 제목 --}}
    <x-wire-thead>
        <th width='100'>Id</th>
        <th width='100'>이미지</th>
        <th width='100'>제목</th>
        <th width='100'>Subtitle</th>
        <th width='100'>price</th>
        <th width='100'>link</th>
        <th width='100'>status</th>
        <th width='100'>date</th>
        <th width='100'>action</th>
    </x-wire-thead>
    <tbody>
        @if(!empty($rows))
            @foreach ($rows as $item)
            {{-- 테이블 리스트 --}}
            <x-wire-tbody-item :selected="$selected" :item="$item">
                <td >
                    <x-click wire:click="edit({{$item->id}})">
                        {{$item->id}}
                    </x-click>
                </td>
                <td width='100'>{{$item->image}}</td>
                <td width='100'>{{$item->title}}</td>
                <td width='100'>{{$item->subtitle}}</td>
                <td width='100'>{{$item->price}}</td>
                <td width='100'>{{$item->link}}</td>
                <td width='100'>{{$item->status}}</td>
                <td width='100'>{{$item->created_at}}</td>
            </x-wire-tbody-item>
            @endforeach
        @endif
    </tbody>
</x-wire-table>
