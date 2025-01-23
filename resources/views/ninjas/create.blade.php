<x-layout>
  @if ($errors->any())
  <div class="bg-red-200 px-2 py-2">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
  <form action="{{route('ninjas.store')}}" method="POST">
    @csrf
    <h2>Create a new Ninja</h2>
    {{-- ninja name --}}
    <label for="name">Ninja Name:</label>
    <input value="{{old('name')}}" type="text" id="name" name="name" required />

    <label for="skill">Ninja Skill(1,100):</label>
    <input value="{{old('skill')}}" type="number" id="skill" name="skill" required min="1" max="100" />

    <label for="bio">Biography</label>
    <textarea rows="5" id="bio" name="bio" required>
    {{old('bio')}}
    </textarea>

    <label for="dojo_id">Dojo:</label>
    <select name="dojo_id" id="dojo_id"  required>
      <option value="" disabled selected>Select a dojo</option>
      @foreach ($dojos as $dojo)
      <option value="{{$dojo->id}}" {{$dojo->id==old('dojo_id')?'selected':''}} >
        {{$dojo->name}}
      </option>
      @endforeach
    </select>

    <button type="submit" class="btn mt-4">Create a Ninja</button>
  </form>
</x-layout>
