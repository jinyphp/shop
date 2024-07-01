<x-wire-table>
    {{-- 테이블 제목 --}}
    <x-wire-thead>
        <th width='100'>Id</th>
        <th width='100'>title</th>
        <th width='100'>currency</th>
        <th width='100'>align</th>
        <th width='100'>mark</th>
        <th width='100'>rate</th>
        <th width='100'>dec_point</th>
        <th width='100'>description</th>
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

                <td width='100'>{{$item->title}}</td>
                <td width='100'>{{$item->currency}}</td>
                <td width='100'>{{$item->align}}</td>
                <td width='200'>{{$item->mark}}</td>
                <td width='200'>{{$item->rate}}</td>
                <td width='200'>{{$item->dec_point}}</td>
                <td width='200'>{{$item->description}}</td>
            </x-wire-tbody-item>
            @endforeach
        @endif
    </tbody>
</x-wire-table>






