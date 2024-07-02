<x-wire-table>
    {{-- 테이블 제목 --}}
    <x-wire-thead>
        <th width='100'>Id</th>
        <th width='100'>이미지</th>
        <th width='100'>코드</th>
        <th width='100'>이동링크</th>
        <th width='100'>기간</th>
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
                <td width='100'>{{$item->code}}</td>
                <td width='100'>{{$item->link}}</td>
                <td width='200'>{{$item->start}} ~ {{$item->end}}</td>
            </x-wire-tbody-item>
            @endforeach
        @endif
    </tbody>
</x-wire-table>





