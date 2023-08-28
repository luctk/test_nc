<ul>
    @foreach ($tree as $node)
        <li>{{ $node['name'] }}</li>
        @if (!empty($node['subordinates']))
            @include('employees.tree', ['tree' => $node['subordinates']])
        @endif
    @endforeach
</ul>
