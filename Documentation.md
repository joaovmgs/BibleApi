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

### Versions

<details>
  <summary>
    <b>Get Versions</b> - <i>returns versions</i>
  </summary>
  <br/>
  
  <b>Endpoint:</b> `GET https://api.biblia.help/api/versions`
  <br /><br />
  <b>Authenticated:</b> 
  <ul>
    <li>No</li>
  </ul>

  ```
  [
  {
    "name": "1993 - Almeida Revisada e Atualizada",
    "abbreviation": "ARA"
  },
  {
    "name": "1969 - Almeida Revisada e Corrigida",
    "abbreviation": "ARC1"
  },
    ...
  ]
  ```
</details>

<details>
  <summary>
    <b>Get Version</b> - <i>return versions</i>
  </summary>
  <br/>
  
  <b>Endpoint:</b> `GET https://api.biblia.help/api/versions/version:abbrev`
  <br /><br />
  <b>Authenticated:</b> 
  <ul>
    <li>No</li>
  </ul>

  ```
{
  "name": "1993 - Almeida Revisada e Atualizada",
  "abbreviation": "ARA"
}
  ```
</details>

### Testaments

<details>
  <summary>
    <b>Get Testaments</b> - <i>return testaments</i>
  </summary>
  <br/>
  
  <b>Endpoint:</b> `GET https://api.biblia.help/api/testaments`
  <br /><br />
  <b>Authenticated:</b> 
  <ul>
    <li>No</li>
  </ul>

  ```
  [
  {
    "name": "Antigo Testamento",
    "abbreviation": "AT"
  },
  {
    "name": "Novo Testamento",
    "abbreviation": "NT"
  }
  ]

  ```
</details>


<details>
  <summary>
    <b>Get Testament</b> - <i>return testament</i>
  </summary>
  <br/>
  
  <b>Endpoint:</b> `GET https://api.biblia.help/api/testaments/testament:abbrev`
  <br /><br />
  <b>Authenticated:</b> 
  <ul>
    <li>No</li>
  </ul>

  ```
  {
    "name": "Antigo Testamento",
    "abbreviation": "AT"
  }
  
  ```
</details>

### Chapters

<details>
  <summary>
    <b>Get Chapters</b> - <i>return Chapters</i>
  </summary>
  <br/>
  
  <b>Endpoint:</b> `GET https://api.biblia.help/api/version:abbrev/book:abbrev/chapters`
  <br /><br />
  <b>Authenticated:</b> 
  <ul>
    <li>No</li>
  </ul>

  ```
[
  {
    "Version": {
      "name": "Nova Versão Internacional",
      "abbreviation": "NVI"
    },
    "Book": {
      "name": "I João",
      "abbreviation": "1jo",
      "position": 23
    },
    "Verse": {
      "text": "O que era desde o princípio, o que ouvimos, o que vimos com os nossos olhos, o que contemplamos e as nossas mãos apalparam  -  isto proclamamos a respeito da Palavra da vida.",
      "chapter": 1,
      "verse": 1
    }
  },
  {
    "Version": {
      "name": "Nova Versão Internacional",
      "abbreviation": "NVI"
    },
    "Book": {
      "name": "I João",
      "abbreviation": "1jo",
      "position": 23
    },
    "Verse": {
      "text": "A vida se manifestou; nós a vimos e dela testemunhamos, e proclamamos a vocês a vida eterna, que estava com o Pai e nos foi manifestada.",
      "chapter": 1,
      "verse": 2
    }
  },
  ......
]
  ```
</details>

### Verses

<details>
  <summary>
    <b>Get Verse</b> - <i>return Verse</i>
  </summary>
  <br/>
  
  <b>Endpoint:</b> `GET https://api.biblia.help/api/version:abbrev/book:abbrev/chapters/verse`
  <br /><br />
  <b>Authenticated:</b> 
  <ul>
    <li>No</li>
  </ul>

  ```
{
  "Version": {
    "name": "Nova Versão Internacional",
    "abbreviation": "NVI"
  },
  "Book": {
    "name": "I João",
    "abbreviation": "1jo",
    "position": 23
  },
  "Verse": {
    "text": "O que era desde o princípio, o que ouvimos, o que vimos com os nossos olhos, o que contemplamos e as nossas mãos apalparam  -  isto proclamamos a respeito da Palavra da vida.",
    "chapter": 1,
    "verse": 1
  }
}
  
  ```
</details>

