<x-wire-table>
    {{-- 테이블 제목 --}}
    <x-wire-thead>
        <th width='200'>이름</th>
        <th>제목</th>


        <th width='200'>담당자</th>
        <th width='200'>등록일자</th>
    </x-wire-thead>
    <tbody>
        @if(!empty($rows))
            @foreach ($rows as $item)
            {{-- 테이블 리스트 --}}
            <x-wire-tbody-item :selected="$selected" :item="$item">
                <td width='200'>
                    <ul>
                        <li>{{$item->name}}</li>
                        <li>{{$item->email}}</li>
                        <li>{{$item->phone}}</li>
                    </ul>
                </td>
                <td >
                    <x-click wire:click="edit({{$item->id}})">
                        {{$item->title}}
                    </x-click>
                    <p>
                        {{$item->content}}
                    </p>
                </td>


                <td width='200'>
                    <div>{{$item->manager}}</div>
                    <x-badge-primary>{{$item->status}}</x-badge-primary>
                </td>

                <td width='200'>{{$item->created_at}}</td>
            </x-wire-tbody-item>
            @endforeach
        @endif
    </tbody>
</x-wire-table>
