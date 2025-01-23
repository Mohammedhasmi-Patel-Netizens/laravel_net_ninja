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
  

  <form action="{{route('login')}}" method="POST">
    @csrf
    <h2>Login Account</h2>
    {{-- ninja name --}}
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="{{old('email')}}" required />

    <label for="password">Password:</label>
    <input type="password" id="email" name="password"  required />



    <button type="submit" class="btn mt-4">Login</button>
  </form>
</x-layout>
