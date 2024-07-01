<x-wire-table>
    {{-- 테이블 제목 --}}
    <x-wire-thead>
        <th width='100'>Id</th>
        <th width='100'>product_id</th>
        <th width='100'>product</th>
        <th width='100'>type</th>
        <th width='100'>discount</th>
        <th width='100'>max_count</th>
        <th width='100'>expire</th>
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

                <td width='100'>{{$item->product_id}}</td>
                <td width='100'>{{$item->product}}</td>
                <td width='100'>{{$item->type}}</td>
                <td width='200'>{{$item->discount}}</td>
                <td width='200'>{{$item->max_count}}</td>
                <td width='200'>{{$item->expire}}</td>
            </x-wire-tbody-item>
            @endforeach
        @endif
    </tbody>
</x-wire-table>
