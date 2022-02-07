## Documentation

### Books
<details>
  <summary>
    <b>Get Books</b> - <i>returns list of 66 bible books</i>
  </summary>
  <br/>
  
  <b>Endpoint:</b> `GET https://api.biblia.help/api/books`
  <br /><br />
  <b>Authenticated:</b> 
  <ul>
    <li>No</li>
  </ul>

  ```
  [
  {
    "name": "Gênesis",
    "abbreviation": "gn",
    "position": 1
  },
  {
    "name": "Êxodo",
    "abbreviation": "ex",
    "position": 2
  },
    ...
  ]
  ```
</details>

<details>
  <summary>
    <b>Get Book</b> - <i>return details of a bible book</i>
  </summary>
  <br/>
  
  <b>Endpoint:</b> `GET https://api.biblia.help/api/books:abbrev`
  <br /><br />
  <b>Authenticated:</b> 
  <ul>
    <li>No</li>
  </ul>

  ```
{
  "name": "Gênesis",
  "abbreviation": "gn",
  "position": 1
}
  ```
</details>


