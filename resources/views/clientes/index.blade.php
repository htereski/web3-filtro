<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clientes') }}
        </h2>
    </x-slot>

  <div class="py-12 w-[90vw] flex flex-col m-auto">
    <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1">
          <img width="24" height="24" 
          src="https://img.icons8.com/ios-glyphs/30/user--v1.png" 
          alt="user--v1" 
        />
      </span>
      <input 
        id="username" 
        name="username" 
        type="text" 
        class="form-control"
        placeholder="Buscar por nome..."
        aria-label="Username" 
        aria-describedby="basic-addon1" 
        oninput="getClientsByName()">
    </div>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col">Telefone</th>
          <th scope="col">CPF</th>
        </tr>
      </thead>
      <tbody id="clientsTable">
        @foreach ($clientes as $cliente)
          <tr>
            <th scope="row">{{ $cliente->id }}</th>
            <td class="client-name">{{ $cliente->name }}</td>
            <td>{{ $cliente->phone }}</td>
            <td>{{ $cliente->cpf }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</x-app-layout>

<script>
  function getClientsByName() {
    const input = document.getElementById('username').value.toLowerCase();
    const rows = document.querySelectorAll('#clientsTable tr');

    rows.forEach(row => {
      const name = row.querySelector('.client-name').textContent.toLowerCase();
      if (name.startsWith(input)) {
        row.style.display = '';
      } else {
        row.style.display = 'none';
      }
    });
  }
</script>
