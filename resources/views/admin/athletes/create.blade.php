<h1>Registra un nuovo atleta</h1>

{{-- visualizzazione eventuali errori di inserimento --}}
@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

<form action="{{ route('admin.athletes.store') }}" method="POST">
  @method('POST')
  @csrf

  <div class="form-group">
    <label for="name">Nome</label>
    <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
  </div>

  <div class="form-group">
    <label for="country_id">Nazionalità</label>
    <select class="form-control" name="country_id" id="country_id">
      <option value="">Nessuna</option>
        @foreach ($countries as $country)
          <option value="{{ $country->id }}" {{ old('country_id') == $country->id ? 'selected' : '' }}>{{ $country->name }}</option>
        @endforeach
    </select>
  </div>

  <div class="form-group">
    <label for="genre">Genere</label>
    <select class="form-control" name="genre" id="genre">
      <option value="">Nessuna</option>
      <option value="Uomo">Uomo</option>
      <option value="Donna">Donna</option>
    </select>
  </div>

  <div class="form-group">
    <h5>Categorie</h5>
    @foreach ($categories as $category)
      <div class="form-check d-inline-block mx-3">
        <input name="categories[]" 
               class="form-check-input" 
               type="checkbox" 
               value="{{ $category->id }}" 
               id="category-{{ $category->id }}" {{ in_array( $category->id, old('categories', [])) ? 'checked' : '' }}>
        <label class="form-check-label" for="category-{{ $category->id }}">
          {{ $category->name }}
        </label>
      </div>
    @endforeach
  </div>

  <button type="submit" class="btn btn-primary">Crea Atleta</button>
</form>