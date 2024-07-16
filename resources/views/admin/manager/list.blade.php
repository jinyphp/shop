<x-wire-table>
    {{-- 테이블 제목 --}}
    <x-wire-thead>
        <th width='100'>역할</th>
        <th>이름</th>
        <th width='300'>이메일</th>
        <th width='200'>상위관리자</th>
        <th width='200'>등록일자</th>
    </x-wire-thead>
    <tbody>
        @if(!empty($rows))
            @foreach ($rows as $item)
            {{-- 테이블 리스트 --}}
            <x-wire-tbody-item :selected="$selected" :item="$item">
                <td width='100'>
                    {{$item->role}}
                </td>
                <td>
                    <x-click wire:click="edit({{$item->id}})">
                        {{$item->name}}
                    </x-click>
                </td>

                <td width='300'>
                    {{$item->email}}
                </td>

                <td width='200'>{{$item->manager}}</td>
                <td width='200'>{{$item->created_at}}</td>
            </x-wire-tbody-item>
            @endforeach
        @endif
    </tbody>
</x-wire-table>
