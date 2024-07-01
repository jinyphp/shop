<x-wire-table>
    {{-- 테이블 제목 --}}
    <x-wire-thead>
        <th width='100'>Id</th>
        <th width='100'>이름</th>
        <th width='100'>이메일</th>
        <th width='100'>연락처</th>
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
                <td width='100'>{{$item->name}}</td>
                <td width='100'>{{$item->email}}</td>
                <td width='100'>{{$item->phone}}</td>
            </x-wire-tbody-item>
            @endforeach
        @endif
    </tbody>
</x-wire-table>
