<x-wire-table>
    {{-- 테이블 제목 --}}
    <x-wire-thead>
        <th width='100'>Id</th>
        <th width='100'>seller</th>
        <th width='100'>email</th>
        <th width='100'>password</th>
        <th width='100'>site</th>
        <th width='100'>title</th>
        <th width='100'>phone</th>
        <th width='100'>post</th>
        <th width='100'>address</th>
        <th width='100'>manager</th>
        <th width='100'>comment</th>
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

                <td width='100'>{{$item->seller}}</td>
                <td width='100'>{{$item->email}}</td>
                <td width='100'>{{$item->password}}</td>
                <td width='200'>{{$item->site}}</td>
                <td width='200'>{{$item->title}}</td>
                <td width='200'>{{$item->phone}}</td>
                <td width='200'>{{$item->post}}</td>
                <td width='200'>{{$item->address}}</td>
                <td width='200'>{{$item->manager}}</td>
                <td width='200'>{{$item->comment}}</td>
            </x-wire-tbody-item>
            @endforeach
        @endif
    </tbody>
</x-wire-table>
