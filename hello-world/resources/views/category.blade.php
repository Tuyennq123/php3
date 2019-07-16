<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    
  </tbody>
</table>

<table class="table">
  <thead class="thead-light">
  @foreach($ct as $value)
    <tr>
      <th scope="col">1</th>
      <th scope="col">{{$value['name']}}</th>
      <th scope="col">{{$value['age']}}</th>
      <th scope="col">{{$value['sid']}}</th>
    </tr>
    @endforeach
  </thead>
</table>