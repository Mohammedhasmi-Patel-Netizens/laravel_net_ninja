<x-layout>
 
      <ul>
        <li>Curently available ninjas</li>
        @foreach ($ninjas as $ninja)
        <li>
          <x-card href="{{route('ninjas.show',$ninja->id)}}" :highlight="$ninja['skill'] > 70">
            <div>
              <p>{{ $ninja->name }}</p>
              <p>{{ $ninja->dojo->name }}</p>
            </div>
          </x-card>
        </li>

        @endforeach
      </ul>
      {{$ninjas->links()}}
</x-layout>
