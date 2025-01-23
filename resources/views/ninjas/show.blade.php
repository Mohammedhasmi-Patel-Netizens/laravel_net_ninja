<x-layout>
  <h2>Ninja name - {{$ninja->name}}</h2>

  <div class="bg-gray-200 p-4 rounded">
    <p>
      <strong>
        Skill level: {{$ninja->skill}}
      </strong>
    </p>
    <p>
      <strong>
        About me:
      </strong>
    </p>
    <p>{{$ninja->bio}}</p>
  </div>

  {{-- dojo info --}}

  <div class=" border-2 border-dashed bg-white px-4 pb-4 my-4 rounded">
    <h3>Dojo Information</h3>
    <p><strong>Dojo Name:</strong>{{$ninja->dojo->name}}</p>
    <p><strong>Dojo Location:</strong>{{$ninja->dojo->location}}</p>

    <strong>About The Dojo:</strong>
    <p>
      {{$ninja->dojo->description}}
    </p>
  </div>

  <form action="{{route('ninjas.destroy',$ninja->id)}}" method="POST">
    @csrf
    @method('DELETE')
    <button class=" btn bg-red-400 p-4" type="submit">Delete</button>
  </form>


</x-layout>
