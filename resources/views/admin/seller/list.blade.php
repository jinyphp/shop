<x-wire-table>
    {{-- 테이블 제목 --}}
    <x-wire-thead>

        <th width='200'>seller</th>

        <th>title</th>
        <th width='300'>연락처</th>

        <th width='200'>manager</th>
        <th width='200'>등록일자</th>
    </x-wire-thead>
    <tbody>
        @if(!empty($rows))
            @foreach ($rows as $item)
            {{-- 테이블 리스트 --}}
            <x-wire-tbody-item :selected="$selected" :item="$item">
                <td width='200'>
                    <x-click wire:click="edit({{$item->id}})">
                        {{$item->seller}}
                    </x-click>
                    <div>{{$item->email}}</div>

                </td>



                <td>
                    <x-badge-primary>{{$item->site}}</x-badge-primary>
                    {{$item->title}}
                </td>

                <td width='200'>
                    <ul>
                        <li>{{$item->address}}</li>
                        <li>{{$item->post}}</li>
                        <li>{{$item->phone}}</li>
                    </ul>
                </td>

                <td width='200'>{{$item->manager}}</td>
                <td width='200'>{{$item->created_at}}</td>
            </x-wire-tbody-item>
            @endforeach
        @endif
    </tbody>
</x-wire-table>
